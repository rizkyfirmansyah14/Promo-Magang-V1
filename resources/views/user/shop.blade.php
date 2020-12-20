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
        <section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-image: url('asset/images/catalog.jpg');">
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
                                                  <!-- sale tag -->
                                                     <div style="margin-top: 10px;" class="on-sale"><span class="circle"></span>
                                                        <a href="{{ url('/detailproduct/'. $d->id)}}">Sampai {{$d->tanggal_berakhir}}</a>
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

        <footer>
            <div class="container"> 
            
            <!-- ABOUT Location -->
            <div class="col-md-3">
                <div class="about-footer"> <img class="margin-bottom-30" src="images/logo-foot.png" alt="" >
                <p><i class="icon-pointer"></i> Street No. 12, Newyork 12, <br>
                    MD - 123, USA.</p>
                <p><i class="icon-call-end"></i> 1.800.123.456789</p>
                <p><i class="icon-envelope"></i> info@PAVSHOP.com</p>
                </div>
            </div>
            
            <!-- HELPFUL LINKS -->
            <div class="col-md-3">
                <h6>HELPFUL LINKS</h6>
                <ul class="link">
                <li><a href="#."> Products</a></li>
                <li><a href="#."> Find a Store</a></li>
                <li><a href="#."> Features</a></li>
                <li><a href="#."> Privacy Policy</a></li>
                <li><a href="#."> Blog</a></li>
                <li><a href="#."> Press Kit </a></li>
                </ul>
            </div>
            
            <!-- SHOP -->
            <div class="col-md-3">
                <h6>SHOP</h6>
                <ul class="link">
                <li><a href="#."> About Us</a></li>
                <li><a href="#."> Career</a></li>
                <li><a href="#."> Shipping Methods</a></li>
                <li><a href="#."> Contact</a></li>
                <li><a href="#."> Support</a></li>
                <li><a href="#."> Retailer</a></li>
                </ul>
            </div>
            
            <!-- MY ACCOUNT -->
            <div class="col-md-3">
                <h6>MY ACCOUNT</h6>
                <ul class="link">
                <li><a href="#."> Login</a></li>
                <li><a href="#."> My Account</a></li>
                <li><a href="#."> My Cart</a></li>
                <li><a href="#."> Wishlist</a></li>
                <li><a href="#."> Checkout</a></li>
                </ul>
            </div>
            
            <!-- Rights -->
            
            <div class="rights">
                <p>©  2017 PAVSHOP All right reserved. </p>
                <div class="scroll"> <a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a> </div>
            </div>
            </div>
        </footer>

    <!--======= RIGHTS =========-->

    </div>

    @include('parcial.jsuser')

</body>

</html>
