<aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link text-center">
        <strong class="brand-text font-weight-light">{{env('APP_NAME', 'FISH BOOK')}}</strong>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(auth()->user()?->img)
                <img src="{{ asset('storage/user_images/' . auth()->user()->img) }}" class="img-circle elevation-2" alt="User Image">
                @else
                <img src="https://ui-avatars.com/api/?name={{ auth()->user()?->first_name . ' ' . auth()->user()?->last_name }}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->getUserFullName() ?? 'Administrator'}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" id="sidenav-ul">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link @if(Request::is('admin/dashboard*')) active @endif" id="dashboard-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link @if(Request::is('admin/user*')) active @endif" id="categories-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link @if(Request::is('admin/categories*')) active @endif" id="categories-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="{{route('ponds.index')}}" class="nav-link @if(Request::is('admin/ponds*')) active @endif" id="categories-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Ponds
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('feeds.index')}}" class="nav-link @if(Request::is('admin/feeds*')) active @endif" id="categories-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Feeds
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('calculation_histories.index')}}" class="nav-link @if(Request::is('admin/calculation_histories*')) active @endif" id="categories-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Calculation Histories
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
