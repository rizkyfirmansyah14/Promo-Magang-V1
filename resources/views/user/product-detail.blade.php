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
        <section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-image: url('https://images.unsplash.com/photo-1582043568328-69ce6fea1a7b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjF8fGRldGFpbHxlbnwwfDB8MHxibGFjaw%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');">
            <div class="position-center-center">
                <div class="container">
                    <h4>DETAIL PROMO.</h4>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Detail Promo</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Content -->
        <div id="content">

            <!-- Popular Products -->
            <section class="padding-top-100 padding-bottom-100">
                <div class="container">

                    <!-- SHOP DETAIL -->
                    <div class="shop-detail">
                        <div class="row">

                            <!-- Popular Images Slider -->
                            <div class="col-md-7">

                                @foreach($detail as $d)

                                <!-- Images Slider -->
                                <div class="images-slider">
                                    <!-- <ul class="slides">
                                        <li data-thumb="{{asset('image/' . $d->image)}}"> <img class="img-responsive" src="{{asset('image/' . $d->image)}}" alt=""> </li>
                                        <li data-thumb="{{asset('image/' . $d->image)}}"> <img class="img-responsive" src="{{asset('image/' . $d->image)}}" alt=""> </li>
                                        <li data-thumb="{{asset('image/' . $d->image)}}"> <img class="img-responsive" src="{{asset('image/' . $d->image)}}" alt=""> </li>
                                    </ul> -->
                                    <img class="img-responsive" src="{{asset('image/' . $d->image)}}" alt="">
                                </div>
                            </div>

                            <!-- COntent -->
                            <div class="col-md-5">
                                <h4>{{ $d->title}}</h4>

                                <ul class="item-owner">
                                    <li>Category Promo:
                                        <span>
                                            @foreach($d->Kategori as $item)
                                            {{$item->nama_kategori}}
                                            @endforeach
                                        </span>
                                    </li>
                                    <li>Category Goods:
                                        <span>
                                            @foreach($d->KategoriBarang as $item)
                                            {{$item->kategori_barang}}
                                            @endforeach
                                        </span>
                                    </li>
                                    <li>Date Promo Until Expired:
                                        <span>
                                            @foreach($detail as $b)
                                            {{$b->tanggal_diskon}} - {{$b->tanggal_berakhir}}
                                            @endforeach
                                        </span>
                                    </li>
                                </ul>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <!--======= PRODUCT DESCRIPTION =========-->
                    <div class="item-decribe">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs animate fadeInUp" data-wow-delay="0.4s" role="tablist">
                            <li role="presentation" class="active"><a href="#descr" role="tab" data-toggle="tab">DESCRIPTION</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content animate fadeInUp" data-wow-delay="0.4s">
                            <!-- DESCRIPTION -->
                            <div role="tabpanel" class="tab-pane fade in active" id="descr">
                                @foreach($detail as $f)
                                <p>{{$f->deskripsi}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Popular Products -->
            <section class="light-gray-bg padding-top-150 padding-bottom-150">
                <div class="container">

                    <!-- Main Heading -->
                    <div class="heading text-center">
                        <h4>OTHER PROMO</h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                            Sed feugiat, tellus vel tristique posuere, diam</span>
                    </div>

                    <!-- Popular Item Slide -->
                    <div class="papular-block block-slide">

                        @foreach($diskon as $j)

                        <!-- Item -->
                        <div class="item">
                            <!-- Sale Tags -->
                            <div class="on-sale" style="width: 55%; margin-right: px; height: 9%; margin-top: 86%; font-size: 13px;">
                                Sampai {{$j->tanggal_berakhir}}
                            </div>
                            <!-- Item img -->
                            <div class="item-img"> <img class="img-1" src="{{asset('image/' . $j->image)}}" alt=""> <img class="img-2" src="{{asset('image/' . $j->image)}}" alt="">
                                <!-- Overlay -->
                                <div class="overlay">
                                    <div class="position-center-center">
                                        <div class="inn"><a href="{{asset('image/' . $j->image)}}" data-lighter><i class="icon-magnifier"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"> <a href="{{ url('/detailproduct/'. $j->id)}}">{{$j->title}}</a>
                                <p>{{$j->deskripsi}}</p>
                            </div>
                        </div>

                        @endforeach

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
