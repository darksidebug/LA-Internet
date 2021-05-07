<div class="desktop_nav_wrapper">
    <nav class="top_desktop_nav">
        <div class="container pr-3">
            <div class="navbar-holder">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand mt-1">
                        <div class="brand-text d-lg-inline-block"><strong>LA-Internet & Customer Mgt.</strong></div>
                    </a>
                </div>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link f-12 mr-2 navData">
                            MY PROFILE
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link f-12 mr-2 navData" data-toggle="dropdown">
                            ACCOUNTS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a rel="nofollow" href="#" class="dropdown-item"><i data-feather="key" class="feather-18 mr-1"></i> Change Password</a></li>
                            <li><a rel="nofollow" href="#" class="dropdown-item mt-2"><i data-feather="log-out" class="feather-18 mr-1"></i> Sign-Out</a></li>
                        </ul>
                    </li>
                    <li class="nav-item {{ Request::is('customer/payment/history') ? 'top-active active' : '' }}">
                        <a href="{{ route('customer-payment-history') }}" class="nav-link f-12 {{ !Request::is('customer/payment/history') ? 'mr-3 btn-nav-active' : 'mr-4' }}">
                            MY BILLINGS
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <nav class="desktop_nav_2">
        <div class="container {{ Request::is('customer/dashboard') ? 'pt-0' : ''}} pl-2">
            <div class="navbar-holder">
                <div class="navbar-header">
                    <ul class="nav-menu">
                        <li class="nav-item {{Request::is('customer/dashboard') ? 'active-nav-top bottom-active ml-3' : ''}} active mr-3">
                            <a id="systemTools" href="{{ route('customer-dashboard') }}" class="navData nav-link f-12">
                                <i data-feather="layout" class="feather-18 mb-1 mr-1" width="18"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item mt-2 {{Request::is('toolbox*') ? 'active-nav-top' : ''}} active">
                            <a href="#" class="navData nav-link f-12">
                            <i data-feather="settings" class="feather-18 mb-1 mr-1" width="18"></i> Settings
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center {{ !Request::is('customer/dashboard') ? 'pt-2' : 'pt-1'}}">
                    <li class="nav-item dropdown pt-0 {{Request::is('notifications*') ? 'active-nav-top' : ''}} mr-1">
                        <a href="#" class="navData nav-link f-12">
                            <i data-feather="bell" class="feather-18 mb-1 mr-1" width="18"></i> Notification <span class="badge bg-red">0</span>
                        </a>
                    </li>
                    <li class="nav-item pt-0 mx-2">
                        <a href="#" class="navData nav-link f-12">
                            <i data-feather="help-circle" class="feather-18 mb-1 mr-1" width="18"></i> About Us
                        </a>
                    </li>
                    <li class="nav-item pt-0 pr-0 ">
                        <a href="#" class="navData nav-link f-12 mr-2">
                            <i data-feather="more-horizontal" class="feather-18 mb-1 mr-1" width="18"></i> More
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
