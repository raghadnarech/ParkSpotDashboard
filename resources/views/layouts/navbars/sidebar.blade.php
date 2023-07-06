<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" >
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome') }}</h6>
                    </div>
                    <a href="" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    {{-- <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a> --}}
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                            aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            {{-- <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}"
            aria-label="Search">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <span class="fa fa-search"></span>
                </div>
            </div>
        </div>
        </form> --}}
        <!-- Navigation -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" >
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('book.index') }}">
                    <i class="ni ni-single-02 text-success"></i> {{ __('Books') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('book_monthly.index') }}">
                    <i class="ni ni-world-2 text-primary"></i> {{ __('Book Monthly') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('book_history.index') }}">
                    <i class="ni ni-cart text-info"></i> {{ __('Book History') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="ni ni-circle-08 text-danger"></i> {{ __('Admin') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('walletadmin.index') }}">
                    <i class="ni ni-world-2 text-primary"></i> {{ __('Wallet Admin') }}
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="ni ni-world-2 text-primary"></i> {{ __('User') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Url('car') }}">
                <i class="ni ni-settings-gear-65 text-success"></i> {{ __('Car') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('walletuser.index') }}">
                    <i class="ni ni-world-2 text-primary"></i> {{ __('Wallet User') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('zone.index') }}">
                    <i class="ni ni-spaceship text-info"></i> {{ __('Zones') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('slot.index') }}">
                    <i class="ni ni-briefcase-24 text-warning"></i> {{ __('Slot') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('typepay.index') }}">
                    <i class="ni ni-world-2 text-primary"></i> {{ __('Type Pay') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('transactionmonthly.index') }}">
                    <i class="ni ni-world-2 text-primary"></i> {{ __('Transaction Monthly') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('deposite.index') }}">
                    <i class="ni ni-world-2 text-primary"></i> {{ __('Deposit User') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('depositsuperadmin.index') }}">
                    <i class="ni ni-world-2 text-primary"></i> {{ __('Deposite Super Admin') }}
                </a>
            </li>

































        </ul>
        <!-- Divider -->
        <hr class="my-3">

</nav>
