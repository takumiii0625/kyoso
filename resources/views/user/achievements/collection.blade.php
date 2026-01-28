<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="廃油回収拠点の実績紹介。横浜市金沢区のルンビニー、イエローハット金沢文庫店、ウエノクリーニング各店舗での廃食油回収。回収した油はバイオディーゼル燃料に変換しCO₂削減に貢献。">
    <meta name="keywords" content="廃油回収,回収拠点,実績,横浜市金沢区,ルンビニー,イエローハット,ウエノクリーニング,バイオディーゼル">
    <meta property="og:title" content="回収拠点づくり・資源化の実績 | 株式会社共創">
    <meta property="og:description" content="横浜市金沢区での廃油回収拠点の実績。回収した油はバイオディーゼル燃料に変換しCO₂削減に貢献。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://obfall.com/achievements/collection">
    <meta property="og:image" content="https://obfall.com/image/logo_kyoso2.png">
    <meta property="og:site_name" content="株式会社共創">
    <meta property="og:locale" content="ja_JP">
    <link rel="canonical" href="https://obfall.com/achievements/collection">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c70550d95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>廃油回収拠点・資源化の実績 | 株式会社共創</title>

    <style>
        /* === 基本設定 === */
        body {
            font-family: "Noto Sans JP", sans-serif;
            color: #333;
            line-height: 1.8;
            background: #fafafa;
            margin: 0;
            padding: 0;
        }

        :root {
            --ink: #1a1a1a;
            --muted: #657287;
            --blue: #1E90FF;
            --bg: #fff;
            --card: #fff;
            --line: #E7EEF5;
            --radius: 14px;
            --maxw: 1120px;
        }

        section {

            padding: 24px 24px;
        }

        hr {
            border: none;
            border-top: 1px solid #e0e0e0;
            margin: 32px 0;
        }

        /* === 見出し系 === */
        h2 {
            font-size: 1.8rem;
            color: #ffa2a8;
            margin-bottom: 8px;
        }

        h3 {
            font-size: 1.4rem;
            color: #444;
            font-weight: 500;
            margin-bottom: 16px;
            line-height: 1.6;
        }

        h4 {
            font-size: 1.4rem;
            margin-top: 20px;
            color: #ffa2a8;
        }

        .achievement-lead {
            font-weight: 600;
            font-size: 1.3rem;
            color: #222;
        }



        /* === テキスト・段落 === */
        p {
            margin: 0 0 16px 0;
        }

        ul {
            margin: 12px 0 24px 20px;
        }

        ul ul {
            margin-top: 4px;
        }

        strong {
            color: #ffa2a8;
        }

        /* === 画像コンテナ === */
        .image-container {
            margin-top: 24px;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            max-width: 400px;
            max-height: 280px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .image-container img:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* === 実績アイテムのホバー === */
        .achievement-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 40px;
        }

        .achievement-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(255, 162, 168, 0.15);
            background: rgba(255, 162, 168, 0.03);
        }

        /* === リンクのホバー === */
        a.more {
            transition: color 0.3s ease, transform 0.3s ease;
            display: inline-block;
        }

        a.more:hover {
            color: #ff7a82;
            transform: translateX(5px);
        }

        /* === ボタンリンク === */


        .non-link-button {
            display: inline-block;
            padding: 10px 18px;
            background: #999999;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 0.95rem;
            transition: background 0.2s;
        }

        .link-button:hover {
            background: #E7EEF5;
        }


        /* === 各セクション区分 === */
        .section-products {
            background: #ffffff;
            border-left: 6px solid #ffa2a8;
            padding-top: 40px;
            padding-bottom: 40px;
            margin-right: 20px;
        }

        .section-contract {
            background: #ffffff;
            border-left: 6px solid #00b894;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .section-security {
            background: #ffffff;
            border-left: 6px solid #ff7675;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        /* === まとめ文 === */
        .summary {
            font-weight: 600;
            text-align: center;
            margin-top: 32px;
            color: #333;
        }

        .hero {
            --hero-img: url('../image/chou.jpg');

            position: relative;
            background-image: var(--hero-img);
            background-size: cover;
            /* 画面いっぱいにフィット */
            background-position: center;
            /* 中央寄せ */
            background-repeat: no-repeat;
            min-height: 36vh;
            /* お好みで高さ調整 */
            color: #111;
            /* テキスト色 */
        }

        /* 暗いフィルター */
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            pointer-events: none;
        }

        /* テキストを最前面に */
        .hero .wrap {
            position: relative;
            z-index: 1;
            padding: clamp(48px, 13vw, 120px) 16px 0;
        }

        @media (max-width:480px) {
            .hero .wrap {
                position: relative;
                z-index: 1;
                padding: clamp(48px, 33vw, 160px) 10px 0;
            }
        }


        .hero .title h1 {
            line-height: 1.3;
            margin: 0 0 .5rem;
            color: #fff;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
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

        .hero .lead {
            margin-top: 1rem;
            max-width: 60ch;

        }

        h1 {
            font-size: clamp(28px, 4vw, 100px);
            font-weight: 800;
            color: black;
            font-family: 'Times New Roman', Times, serif;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 22px
        }

        .card-title {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            text-align: center;
        }

        .kicker {
            font-size: 12px;
            letter-spacing: .12em;
            color: #ffa2a8;
            font-weight: 700;

            font-family: serif;
        }

        .grid {
            display: grid;
            gap: 18px;

        }

        @media (min-width:900px) {
            .grid {
                grid-template-columns: 1fr 1fr
            }
        }

        /* === レスポンシブ === */
        @media (max-width: 768px) {
            h2 {
                font-size: 1.6rem;
            }

            h3 {
                font-size: 1.2rem;
            }

            .link-button {
                width: 100%;
                text-align: center;
            }

            .image-container img {
                max-width: 100%;
            }

            section {

                padding: 10px 16px;
            }

            .hero {
                --hero-img: url('../image/chou.jpg');

                position: relative;
                background-image: var(--hero-img);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                min-height: 46vh;
            }

            .hero .title h1 {
                font-size: 2.000rem;
                line-height: 1.3;
                margin: 0 0 .5rem;
            }

            .hero .sub {
                font-size: 0.875rem;
                font-weight: 600;
                letter-spacing: .06em;
            }

            .hero .sub-text {
                text-shadow: 0 1px 2px rgba(0, 0, 0, 0.9);
                background: transparent;
                padding: 0;
            }

            .lead {
                font-size: 0.875rem;
            }

            /* small 相当 */
        }

        a.more {
            color: #ffa2a8;
            text-decoration: none;
            text-align: end;
        }

        /* ベース: 縦並び（スマホ） */
        .achievement-content {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        /* PC版（768px以上）で横並びに */
        @media (min-width: 768px) {
            .achievement-content {
                flex-direction: row;
                align-items: flex-start;
            }

            .achievement-content .text {
                flex: 1;
            }

            .achievement-content .image-container {
                flex: 1;
                text-align: right;
                /* 右寄せ */
            }

            .achievement-content .image-container img {
                max-width: 80%;
                height: auto;
                border-radius: 20px;
                /* ← 角丸 */
            }
        }

        /* ロゴは常に小さめ。画面幅に応じて 96〜160px で可変 */
        .app-logo {
            width: clamp(96px, 18vw, 160px);
            height: auto;
            display: block;
            margin: 0 0 12px;
            object-fit: contain;

            /* ← 角丸 */
            /* 任意: 少し落ち着いた見た目にするなら
  opacity: .95;
  */
        }

        /* 配置：PCでは左寄せ、スマホでは中央寄せにしたい場合 */
        @media (max-width: 575.98px) {
            .app-logo {
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
</head>

<body>
    <div class="top">
        <x-header />
        <nav class="nav-02">
            <ul>

                <li class="link text-dark "><a href="{{ route('philosophy') }}" class="text-dark text-decoration-none">企業理念</a></li>
                <li class="link text-dark "><a href="{{ route('userServicesShow') }}" class="text-dark text-decoration-none">プロジェクト概要</a></li>
                <li class="link text-dark "><a href="{{ route('achievements') }}" class="text-dark text-decoration-none">実績・事例紹介</a></li>
                <li class="link text-dark "><a href="{{ route('aboutus') }}" class="text-dark text-decoration-none">会社概要</a></li>
                <li class="link text-dark "><a href="{{ route('contact') }}" class="text-dark text-decoration-none" target="_blank" rel="noopener noreferrer">お問い合わせ</a></li>

            </ul>
        </nav>
    </div>


    <!-- ===== Hero ===== -->
    <section class="hero">
        <div class="wrap">
            <div class="title">
                <h1>回収拠点づくり・資源化の実績</h1>
                <div class="sub"><br><br><br><br><br><span class="sub-text">集めた油が、どれだけの価値に変わったのか。</span></div>
            </div>
        </div>
    </section>
    <main class="wrap">
        <section aria-label="overview">
            <p>
                金沢区を中心に、地域の皆さまが日常の中で無理なく参加できる回収拠点を整備しています。<br>
                買い物のついで、クリーニングの帰り道——生活導線の中に回収ボックスを置くことで、<br>
                「ちょっと持っていこう」が当たり前になる仕組みを広げています。
            </p>
            <div class="mt-4 p-3" style="background: #fff8e1; border-radius: 10px; border-left: 4px solid #ffa2a8;">
                <h5 style="color: #333;"><i class="fa-solid fa-recycle" style="color: #ffa2a8;"></i> 回収した油のゆくえ</h5>
                <p style="color: #666; margin-bottom: 0;">
                    回収した廃食油は、ビーバーリンク食廃油活用プロジェクトを通じてバイオディーゼル燃料（BDF）に精製されます。<br>
                    廃食油1リットルあたり約2.3kgのCO₂削減効果があり、藤が丘小学校では317L回収で約0.73トンのCO₂削減を達成しました。
                </p>
            </div>
        </section>


        <!-- 回収拠点の実績 -->
        <section id="products" class="section-products">
            <!-- ルンビニー -->
            <article class="achievement-item">
                <div class="achievement-content">
                    <div class="image-container">
                        <img src="../image/回収①.png" alt="ルンビニー・つながりの庭" />
                    </div>
                    <div class="text">

                        <h4><strong>ルンビニー・つながりの庭</strong></h4>
                        <br>
                        <p>
                            金沢区釜利谷東1-24-8に位置する地域交流拠点。<br>
                            子育て中の家族と子どもたちのためのコミュニケーションスペースとして、<br>
                            地域のママたちの活躍の場を提供しています。<br><br>
                            <strong>【応援先】</strong>金沢区ママ（子育て支援サークル）
                        </p>
                    </div>
                </div>
            </article>

            <hr>

            <!-- イエローハット -->
            <article class="achievement-item">
                <div class="achievement-content">
                    <div class="image-container">
                        <img src="../image/回収②.png" alt="イエローハット金沢文庫店" />
                    </div>
                    <div class="text">
                        <h4><strong>イエローハット金沢文庫店</strong></h4>
                        <br>
                        <p>
                            金沢区釜利谷東4-1-5。カー用品店という日常的に立ち寄りやすい場所に<br>
                            回収ボックスを設置。車での来店時にペットボトルを持参していただけます。<br><br>
                            <strong>【応援先】</strong>横浜こどもホスピス うみとそらのおうち<br>
                            病気とともにある子どもたちの家族や遺族の願いから生まれた、日本でもまだ珍しい子どものためのホスピスです。
                        </p>
                    </div>
                </div>
            </article>


            <hr>

            <!-- ウエノクリーニング -->
            <article class="achievement-item">
                <div class="achievement-content">
                    <div class="image-container">
                        <img src="../image/回収③.png" alt="ウエノクリーニング各店舗" />
                    </div>
                    <div class="text">
                        <h4><strong>ウエノクリーニング各店舗</strong></h4>
                        <br>
                        <p>
                            金沢区内5店舗（本店・金沢文庫店・さくらい店・金沢八景店・能見台駅前店）に<br>
                            回収ボックスを設置。クリーニングの受け取り・お預けのついでに油をお持ちいただけます。<br><br>
                            <strong>【応援先】</strong>金沢区自助連絡協議会<br>
                            誰もが安全で健康で笑って暮らせる金沢区を実現するために、人と人の輪をつなげる地域交流ネットワークです。
                        </p>
                    </div>
                </div>
            </article>

            <hr>
        </section>
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb" style="--bs-breadcrumb-divider:'＞'; font-size: clamp(.875rem, 1.8vw, 1rem);">

                <li class="breadcrumb-item"><a style="color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));" href="{{ route('indexDev') }}">トップ</a></li>
                <li class="breadcrumb-item"><a style="color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));" href="{{ route('achievements') }}">実績・事例紹介</a></li>
                <li class="breadcrumb-item">回収拠点づくり・資源化の実績</a></li>
            </ol>
        </nav>

    </main>
    <x-footer />
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>