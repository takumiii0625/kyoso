<footer>
    <div class="devwrap d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
        <!-- PC:左 / SP:一番上（ロゴ＋ページトップへ） -->
        <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-start align-items-center order-1 order-md-1">
            <img src="../image/logo.png"
                class="link logo" onclick="scrollToTop()" alt="株式会社共創ロゴ">
            <span class="ms-2 text-white fw-bold">株式会社共創</span>
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
            <a href="{{ route('contact') }}" class="link-button" target="_blank" rel="noopener noreferrer">
                お問い合わせはこちら <i class="fa-solid fa-circle-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</footer>