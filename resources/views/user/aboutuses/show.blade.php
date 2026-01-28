<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="株式会社共創の会社概要。2021年設立、横浜市金沢区を拠点に廃油回収・廃食油リサイクル事業を展開。代表・河原英信は国連本部でSDGs報告発表の経歴を持ちます。">
    <meta name="keywords" content="会社概要,株式会社共創,廃油回収,横浜市金沢区,会社情報,代表取締役,河原英信">
    <meta property="og:title" content="会社概要 | 株式会社共創">
    <meta property="og:description" content="2021年設立、横浜市金沢区を拠点に廃油回収・廃食油リサイクル事業を展開する株式会社共創の会社情報。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://obfall.com/aboutus">
    <meta property="og:image" content="https://obfall.com/image/logo_kyoso2.png">
    <meta property="og:site_name" content="株式会社共創">
    <meta property="og:locale" content="ja_JP">
    <link rel="canonical" href="https://obfall.com/aboutus">
    <title>会社概要 | 株式会社共創 - 廃油回収で地域循環型社会を実現</title>
    <link rel="icon" href="../image/favicon.png" type="image/png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Bootstrap 5 CDN (例) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c70550d95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .hero {
            --hero-img: url('../image/代表.jpg');

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

        .human-rights-policy {
            color: #eef6ff
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

        .sub_aboutus {
            font-size: 1.260rem;
            line-height: 1.3;
            margin: 0 0 .5rem;
        }


        @media (max-width:480px) {
            .hero .wrap {
                position: relative;
                z-index: 1;
                padding: clamp(48px, 33vw, 160px) 10px 0;
            }
        }

        /* md=768px 基準 */
        @media (max-width: 767.98px) {
            .hero {
                --hero-img: url('../image/代表.jpg');

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

            .sub_aboutus {
                font-size: 1.070rem;
                line-height: 1.3;
                margin: 0 0 .5rem;
            }

            .hero .sub {
                font-size: 0.875rem;
                font-weight: 600;
                letter-spacing: .06em;
            }

            .hero .sub-text {
                text-shadow: 0 1px 2px rgba(255, 255, 255, 0.9);
                background: rgba(255, 255, 255, 0.5);
                padding: 4px 12px;
                border-radius: 6px;
                display: inline;
                box-decoration-break: clone;
                -webkit-box-decoration-break: clone;
            }

            .lead {
                font-size: 0.875rem;
            }

            /* small 相当 */
        }

        .hero .title h1 {
            line-height: 1.3;
            margin: 80px 0 .5rem;
            letter-spacing: 0.08em;
            color: #fff;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
        }

        .hero .sub {
            color: #fff;
        }

        .hero .sub-text {
            color: #fff;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.6);
            background: transparent;
            padding: 0;
        }

        h1 {
            font-size: clamp(28px, 4vw, 100px);
            font-weight: 800;
            color: black;
            font-family: 'Times New Roman', Times, serif;
        }


        .hero .lead {
            margin-top: 1rem;
            max-width: 60ch;
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
                <h1>会社概要</h1>
                <div class="sub"><br><br><br><br><span class="sub-text">私たち株式会社共創について</span></div>
            </div>
        </div>
    </section>

    <main class="py-5">


        <div class="about" id="company">
            <div class="wrap">

                <div class="text-center">
                    <h2 class="h4 mb-3 text-container">会社情報</h2>
                    <ul class="p-0">
                        <li>
                            <p class="about-head">会社名</p>
                            <p class="about-data">株式会社共創</p>
                        </li>
                        <li>
                            <p class="about-head">代表取締役</p>
                            <div class="d-flex align-items-center justify-content-center gap-3 mb-2">
                                <img src="../image/代表.jpg" alt="代表取締役 河原英信" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
                                <p class="about-data mb-0">河原　英信</p>
                            </div>
                        </li>
                        <li>
                            <p class="about-head">所在地</p>
                            <p class="about-data">
                                〒236-0058<br>
                                神奈川県横浜市金沢区能見台6-25-10
                            </p>

                            <!-- 地図（レスポンシブ） -->
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%AF%E5%8C%BA%E6%B5%B7%E5%B2%B81-2-3%20%E6%B1%90%E6%9F%93%E8%8A%9D%E9%9B%A2%E5%AE%AE%E3%83%93%E3%83%AB%E3%83%87%E3%82%A3%E3%83%B3%E3%82%B0%2021F&hl=ja&z=16&output=embed"
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                            </div>

                            <!-- マップを別タブで開く／ルート検索 -->
                            <div class="mt-2">
                                <a class="btn btn-outline-primary btn-sm" target="_blank" rel="noopener"
                                    href="https://www.google.com/maps/dir/?api=1&destination=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%AF%E5%8C%BA%E6%B5%B7%E5%B2%B81-2-3%20%E6%B1%90%E6%9F%93%E8%8A%9D%E9%9B%A2%E5%AE%AE%E3%83%93%E3%83%AB%E3%83%87%E3%82%A3%E3%83%B3%E3%82%B0%2021F">
                                    ルートを検索
                                </a>
                            </div>
                        </li>

                        <li>
                            <p class="about-head">メールアドレス</p>
                            <p class="about-data">kyousou1216@gmail.com<br>
                            </p>
                        </li>
                        <li>
                            <p class="about-head">設立</p>
                            <p class="about-data">2021年12月16日<br>
                            </p>
                        </li>
                        <li>
                            <p class="about-head">資本金</p>
                            <p class="about-data">1,000,000円</p>
                        </li>
                        <li>
                            <p class="about-head">取引先銀行</p>
                            <p class="about-data">横浜銀行</p>
                        </li>
                        <li>
                            <p class="about-head">商標登録</p>
                            <p class="about-data">
                                <img src="{{ asset('image/商標.png') }}" alt="地域循環油プロジェクト商標" class="img-fluid" style="max-width: 200px;">
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb" style="--bs-breadcrumb-divider:'＞'; font-size: clamp(.875rem, 1.8vw, 1rem);">

                <li class="breadcrumb-item"><a href="{{ route('indexDev') }}">トップ</a></li>
                <li class="breadcrumb-item">会社概要</a></li>
            </ol>
        </nav>
    </main>

    <x-footer />
    <script src="{{ asset('js/main.js') }}" defer></script>


</body>


<style>
    /* スマホ表示用のスタイル */
    @media (max-width: 767px) {
        .fs-7 {
            font-size: 3px;
        }

    }

    /* ボタンのホバー */
    .btn {
        transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    /* 会社情報リストのホバー */
    .about li {
        transition: background 0.3s ease;
        padding: 10px;
        border-radius: 8px;
    }

    .about li:hover {
        background: rgba(255, 162, 168, 0.05);
    }

    /* 画像のホバー */
    .img-fluid {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .img-fluid:hover {
        transform: scale(1.02);
    }
</style>