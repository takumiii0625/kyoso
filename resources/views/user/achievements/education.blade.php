<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="学校での環境教育・廃油回収の実績。藤が丘小学校での取り組みでは317Lの廃食油を回収し、約0.73トンのCO₂削減を達成。出前授業やNPOとの連携で「循環者」を育成。">
    <meta name="keywords" content="環境教育,実績,廃油回収,藤が丘小学校,出前授業,CO2削減,横浜市金沢区,NPO未来経験プロジェクト">
    <meta property="og:title" content="学校・学びの実装の実績 | 株式会社共創">
    <meta property="og:description" content="学校での環境教育・廃油回収の実績。藤が丘小学校で317Lの廃食油を回収し、約0.73トンのCO₂削減を達成。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://obfall.com/achievements/education">
    <meta property="og:image" content="https://obfall.com/image/logo_kyoso2.png">
    <meta property="og:site_name" content="株式会社共創">
    <meta property="og:locale" content="ja_JP">
    <link rel="canonical" href="https://obfall.com/achievements/education">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c70550d95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>学校・環境教育の実績 | 株式会社共創 - 廃油回収で循環者を育成</title>

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
        .link-button:hover {
            background: #E7EEF5;
        }

        /* === 各セクション区分 === */
        .section-products {
            background: #ffffff;
            border-left: 6px solid #ffa2a8;
            padding-top: 40px;
            padding-bottom: 40px;

        }

        .section-contract {
            background: #ffffff;
            border-left: 6px solid #ffa2a8;
            padding-top: 40px;
            padding-bottom: 40px;

            margin-right: 20px;
        }

        .section-security {
            background: #ffffff;
            border-left: 6px solid #ffa2a8;
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
            }
        }

        /* ロゴは常に小さめ。画面幅に応じて 96〜160px で可変 */
        .app-logo {
            width: clamp(96px, 18vw, 160px);
            height: auto;
            display: block;
            margin: 0 0 12px;
            object-fit: contain;
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
                <h1>学校・学びの実装の実績</h1>
                <div class="sub"><br><br><br><br><span class="sub-text">子どもたちが「循環者」として成長しています。</span></div>
            </div>
        </div>
    </section>
    <main class="wrap">
        <section aria-label="overview">
            <p>
                今まで携わってくださった子どもたちは、真剣に社会と向き合い、<br>
                このプロジェクトを通してまっすぐに成長しています。<br><br>
                出前授業で学び、回収活動を実践し、地域に発信する——<br>
                その一連の体験が、子どもたちを「消費者」から「循環者」へと変えていきます。
            </p>
        </section>

        <!-- 学校・学びの実績 -->
        <section id="education" class="section-contract">
            <!-- 藤が丘小学校 -->
            <article class="achievement-item">
                <div class="achievement-content">
                    <div class="image-container">
                        <img src="../image/藤が丘小学校児童と.png" alt="藤が丘小学校での活動" />
                    </div>
                    <div class="text">

                        <h4><strong>藤が丘小学校での取り組み</strong></h4>
                        <br>
                        <p>
                            藤が丘小学校では、総合的な学習の時間を活用して循環型社会について学習。<br>
                            子どもたちが主体となって廃食油の回収活動に取り組みました。<br><br>
                            <strong>【実績】</strong><br>
                            ・回収量：317リットル<br>
                            ・CO₂削減量：約0.73トン相当<br>
                            ・還元額：3,170円<br>
                            ・活用：校内緑化プロジェクトに充当<br><br>
                            子どもたちは「自分たちの行動が環境を守り、学校をより良くする」という<br>
                            成功体験を得ることができました。
                        </p>
                    </div>
                </div>
            </article>

            <hr>

            <!-- 出前授業 -->
            <article class="achievement-item">
                <div class="achievement-content">
                    <div class="image-container">
                        <img src="../image/教育①.png" alt="出前授業の様子" />
                    </div>
                    <div class="text">
                        <h4><strong>出前授業の実施</strong></h4>
                        <br>
                        <p>
                            学校に伺い、環境問題と循環型社会についての出前授業を実施しています。<br><br>
                            <strong>【授業内容】</strong><br>
                            ・廃食油とは何か、なぜ集めるのか<br>
                            ・回収した油がバイオ燃料になる仕組み<br>
                            ・CO₂削減と地球温暖化防止の関係<br>
                            ・「循環者」として自分たちにできること<br><br>
                            座学だけでなく、実際の回収活動につなげることで、<br>
                            「知る → やってみる → 広める」の学びのサイクルを実現しています。
                        </p>
                    </div>
                </div>
            </article>

            <hr>

            <!-- NPO未来経験プロジェクト -->
            <article class="achievement-item">
                <div class="achievement-content">
                    <div class="image-container">
                        <img src="../image/教育②.png" alt="回収イベントでの活動" />
                    </div>
                    <div class="text">
                        <h4><strong>NPO未来経験プロジェクトとの連携</strong></h4>
                        <br>
                        <p>
                            子どもたちの社会体験を支援するNPO未来経験プロジェクトと連携し、<br>
                            より充実した学びの機会を提供しています。<br><br>
                            <strong>【連携内容】</strong><br>
                            ・循環型社会をテーマにした体験プログラムの企画<br>
                            ・子どもたちの発表機会の創出<br>
                            ・地域イベントでの協働活動<br><br>
                            専門性を持つNPOとの協働により、教育効果の高いプログラムを実現しています。
                        </p>
                    </div>
                </div>
            </article>
            <hr>
        </section>

        <section></section>
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb" style="--bs-breadcrumb-divider:'＞'; font-size: clamp(.875rem, 1.8vw, 1rem);">

                <li class="breadcrumb-item"><a style="color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));" href="{{ route('indexDev') }}">トップ</a></li>
                <li class="breadcrumb-item"><a style="color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));" href="{{ route('achievements') }}">実績・事例紹介</a></li>
                <li class="breadcrumb-item">学校・学びの実装の実績</a></li>
            </ol>
        </nav>

    </main>
    <x-footer />
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>