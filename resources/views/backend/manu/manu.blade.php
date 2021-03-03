
   <!-- HEADER MOBILE-->
   <header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="{{ asset('images/dribble_cart.gif') }}" alt="Cool Admin"style="
                    height: 50px;
                    width: inherit;
                    border-radius: 50%;
                " />
                </a>
                <h3>Admin E-Shop</h3>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="{{ asset('/admin/home') }}">
                        <i class="fas fa-home"></i>Home</a>

                </li>
                <li>
                    <a href="{{ asset('/admin/stock') }}">
                        <i class="fas fa-chart-bar"></i>Stock_Item</a>
                </li>
                <li>
                    <a href="{{ asset('/admin/sell') }}">
                        <i class="fas fa-shopping-cart"></i>Sell_History</a>
                </li>
                <li>
                    <a href="{{ asset('/admin/user') }}">
                        <i class="fas  fa-users"></i>User</a>
                </li>

                <li>
                    <a href="{{ asset('/admin/coustomer') }}">
                        <i class="fas  fa-users"></i>Coustomer</a>
                </li>
                <li>
                    <a href="{{ asset('/admin/notification') }}">
                        <i class="fas  fa-comment "></i>Notification</a>
                </li>
                <li class="has-sub">
                    <a href="{{ asset('/admin/messege') }}">
                        <i class="fas fa-comments"></i>Massege</a>

                </li>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
</div>
<br>
<br>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{asset('/admin/home') }}">
            <img src="{{ asset('images/dribble_cart.gif') }}" alt="Cool Admin"style="
            height: 50px;
            width: inherit;
            border-radius: 50%;
        " />
        </a >
        <h3>Admin E-Shop</h3>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ asset('/admin/home') }}">
                        <i class="fas fa-home"></i>Home</a>

                </li>
                <li>
                    <a href="{{ asset('/admin/stock') }}">
                        <i class="fas fa-chart-bar"></i>Stock_Item</a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-shopping-cart"></i>Sell_History</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">

                        <li>
                            <a href="{{ asset('/admin/sell') }}">
                                <i class="fas fa-usd"></i>Sell_History</a>
                        </li>
                        <li>
                            <a href="{{ asset('/admin/sell/month') }}">
                                <i class="fas  fa-dollar (alias)"></i>Month & yearly</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ asset('/admin/user') }}">
                        <i class="fas  fa-users"></i>User</a>
                </li>

                <li>
                    <a href="{{ asset('/admin/coustomer') }}">
                        <i class="fas  fa-users"></i>Coustomer</a>
                </li>

                <li class="has-sub">
                    <a href="{{ asset('/admin/messege') }}">
                        <i class="fas fa-comments"></i>Massege</a>

                </li>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->

