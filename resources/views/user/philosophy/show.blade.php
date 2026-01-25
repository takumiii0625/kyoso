<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap 5 CDN (例) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c70550d95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Philosophy | OBFall Inc.</title>
    <style>
        /* ====== Minimal Design Tokens ====== */
        :root {
            --bg: #ffffff;
            --ink: #1A1A1A;
            --ink-2: #3a3a3a;
            --muted: #6b7785;
            --blue: #1E90FF;
            --blue-weak: #F6FAFD;
            --card: #ffffff;
            --divider: #E7EEF5;
            --radius: 16px;
            --shadow: 0 2px 14px rgba(0, 0, 0, .06);
            --maxw: 1120px;
        }

        .human-rights-policy {
            color: #eef6ff
        }

        html,
        body {
            background: var(--bg);
            color: var(--ink);
            font-family: -apple-system, BlinkMacSystemFont, "Hiragino Kaku Gothic ProN", "Noto Sans JP", Segoe UI, Roboto, Ubuntu, "Helvetica Neue", "Helvetica", Arial, sans-serif;
            line-height: 1.8;
        }

        h1,
        h2,
        h3 {
            line-height: 1.35;
            margin: 0 0 .5em
        }

        h1 {
            font-size: clamp(28px, 4vw, 100px);
            font-weight: 800;
            color: black;
            font-family: 'Times New Roman', Times, serif;
        }

        h2 {
            font-size: clamp(18px, 2.6vw, 26px);
            font-weight: 700;
            color: #ffa2a8;
        }

        h3 {
            font-size: clamp(16px, 2.2vw, 22px);
            font-weight: 700
        }

        p {
            margin: .6em 0
        }

        .wrap {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 20px
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
            padding: clamp(48px, 13vw, 120px) 16px 0px;
        }


        .hero .title h1 {
            line-height: 1.3;
            margin: 80px 0 .5rem;
            letter-spacing: 0.08em;
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

            .hero .wrap {
                position: relative;
                z-index: 1;
                padding: clamp(48px, 8vw, 160px) 10px;
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

        .grid {
            display: grid;
            gap: 28px
        }

        @media (min-width:960px) {
            .grid-2 {
                grid-template-columns: 1.1fr 1.4fr
            }
        }

        .card {
            background: var(--card);
            border: 1px solid var(--divider);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 28px
        }

        .muted {
            color: var(--muted)
        }

        .values {
            display: grid;
            gap: 20px
        }

        @media (min-width:860px) {
            .values {
                grid-template-columns: repeat(3, 1fr)
            }
        }

        .value {
            padding: 24px;
            border: 1px solid var(--divider);
            border-radius: 14px;
            background: #fff
        }

        .value h4 {
            margin: 0 0 .4rem;
            font-size: 18px
        }

        .kicker {
            letter-spacing: .12em;
            text-transform: uppercase;
            font-weight: 700;
            color: #ffa2a8;
            font-size: 13px;
            margin-bottom: .6rem;
            font-family: serif;
        }



        .message {
            background: #fff;
            border: 1px solid var(--divider);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 36px
        }

        .origin {
            background: var(--blue-weak);
            border: 1px solid var(--divider);
            border-radius: var(--radius);
            padding: 28px
        }

        .origin .bar {
            border-left: 4px solid #ffa2a8;
            padding-left: 16px
        }

        .ending {
            text-align: center;
            color: var(--muted)
        }

        .vis-img {
            aspect-ratio: 16/10;
            background: #e9f2fc;
            border: 1px dashed #bcd3f5;
            border-radius: 12px
        }

        .vis-caption {
            font-size: 12px;
            color: #708297;
            margin-top: 6px
        }

        @media (max-width:480px) {
            .hero .wrap {
                position: relative;
                z-index: 1;
                padding: clamp(48px, 33vw, 160px) 10px 0;
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
                <h1>企業理念</h1>
                <div class="sub"><br><br>
                    「捨てるはずだった油」を、子どもたちの未来と地域の力に。<br>
                    家庭やお店から出る廃食油は、ただの“ごみ”ではありません。<br>
                    集めて、つないで、循環させれば、地域の挑戦を支える“資源”になります。<br>　</div>
            </div>
        </div>
    </section>


    <!-- ===== Vision ===== -->
    <section id="vision" style="background:var(--blue-weak);border-top:none">
        <div class="wrap pt-4">
            <div class="card" style="background:#fff">
                <div class="kicker">Vision（目指す未来）</div>
                <h2 style="color:var(--ink)">消費者から、循環者へ。
                </h2>
                <p>地域にある“もったいない”が、当たり前に価値へ変わり、<br>
                    子ども・子育て・福祉・防災など、地域の大切な活動が継続して育つ社会をつくります。</p>
            </div>
        </div>
    </section>


    <!--=====Mission=====-->
    <section id="mission" style="background:var(--blue-weak);border-top:none">
        <div class="wrap p-4">
            <div class="card" style="background:#fff">
                <div class="kicker">Mission（私たちの使命）</div>
                <h2 style="color:var(--ink)">地域の小さな協力を、続く仕組みに変える。</h2>
                <p>私たちは、廃食油回収を「善意」だけで終わらせません。<br>
                    回収・資源化・収益の循環を“見える化”し、地域の団体や学校とともに、<br>
                    誰でも参加でき、続けられる循環の仕組みを実装します。</p>
            </div>
        </div>
    </section>

    <!-- ===== Core Values ===== -->
    <section id="values">
        <div class="wrap pt-4">
            <div class="kicker">　Core Values</div>
            <h2>　3つの柱</h2>
            <div class="values">
                <div class="value">
                    <div class="kicker">Circular</div>
                    <h4>循環は、地域の希望になる</h4>
                    <p class="muted">回収量が増えるほど、地域が豊かになる。<br>
                        “集める”はゴールではなく、地域の価値が戻ってくるスタートです。</p>
                </div>
                <div class="value">
                    <div class="kicker">Community</div>
                    <h4>子どもから始まる、地域の変化</h4>
                    <p class="muted">授業や体験を通じて、子どもが学び、家族が動き、地域が変わる。<br>
                        「知る→やってみる→広める」を、学校と一緒に育てます。</p>
                </div>
                <div class="value">
                    <div class="kicker">Collaboration</div>
                    <h4>共創で、続く仕組みにする</h4>
                    <p class="muted">自治体・企業・学校・NPO・町内会——<br>
                        立場が違う人たちの力を“役割分担”で束ね、継続できる形にします。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Message ===== -->
    <section id="message">
        <div class="wrap pt-4">
            <div class="message">
                <div class="kicker">Message（代表メッセージ）</div>
                <h3 style="margin-top:.2rem">XXXXXXX（Messageタイトル）
                </h3>
                <p>
                    地域には、良い活動がたくさんあります。<br>
                    でも、資金や人手が足りず、続けられない現実もあります。<br>
                    一方で、家庭や飲食店から毎日出る廃食油は、まだ十分に活かされていません。<br>
                    私たちは、この“眠っている資源”を、地域の未来に回す仕組みに変えたい。<br><br>

                    油を出す人は、難しいことをしなくていい。<br>
                    「いつもの油を、いつもの場所へ」持っていくだけで、
                    子どもたちの学びや、福祉や、防災の力になります。<br><br>

                    小さな循環から、大きな循環へ。<br>
                    一緒に、地域を豊かにしていきましょう。</p>
            </div>
        </div>
    </section>


    <!-- ===== Origin ===== -->
    <section id="origin">
        <div class="wrap pt-4">
            <div class="origin">
                <div class="bar">
                    <div class="kicker">Origin</div>
                    <h3>理念の由来・なぜこの事業なのか</h3>
                    <p>“捨てられるもの”を、“地域の資源”へ。<br>
                        廃食油は、毎日の暮らしから必ず生まれる資源です。<br>
                        だからこそ、誰もが参加でき、地域に成果が戻る循環をつくれば、
                        まちの課題（教育・福祉・防災）に、継続的な力を届けられる。<br>
                        その確信が、私たちの原点です。</p>
                </div>
            </div>
        </div>
    </section>
    <nav aria-label="breadcrumb" class="m-3">
        <ol class="breadcrumb" style="--bs-breadcrumb-divider:'＞'; font-size: clamp(.875rem, 1.8vw, 1rem);">

            <li class="breadcrumb-item"><a href="{{ route('indexDev') }}">トップ</a></li>
            <li class="breadcrumb-item">企業理念</a></li>
        </ol>
    </nav>


    <x-footer />
    <script src="{{ asset('js/main.js') }}" defer></script>

</body>

</html>