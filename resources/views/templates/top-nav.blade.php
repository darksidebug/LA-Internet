<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-none">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 text-secondary">
        <i class="fa fa-bars"></i>
    </button>

    <h5>{{ !empty($page) ? $page : '' }}</h5>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

     
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-3 d-none d-lg-inline text-secondary">{{ 'Benj' }}{{--@auth{{Auth::user()->username}}@endauth--}}

                </span>
                <div class="icon-circle bg-success">
                    <i data-feather="user" width="20" class="text-white"></i>
                </div>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right animated--grow-in shadow rounded-sm" aria-labelledby="userDropdown">
                <small class="dropdown-header bg-white border text-success border-top-0 border-left-0 border-right-0 pb-2 pt-1">
                    User Actions
                </small>
                <div class="pl-3 pr-3 mt-2">
                    <a class="dropdown-item rounded-sm pt-2 pb-2" href="#">
                        <i data-feather="key" width="20" class="text-secondary mr-1"></i>
                        Change Password
                    </a>
                    <a class="dropdown-item rounded-sm  pt-2 pb-2 mb-2" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i data-feather="power" width="20" class="text-secondary mr-1"></i>
                        Logout
                    </a>
                </div>
            </div>
        </li>
    </ul>
</nav>
<!-- End of Topbar -->