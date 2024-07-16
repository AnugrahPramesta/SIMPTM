<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('data-hipertensi') ? 'active' : '' }}" aria-current="page"
                    href="/data-hipertensi">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Data Penyakit Hipertensi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('data-kankerserviks') ? 'active' : '' }}" aria-current="page"
                    href="/data-kankerserviks">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Data Penyakit Kanker Serviks
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('data-diabetesmelitus') ? 'active' : '' }}" aria-current="page"
                    href="/data-diabetesmelitus">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Data Penyakit Diabetes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('data-gif') ? 'active' : '' }}" aria-current="page" href="/data-gif">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Data GIF
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('data-usia-produktif') ? 'active' : '' }}" aria-current="page"
                    href="/data-usia-produktif">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Data Usia Produktif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('posbindu') ? 'active' : '' }}" aria-current="page" href="/posbindu">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    Posbindu
                </a>
            </li>
            <hr>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('akun') ? 'active' : '' }}" aria-current="page" href="/akun">
                    <span data-feather="user" class="align-text-bottom"></span>
                    Akun
                </a>
            </li>

            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn navlink" aria-current="page">
                        <span data-feather="log-out" class="align-text-bottom"></span>
                        Sign Out
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
