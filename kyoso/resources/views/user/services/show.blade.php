<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap 5 CDN (例) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c70550d95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <title></title>
    <style>
        :root {
            --ink: #1a1a1a;
            --muted: #657287;
            --blue: #1E90FF;
            --bg: #fff;
            --card: #fff;
            --line: #E7EEF5;
            --radius: 14px;
            --shadow: 0 2px 14px rgba(0, 0, 0, .06);
            --maxw: 1120px;
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

        /* 白フィルター（上に薄く被せる） */
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.45);
            /* 透明度はお好みで 0.3〜0.6 */
            pointer-events: none;
            /* クリック干渉を防ぐ */
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
            opacity: .9;
        }

        .hero .lead {
            margin-top: 1rem;
            max-width: 60ch;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font-family: -apple-system, BlinkMacSystemFont, "Noto Sans JP", Segoe UI, Roboto, Arial, sans-serif;
            line-height: 1.8
        }

        .wrap {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 20px
        }




        .lead {
            color: black;
            max-width: 760px
        }

        .grid {
            display: grid;
            gap: 18px;
            margin: 28px 0 48px
        }

        @media (min-width:900px) {
            .grid {
                grid-template-columns: 1fr 1fr
            }
        }

        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 28px
        }

        .kicker {
            font-size: 12px;
            letter-spacing: .12em;
            color: #ffa2a8;
            font-weight: 700;

            font-family: serif;
        }

        h2,
        h3 {
            margin: .2rem 0 .4rem
        }

        p {
            margin: .4rem 0 1rem;
            color: var(--muted)
        }



        a.more {
            color: #ffa2a8;
            text-decoration: none;
            text-align: end;
        }


        .card-title {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            text-align: center;
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
                <h1>プロジェクト概要</h1>
                <div class="sub"><br><br><br><br>循環者に育とう・育てよう<br></div>
            </div>
        </div>
    </section>
    <main class="wrap">
        <section aria-label="overview">
            <p><br>地球に生物が誕生して38億年と言われております。<br>
                たった100年にも満たない時間の中で人間がこの地球を汚染しました。<br>
                今回、廃食油回収を学校、家庭と事業者様等にご協力頂き弊社が集まった廃食油をポイントに還元し、学校に寄付致します。これを原資に生徒が地域課題を考え解決していくプロジェクトです。<br>
                この取組を通し、まずは我々大人が循環者になり、次世代を循環者に育てるプロジェクトに育てていきたいと考えます。<br>
                この汚染が人間が生み出したものであるならば、生み出した人間が変わっていくしかないと思います。</p>
        </section>


        <section aria-label="service-cards" class="grid">
            <!-- 自社開発 -->
            <article class="card">
                <div class="kicker">Collection</div>
                <!-- <div><i class="bi bi-lightbulb-fill"></i>回収拠点づくり</div> -->
                <h3 class="card-title">回収拠点づくり</h3>
                <p>地域の生活導線に回収拠点をつくり、参加のハードルを下げる。<br>
                </p>
                <a class="more" href="{{ route('products') }}">詳しく見る <i class="bi bi-arrow-right-circle-fill"></i></a>
            </article>

            <!-- 受託開発 -->
            <article class="card">
                <div class="kicker">Education</div>
                <!-- <div><i class="bi bi-lightbulb-fill"></i>受託開発</div> -->
                <h3 class="card-title">学校・学びの実装</h3>
                <p>総合の学習や体験を通じて「循環者」を育てる。
                </p>
                <a class="more" href="{{ route('contract') }}">詳しく見る <i class="bi bi-arrow-right-circle-fill"></i></a>
            </article>

            <!-- SES -->
            <article class="card">
                <div class="kicker">Decarbonization</div>
                <!-- <div><i class="bi bi-lightbulb-fill"></i>脆弱性診断</div> -->
                <h3 class="card-title">資源化・脱炭素</h3>
                <p>回収した油を燃料・エネルギーへ。CO₂削減の“見える成果”へ。
                </p>
                <a class="more" href="{{ route('ses') }}">詳しく見る <i class="bi bi-arrow-right-circle-fill"></i></a>
            </article>

            <!-- 共創ネットワーク -->
            <article class="card">
                <div class="kicker">Partnership</div>
                <!-- <div><i class="bi bi-lightbulb-fill"></i>受託開発</div> -->
                <h3 class="card-title">共創ネットワーク</h3>
                <p>自治体・企業・NPO・町内会と役割分担し、継続できる運用
                </p>
                <a class="more" href="{{ route('partnership') }}">詳しく見る <i class="bi bi-arrow-right-circle-fill"></i></a>
            </article>
        </section>
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb" style="--bs-breadcrumb-divider:'＞'; font-size: clamp(.875rem, 1.8vw, 1rem);">

                <li class="breadcrumb-item"><a href="{{ route('indexDev') }}">トップ</a></li>
                <li class="breadcrumb-item">プロジェクト概要</a></li>
            </ol>
        </nav>
    </main>

    <x-footer />
    <script src="{{ asset('js/main.js') }}" defer></script>

</body>

</html>