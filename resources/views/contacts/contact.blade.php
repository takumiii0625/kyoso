<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap 5 CDN (例) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c70550d95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>お問い合わせ | 株式会社共創</title>
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

        section {
            padding: 80px 0;
            border-top: 1px solid var(--divider)
        }

        .container {
            padding-top: 140px;
        }

        .form-group {
            padding: 10px;
        }

        .alert-danger {
            margin-top: 15px;
            padding: 5px;
        }

        @media (max-width: 767.98px) {
            .container {
                padding-top: 100px;
            }

            .form-group {
                padding: 10px;
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

    <div class="container">
        <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
        <form method="post" action="{{ route('confirm') }}"> <!-- routeの部分は適切なルート名に置き換えてください -->
            {{ csrf_field() }}

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="name">お名前（10文字以内）<span class="badge bg-danger ms-1">必須</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="お名前をご記入ください" value="{{ old('name') }}">
                </div>
                @if ($errors->has('name'))
                <p class="alert alert-danger">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="email">メールアドレス<span class="badge bg-danger ms-1">必須</span></label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="例：○○○○@○○○○.com" value="{{ old('email') }}">
                </div>
                @if ($errors->has('email'))
                <p class="alert alert-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="company">会社名<span class="badge bg-secondary ms-1">任意</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="company" name="company" placeholder="例：○○○○株式会社" value="{{ old('company') }}">
                </div>
                @if ($errors->has('company'))
                <p class="alert alert-danger">{{ $errors->first('company') }}</p>
                @endif
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="tel">電話番号<span class="badge bg-secondary ms-1">任意</span></label>
                <div class="col-sm-8">
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="例: 03-1234-5678" value="{{ old('tel') }}">
                </div>
                @if ($errors->has('tel'))
                <p class="alert alert-danger">{{ $errors->first('tel') }}</p>
                @endif
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="contents">お問い合わせ内容<span class="badge bg-danger ms-1">必須</span></label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="contents" name="contents" rows="8" placeholder="お問い合わせ内容をご記入ください">{{ old('contents') }}</textarea>
                </div>
                @if ($errors->has('contents'))
                <p class="alert alert-danger">{{ $errors->first('contents') }}</p>
                @endif
            </div>


            <div class="s">
                <button type="submit" class="btn" style="background-color: #ffa2a8; color: #fff;">確認画面へ</button>

            </div>



        </form>

    </div>
    <nav aria-label="breadcrumb" class="m-3">
        <ol class="breadcrumb" style="--bs-breadcrumb-divider:'＞'; font-size: clamp(.875rem, 1.8vw, 1rem);">

            <li class="breadcrumb-item"><a href="{{ route('indexDev') }}">トップ</a></li>
            <li class="breadcrumb-item">お問い合わせ</a></li>
        </ol>
    </nav>
    <footer>
        <div class="devwrap d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <!-- PC:左 / SP:一番上（ロゴ＋ページトップへ） -->
            <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-start align-items-center order-1 order-md-1">
                <img src="./image/logo.png"
                    class="link logo" onclick="scrollToTop()" alt="OBFall株式会社ロゴ">
            </div>

            <!-- PC:中央 / SP:一番下（住所など） -->
            <div class="footer-left col-12 col-md-4 order-3 order-md-2 text-center text-md-start">
                <p>
                    〒236-0058<br>
                    神奈川県横浜市金沢区能見台6-25-10<br>
                    MAIL: kyousou1216@gmail.com<br>

                </p>
            </div>

            <!-- PC:右 / SP:2番目（お問い合わせボタン） -->
            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center order-2 order-md-3">

            </div>
        </div>
    </footer>
    <script src="{{ asset('js/main.js') }}" defer></script>

</body>

</html>