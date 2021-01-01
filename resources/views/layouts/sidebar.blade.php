<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
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
                <a href="{{ route('profile') }}" class="d-block">{{ Auth::user()->name }}</a>
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
                // Get current URI
                $fullRoute = url()->full();
                $appUrl = env('APP_URL');
                $pieces = explode("/", $appUrl);
                $pattern = "/" . $pieces[0] . "\/\/" . $pieces[2] . "/";
                $route = preg_replace($pattern, "", $fullRoute);
                @endphp

                <!-- Watch Status Menu -->
                <li class="nav-item has-treeview
                @if (preg_match("/anime\?status=/", $route)) menu-open @endif">
                    <a href="#" class="nav-link
                    @if (preg_match("/anime\?status=/", $route)) active @endif">
                        <i class="nav-icon fab fa-youtube"></i>
                        <p>
                            Watch Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['status' => '1']) }}"
                                class="nav-link @if ($route === "/anime?status=1") active @endif">
                                <i class="nav-icon fas fa-play"></i>
                                <p>
                                    Watching
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['status' => '2']) }}"
                                class="nav-link @if ($route === "/anime?status=2") active @endif">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    Watched
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['status' => '3']) }}"
                                class="nav-link @if ($route === "/anime?status=3") active @endif">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    Plan to Watch
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['status' => '4']) }}"
                                class="nav-link @if ($route === "/anime?status=4") active @endif">
                                <i class="nav-icon fas fa-pause"></i>
                                <p>
                                    On hold
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['status' => '5']) }}"
                                class="nav-link @if ($route === "/anime?status=5") active @endif">
                                <i class="nav-icon fas fa-window-close"></i>
                                <p>
                                    Dropped
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['status' => '6']) }}"
                                class="nav-link @if ($route === "/anime?status=6") active @endif">
                                <i class="nav-icon fas fa-ban"></i>
                                <p>
                                    No
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End of Watch Status Menu -->
                <!-- Download Status Menu -->
                <li class="nav-item has-treeview @if (preg_match("/anime\?download=/", $route)) menu-open @endif">
                    <a href="#" class="nav-link @if (preg_match("/anime\?download=/", $route)) active @endif">
                        <i class="nav-icon fas fa-download"></i>
                        <p>
                            Download Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['download' => '1']) }}"
                                class="nav-link @if ($route === "/anime?download=1") active @endif">
                                <i class="nav-icon fas fa-spinner"></i>
                                <p>
                                    On Process
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['download' => '2']) }}"
                                class="nav-link @if ($route === "/anime?download=2") active @endif">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    Complete
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['download' => '3']) }}"
                                class="nav-link @if ($route === "/anime?download=3") active @endif">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    Plan to Download
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['download' => '4']) }}"
                                class="nav-link @if ($route === "/anime?download=4") active @endif">
                                <i class="nav-icon fas fa-ban"></i>
                                <p>
                                    No
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End of Download Status Menu -->
                <!-- Storage Menu -->
                <li class="nav-item has-treeview
                @if (preg_match("/anime\?storage=/", $route)) menu-open @endif ">
                    <a href=" #" class="nav-link @if (preg_match("/anime\?storage=/", $route)) active @endif">
                    <i class="nav-icon fas fa-archive"></i>
                    <p>
                        Storage
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['storage' => '1']) }}"
                                class="nav-link @if ($route === "/anime?storage=1")active @endif">
                                <i class="nav-icon fab fa-usb"></i>
                                <p>
                                    MS-1 (Flash Drive)
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['storage' => '2']) }}"
                                class="nav-link @if ($route === "/anime?storage=2")active @endif">
                                <i class="nav-icon fas fa-hdd"></i>
                                <p>
                                    Harddisk Ext 1 (250 GB)
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['storage' => '4']) }}"
                                class="nav-link @if ($route === "/anime?storage=4")active @endif">
                                <i class="nav-icon fas fa-hdd"></i>
                                <p>
                                    Harddisk Ext 2 (4 TB)
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('anime', ['storage' => '3']) }}"
                                class="nav-link @if ($route === "/anime?storage=3")active @endif">
                                <i class="nav-icon fas fa-laptop"></i>
                                <p>
                                    Laptop
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End of Storage Menu -->
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
