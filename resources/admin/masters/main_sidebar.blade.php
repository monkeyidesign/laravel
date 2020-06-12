<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.monkeyidesign.com/" class="brand-link">
        <img src="/img/monkeyidesign.png" alt="MONKEY iDESIGN" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">MONKEY iDESIGN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview bg-submenu">
                        <li class="nav-item">
                            <router-link to="/dashboard" class="nav-link">
                                <p>Home</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/announcement" class="nav-link">
                                <p>Announcement</p>
                            </router-link>
                        </li>
                    </ul>
                </li>
                <li class="nav-header text-uppercase">
                    website
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" >
                        <i class="fab fa-windows nav-icon"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview bg-submenu">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-file nav-icon"></i>
                                <p>Pages<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <router-link to="/pages" class="nav-link">
                                        <p>All Pages</p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/front-page" class="nav-link">
                                        <p>Frontpage</p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <p>Add new</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-thumbtack nav-icon"></i>
                                <p>
                                    Posts
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <router-link to="/posts" class="nav-link">
                                        <p>All Posts</p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <p>Add new</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/categories" class="nav-link">
                                        <p>Categories</p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/tags" class="nav-link">
                                        <p>Tags</p>
                                    </router-link>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-photo-video nav-icon"></i>
                                <p>Media</p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy nav-icon"></i>
                                <p>
                                    Theme Options
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <p>Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <p>Widgets</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <p>Header</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-sliders-h nav-icon"></i>
                                <p>Setting</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-header text-uppercase">
                    system
                </li>
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-graduation-cap nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            School Management--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}

{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview bg-submenu">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav.html" class="nav-link">--}}
{{--                                <p>Dashboard</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Classes</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Sessions</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Settings</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-building nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            School--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}

{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview bg-submenu">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav.html" class="nav-link">--}}
{{--                                <p>Dashboard</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Inquiries</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Subjects</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Noticeboard</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-user-graduate nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Academic--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            <span class="right badge badge-danger">New</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview bg-submenu">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav.html" class="nav-link">--}}
{{--                                <p>Dashboard</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Class Sections</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Subjects</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Noticeboard</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-users nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Student--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview bg-submenu">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav.html" class="nav-link">--}}
{{--                                <p>Dashboard</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Admission</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Students</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Students</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>ID Cards</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Promote</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-chalkboard-teacher nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Parent--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview bg-submenu">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Attendance</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Score</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-user-shield nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Administrator--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview bg-submenu">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav.html" class="nav-link">--}}
{{--                                <p>Dashboard</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <router-link to="/users" class="nav-link">--}}
{{--                                <p>Users</p>--}}
{{--                            </router-link>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <router-link to="/roles" class="nav-link">--}}
{{--                                <p>Roles</p>--}}
{{--                            </router-link>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Staff</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-calculator nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Accounting--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}

{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview bg-submenu">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav.html" class="nav-link">--}}
{{--                                <p>Dashboard</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <p>Fee Invoices</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <router-link to="/profile" class="nav-link">
                        <i class="far fa-user nav-icon"></i>
                        <p>
                            User Profile
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off nav-icon"></i>
                        <p>
                            {{ __('Logout') }}
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
