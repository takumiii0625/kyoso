# News登録時のFacebook通知機能 セットアップガイド

## お客様（株式会社共創）にやっていただくこと

### 1. Facebookページの準備
- [ ] 株式会社共創の公式Facebookページを作成（既にある場合は不要）
- [ ] ページの管理者権限を持つアカウントを確認

### 2. Facebook開発者アカウントの作成
1. [Facebook for Developers](https://developers.facebook.com/) にアクセス
2. 「スタートガイド」または「マイアプリ」をクリック
3. Facebookアカウントでログイン
4. 開発者として登録（電話番号認証が必要）

### 3. Facebookアプリの作成
1. [Facebook for Developers](https://developers.facebook.com/apps/) で「アプリを作成」をクリック
2. アプリタイプ：「ビジネス」を選択
3. アプリ名：「株式会社共創 News通知」など任意の名前
4. アプリの連絡先メールアドレス：kyousou1216@gmail.com
5. ビジネスアカウント：該当するものを選択（なければ作成）

### 4. 必要な権限の取得
1. アプリダッシュボードで「アプリレビュー」→「許可と機能」へ移動
2. 以下の権限をリクエスト：
   - `pages_manage_posts`（ページへの投稿権限）
   - `pages_read_engagement`（ページのエンゲージメント読み取り）
3. Facebookの審査を受ける（数日〜数週間かかる場合あり）

### 5. ページアクセストークンの取得
1. [Graph API Explorer](https://developers.facebook.com/tools/explorer/) にアクセス
2. 作成したアプリを選択
3. 「ユーザーまたはページ」で投稿先のFacebookページを選択
4. 必要な権限にチェックを入れて「アクセストークンを取得」
5. **取得したアクセストークンをエンジニアに共有**

### 6. エンジニアに共有する情報
以下の情報をエンジニアに安全な方法で共有してください：
- [ ] Facebook App ID
- [ ] Facebook App Secret
- [ ] ページアクセストークン
- [ ] FacebookページのID

---

## エンジニアがやること

### 1. 環境設定

#### .envファイルに追加
```env
FACEBOOK_APP_ID=your_app_id
FACEBOOK_APP_SECRET=your_app_secret
FACEBOOK_PAGE_ACCESS_TOKEN=your_page_access_token
FACEBOOK_PAGE_ID=your_page_id
```

### 2. Facebook SDKのインストール
```bash
composer require facebook/graph-sdk
```

### 3. Facebookサービスクラスの作成

`app/Services/FacebookService.php` を作成：

```php
<?php

namespace App\Services;

use Facebook\Facebook;
use Illuminate\Support\Facades\Log;

class FacebookService
{
    protected $fb;
    protected $pageAccessToken;
    protected $pageId;

    public function __construct()
    {
        $this->fb = new Facebook([
            'app_id' => config('services.facebook.app_id'),
            'app_secret' => config('services.facebook.app_secret'),
            'default_graph_version' => 'v18.0',
        ]);

        $this->pageAccessToken = config('services.facebook.page_access_token');
        $this->pageId = config('services.facebook.page_id');
    }

    public function postToPage(string $message, ?string $link = null): ?string
    {
        try {
            $data = ['message' => $message];

            if ($link) {
                $data['link'] = $link;
            }

            $response = $this->fb->post(
                '/' . $this->pageId . '/feed',
                $data,
                $this->pageAccessToken
            );

            $graphNode = $response->getGraphNode();
            return $graphNode['id'] ?? null;

        } catch (\Exception $e) {
            Log::error('Facebook投稿エラー: ' . $e->getMessage());
            return null;
        }
    }
}
```

### 4. 設定ファイルの更新

`config/services.php` に追加：

```php
'facebook' => [
    'app_id' => env('FACEBOOK_APP_ID'),
    'app_secret' => env('FACEBOOK_APP_SECRET'),
    'page_access_token' => env('FACEBOOK_PAGE_ACCESS_TOKEN'),
    'page_id' => env('FACEBOOK_PAGE_ID'),
],
```

### 5. News登録処理にFacebook投稿を追加

News登録のコントローラーで、保存後にFacebook投稿を実行：

```php
use App\Services\FacebookService;

// News保存後
$news->save();

// Facebook投稿
$facebookService = new FacebookService();
$message = "【新着情報】\n" . $news->title . "\n\n" . mb_substr(strip_tags($news->content), 0, 100) . "...";
$link = route('userNewsShow', ['id' => $news->id]);
$facebookService->postToPage($message, $link);
```

### 6. （推奨）Jobを使った非同期処理

`app/Jobs/PostToFacebook.php` を作成：

```php
<?php

namespace App\Jobs;

use App\Services\FacebookService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PostToFacebook implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $message;
    protected $link;

    public function __construct(string $message, ?string $link = null)
    {
        $this->message = $message;
        $this->link = $link;
    }

    public function handle()
    {
        $facebookService = new FacebookService();
        $facebookService->postToPage($this->message, $this->link);
    }
}
```

### 7. テスト
- [ ] 開発環境でテスト投稿を実施
- [ ] Facebookページに正しく投稿されるか確認
- [ ] エラー時のログ出力を確認
- [ ] 本番環境でのテスト

---

## 注意事項

### お客様向け
- アクセストークンは**絶対に第三者に公開しない**でください
- トークンの有効期限は通常60日です。期限切れ前に更新が必要です
- Facebookの審査には時間がかかる場合があります

### エンジニア向け
- 長期アクセストークンを取得すること（有効期限なしのページトークン推奨）
- 投稿失敗時もNews登録自体は成功させる（try-catchで適切に処理）
- 本番環境の.envは安全に管理すること
- Queueを使用する場合はキューワーカーの設定が必要

---

## 想定スケジュール

| 担当 | タスク | 所要時間 |
|------|--------|----------|
| お客様 | Facebookページ・開発者アカウント準備 | 1〜2日 |
| お客様 | アプリ作成・権限リクエスト | 1日 |
| Facebook | 審査（権限承認） | 数日〜2週間 |
| お客様 | トークン取得・共有 | 1日 |
| エンジニア | 実装・テスト | 2〜3日 |
| 両者 | 本番テスト・調整 | 1日 |
