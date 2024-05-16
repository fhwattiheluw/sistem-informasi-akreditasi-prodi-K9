<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-chevron-double-left"></span>
        </button>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="navbar-nav">
            @if (auth()->user()->role === 'fakultas')
            <li class="nav-item dropdown">
                <a class="btn btn-sm btn-outline-success" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    {nama program studi}
                </a>
                <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0 font-weight-semibold">Pilih Prodi</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">{nama program studi}</h6>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">{nama program studi}</h6>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">{nama program studi}</h6>
                        </div>
                    </a>
                </div>
            </li>
            @endif
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            @if (auth()->user()->role != 'fakultas')
            <li class="nav-item nav-logout d-none d-md-block mr-3">
                <a class="btn btn-sm btn-danger" href="#">{{ auth()->user()->prodi->nama }}</a>
            </li>
            @endif
            <li class="nav-item nav-profile dropdown d-none d-md-block">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-text">{{ auth()->user()->name }}</div>
                </a>
                <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{route('akun.profil')}}">
                        <i class="fas fa-pencil-alt mr-3"></i> Edit Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('logout')}}">
                        <i class="fas fa-sign-out-alt mr-3"></i> Sign out
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>

