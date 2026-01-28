# News登録時のFacebook通知機能 - エンジニア向け実装ガイド

## 概要

Newsを登録した際に、自動でFacebookページにも投稿される機能の実装手順です。

---

## 前提条件

お客様から以下の情報を受け取っていること：
- [ ] Facebook App ID
- [ ] Facebook App Secret
- [ ] ページアクセストークン
- [ ] FacebookページのID

---

## 実装手順

### 1. 環境設定

`.env`ファイルに追加：

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

### 3. 設定ファイルの更新

`config/services.php` に追加：

```php
'facebook' => [
    'app_id' => env('FACEBOOK_APP_ID'),
    'app_secret' => env('FACEBOOK_APP_SECRET'),
    'page_access_token' => env('FACEBOOK_PAGE_ACCESS_TOKEN'),
    'page_id' => env('FACEBOOK_PAGE_ID'),
],
```

### 4. Facebookサービスクラスの作成

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

    /**
     * Facebookページに投稿する
     *
     * @param string $message 投稿メッセージ
     * @param string|null $link リンクURL（任意）
     * @return string|null 投稿ID（成功時）またはnull（失敗時）
     */
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
            Log::info('Facebook投稿成功: ' . ($graphNode['id'] ?? 'unknown'));
            return $graphNode['id'] ?? null;

        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            Log::error('Facebook Graph APIエラー: ' . $e->getMessage());
            return null;
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            Log::error('Facebook SDKエラー: ' . $e->getMessage());
            return null;
        } catch (\Exception $e) {
            Log::error('Facebook投稿エラー: ' . $e->getMessage());
            return null;
        }
    }
}
```

### 5. News登録処理にFacebook投稿を追加

News登録のコントローラーで、保存後にFacebook投稿を実行：

```php
use App\Services\FacebookService;

// News保存後
$news->save();

// Facebook投稿（try-catchでエラー時もNews登録は成功させる）
try {
    $facebookService = new FacebookService();
    $message = "【新着情報】\n" . $news->title . "\n\n" . mb_substr(strip_tags($news->content), 0, 100) . "...";
    $link = route('userNewsShow', ['id' => $news->id]);
    $facebookService->postToPage($message, $link);
} catch (\Exception $e) {
    Log::error('Facebook投稿処理エラー: ' . $e->getMessage());
}
```

### 6. （推奨）Jobを使った非同期処理

レスポンス速度を維持するため、非同期処理を推奨します。

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
use Illuminate\Support\Facades\Log;

class PostToFacebook implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $message;
    protected $link;

    public $tries = 3; // 最大3回リトライ

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

    public function failed(\Throwable $exception)
    {
        Log::error('Facebook投稿Job失敗: ' . $exception->getMessage());
    }
}
```

コントローラーでの呼び出し：

```php
use App\Jobs\PostToFacebook;

// News保存後
$news->save();

// 非同期でFacebook投稿
$message = "【新着情報】\n" . $news->title;
$link = route('userNewsShow', ['id' => $news->id]);
PostToFacebook::dispatch($message, $link);
```

---

## テストチェックリスト

- [ ] 開発環境でテスト投稿を実施
- [ ] Facebookページに正しく投稿されるか確認
- [ ] エラー時のログ出力を確認
- [ ] News登録自体はFacebook投稿失敗時も成功することを確認
- [ ] 本番環境でのテスト

---

## 注意事項

- 長期アクセストークンを取得すること（有効期限なしのページトークン推奨）
- 投稿失敗時もNews登録自体は成功させる（try-catchで適切に処理）
- 本番環境の.envは安全に管理すること
- Queueを使用する場合はキューワーカーの設定が必要

---

## トラブルシューティング

### トークン期限切れ
- エラーログに「Error validating access token」が出た場合
- お客様に新しいトークンの取得を依頼

### 権限エラー
- エラーログに「(#200) Requires pages_manage_posts permission」が出た場合
- お客様にFacebookアプリの権限を確認してもらう

### 投稿が表示されない
- Facebookページの設定で投稿の公開範囲を確認
- アプリがライブモードになっているか確認
