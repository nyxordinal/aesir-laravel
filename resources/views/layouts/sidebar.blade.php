<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Aesir</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile') }}"
                    class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="/" class="nav-link @if (url()->current() === route('home'))
                        active
                    @endif">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @php
                $route = url()->current();
                @endphp
                <!-- Watch Status Menu -->
                <li class="nav-item has-treeview
                @if ($route === route('watch.watching') || $route === route('watch.watched') || $route === route('watch.plan') || $route === route('watch.hold') || $route === route('watch.drop') || $route === route('watch.no'))
                menu-open
                @endif">
                    <a href="#" class="nav-link @if ($route === route('watch.watching') || $route === route('watch.watched') || $route === route('watch.plan') || $route === route('watch.hold') || $route === route('watch.drop') || $route === route('watch.no'))
                    active
                    @endif">
                        <i class="nav-icon fab fa-youtube"></i>
                        <p>
                            Watch Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{ route('watch.watching') }}" class="nav-link @if (url()->current() === route('watch.watching'))
                                active
                            @endif">
                                <i class="nav-icon fas fa-dice-one"></i>
                                <p>
                                    Watching
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('watch.watched') }}" class="nav-link @if (url()->current() === route('watch.watched'))
                                active
                            @endif">
                                <i class="nav-icon fas fa-dice-two"></i>
                                <p>
                                    Watched
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('watch.plan') }}" class="nav-link @if (url()->current() === route('watch.plan'))
                                active
                            @endif">
                                <i class="nav-icon fas fa-dice-three"></i>
                                <p>
                                    Plan to Watch
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('watch.hold') }}" class="nav-link @if (url()->current() === route('watch.hold'))
                                active
                            @endif">
                                <i class="nav-icon fas fa-dice-four"></i>
                                <p>
                                    On hold
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('watch.drop') }}" class="nav-link @if (url()->current() === route('watch.drop'))
                                active
                            @endif">
                                <i class="nav-icon fas fa-dice-five"></i>
                                <p>
                                    Dropped
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('watch.no') }}" class="nav-link @if (url()->current() === route('watch.no'))
                                active
                            @endif">
                                <i class="nav-icon fas fa-dice-six"></i>
                                <p>
                                    No
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End of Watch Status Menu -->
                <!-- Download Status Menu -->
                <li class="nav-item has-treeview
                @if ($route === route('download.process') || $route === route('download.complete') || $route === route('download.plan') || $route === route('download.no'))
                menu-open
                @endif">
                    <a href="#" class="nav-link @if ($route === route('download.process') || $route === route('download.complete') || $route === route('download.plan') || $route === route('download.no'))
                    active
                    @endif">
                        <i class="nav-icon fas fa-download"></i>
                        <p>
                            Download Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{ route('download.process') }}" class="nav-link @if (url()->current() === route('download.process'))
                                active
                            @endif">
                                <i class="nav-icon fas fa-dice-one"></i>
                                <p>
                                    On Process
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('download.complete') }}" class="nav-link @if (url()->current() === route('download.complete'))
                                active
                            @endif">
                                <i class="nav-icon fas fa-dice-two"></i>
                                <p>
                                    Complete
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('download.plan') }}" class="nav-link @if (url()->current() === route('download.plan'))
                                active
                            @endif">
                                <i class="nav-icon fas fa-dice-three"></i>
                                <p>
                                    Plan to Download
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('download.no') }}" class="nav-link @if (url()->current() === route('download.no'))
                                active
                            @endif">
                                <i class="nav-icon fas fa-dice-four"></i>
                                <p>
                                    No
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End of Download Status Menu -->
                <li class="nav-item has-treeview">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
