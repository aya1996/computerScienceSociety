<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{asset(auth()->user()->image)}}" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                        {{auth()->user()->name}}   <i class="mdi mdi-chevron-down"></i>
                    </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                <a href="{{route('admin.edit.user',auth()->user()->id)}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-outline"></i>
                    <span>الصفحة الشخصية</span>
                </a>

                <div class="dropdown-divider"></div>

                <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout-variant"></i>
                    <span>تسجيل خروج</span>
                </a>

            </div>
        </li>


    </ul>

    <div class="logo-box">
        <a href="{{route('admin.dashboard')}}" class="logo text-center logo-dark">
            <span class="logo-lg">
                    <img src="{{asset('dashboard/images/logo-dark.png')}}" alt="" height="18">
                    <!-- <span class="logo-lg-text-dark">Velonic</span> -->
            </span>
            <span class="logo-sm">
                    <!-- <span class="logo-lg-text-dark">V</span> -->
            <img src="{{asset('dashboard/images/logo-sm.png')}}" alt="" height="22">
            </span>
        </a>

        <a href="{{route('admin.dashboard')}}" class="logo text-center logo-light">
            <span class="logo-lg">
                    <img src="{{asset('site/images/logo.png')}}" alt="" height="50">
                    <!-- <span class="logo-lg-text-dark">Velonic</span> -->
            </span>
            <span class="logo-sm">
                    <!-- <span class="logo-lg-text-dark">V</span> -->
            <img src="{{asset('dashboard/images/logo-sm.png')}}" alt="" height="22">
            </span>
        </a>
    </div>


    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
        </li>
    </ul>
</div>
