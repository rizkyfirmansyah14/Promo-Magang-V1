<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="M_Adnan">
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
        <section class="sub-bnr" data-stellar-background-ratio="0.5">
            <div class="position-center-center">
                <div class="container">
                    <h4>PAVSHOP PRODUCTS</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                        Sed feugiat, tellus vel tristique posuere, diam</p>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Data</li>
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
                                <ul class="shop-cate">
                                    <li><a href="#."> Chair <span>24</span></a></li>
                                    <li><a href="#."> Bag <span>122</span></a></li>
                                    <li><a href="#."> Soffa <span>09</span></a></li>
                                    <li><a href="#."> Bed <span>12</span></a></li>
                                    <li><a href="#."> Shoes <span>98</span></a></li>
                                    <li><a href="#."> Table <span>34</span></a></li>
                                    <li><a href="#."> Bedsheets <span>23</span></a></li>
                                    <li><a href="#."> Curtains <span>43</span></a></li>
                                    <li><a href="#."> TV Cabinets <span>12</span></a></li>
                                    <li><a href="#."> Clocks <span>18</span></a></li>
                                    <li><a href="#."> Towels <span>25</span></a></li>
                                </ul>

                                <!-- TAGS -->
                                <h5 class="shop-tittle margin-top-60 margin-bottom-30">POPULAR TAGS</h5>
                                <ul class="shop-tags">
                                    <li><a href="#.">Towels</a></li>
                                    <li><a href="#.">Chair</a></li>
                                    <li><a href="#.">Bedsheets</a></li>
                                    <li><a href="#.">Shoe</a></li>
                                    <li><a href="#.">Curtains</a></li>
                                    <li><a href="#.">Clocks</a></li>
                                    <li><a href="#.">TV Cabinets</a></li>
                                    <li><a href="#.">Best Seller</a></li>
                                    <li><a href="#.">Top Selling</a></li>
                                </ul>

                                <!-- SIDE BACR BANER -->
                                <div class="side-bnr margin-top-50"> <img class="img-responsive" src="asset/images/sidebar-bnr.jpg" alt="">
                                    <div class="position-center-center"> <span class="price"><small>$</small>299</span>
                                        <div class="bnr-text">look
                                            hot
                                            with
                                            style</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item Content -->
                        <div class="col-sm-9">
                            <div class="item-display">
                                <div class="row">
                                    <div class="col-xs-6"> <span class="product-num">Showing 1 - 10 of 30 products</span> </div>

                                    <!-- Products Select -->
                                    <div class="col-xs-6">
                                        <div class="pull-right">

                                            <!-- Short By -->
                                            <select class="selectpicker">
                                                <option>Short By</option>
                                                <option>Short By</option>
                                                <option>Short By</option>
                                            </select>
                                            <!-- Filter By -->
                                            <select class="selectpicker">
                                                <option>Filter By</option>
                                                <option>Short By</option>
                                                <option>Short By</option>
                                            </select>

                                            <!-- GRID & LIST -->
                                            <a href="#." class="grid-style"><i class="icon-grid"></i></a> <a href="#." class="list-style"><i class="icon-list"></i></a> </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Popular Item Slide -->
                            <div class="papular-block row">

                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="item">
                                        <!-- Item img -->
                                        <div class="item-img"> <img class="img-1" src="asset/images/product-2-1.jpg" alt=""> <img class="img-2" src="images/product-2.jpg" alt="">
                                            <!-- Overlay -->
                                            <div class="overlay">
                                                <div class="position-center-center">
                                                    <div class="inn"><a href="asset/images/product-2-1.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="#.">stone cup</a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <!-- Price -->
                                        <span class="price"><small>$</small>299</span>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="item">
                                        <!-- Sale Tags -->
                                        <div class="on-sale"> 10% <span>OFF</span> </div>

                                        <!-- Item img -->
                                        <div class="item-img"> <img class="img-1" src="asset/images/product-2-2.jpg" alt=""> <img class="img-2" src="images/product-2.jpg" alt="">
                                            <!-- Overlay -->
                                            <div class="overlay">
                                                <div class="position-center-center">
                                                    <div class="inn"><a href="asset/images/product-2-2.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="#.">gray bag</a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <!-- Price -->
                                        <span class="price"><small>$</small>299</span>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="item">
                                        <!-- Item img -->
                                        <div class="item-img"> <img class="img-1" src="asset/images/product-2-3.jpg" alt=""> <img class="img-2" src="images/product-2.jpg" alt="">
                                            <!-- Overlay -->
                                            <div class="overlay">
                                                <div class="position-center-center">
                                                    <div class="inn"><a href="asset/images/product-2-3.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="#.">chiar</a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <!-- Price -->
                                        <span class="price"><small>$</small>299</span>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="item">
                                        <!-- Item img -->
                                        <div class="item-img"> <img class="img-1" src="asset/images/product-2-4.jpg" alt=""> <img class="img-2" src="images/product-2.jpg" alt="">
                                            <!-- Overlay -->
                                            <div class="overlay">
                                                <div class="position-center-center">
                                                    <div class="inn"><a href="asset/images/product-2-4.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="#.">STool</a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <!-- Price -->
                                        <span class="price"><small>$</small>299</span>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="item">
                                        <!-- Item img -->
                                        <div class="item-img"> <img class="img-1" src="asset/images/product-5.jpg" alt=""> <img class="img-2" src="images/product-2.jpg" alt="">
                                            <!-- Overlay -->
                                            <div class="overlay">
                                                <div class="position-center-center">
                                                    <div class="inn"><a href="asset/images/product-5.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="#.">stone cup</a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <!-- Price -->
                                        <span class="price"><small>$</small>299</span>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="item">
                                        <!-- Item img -->
                                        <div class="item-img"> <img class="img-1" src="asset/images/product-6.jpg" alt=""> <img class="img-2" src="images/product-2.jpg" alt="">
                                            <!-- Overlay -->
                                            <div class="overlay">
                                                <div class="position-center-center">
                                                    <div class="inn"><a href="asset/images/product-6.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="#.">gray bag</a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <!-- Price -->
                                        <span class="price"><small>$</small>299</span>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="item">
                                        <!-- Item img -->
                                        <div class="item-img"> <img class="img-1" src="asset/images/product-7.jpg" alt=""> <img class="img-2" src="images/product-2.jpg" alt="">
                                            <!-- Overlay -->
                                            <div class="overlay">
                                                <div class="position-center-center">
                                                    <div class="inn"><a href="asset/images/product-7.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="#.">chiar</a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <!-- Price -->
                                        <span class="price"><small>$</small>299</span>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="item">
                                        <!-- Item img -->
                                        <div class="item-img"> <img class="img-1" src="asset/images/product-8.jpg" alt=""> <img class="img-2" src="images/product-2.jpg" alt="">
                                            <!-- Overlay -->
                                            <div class="overlay">
                                                <div class="position-center-center">
                                                    <div class="inn"><a href="asset/images/product-8.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="#.">STool</a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <!-- Price -->
                                        <span class="price"><small>$</small>299</span>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="item">
                                        <!-- Item img -->
                                        <div class="item-img"> <img class="img-1" src="asset/images/product-9.jpg" alt=""> <img class="img-2" src="images/product-2.jpg" alt="">
                                            <!-- Overlay -->
                                            <div class="overlay">
                                                <div class="position-center-center">
                                                    <div class="inn"><a href="asset/images/product-9.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="#.">stone cup</a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <!-- Price -->
                                        <span class="price"><small>$</small>299</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About -->
            <section class="small-about padding-bottom-150" style="border-top: 0px; padding-top: 5%;">
                <div class="container">

                    <!-- Main Heading -->
                    <div class="heading text-center">
                        <h4>about PAVSHOP</h4>
                        <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odio luctus non. Nulla lacinia,
                            eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
                    </div>

                    <!-- Social Icons -->
                    <ul class="social_icons">
                        <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                        <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                        <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                        <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                        <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                    </ul>
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
