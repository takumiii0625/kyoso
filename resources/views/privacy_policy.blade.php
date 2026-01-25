<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:image" content="https://obfall.com/image/logo_kyoso2.png">
    <title>プライバシーポリシー | 株式会社共創</title>
    <link rel="icon" href="../image/favicon.png" type="image/png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c70550d95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        :root {
            --ink: #1a1a1a;
            --muted: #657287;
            --bg: #fff;
            --card: #fff;
            --line: #E7EEF5;
            --radius: 14px;
            --maxw: 1120px;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font-family: -apple-system, BlinkMacSystemFont, "Noto Sans JP", Segoe UI, Roboto, Arial, sans-serif;
            line-height: 1.8;
        }

        .wrap {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero {
            --hero-img: url('../image/chou.jpg');
            position: relative;
            background-image: var(--hero-img);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 36vh;
        }

        /* 暗いフィルター */
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            pointer-events: none;
        }

        .hero .wrap {
            position: relative;
            z-index: 1;
            padding: clamp(48px, 13vw, 120px) 16px 0;
        }

        .hero .title h1 {
            line-height: 1.3;
            margin: 80px 0 .5rem;
            letter-spacing: 0.08em;
            color: #fff;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
        }

        h1 {
            font-size: clamp(28px, 4vw, 48px);
            font-weight: 800;
            font-family: 'Times New Roman', Times, serif;
        }

        .hero .sub {
            font-weight: 600;
            letter-spacing: .06em;
            color: #fff;
        }

        .hero .sub-text {
            color: #fff;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.6);
            background: transparent;
            padding: 0;
        }

        .content-section {
            padding: 60px 0;
        }

        .policy-card {
            background: #fff;
            border-radius: var(--radius);
            padding: 40px;
            box-shadow: 0 2px 14px rgba(0, 0, 0, .06);
        }

        h2 {
            font-size: 1.4rem;
            color: #ffa2a8;
            font-weight: 700;
            margin: 32px 0 16px;
            padding-bottom: 8px;
            border-bottom: 2px solid #ffa2a8;
        }

        h2:first-of-type {
            margin-top: 0;
        }

        p {
            margin: 0 0 16px;
            color: var(--muted);
        }

        ul {
            margin: 12px 0 24px 0;
            padding-left: 24px;
            color: var(--muted);
        }

        li {
            margin-bottom: 8px;
        }

        /* md=768px 基準 */
        @media (max-width: 767.98px) {
            .hero {
                min-height: 46vh;
            }

            .hero .wrap {
                padding: clamp(48px, 33vw, 160px) 10px 0;
            }

            .hero .title h1 {
                font-size: 2rem;
                margin: 0 0 .5rem;
            }

            .hero .sub {
                font-size: 0.875rem;
            }

            .hero .sub-text {
                text-shadow: 0 1px 2px rgba(0, 0, 0, 0.9);
            }

            .policy-card {
                padding: 24px 16px;
            }
        }
    </style>
</head>

<body>
    <div class="top">
        <x-header />
        <nav class="nav-02">
            <ul>
                <li class="link text-dark"><a href="{{ route('philosophy') }}" class="text-dark text-decoration-none">企業理念</a></li>
                <li class="link text-dark"><a href="{{ route('userServicesShow') }}" class="text-dark text-decoration-none">プロジェクト概要</a></li>
                <li class="link text-dark"><a href="{{ route('achievements') }}" class="text-dark text-decoration-none">実績・事例紹介</a></li>
                <li class="link text-dark"><a href="{{ route('aboutus') }}" class="text-dark text-decoration-none">会社概要</a></li>
                <li class="link text-dark"><a href="{{ route('contact') }}" class="text-dark text-decoration-none" target="_blank" rel="noopener noreferrer">お問い合わせ</a></li>
            </ul>
        </nav>
    </div>

    <!-- ===== Hero ===== -->
    <section class="hero">
        <div class="wrap">
            <div class="title">
                <h1>プライバシーポリシー</h1>
                <div class="sub"><br><br><br><span class="sub-text">個人情報の取り扱いについて</span></div>
            </div>
        </div>
    </section>

    <main class="content-section">
        <div class="wrap">
            <div class="policy-card">
                <h2>1. 個人情報の収集について</h2>
                <p>当サイトでは、以下の方法で個人情報を収集することがあります。</p>
                <ul>
                    <li>お問い合わせフォームからの送信内容（氏名・メールアドレスなど）</li>
                    <li>コメント投稿時の情報（氏名・メールアドレス・IPアドレスなど）</li>
                    <li>アクセス解析による情報（IPアドレス、ブラウザ情報、閲覧ページ等）</li>
                </ul>

                <h2>2. 個人情報の利用目的</h2>
                <p>収集した個人情報は、以下の目的で利用いたします。</p>
                <ul>
                    <li>お問い合わせへの回答</li>
                    <li>必要に応じたご連絡</li>
                    <li>サービスの向上や運営改善のためのアクセス解析</li>
                </ul>

                <h2>3. 個人情報の管理</h2>
                <p>取得した個人情報は、適切に管理し、法令に基づく場合を除き、第三者に開示・提供することはありません。</p>

                <h2>4. Cookie（クッキー）について</h2>
                <p>当サイトは利便性向上のためCookieを使用しています。Cookieにより個人を識別できる情報は収集されません。ブラウザの設定により、Cookieの受け入れを拒否することも可能です。</p>

                <h2>5. アクセス解析ツールについて</h2>
                <p>当サイトでは、Googleによるアクセス解析ツール「Google Analytics」を利用しています。このGoogle Analyticsはトラフィックデータの収集のためにCookieを使用しています。このトラフィックデータは匿名で収集されており、個人を特定するものではありません。</p>

                <h2>6. プライバシーポリシーの変更</h2>
                <p>当サイトは、個人情報に関して適用される日本の法令を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。修正された最新のプライバシーポリシーは常に本ページにて開示されます。</p>

                <h2>7. お問い合わせ</h2>
                <p>本ポリシーに関するお問い合わせは、<a href="{{ route('contact') }}" target="_blank" rel="noopener noreferrer" style="color: #ffa2a8;">お問い合わせフォーム</a>よりご連絡ください。</p>
            </div>
        </div>

        <nav aria-label="breadcrumb" class="wrap mt-4">
            <ol class="breadcrumb" style="--bs-breadcrumb-divider:'＞'; font-size: clamp(.875rem, 1.8vw, 1rem);">
                <li class="breadcrumb-item"><a href="{{ route('indexDev') }}">トップ</a></li>
                <li class="breadcrumb-item active" aria-current="page">プライバシーポリシー</li>
            </ol>
        </nav>
    </main>

    <x-footer />
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>
