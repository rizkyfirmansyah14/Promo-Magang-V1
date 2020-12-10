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
        <section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-image: url('https://images.unsplash.com/photo-1572061486732-b528a9b293a3?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fGJvb2t8ZW58MHwwfDB8YmxhY2s%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');">
            <div class="position-center-center">
                <div class="container">
                    <h4>CATALOGUE.</h4>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Catalogue</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Content -->
        <div id="content">

            <!-- Products -->
            <section class="shop-page padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">

                        <!-- Shop SideBar -->
                        <div class="col-sm-3">
                            <div class="shop-sidebar">

                                <!-- Category -->
                                <h5 class="shop-tittle margin-bottom-30">category</h5>

                                @foreach($category as $c)
                                <ul class="shop-cate">
                                    <li><a href="{{ url('/product/'. $c->id)}}">{{$c->kategori_barang}}</a></li>
                                </ul>
                                @endforeach

                                <!-- TAGS -->
                                <h5 class="shop-tittle margin-top-60 margin-bottom-30">POPULAR PROMO</h5>

                                @foreach($popular as $p)
                                <ul class="shop-tags">
                                    <li><a href="{{ url('/product/'. $p->kategori_barang)}}">{{$p->title}}</a></li>
                                </ul>
                                @endforeach

                            </div>
                        </div>

                        <!-- Item Content -->
                        <div class="col-sm-9">
                            <div class="item-display">
                                <!-- Popular Item Slide -->
                                <div class="papular-block row">

                                    @foreach($diskon as $d)
                                    <!-- Item -->
                                    <div class="col-md-4">
                                        <div class="item">
                                            <!-- Item img -->
                                            <div class="item-img" style="margin-bottom: 10px;"> <img class="img-1" src="{{ asset('image/' . $d->image)}}" alt=""> <img class="img-2" src="{{ asset('image/' . $d->image)}}" alt="">
                                                <!-- Overlay -->
                                                <div class="overlay">
                                                    <div class="position-center-center">
                                                        <div class="inn"><a href="{{ asset('image/' . $d->image)}}" data-lighter><i class="icon-magnifier"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item Name -->
                                            <div class="item-name">
                                                <a href="{{ url('/detailproduct/'. $d->id)}}">{{ substr($d->title, 0, 25). '...'}}</a>
                                                <p>{{ substr($d->deskripsi, 0, 50). '...'}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                            <!-- Pagination -->
                            <ul class="pagination">
                                {{$diskon->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!--======= FOOTER =========-->
    @include('parcial.footer')

    <!--======= RIGHTS =========-->

    </div>

    @include('parcial.jsuser')

</body>

</html>
