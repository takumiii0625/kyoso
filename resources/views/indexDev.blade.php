<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:image" content="https://obfall.com/image/logo_kyoso2.png">
    <title>OBFall株式会社</title>
    <link rel="icon" href="./image/favicon.png" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- Bootstrap 5 CDN (例) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c70550d95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        <div class="main-visual ">
            <div class="img-wrap">
                <img src="image/about_us2.jpg" alt="メイン画像①">
                <img src="image/achievements.jpg" alt="メイン画像②">
                <img src="image/recruit.jpg" alt="メイン画像③">
            </div>
        </div>
        <div class="text-container">
            <p class="fadein-scroll fadein-from-down smaller-text custom-line-height">
                <strong class="larger-text">XXXXXXXXXX(メインキャッチフレーズ)
                </strong>
                <br>
                XXXXXXXXXXXX（サブキャッチフレーズ）<br>


            </p>

        </div>

    </div>

    <main>
        <div id="about" class="service pt-4">
            <h1 class="fadein-scroll fadein-from-left m-0 text-start">
                <div class="heading-chip">PHILOSOPHY</div>
            </h1>
            <ul>
                <section class="py-1 py-md-5">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            {{-- 左：画像（トリミングなし） --}}
                            <div class="col-md-6 order-2 order-md-1">
                                <img
                                    src="{{ asset('image/service.jpg') }}"
                                    alt="企業理念のイメージ画像"
                                    class="img-fluid rounded shadow-sm d-block"
                                    style="max-width:100%; height:auto;">
                            </div>

                            {{-- 右：見出し・英字・内容・ボタン --}}
                            <div class="col-md-6 order-1 order-md-2">
                                <div class="text-muted small mb-1 text-end text-md-start">企業理念</div>
                                <h2 class="h4 mb-3 text-container maintitle text-end text-md-start">PHILOSOPHY</h2>


                                <p class="mb-4">
                                    「捨てるはずだった油」を、子どもたちの未来と地域の力に。<br>
                                    家庭やお店から出る廃食油は、ただの“ごみ”ではありません。<br>
                                    集めて、つないで、循環させれば、地域の挑戦を支える“資源”になります。

                                </p>

                                {{-- 遷移ボタン（お好みでどちらか） --}}
                                <a href="{{ route('philosophy') }}" class="link-button shadow">
                                    企業理念へ <i class="fa-solid fa-circle-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </ul>
            <h1 class="fadein-scroll fadein-from-right m-0 text-end">
                <div class="heading-chip--flip">PROJECTS</div>
            </h1>
            <ul>
                <section class="py-1 py-md-5">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            {{-- 左：テキスト --}}
                            <div class="col-md-6">
                                <div class="text-muted small mb-1">プロジェクト</div>
                                <h2 class="h4 maintitle text-container mb-3">PROJECTS</h2>

                                <p class="mb-4">
                                    XXXXXXXXXX(プロジェクトについて3行程度の軽い説明)<br>
                                    XXXXXXXXXX<br>
                                    XXXXXXXXXX
                                </p>
                                <a href="{{ route('userServicesShow') }}" class="link-button shadow" target="_blank" rel="noopener noreferrer">
                                    プロジェクトの概要 <i class="fa-solid fa-circle-arrow-right ms-1"></i>
                                </a>
                            </div>

                            {{-- 右：画像（トリミングなし） --}}
                            <div class="col-md-6">
                                <img src="{{ asset('image/service.jpg') }}"
                                    alt="プロジェクトのイメージ画像"
                                    class="img-fluid rounded shadow-sm d-block"
                                    style="max-width:100%;height:auto;">
                            </div>
                        </div>
                    </div>
                </section>
            </ul>
            <h1 class="fadein-scroll fadein-from-left m-0 text-start">
                <div class="heading-chip">ACHIEVEMENTS</div>
            </h1>
            <ul>
                <section class="py-1 py-md-5">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            {{-- 左：画像（トリミングなし） --}}
                            <div class="col-md-6 order-2 order-md-1">
                                <img
                                    src="{{ asset('image/service.jpg') }}"
                                    alt="実績・事例紹介のイメージ画像"
                                    class="img-fluid rounded shadow-sm d-block"
                                    style="max-width:100%; height:auto;">
                            </div>


                            {{-- 右：見出し・英字・内容・ボタン --}}
                            <div class="col-md-6 order-1 order-md-2">
                                <div class="text-muted small mb-1 text-end text-md-start">実績・事例紹介</div>
                                <h2 class="h4 mb-3 text-container text-end text-md-start maintitle">ACHIEVEMENTS</h2>


                                <p class="mb-4">
                                    「油を集める」だけじゃない。<br>
                                    地域の“続く力”を生む、私たちの挑戦と成果。

                                </p>

                                {{-- 遷移ボタン（お好みでどちらか） --}}
                                <a href="{{ route('achievements') }}" class="link-button shadow">
                                    実績・事例紹介画面へ <i class="fa-solid fa-circle-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </ul>
            <h1 class="fadein-scroll fadein-from-right m-0 text-end">
                <div class="heading-chip--flip">ABOUT US</div>
            </h1>
            <ul>
                <section class="py-1 py-md-5">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            {{-- 左：テキスト --}}
                            <div class="col-md-6">
                                <div class="text-muted small mb-1">会社概要</div>
                                <h2 class="h4 maintitle text-container mb-3">ABOUT US</h2>

                                <p class="mb-4">
                                    XXXXXXXXXX(会社概要について３行程度の軽い説明)<br>
                                    XXXXXXXXXX<br>
                                    XXXXXXXXXX
                                </p>
                                <a href="{{ route('aboutus') }}" class="link-button shadow" target="_blank" rel="noopener noreferrer">
                                    会社概要画面へ <i class="fa-solid fa-circle-arrow-right ms-1"></i>
                                </a>
                            </div>

                            {{-- 右：画像（トリミングなし） --}}
                            <div class="col-md-6">
                                <img src="{{ asset('image/about_us1.jpg') }}"
                                    alt="会社概要のイメージ画像"
                                    class="img-fluid rounded shadow-sm d-block"
                                    style="max-width:100%;height:auto;">
                            </div>
                        </div>
                    </div>
                </section>
            </ul>
            <h1 class="fadein-scroll fadein-from-right m-0 text-end">
                <div class="heading-chip--flip">NEWS</div>
            </h1>
            <ul>
                <section class="py-1 py-md-5">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-12">
                                <div class="text-muted small mb-1">新着情報</div>
                                <h2 class="h4 mb-3 text-container maintitle">NEWS</h2>

                            </div>
                            <div class="col-12">
                                <div class="achievements-jobs fadein-scroll fadein-from-down">

                                    <div class="row g-3 align-items-start">
                                        <!-- 左：新着情報ボタン（SPは全幅、PCは左寄せ） -->
                                        <div class="col-12 col-md-3">
                                            <div class="d-grid d-md-block">
                                                <a href="{{ route('userNewsIndex') }}" class="link-button shadow">
                                                    新着情報 <i class="fa-solid fa-circle-arrow-right ms-1"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- 右：ニュース一覧（SPでは下に） -->
                                        <div class="col-12 col-md-9">
                                            <div class="bg-white">
                                                @php $visibleCount = 3; @endphp

                                                @forelse ($assign['news'] as $index => $record)
                                                @php
                                                $raw = collect([
                                                $record->news_image_url_1 ?? null,
                                                $record->news_image_url_2 ?? null,
                                                $record->news_image_url_3 ?? null,
                                                ])->first(fn($u) => filled($u));

                                                $imgSrc = $raw
                                                ? (\Illuminate\Support\Str::startsWith($raw, ['http://','https://','/']) ? $raw : asset($raw))
                                                : asset('image/noimg-square.jpg');
                                                @endphp

                                                <div class="border-bottom news-item {{ $index >= $visibleCount ? 'd-none' : '' }}">
                                                    <a href="{{ route('userNewsShow', ['id' => $record->id]) }}"
                                                        class="d-flex text-decoration-none text-dark mb-3 mt-3">

                                                        <!-- サムネ（正方形トリミング） -->
                                                        <div class="ratio ratio-1x1 flex-shrink-0 me-3" style="width:72px;">
                                                            <img src="{{ $imgSrc }}" alt="{{ $record->title }}"
                                                                class="w-100 h-100 rounded shadow-sm" style="object-fit:cover;" loading="lazy">
                                                        </div>

                                                        <!-- タイトル & 日付 -->

                                                        <div class="flex-grow-1">
                                                            <div class="fw-semibold text-truncate" title="{{ $record->title }}">
                                                                {{ $record->title }}
                                                            </div>
                                                            @if($record->created_at_fmt)
                                                            <time class="text-muted small">{{ $record->created_at_fmt }}</time>
                                                            @endif
                                                        </div>
                                                    </a>
                                                </div>
                                                @empty
                                                <p class="text-muted m-0 p-3">お知らせはありません。</p>
                                                @endforelse

                                                <!-- もっと見る
                                                <div class="d-flex flex-column justify-content-center w-100">
                                                    <button id="toggleNewsBtn"
                                                        class="text-muted text-end small btn-link btn-sm text-primary text-decoration-none p-0">
                                                        もっと見る >
                                                    </button>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            {{-- 右：見出し・英字・内容・ボタン --}}

                        </div>
                    </div>
                </section>
            </ul>

        </div>

    </main>
    <section class="ending" aria-label="closing">
        <div class="wrap">
            <p style="font-style:italic;font-size:12px;margin-bottom:.3rem">競い合う競争ではなく、共に豊かな地域を創る</p><br><br>
            <!-- <p class="muted small" style="margin-top:0">XXXXXXXXX</p>
            <p class="muted small" style="margin-top:0">XXXXXXXXX</p> -->

            <!-- CTAを置くならここに： <a href="/contact" class="btn">Contact</a> -->
        </div>
    </section>
    <x-footer />



    <script src="{{ asset('js/main.js') }}" defer></script>


</body>


</html>
<style>
    .shadow {

        border-radius: var(--radius);
        box-shadow: var(--shadow);

    }

    .human-rights-policy {
        color: #eef6ff
    }

    :root {
        --radius-xl: 10px;
        --shadow-1: 0 12px 32px rgba(0, 0, 0, .10);
        --shadow-2: 0 14px 40px rgba(0, 0, 0, .16);
    }

    /* 全体の器（小画像がはみ出す分の余白を確保） */
    .about-card {
        position: relative;
        padding-bottom: 30px;
        /* 小画像が下にはみ出すぶんの逃げ */
    }

    /* 大きい画像 */
    .about-card__main {
        position: relative;
        border-radius: var(--radius-xl);
        overflow: hidden;
        /* 角丸内でクリップ */
        box-shadow: var(--shadow-1);
        aspect-ratio: 4 / 3;
        /* 比率固定で安定 */
    }

    .about-card__main img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* 小さい画像（右下にオーバーラップ） */
    .about-card__sub {
        position: absolute;
        right: -50px;
        /* ちょい外へ */
        bottom: -46px;
        width: min(65%, 500px);
        /* 親幅に対する比率＋上限 */
        aspect-ratio: 3 / 2;
        border-radius: calc(var(--radius-xl) - 4px);
        box-shadow: var(--shadow-2);
        background: #fff;
        /* フチが綺麗に見えるよう白背景 */
    }

    .about-card__sub img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        border-radius: inherit;
    }

    /* モバイル微調整 */
    @media (max-width: 767.98px) {
        .about-card {
            padding-bottom: 80px;
        }

        .about-card__sub {
            right: -10px;
            bottom: -12px;
            width: min(62%, 260px);
        }
    }
</style>

<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }

    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });

        $('.back-to-top').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });
</script>