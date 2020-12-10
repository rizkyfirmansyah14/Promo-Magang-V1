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

        <!-- header -->
        <header>
            @include('parcial.navbaruser')
        </header>

        <!--======= SUB BANNER =========-->
        <section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-image: url('https://images.unsplash.com/photo-1560073210-1eb8ea89d4cc?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8c2hvcHBpbmd8ZW58MHwwfDB8YmxhY2s%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');">
            <div class="position-center-center">
                <div class="container">
                    <h4>DATA PROMO.</h4>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Data Promo</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Content -->
        <div id="content">

            <!-- Popular Products -->
            <section class="shop-page padding-top-100 padding-bottom-100">
                <div class="container">

                    <!-- Popular Item Slide -->
                    <div class="papular-block row">

                        @if(count($kategoridiskon) > 0)

                        @foreach($kategoridiskon as $k)

                        <!-- Item -->
                        <div class="col-md-3">
                            <div class="item">
                                <!-- Item img -->
                                <div class="item-img"> <img class="img-1" src="{{ asset('image/'. $k->image)}}" alt=""> <img class="img-2" src="{{ asset('image/'. $k->image)}}" alt="">
                                    <!-- Overlay -->
                                    <div class="overlay">
                                        <div class="position-center-center">
                                            <div class="inn"><a href="{{ asset('image/'. $k->image)}}" data-lighter><i class="icon-magnifier"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item Name -->
                                <div class="item-name"> <a href="#.">{{$k->title}}</a>
                                    <p>{{$k->deskripsi}}</p>
                                </div>
                            </div>
                        </div>

                        @endforeach


                        @else

                        <h1 style="text-align: center;">
                            No Item In Here!
                        </h1>

                        @endif
                    </div>
                </div>
            </section>
        </div>

        <!--======= FOOTER =========-->

        @include('parcial.footer')

        <!--======= RIGHTS =========-->

    </div>

    @include('parcial.jsuser')

</body>

</html>
