<!-- resources/views/layouts/header.blade.php -->
<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand ms-4" href="/dashboard">
                <b class="logo-icon">
                    <!-- <img src="../assets/images/logo_mobeos.png" alt="homepage" class="dark-logo" /> -->
                </b>
                <span class="logo-text" style="font-size: 1.2rem; font-weight: bold; color: #fff;">
                    MABEOS RUMBEL
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav d-lg-none d-md-block ">
                <li class="nav-item">
                    <a class="nav-toggler nav-link waves-effect waves-light text-white "
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mt-md-0 ">
                <li class="nav-item search-box">
                    
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="/profile" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- Dynamically load user's photo and name from session -->
                    
                            <img src="{{ asset(session('img_url')) }}" alt="user" class="profile-pic me-2">
                          
                            <!-- Fallback if session values are not available -->
                            <!-- <img src="../assets/images/users/default.jpg" alt="user" class="profile-pic me-2"> -->
                            Guest
                     
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
