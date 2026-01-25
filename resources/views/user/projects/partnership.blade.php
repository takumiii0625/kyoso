<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap 5 CDN (例) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c70550d95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <title>共創ネットワーク | 株式会社共創</title>
    <style>
        :root {
            --ink: #101317;
            --muted: #6a7689;
            --blue: #1E90FF;
            --line: #E7EEF5;
            --panel: #fff;
            --radius: 14px;
            --shadow: 0 2px 14px rgba(0, 0, 0, .06);
            --maxw: 940px
        }

        .human-rights-policy {
            color: #eef6ff
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
            margin: 80px 0 .5rem;
            letter-spacing: 0.08em;
        }

        h1 {
            font-size: clamp(28px, 4vw, 100px);
            font-weight: 800;
            color: black;
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

        .hero .title h1 {
            color: #fff;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
        }

        .hero .lead {
            margin-top: 1rem;
            max-width: 60ch;
        }

        body {
            margin: 0;
            color: var(--ink);
            background: #fff;
            font-family: -apple-system, BlinkMacSystemFont, "Noto Sans JP", Segoe UI, Roboto, Arial, sans-serif;
            line-height: 1.8
        }

        .wrap {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 20px
        }

        header {
            background:
                /* 左：ピンクを大きく */
                radial-gradient(520px 260px at 18% 70%,
                    rgba(255, 170, 210, .88) 0%,
                    rgba(255, 170, 210, 0) 78%),

                /* 中央：黄色を大きく */
                radial-gradient(640px 320px at 55% 35%,
                    rgba(255, 238, 150, .92) 0%,
                    rgba(255, 238, 150, 0) 82%),

                /* 右：ピンクを追加して“青緑”を上書き（ここが効く） */
                radial-gradient(520px 280px at 88% 70%,
                    rgba(255, 190, 220, .70) 0%,
                    rgba(255, 190, 220, 0) 78%),

                /* 仕上げの薄い暖色ベース */
                linear-gradient(135deg,
                    rgba(255, 225, 240, .22),
                    rgba(255, 246, 190, .22));


            border-bottom: 1px solid var(--line)
        }

        h1 {
            margin: 0 0 .4rem;
            font-size: clamp(28px, 4vw, 100px)
        }


        .lead {
            color: black;
            max-width: 760px
        }

        section {
            padding: 16px 0;
            border-bottom: 1px solid var(--line)
        }

        h2 {
            margin: 0 0 .4rem;
            font-size: clamp(20px, 3vw, 28px)
        }

        h3 {
            margin: 0 0 .2rem;
            font-size: 20px
        }

        p {
            margin: .4rem 0 1rem
        }

        .grid {
            display: grid;
            gap: 16px
        }

        .two {
            grid-template-columns: 1fr
        }

        @media (min-width:820px) {
            .two {
                grid-template-columns: 1fr 1fr
            }
        }

        .card {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 22px
        }

        .cta {
            display: inline-block;
            background: #ffa2a8;
            color: #fff;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 10px
        }

        .more {
            color: #ffa2a8;
            text-decoration: none;
            transition: color 0.3s ease, transform 0.3s ease;
            display: inline-block;
        }

        .more:hover {
            color: #ff7a82;
            transform: translateX(5px);
        }

        /* パートナーカードのホバー */
        .col .border {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .col .border:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(255, 162, 168, 0.15);
        }

        .note {
            color: var(--muted)
        }

        .hero-img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 12px;
            border: 1px solid var(--line)
        }

        /* ロゴサイズを揃える */
        .product-logo {
            height: 56px;
            /* 必要に応じて 48–72px で調整 */
            width: auto;
            object-fit: contain;
            border-radius: 10px;
            /* ← 角丸 */
        }

        /* md=768px 基準 */
        @media (max-width: 767.98px) {
            .hero {
                --hero-img: url('../image/chou.jpg');

                position: relative;
                background-image: var(--hero-img);
                background-size: cover;
                /* 画面いっぱいにフィット */
                background-position: center;
                /* 中央寄せ */
                background-repeat: no-repeat;
                min-height: 46vh;
                /* お好みで高さ調整 */
                color: #111;
                /* テキスト色 */
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
                opacity: .9;
            }

            .lead {
                font-size: 0.875rem;
            }

            /* small 相当 */
        }

        /* 背景トーン（既存の --blue-weak / --ink を尊重） */
        .bg-blue-weak {
            background: var(--blue-weak);
        }

        /* カードの見た目 */
        .principle-card {
            transition: box-shadow .2s ease, transform .2s ease;
            background: #fff;
        }

        .principle-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, .08);
        }

        /* アイコンのバッジ */
        .icon-badge {
            display: inline-flex;
            align-items: center;
            width: 48px;
            height: 48px;
            border-radius: 9999px;
            background: rgba(255, 162, 168, 0.12);
            color: #ffa2a8;
            font-size: 1.25rem;
        }

        /* タイポ */
        .kicker {
            font-size: .8rem;
            font-weight: 700;
            letter-spacing: .08em;
            color: #ffa2a8;
            margin-bottom: .25rem;
        }

        .principle-title {
            font-size: clamp(1.25rem, 2.2vw, 1.6rem);
            line-height: 1.35;
            margin: 0 0 .5rem;
            color: var(--ink);
        }

        .shadow {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 28px
        }

        /* スマホ微調整 */
        @media (max-width: 767.98px) {
            .principle-card {
                padding: 1.25rem;
            }

            .icon-badge {
                width: 44px;
                height: 44px;
                font-size: 1.1rem;
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

    <section class="hero">
        <div class="wrap">
            <div class="title">
                <h1>共創ネットワーク</h1>
                <div class="sub"><br><br><br><br><span class="sub-text">自治体・企業・NPO・町内会と役割分担し、継続できる運用を。</span></div>
            </div>
        </div>
    </section>
    <main class="wrap">

        <section aria-label="overview">
            <p><br>
                地域循環油プロジェクトは、一社だけでは実現できません。<br><br>
                行政・企業・学校・NPO・町内会——それぞれの強みを持ち寄り、<br>
                「役割分担」と「相互連携」によって、継続できる仕組みを作っています。<br><br>
                私たちは"つなぎ役"として、地域の多様なプレイヤーをネットワークでつなぎ、<br>
                循環型社会の実現に向けた協働体制を構築しています。
            </p>
        </section>


        <section id="principles" class="bg-blue-weak py-5">
            <div class="wrap">
                <div class="vstack gap-4"> <!-- ← 縦に積む -->

                    <!-- 行政との連携 -->
                    <article id="government" class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-building-columns" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">行政との「連携」</h2>
                        <p class="mb-0">
                            横浜市金沢区と連携し、地域課題の解決に取り組んでいます。<br>
                            行政の持つ情報発信力と公的な信頼性をお借りしながら、<br>
                            より多くの住民の皆さまに活動を知っていただく機会を増やしています。
                        </p>
                    </article>

                    <!-- 企業・店舗との協働 -->
                    <article id="business" class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-store" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">企業・店舗との「協働」</h2>
                        <p class="mb-0">
                            イエローハット、ウエノクリーニングなど地域の店舗に回収拠点を設置。<br>
                            企業のCSR活動の一環として、お客様との接点を活用した<br>
                            "ついで参加"の仕組みを実現しています。
                        </p>
                    </article>

                    <!-- NPO・地域団体との共創 -->
                    <article id="npo" class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-handshake" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">NPO・地域団体との「共創」</h2>
                        <p class="mb-0">
                            NPO未来経験プロジェクト、金沢区自助連絡協議会など、<br>
                            地域の課題解決に取り組む団体と連携しています。<br>
                            回収によるポイント還元を通じて、団体の活動資金を支援しています。
                        </p>
                    </article>

                </div>
            </div>
        </section>




        <div aria-label="products" class="my-5 shadow">

            <h2 class="h4 mb-3 ">連携パートナー</h2>

            <!-- row-cols-1（SP縦） / row-cols-md-3（MD以上で3列） -->
            <div class="row  row-cols-1 row-cols-md-3 g-4 mb-4">

                <!-- digOn -->

                <!-- 行政パートナー -->
                <div class="col">
                    <div class="d-flex flex-column align-items-center text-center h-100 p-3 border rounded-3">
                        <i class="fa-solid fa-landmark fa-3x mb-3" style="color: #ffa2a8;"></i>
                        <h5 class="mb-2">横浜市金沢区</h5>
                        <p class="mb-0 small text-muted">
                            地域循環型社会の実現に向けた<br>
                            公民連携パートナー
                        </p>
                    </div>
                </div>

                <!-- NPOパートナー -->
                <div class="col">
                    <div class="d-flex flex-column align-items-center text-center h-100 p-3 border rounded-3">
                        <i class="fa-solid fa-users fa-3x mb-3" style="color: #ffa2a8;"></i>
                        <h5 class="mb-2">NPO・地域団体</h5>
                        <p class="mb-0 small text-muted">
                            NPO未来経験プロジェクト<br>
                            金沢区自助連絡協議会 他
                        </p>
                    </div>
                </div>

                <!-- 企業パートナー -->
                <div class="col">
                    <div class="d-flex flex-column align-items-center text-center h-100 p-3 border rounded-3">
                        <i class="fa-solid fa-building fa-3x mb-3" style="color: #ffa2a8;"></i>
                        <h5 class="mb-2">協力企業・店舗</h5>
                        <p class="mb-0 small text-muted">
                            イエローハット金沢文庫店<br>
                            ウエノクリーニング 他
                        </p>
                    </div>
                </div>





            </div>
            <div class="mt-auto text-end">
                <a class="more" href="{{ route('achievementsPartnership') }}">連携実績を詳しく見る <i class="bi bi-arrow-right-circle-fill"></i></a>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb" style="--bs-breadcrumb-divider:'＞'; font-size: clamp(.875rem, 1.8vw, 1rem);">

                <li class="breadcrumb-item"><a href="{{ route('indexDev') }}">トップ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('userServicesShow') }}">プロジェクト概要</a></li>
                <li class="breadcrumb-item">共創ネットワーク</a></li>
            </ol>
        </nav>


    </main>
    <x-footer />
    <script src="{{ asset('js/main.js') }}" defer></script>

</body>

</html>