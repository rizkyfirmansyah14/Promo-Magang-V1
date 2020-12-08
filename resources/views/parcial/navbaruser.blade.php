<div class="sticky">
    <div class="container">

        <!-- Logo -->
        <div class="logo">
            <a href="{{ url('/')}}">
                <h3 style="color: black; margin-top: 5px;">Mall<span style="color: #FFE600;">PROMO
            </a> </div>
        <nav class="navbar ownmenu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
            </div>

            <!-- NAV -->
            <div class="collapse navbar-collapse" id="nav-open-btn">
                <ul class="nav">
                    <li>
                        <a href="{{ url('/')}}">
                            Home
                        </a>
                    </li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}">
                        <a href="{{ url('/about')}}">
                            About
                        </a>
                    </li>
                    <li class="dropdown {{ Request::is('shop') ? 'active' : '' }}">
                        <a href="{{ url('/shop')}}">
                            Shop
                        </a>
                    </li>
                    <li class="dropdown {{ Request::is('catalogue') ? 'active' : '' }}">
                        <a href="{{ url('/catalogue')}}">
                            Catalogue
                        </a>
                    </li>
                    <li class="dropdown {{ Request::is('catalogue') ? 'active' : '' }}">
                        <a href="{{ url('/contact')}}">
                            Contact
                        </a>
                    </li>

                    <!-- Nav Right -->
                    <div class="nav-right">
                        <ul class="navbar-right">

                            <!-- USER INFO -->
                            <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-user"></i> </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <h6>HELLO! Jhon Smith</h6>
                                    </li>
                                    <li><a href="#">MY CART</a></li>
                                    <li><a href="#">ACCOUNT INFO</a></li>
                                    <li><a href="#">LOG OUT</a></li>
                                </ul>
                            </li>

                            <!-- USER BASKET -->
                            <li class="dropdown user-basket"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="icon-basket-loaded"></i> </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="media-left">
                                            <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="asset/images/cart-img-1.jpg" alt="..."> </a> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">WOOD CHAIR</h6>
                                            <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media-left">
                                            <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="asset/images/cart-img-2.jpg" alt="..."> </a> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">WOOD STOOL</h6>
                                            <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span>
                                        </div>
                                    </li>
                                    <li>
                                        <h5 class="text-center">SUBTOTAL: 258.00 USD</h5>
                                    </li>
                                    <li class="margin-0">
                                        <div class="row">
                                            <div class="col-xs-6"> <a href="shopping-cart.html" class="btn">VIEW CART</a></div>
                                            <div class="col-xs-6 "> <a href="checkout.html" class="btn">CHECK OUT</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <!-- SEARCH BAR -->
                            <li class="dropdown"> <a href="javascript:void(0);" class="search-open"><i class=" icon-magnifier"></i></a>
                                <div class="search-inside animated bounceInUp"> <i class="icon-close search-close"></i>
                                    <div class="search-overlay"></div>
                                    <div class="position-center-center">
                                        <div class="search">
                                            <form>
                                                <input type="search" placeholder="Search Shop">
                                                <button type="submit"><i class="icon-check"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
        </nav>
    </div>
</div>