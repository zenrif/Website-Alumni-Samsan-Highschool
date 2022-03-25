<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/" target="_blank">
            <img src="https://img.icons8.com/color-glass/48/000000/graduation-cap.png" class="navbar-brand-img h-100"
                alt="main_logo">
            <span class="ms-1 font-weight-bold">Alumni</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img
                            src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/25/000000/external-dashboard-user-interface-kmg-design-detailed-outline-kmg-design.png" />
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            @can('super_admin')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/admin*') ? 'active' : '' }}" href="/dashboard/admin">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img
                            src="https://img.icons8.com/external-itim2101-lineal-itim2101/25/000000/external-admin-network-technology-itim2101-lineal-itim2101-1.png" />
                    </div>
                    <span class="nav-link-text ms-1">Admin</span>
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/member*') ? 'active' : '' }}" href="/dashboard/member">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="https://img.icons8.com/ios-filled/25/000000/group-background-selected.png" />
                    </div>
                    <span class="nav-link-text ms-1">Member</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/dana-alumni*') ? 'active' : '' }}"
                    href="/dashboard/dana-alumni">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img
                            src="https://img.icons8.com/external-smashingstocks-glyph-smashing-stocks/25/000000/external-fundraising-banking-and-finance-smashingstocks-glyph-smashing-stocks.png" />
                    </div>
                    <span class="nav-link-text ms-1">Dana Alumni</span>
                </a>
            </li>
            @can('admin')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/artikel*') ? 'active' : '' }}" href="/dashboard/artikel">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img
                            src="https://img.icons8.com/external-smashingstocks-glyph-smashing-stocks/25/000000/external-article-social-marketing-smashingstocks-glyph-smashing-stocks.png" />
                    </div>
                    <span class="nav-link-text ms-1">Artikel</span>
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/myarticle*') ? 'active' : '' }}"
                    href="/dashboard/myarticle">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img
                            src="https://img.icons8.com/external-itim2101-fill-itim2101/25/000000/external-article-blogger-and-influencer-itim2101-fill-itim2101-1.png" />
                    </div>
                    <span class="nav-link-text ms-1">Artikel Saya</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/profile*') ? 'active' : '' }}" href="/dashboard/profile">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="https://img.icons8.com/ios-glyphs/25/000000/gender-neutral-user.png" />
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="logout.submit()">
                    <form action="/logout" method="post" name="logout">
                        @csrf
                        <img
                            src="https://img.icons8.com/external-outline-kendis-lasman/25/000000/external-logout-user-interface-basic-line-outline-kendis-lasman.png" />
                        <span class="nav-link-text ms-1">Logout</span>
                    </form>
                </a>
            </li>
        </ul>
    </div>
</aside>