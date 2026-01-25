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

    <title>回収拠点づくり・資源化 | 株式会社共創</title>
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

        /* 拠点カードのホバー */
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
                <h1>回収拠点づくり・資源化</h1>
                <div class="sub"><br><br><br><br><span class="sub-text">集めた油を燃料へ。CO₂削減の"見える成果"を地域へ届ける。</span></div>
            </div>
        </div>
    </section>
    <main class="wrap">

        <section aria-label="overview">
            <p><br>
                天ぷらなど揚げ物で使い終わった食用油「廃食油」を、エコ資源として有効活用できることをご存じですか？<br><br>
                私たちは地域に専用ボックスを設置し、ご家庭から出た廃食油の回収を実施。<br>
                集まった油の量に応じて、応援している施設や団体に寄付させていただいております。<br><br>
                <strong>「捨てていたその油が、地域貢献に。」</strong><br>
                ご家庭で揚げ物をした際に出た廃食油をしっかり冷まし、ペットボトルに入れてお持ちください。
            </p>
        </section>


        <section id="principles" class="bg-blue-weak py-5">
            <div class="wrap">
                <div class="vstack gap-4">

                    <!-- 参加方法 -->
                    <article id="howto" class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-hand-holding-droplet" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">参加方法はカンタン</h2>
                        <p class="mb-0">
                            ①使用済みの植物油を<strong>しっかり冷ます</strong><br>
                            ②<strong>ペットボトル</strong>に入れる（キャップをしっかり閉める）<br>
                            ③お近くの<strong>回収拠点</strong>へ持ち込む<br><br>
                            ペットボトルごと回収ボックスに入れるだけ。特別な手続きは不要です。
                        </p>
                    </article>

                    <!-- 還元の仕組み -->
                    <article id="system" class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-recycle" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">油がポイントに変わる仕組み</h2>
                        <p class="mb-0">
                            回収した油は株式会社共創で引き取り、<strong>1Lあたり5円〜10円</strong>を地域の施設や団体に寄付いたします。<br><br>
                            <strong>【還元単価】</strong><br>
                            ・ご家庭からの持ち込み：1L = 5円<br>
                            ・飲食店・回収拠点：1L = 10円<br><br>
                            集まった資金は、地域の医療・防災・子育て等に役立てられます。
                        </p>
                    </article>

                    <!-- 応援先を選べる -->
                    <article id="support" class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-heart" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">応援先を選んで寄付できます</h2>
                        <p class="mb-0">
                            あなたが寄付したい・応援したい施設や団体の回収ボックスまでお持ちください。<br><br>
                            <strong>【応援先の例】</strong><br>
                            ・<strong>子育て支援</strong>：地域のママに活躍の場を提供するサークル<br>
                            ・<strong>福祉</strong>：病気とともにある子供たちの家族のためのホスピス<br>
                            ・<strong>防災</strong>：誰もが安全で健康に暮らせる地域づくりのためのネットワーク
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <!-- 資源化・脱炭素セクション -->
        <section id="decarbonization" class="bg-blue-weak py-5">
            <div class="wrap">
                <h2 class="h4 mb-4">回収した油のゆくえ</h2>
                <div class="vstack gap-4">

                    <!-- バイオ燃料への変換 -->
                    <article class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-gas-pump" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">バイオ燃料への「変換」</h2>
                        <p class="mb-0">
                            回収した廃食油は、提携するリサイクル事業者（ビーバーリンク食廃油活用プロジェクト）へ引き渡されます。<br>
                            そこでバイオディーゼル燃料（BDF）に精製され、トラックやバス、農業機械などの動力源として活用されます。
                        </p>
                    </article>

                    <!-- CO₂削減の見える化 -->
                    <article class="card principle-card h-100 border-0 shadow-sm rounded-4 p-4">
                        <span class="icon-badge mb-3"><i class="fa-solid fa-leaf" aria-hidden="true"></i>
                            <div class="kicker"></div>
                        </span>
                        <h2 class="principle-title">CO₂削減の「見える化」</h2>
                        <p class="mb-0">
                            廃食油1リットルあたり約2.3kgのCO₂削減効果があります。<br>
                            回収量をもとにCO₂削減量を計算し、学校や地域に報告。<br>
                            「自分たちの行動がどれだけ地球を守ったか」を数字で実感できます。
                        </p>
                    </article>

                </div>
            </div>
        </section>


        <div aria-label="products" class="my-5 shadow">

            <h2 class="h4 mb-3 ">回収拠点のご紹介（金沢区の例）</h2>

            <!-- row-cols-1（SP縦） / row-cols-md-3（MD以上で3列） -->
            <div class="row  row-cols-1 row-cols-md-3 g-4 mb-4">

                <!-- ルンビニー -->
                <div class="col">
                    <div class="d-flex flex-column align-items-center text-center h-100 p-3 border rounded-3">
                        <i class="fa-solid fa-location-dot fa-3x mb-3" style="color: #ffa2a8;"></i>
                        <h5 class="mb-2">ルンビニー・つながりの庭</h5>
                        <p class="mb-0 small text-muted">金沢区釜利谷東1-24-8<br>【応援先】子育て支援</p>
                    </div>
                </div>


                <!-- イエローハット -->
                <div class="col">
                    <div class="d-flex flex-column align-items-center text-center h-100 p-3 border rounded-3">
                        <i class="fa-solid fa-location-dot fa-3x mb-3" style="color: #ffa2a8;"></i>
                        <h5 class="mb-2">イエローハット金沢文庫店</h5>
                        <p class="mb-0 small text-muted">金沢区釜利谷東4-1-5<br>【応援先】福祉（横浜こどもホスピス）</p>
                    </div>
                </div>


                <!-- ウエノクリーニング -->
                <div class="col">
                    <div class="d-flex flex-column align-items-center text-center h-100 p-3 border rounded-3">
                        <i class="fa-solid fa-location-dot fa-3x mb-3" style="color: #ffa2a8;"></i>
                        <h5 class="mb-2">ウエノクリーニング各店舗</h5>
                        <p class="mb-0 small text-muted">本店・金沢文庫店・さくらい店・金沢八景店・能見台駅前店の5店舗<br>【応援先】防災</p>
                    </div>
                </div>


            </div>
            <div class="mt-auto text-end">
                <a class="more" href="{{ route('achievementsCollection') }}">実績・事例を詳しく見る <i class="bi bi-arrow-right-circle-fill"></i></a>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb" style="--bs-breadcrumb-divider:'＞'; font-size: clamp(.875rem, 1.8vw, 1rem);">

                <li class="breadcrumb-item"><a href="{{ route('indexDev') }}">トップ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('userServicesShow') }}">プロジェクト概要</a></li>
                <li class="breadcrumb-item">回収拠点づくり・資源化</a></li>
            </ol>
        </nav>


    </main>
    <x-footer />
    <script src="{{ asset('js/main.js') }}" defer></script>

</body>

</html>