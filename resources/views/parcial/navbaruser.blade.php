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

                        </ul>
                    </div>
        </nav>
    </div>
</div>
