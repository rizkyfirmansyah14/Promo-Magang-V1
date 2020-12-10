<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('parcial.styleuser')

</head>

<body>

    <!-- LOADER -->
    <div id="loader">
        <div class="position-center-center">
            <div class="ldr"></div>
        </div>
    </div>

    <!-- Wrap -->
    <div id="wrap">

        <!-- Nav Popup -->
        <div id="cd-nav" class="cd-nav">
            <div class="cd-navigation-wrapper">
                <div class="position-center-center">
                    <div class="col-sm-5">

                        <!-- Nav -->
                        <nav>
                            <ul class="cd-primary-nav">
                                <li class="active"> <a href="{{ url('/')}}">home</a></li>
                                <li> <a href="{{ url('/about') }}">about</a> </li>
                                <li> <a href="{{ url('/shop')}}">catalogue</a> </li>
                                <li> <a href="contact.html">contact</a> </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Right Section -->
                    <div class="col-sm-7">
                    </div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header class="header-2">
            <div class="container-fluid">
                <div class="sticky">

                    <!-- Nav Icon -->
                    <a href="#cd-nav" class="cd-nav-trigger"><span class="cd-nav-icon"></span>

                        <!-- Svg Icon -->
                        <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
                            <circle fill="transparent" stroke="#2d3a4b" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                        </svg> </a>

                    <!-- Logo -->
                    <div class="logo logo-center">
                        <a href="#.">
                            <h3 style="color: black; margin-top: 5px;">Mall<span style="color: #FFE600;">PROMO</span></h3>
                        </a>
                    </div>
                    <!-- Navigation -->
                    <nav class="navbar">
                        <!-- Nav Right -->
                        <div class="nav-right">
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!-- MAIN  CONTENT -->
        <main>

            <!-- HOME MAIN  -->
            <section class="home-slider simple-head" data-stellar-background-ratio="0.5">

                <!-- Container Fluid -->
                <div class="container-fluid">
                    <div class="position-center-center">

                        <!-- Header Text -->
                        <div class="col-lg-7 col-lg-offset-5" style="position: relative; margin-top: -60px;">
                            <h4>The Latest Promo from MALL <span style="color: #FFE600;">PROMO</span></h4>
                            <h1 class="extra-huge-text" style="color: black; font-size: 90px;">
                                <span style="color: #FFE600;">search</span> promo
                                from <span style="color: #FFE600;">home</span>
                            </h1>
                            <div class="text-center"> <a href="{{ url('/shop')}}" class="btn btn-round margin-top-40">SHOP NOW</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Content -->
            <div id="content">

                <!-- Popular Products -->
                <section class="padding-top-150 padding-bottom-150">
                    <div class="container">

                        <!-- Main Heading -->
                        <div class="heading text-center">
                            <h4>Category</h4>
                            <span>
                                in this category, all items will be sorted based on the category you have selected and you will see all items based on the selected category
                            </span>
                        </div>

                        <!-- NEW ARRIVAL -->
                        <div class="new-arrival-list">
                            <ul class="row">

                                @foreach($category as $c)
                                <!-- SHOP_ITEMS -->
                                <li class="col-md-6">

                                    <!-- SHOP ITEM 1 -->
                                    <article> <img class="img-responsive rounded border border border-light" src="image/icon/{{ $c->icon_kategori}}" alt="icon kategori" style="width: 555px; height: 470px;">
                                        <div class="position-center-center">
                                            <h4><a href="#.">{{$c->nama_kategori}}</a></h4>
                                            <a href="#." class="btn btn-small btn-round">MORE</a>
                                        </div>
                                    </article>

                                </li>
                                @endforeach
                            </ul>

                            <!-- SHOW MORE -->
                            <div class="text-center margin-top-50"> <a href="#." class="btn btn-small btn-round"> SHOW
                                    MORE...</a> </div>
                        </div>
                    </div>
                </section>

                <!-- Popular Products -->
                <section class="padding-bottom-150">
                    <div class="container">

                        <!-- Main Heading -->
                        <div class="heading text-center">
                            <h4>Top Promo</h4>
                            <span>Find your attractive promos and discounts here, Lets Go !!</span>
                        </div>

                        <!-- Popular Item Slide -->
                        <div class="papular-block block-slide">
                            @foreach($toppromo as $t)

                            <!-- Item -->
                            <div class="item">
                                <!-- Item img -->
                                <div class="item-img"> <img class="img-1" style="width: 300px;" src="image/popular/{{ $t->image}}" alt=""> <img class="img-2" src="image/popular/{{ $t->image}}" alt="">
                                    <!-- Overlay -->
                                    <div class="overlay">
                                        <div class="position-center-center"> <a href="#." class="btn btn-small btn-round">MORE</a> </div>
                                    </div>
                                </div>
                                <!-- Item Name -->
                                <div class="item-name"> <a href="{{ url('/shop') }}">{{ $t->title}}</a> </div>
                                <!-- Price -->
                            </div>

                            @endforeach

                        </div>
                    </div>
                </section>

                <!-- Content -->
                <div id="content">

                    <!-- New Arrival -->
                    <section class="padding-top-100 padding-bottom-100">
                        <div class="container">

                            <!-- Main Heading -->
                            <div class="heading text-center">
                                <h4>Other Promo</h4>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus
                                    vehicula.
                                    Sed feugiat, tellus vel tristique posuere, diam</span>
                            </div>
                        </div>

                        <!-- Popular Item Slide -->
                        <div class="papular-block row" style="padding: 5%; margin-top: -70px;">
                        @foreach($otherpromo as $o)
                            <!-- Item -->
                            <div class="col-md-3" style="margin-top: 35px;">
                                <div class="item">
                                    <!-- Item img -->
                                    <div class="item-img"> <img class="img-1" src="{{asset('image/' . $o->image)}}" alt=""> <img class="img-2" src="{{asset('image/' . $o->image)}}" alt="">
                                        <!-- Overlay -->
                                        <div class="overlay">
                                            <div class="position-center-center">
                                                <div class="inn"><a href="{{asset('image/' . $o->image)}}" data-lighter><i class="icon-magnifier"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="{{ url('/detailproduct/'. $o->id)}}">{{$o->title}}</a>
                                        <p>{{$o->deskripsi}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </section>
                </div>

                <!--======= FOOTER =========-->
                @include('parcial.footer')
        </main>
    </div>

    @include('parcial.jsuser')

</body>

</html>
