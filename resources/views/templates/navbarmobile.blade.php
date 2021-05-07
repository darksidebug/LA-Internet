<div class="mobile_nav_wrapper">
    <header class="top_desktop_nav pb-1">
        <div class="container-fluid">
            <div class="navbar-holder">
                <div class="p-1">
                    <div class="nav_brand">
                        <span><a href="/"></a></span>
                        <span class="pt-2"><strong>LA</strong>-INTERNET</span>
                    </div>
                </div>
                <div class="p-1 text-right nav-menu mr-1 right_icons">
                    <a href="#" id="messageTab" name="notification" class="btn btn-sm text-white text-right navData {{Request::is('notifications*') ? 'active-nav-top' : ''}}">
                        <span width="20px" height="20px" data-feather="bell"></span><span class="badge bg-red">2</span>
                    </a>
                    <a id="searchTab" name="searchTab" class="btn btn-sm text-white text-left"><span class="feather-20" data-feather="help-circle"></span></a>
                    <li id="menuTab" name="menu" class="btn btn-sm text-white text-right dropdown">
                        <span class="feather-20" data-feather="menu" data-toggle="dropdown"></span>
                        <ul class="dropdown-menu">
                            <li><a rel="nofollow" href="#" class="dropdown-item"><i class="fa fa-sign-out"></i> Sign-Out</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </header>
    <header class="container-fluid mobile_nav_2">
        <div class="row">
            <div class="col-4 p-1 text-center text-white">
                <div>
                    <a href="#" id="searchTab" class="btn btn-sm text-white text-center">
                        <span class="feather-20" data-feather="user"></span>
                        <div class="f-12">Profile</div>
                    </a>
                </div>
            </div>
            <div class="col-4 p-1 text-center text-white">
                <div>
                    <a href="#" id="searchTab" class="btn btn-sm text-white text-center">
                        <span class="feather-20" data-feather="lock"></span>
                        <div class="f-12">Account</div>
                    </a>
                </div>
            </div>
            <div class="col-4 p-1 text-center text-white active-nav-top active">
                <a href="#" id="searchTab" class="btn btn-sm text-white text-center navData">
                    <span class="feather-20" data-feather="briefcase"></span>
                    <div class="f-12">Billings</div>
                </a>
            </div>
        </div>
    </header>
    <div class="fixed-bottom fixed_bottom">
        <div class="container-fluid bottom_nav">
            <div class="row">
                <div class="col-3 p-2 text-center {{(Request::is('/')) ? 'active-nav' : ''}}">
                    <a href="#" class="navData f-11">
                        <span class="feather-18" data-feather="home"></span>
                        <div>Home</div>
                    </a>
                </div>
                <div class="col-3 p-2 text-center {{Request::is('my-tools*') ? 'active-nav' : ''}} bottom-active active">
                    <a href="#" disabled="disabled" class="navData f-11">
                        <span class="feather-18" data-feather="settings"></span>
                        <div>Settings</div>
                    </a>
                </div>
                <div class="col-3 p-2 text-center {{Request::is('chat*') ? 'active-nav' : ''}}">
                    <a href="#" class="navData f-11 user_icon_wrapper">
                    <span data-feather="help-circle" class="feather-18"></span>
                        <div>About Us</div>
                    </a>
                </div>
                <div class="col-3 p-2 text-center {{Request::is('chat*') ? 'active-nav' : ''}}">
                    <a href="#" class="navData f-11">
                        <span class="feather-18" data-feather="more-vertical"></span>
                        <div>More</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<li>
    <a href="#" onclick="addTOHomeScreen()">
        <span class="uk-margin-small-right" data-uk-icon="icon: plus"></span>
        Add to Home Screen
    </a>
</li>