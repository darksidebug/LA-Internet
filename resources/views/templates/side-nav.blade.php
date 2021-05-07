    <!-- Sidebar -->
    <ul class="navbar-nav bg-white sidebar sidebar-light accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink text-success"></i>
            </div>
            <div class="sidebar-brand-text mx-3 text-success">LA Internet <!-- <sup>2</sup> --></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <!-- Heading -->
        <div class="sidebar-heading text-success mt-3">
            Commons
        </div>

        <li class="nav-item">
            <a class="nav-link" href="{{ Request::is('admin/*') ? route('new-customer') : route('customer-dashboard') }}">
                <i data-feather="layout" width="18"></i>
                <span class="text-secondary ml-1">Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading text-success">
            Settings
        </div>

        <!-- Nav Item - Users Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
                <i data-feather="lock" width="18"></i>
                <span class="text-secondary ml-1">Accounts</span>
            </a>
            <div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header text-success">System:</h6>
                    @if(Request::is('admin/*'))
                    <a class="collapse-item text-secondary rounded-sm" href="">New User</a>
                    <a class="collapse-item text-secondary rounded-sm" href="">User Lists</a>
                    <a class="collapse-item text-secondary rounded-sm" href="">User Profiles</a>
                    @else
                    <a class="collapse-item text-secondary rounded-sm" href="">My Profile</a>
                    <a class="collapse-item text-secondary rounded-sm" href="">Change Password</a>
                    @endif
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading text-success">
            Management
        </div>

        @if(Request::is('admin/*'))
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i data-feather="user" width="18"></i>
                <span class="text-secondary ml-1">Customer</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header text-success">Actions:</h6>
                    <a class="collapse-item text-secondary rounded-sm" href="{{ route('new-customer') }}">New Customer</a>
                    <a class="collapse-item text-secondary rounded-sm" href="{{ route('customer-lists') }}">Lists of Customers</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('payments') }}">
                <i data-feather="book" width="18"></i>
                <span class="text-secondary ml-1">Payments</span>
            </a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('payments') }}">
                <i data-feather="book" width="18"></i>
                <span class="text-secondary ml-1">Payments History</span>
            </a>
        </li>
        @endif

        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline mt-3">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->