<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('/assets/images/logo-sm.png') }}" alt="" height="55">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('/assets/images/logo.png') }}" alt="" height="55" width="100"
                    >
            </span>
        </a>
        <a href="{{ route('dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('/assets/images/logo-sm.png') }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('/assets/images/logo.png') }}" alt="" height="50" width="100"
                    style="filter: brightness(10) invert(10)">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <hr>
            <ul class="navbar-nav" id="navbar-nav">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link menu-link {{ Request::routeIs('dashboard') ? 'active' : '' }}"
                        data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="ph-house-simple"></i> <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contacts.index') }}"
                        class="nav-link menu-link {{ Request::routeIs('dashboard') }}" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <i class="ph-user"></i>
                        <span data-key="t-dashboard">contacts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.index') }}"
                        class="nav-link menu-link {{ Request::routeIs('blogs.index') }}" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <i class="ph-note-pencil"></i>
                        <span data-key="t-dashboard">Blogs</span>
                    </a>
                </li>
                <li class="nav-item">
            
                    <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link menu-link" data-bs-placement="right" data-bs-toggle="tooltip"0.><i
                                class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i>
                            <span  data-key="t-dashboard">Logout</span>
                        </a>
                </li>


            </ul>




        </div>
    </div>
    <div class="sidebar-background"></div>
</div>


<div class="vertical-overlay"></div>
<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="#" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('/assets/images/logo-sm.png') }}" alt="" height="18">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('/assets/images/logo.png') }}" alt="" height="18"
                                style="filter: brightness(-1)">
                        </span>
                    </a>

                    <a href="#" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('/assets/images/logo-sm.png') }}" alt="" height="18"
                                style="filter: brightness(-1)">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('/assets/images/logo.png') }}" alt="" height="18"
                                style="filter: brightness(-1)">
                        </span>
                    </a>
                </div>

                <button type="button"
                    class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

            </div>

            <div class="d-flex align-items-center">



                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bi bi-arrows-fullscreen fs-lg'></i>
                    </button>
                </div>
                {{--
                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-sun align-middle fs-3xl"></i>
                                </button>
                                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                    <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                                    <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                                    <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                                </div>
                            </div> --}}



                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('/assets/images/users/32/usman.jpeg') }}" alt="Header Avatar">

                            <span class="text-start ms-xl-2">
                                <span
                                    class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                                <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">Administrator</span>
                            </span>
                        </span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}!</h6>

                        <a class="dropdown-item" href="{{route('profile.edit')}}"><i
                                class="mdi mdi-face-man text-muted fs-lg align-middle me-1"></i>
                            <span class="align-middle" data-key="t-user">Profile</span>
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i>
                            <span class="align-middle" data-key="t-logout">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
