<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand pt-3">
        <a href="{{ route('officeNewsIndex') }}" class="app-brand-link">
            <span class="app-brand-logo">
                <img src="/image/logo_kyoso.png" alt="ロゴ" height="20px">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 ps">

        {{-- お知らせ --}}
        <li class="menu-item">
            <a href="{{ route('officeNewsIndex') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div class="text-truncate">お知らせ一覧</div>
            </a>
        </li>

        {{-- ログアウト --}}
        <li class="menu-item">
            <a href="{{ route('officeLogout') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div class="text-truncate">ログアウト</div>
            </a>
        </li>
    </ul>
</aside>