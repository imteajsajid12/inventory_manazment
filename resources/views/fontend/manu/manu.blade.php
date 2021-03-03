
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
                <h2>E-Shop</h2>
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
                    <a class="js-arrow" href="{{ asset('/home') }}">
                        <i class="fas fa-home"></i>Home</a>

                </li>
                <li>
                    <a href="{{ asset('/stock') }}">
                        <i class="fas fa-chart-bar"></i>Stock_Item</a>
                </li>
                <li>
                    <a href="{{ asset('/sell') }}">
                        <i class="fas fa-shopping-cart"></i>Sell</a>
                </li>

                <li>
                    <a href="{{ asset('/coustomer') }}">
                        <i class="fas  fa-users"></i>Coustomer</a>
                </li>
                <li>
                    <a href="{{ asset('/notification') }}">
                        <i class="fas  fa-comment "></i>Notification</a>
                </li>
                <li class="has-sub">
                    <a href="{{ asset('/messege') }}">
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
        <a href="{{asset('/') }}">
            <img src="{{ asset('images/dribble_cart.gif') }}" alt="Cool Admin"style="
            height: 50px;
            width: inherit;
            border-radius: 50%;
        " />
        </a >
        <h2>E-Shop</h2>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ asset('/home') }}">
                        <i class="fas fa-home"></i>Home</a>

                </li>
                <li>
                    <a href="{{ asset('/stock') }}">
                        <i class="fas fa-chart-bar"></i>Stock_Item</a>
                </li>
                <li>
                    <a href="{{ asset('/sell') }}">
                        <i class="fas fa-shopping-cart"></i>Sell</a>
                </li>

                <li>
                    <a href="{{ asset('/coustomer') }}">
                        <i class="fas  fa-users"></i>Coustomer</a>
                </li>
                <li>
                    <a href="{{ asset('/notification') }}">
                        <i class="fas  fa-comment "></i>Notification</a>
                </li>
                <li class="has-sub">
                    <a href="{{ asset('/messege') }}">
                        <i class="fas fa-comments"></i>Massege</a>

                </li>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->

