<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="地域循環油プロジェクトの学校・学びの実装。出前授業で子どもたちが循環型社会を学び、廃食油回収を実践。CO₂削減効果を体感し「循環者」として成長。">
    <meta name="keywords" content="地域循環油,環境教育,出前授業,循環型社会,SDGs教育,小学校,総合学習,横浜市金沢区">
    <meta property="og:title" content="学校・学びの実装 | 地域循環油プロジェクト">
    <meta property="og:description" content="地域循環油プロジェクトの学校教育。出前授業で子どもたちが「循環者」として成長する教育プログラム。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://obfall.com/projects/education">
    <meta property="og:image" content="https://obfall.com/image/logo_kyoso2.png">
    <meta property="og:site_name" content="株式会社共創">
    <meta property="og:locale" content="ja_JP">
    <link rel="canonical" href="https://obfall.com/projects/education">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap 5 CDN (例) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c70550d95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <title>学校・学びの実装 | 地域循環油プロジェクト | 株式会社共創</title>
    <style>
        :root {
            --ink: #101317;
            --muted: #6a7689;
            --blue: #1E90FF;
            --line: #E7EEF5;
            --panel: #fff;
            --radius: 14px;
            --maxw: 940px
        }

        .human-rights-policy {
            color: #eef6ff
        }

        .hero {
            --hero-img: url('../image/b9c85a75-d76e-498a-b2c7-792f7bed0d3e.jpg');

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
            padding: 0 20px;

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

        .values {

            gap: 20px
        }

        .value {
            padding: 24px;
            border: 1px solid var(--divider);
            border-radius: 14px;
            background: #fff
        }

        @media (min-width:820px) {
            .two {
                grid-template-columns: 1fr 1fr
            }

            .values {
                grid-template-columns: repeat(3, 1fr)
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

        /* 活動カードのホバー */
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
                --hero-img: url('../image/b9c85a75-d76e-498a-b2c7-792f7bed0d3e.jpg');

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
                <h1>学校・学びの実装</h1>
                <div class="sub"><br><br><br><br><span class="sub-text">総合の学習や体験を通じて「循環者」を育てる。</span></div>
            </div>
        </div>
    </section>
    <main class="wrap">
        <section aria-label="overview">
            <p><br>
                子どもたちが「循環」を学び、自ら行動する——それが私たちの目指す教育です。<br><br>
                出前授業や体験学習を通じて、廃食油がどのように資源に変わり、<br>
                地域にどんな価値を届けるのかを、子どもたち自身が考え、発信します。<br><br>
                <strong>「知る → やってみる → 広める」</strong><br>
                この循環を、学校と一緒に育てています。
            </p>
        </section>

        <section id="principles" class="bg-blue-weak py-5">
            <div class="wrap">
                <div class="vstack gap-4">

                    <!-- 出前授業 -->
                    <article id="lesson" class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-chalkboard-user" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">出前授業で「知る」</h2>
                        <p class="mb-0">
                            学校に伺い、環境問題や循環型社会について授業を行います。<br>
                            「なぜ油を集めるの？」「集めた油はどうなるの？」<br>
                            子どもたちの素朴な疑問に答えながら、身近な資源の大切さを伝えます。
                        </p>
                    </article>

                    <!-- 体験学習 -->
                    <article id="experience" class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-hands-holding-circle" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">回収活動で「やってみる」</h2>
                        <p class="mb-0">
                            学んだことを実践に移します。<br>
                            家庭から油を持ち寄り、回収量を記録し、どれだけのCO₂削減につながったかを計算。<br>
                            「自分たちの行動が地球を守る」という実感を育てます。
                        </p>
                    </article>

                    <!-- 発表・発信 -->
                    <article id="spread" class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-bullhorn" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">地域へ「広める」</h2>
                        <p class="mb-0">
                            学んだこと、体験したことを地域に発信します。<br>
                            子どもたちが「循環者」として家族や地域に働きかけることで、<br>
                            大人たちも巻き込んだ循環の輪が広がっていきます。
                        </p>
                    </article>

                </div>
            </div>
        </section>


        <div aria-label="products" class="my-5 shadow">
            <h2 class="h4 mb-3">活動事例</h2>

            <!-- row-cols-1（SP縦） / row-cols-md-2（MD以上で2列） -->
            <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">

                <!-- 藤が丘小学校 -->
                <div class="col">
                    <div class="d-flex flex-column align-items-center text-center h-100 p-3 border rounded-3">
                        <i class="fa-solid fa-school fa-3x mb-3" style="color: #ffa2a8;"></i>
                        <h5 class="mb-2">藤が丘小学校</h5>
                        <p class="mb-0 small text-muted">
                            317Lの廃食油を回収<br>
                            CO₂削減量：約0.73t相当<br>
                            還元額3,170円で校内緑化を実施
                        </p>
                    </div>
                </div>

                <!-- NPO未来経験プロジェクト -->
                <div class="col">
                    <div class="d-flex flex-column align-items-center text-center h-100 p-3 border rounded-3">
                        <i class="fa-solid fa-users fa-3x mb-3" style="color: #ffa2a8;"></i>
                        <h5 class="mb-2">NPO未来経験プロジェクト</h5>
                        <p class="mb-0 small text-muted">
                            子どもたちの社会体験を支援<br>
                            循環型社会の学びをサポート
                        </p>
                    </div>
                </div>

            </div>
            <div class="mt-auto text-end">
                <a class="more" href="{{ route('achievementsEducation') }}">実績を詳しく見る <i class="bi bi-arrow-right-circle-fill"></i></a>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb" style="--bs-breadcrumb-divider:'＞'; font-size: clamp(.875rem, 1.8vw, 1rem);">
                <li class="breadcrumb-item"><a href="{{ route('indexDev') }}">トップ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('userServicesShow') }}">プロジェクト概要</a></li>
                <li class="breadcrumb-item">学校・学びの実装</a></li>
            </ol>
        </nav>
    </main>
    <x-footer />
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>