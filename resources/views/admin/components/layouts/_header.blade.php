<nav class="main-header navbar navbar-expand">
    <ul class="navbar-nav">
        <li id="hamburger" class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item custom-breadcrumbs-box">
{{--            @yield('breadcrumbs')--}}
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                {{ auth()->user()->name }}
                <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu">
                <form action="{{ route('logout') }}" method="post">
                    @csrf

                    <button class="dropdown-item text-center">
                        ログアウト&nbsp;
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
