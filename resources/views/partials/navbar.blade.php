<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <a href="/"><img src="https://img.icons8.com/color-glass/48/000000/graduation-cap.png" alt=""
                    class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('/') || Request::is('home') ? 'active' : '' }}"
                        href="/">Home</a></li>
                <li><a class="nav-link scrollto {{ Request::is('artikel') ? 'active' : '' }}"
                        href="/artikel">Artikel</a>
                <li><a class="nav-link scrollto {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                @auth
                <li class="dropdown"><a href="#"><span>Hi, {{ auth()->user()->name }}</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li>
                            {{-- <img
                                src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/15/000000/external-dashboard-user-interface-kmg-design-detailed-outline-kmg-design.png" />
                            --}}
                            <a href="/dashboard">Dashboard</a>
                        </li>
                        <form action="/logout" method="post">
                            @csrf
                            {{-- <img
                                src="https://img.icons8.com/external-outline-kendis-lasman/15/000000/external-logout-user-interface-basic-line-outline-kendis-lasman.png" />
                            --}}
                            <span class="nav-link-text ms-1">
                                <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </ul>
                </li>
                @else
                <li><a class="nav-link scrollto" href="/login">Login</a>
                </li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>