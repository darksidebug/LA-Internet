<div class="desktop_nav_wrapper">
    <nav class="top_desktop_nav">
        <div class="container">
            <div class="navbar-holder">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand mt-1">
                        <div class="brand-text d-lg-inline-block"><strong>LA-Internet & Customer Mgt.</strong></div>
                    </a>
                </div>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link f-12 mr-2 navData">
                            PROFILE
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link f-12 mr-2 navData">
                            ACCOUNT
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('customer/payment/history') ? 'top-active active' : '' }}">
                        <a href="{{ route('customer-payment-history') }}" class="nav-link f-12 {{ !Request::is('customer/payment/history') ? 'mr-3 btn-nav-active' : 'mr-4' }}">
                            BILLINGS
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <nav class="desktop_nav_2">
        <div class="container {{ !Request::is('customer/dashboard') ? 'pl-2' : ''}}">
            <div class="navbar-holder">
                <div class="navbar-header">
                    <ul class="nav-menu">
                        <li class="nav-item mt-2 {{Request::is('customer/dashboard') ? 'active-nav-top bottom-active' : ''}} active mr-3">
                            <a id="systemTools" href="{{ route('customer-dashboard') }}" class="navData nav-link f-12">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item mt-2 {{Request::is('toolbox*') ? 'active-nav-top' : ''}} active">
                            <a href="#" class="navData nav-link f-12">
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <li class="nav-item dropdown pt-0 {{Request::is('notifications*') ? 'active-nav-top' : ''}} mr-1 mt-2">
                        <a rel="nofollow" style="width:20px" data-toggle="dropdown" class="navData mr-5 ml-0 text-left nav-link btn-nav language">
                            Notification
                            <!-- <span class="badge bg-red badge-corner">0</span> -->
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/notifications" class="dropdown-item"> <span data-feather="mail" width="20" height="20"></span></a></li>
                            <li class="text-right pr-2 c-blue"><a class="f-12" href="/notifications" style="cursor:pointer"> See all</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pt-0 mt-2">
                        <a href="{{config('app.cart_url')}}" class="nav-link f-12 ml-5">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item pt-0 pr-0">
                        <a href="{{config('app.cart_url')}}" class="nav-link f-12 mr-3 ml-3">
                            <span class="more">More</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
