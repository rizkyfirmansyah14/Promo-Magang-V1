<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>Mall Promo</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="asset/rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="asset/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="asset/css/ionicons.min.css" rel="stylesheet">
<link href="asset/css/main.css" rel="stylesheet">
<link href="asset/css/style.css" rel="stylesheet">
<link href="asset/css/responsive.css" rel="stylesheet">

<!-- JavaScripts -->
<script src="asset/js/modernizr.js"></script>

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

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
              <li class="active"> <a href="index.html">Home </a></li>
              <li> <a href="about-us_01.html">About </a> </li>
              <li class="drop-menu"> <a href="#." class="title collapsed" data-toggle="collapse" data-target="#down-1"> shop </a>
                  <div class="collapse" id="down-1">
                    <div class="well">
                      <ul>
                        <li> <a href="shop_01.html">Shop 1</a> </li>
                        <li> <a href="{{ url('/shop') }}">Shop 2</a> </li>
                        <li> <a href="shop_03.html">Shop 3</a> </li>
                        <li> <a href="shop_04.html">Shop 4</a> </li>
                        <li> <a href="product-detail_01.html">Product Detail 01</a> </li>
                        <li> <a href="product-detail_02.html">Product Detail 02</a> </li>
                        <li> <a href="shopping-cart.html">Shopping Cart</a> </li>
                        <li> <a href="checkout.html">Checkout </a> </li>
                      </ul>
                    </div>
                  </div>
                </li>
              <li> <a href="blog-list_01.html"> Blog</a> </li>
              <li> <a href="contact.html"> contact</a> </li>
              </ul>
          </nav>
          
          <!-- Social Icons -->
          <ul class="social_icons">
            <li><a href="#."><i class="icon-social-facebook"></i></a></li>
            <li><a href="#."><i class="icon-social-twitter"></i></a></li>
            <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
            <li><a href="#."><i class="icon-social-youtube"></i></a></li>
            <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
          </ul>             
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
        <div class="logo logo-center"> <a href="#."><img class="img-responsive" src="asset/images/logo-2.png" alt="" ></a> </div>
        <!-- Navigation -->
        <nav class="navbar"> 
          <!-- Nav Right -->
          <div class="nav-right">
            <ul class="navbar-right">
              
              <!-- USER INFO -->
              <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><i class="icon-user"></i> </a>
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
              <li class="dropdown user-basket"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-basket-loaded"></i> </a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="media-left">
                      <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="asset/images/cart-img-1.jpg" alt="..."> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">WOOD CHAIR</h6>
                      <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                  </li>
                  <li>
                    <div class="media-left">
                      <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="asset/images/cart-img-2.jpg" alt="..."> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">WOOD STOOL</h6>
                      <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
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
  </header>
  
  <!-- MAIN  CONTENT -->
  <main> 
    
    <!-- HOME MAIN  -->
    <section class="home-slider simple-head" data-stellar-background-ratio="0.5"> 
      
      <!-- Container Fluid -->
      <div class="container-fluid">
        <div class="position-center-center"> 
          
          <!-- Header Text -->
          <div class="col-lg-7 col-lg-offset-5"> <span class="price"><small>$</small>299</span>
            <h4>The Latest Product from PAVSHOP</h4>
            <h1 class="extra-huge-text">look hot
              with style</h1>
            <div class="text-center"> <a href="#." class="btn btn-round margin-top-40">SHOP NOW</a> </div>
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
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
            Sed feugiat, tellus vel tristique posuere, diam</span> </div>
          
          <!-- NEW ARRIVAL -->
          <div class="new-arrival-list">
            <ul class="row">
              
              <!-- SHOP_ITEMS -->
              <li class="col-md-6"> 
                
              @foreach($category as $category)
                <!-- SHOP ITEM 1 -->
                <article> <img class="img-responsive" src="asset/images/{{ $category->image}}" alt="">
                  <div class="position-center-center">
                    <h4><a href="#.">{{ $category->title}}</a></h4>
                    <a href="#." class="btn btn-small btn-round">MORE</a> </div>
                </article>
                
              @endforeach
              </li>
            </ul>
            
            <!-- SHOW MORE -->
            <div class="text-center margin-top-50"> <a href="#." class="btn btn-small btn-round"> SHOW MORE...</a> </div>
          </div>
        </div>
      </section>
      
      <!-- Popular Products -->
      <section class="padding-bottom-150">
        <div class="container"> 
          
          <!-- Main Heading -->
          <div class="heading text-center">
            <h4>Top Promo</h4>
            <span>Find your attractive promos and discounts here, Lets Go !!</span> </div>
          
          <!-- Popular Item Slide -->
          <div class="papular-block block-slide"> 
            
            <!-- Item -->
            <div class="item"> 
              <!-- Item img -->
              <div class="item-img"> <img class="img-1" src="asset/images/shop-3-img-1.jpg" alt="" > <img class="img-2" src="asset/images/shop-3-img-4.jpg" alt="" > 
                <!-- Overlay -->
                <div class="overlay">
                  <div class="position-center-center"> <a href="#." class="btn btn-small btn-round">MORE</a> </div>
                </div>
              </div>
              <!-- Item Name -->
              <div class="item-name"> <a href="#.">GRAY TOPER</a> </div>
              <!-- Price --> 
            </div>
            
            <!-- Item -->
            <div class="item"> 
              <!-- Item img -->
              <div class="item-img"> <img class="img-1" src="asset/images/shop-3-img-2.jpg" alt="" > <img class="img-2" src="asset/images/shop-3-img-4.jpg" alt="" > 
                <!-- Overlay -->
                <div class="overlay">
                  <div class="position-center-center"> <a href="#." class="btn btn-small btn-round">MORE</a> </div>
                </div>
              </div>
              <!-- Item Name -->
              <div class="item-name"> <a href="#.">casual bag</a> </div>
              <!-- Price --> 
            </div>
            
            <!-- Item -->
            <div class="item"> 
              <!-- Item img -->
              <div class="item-img"> <img class="img-1" src="asset/images/shop-3-img-3.jpg" alt="" > <img class="img-2" src="asset/images/shop-3-img-4.jpg" alt="" > 
                <!-- Overlay -->
                <div class="overlay">
                  <div class="position-center-center"> <a href="#." class="btn btn-small btn-round">MORE</a> </div>
                </div>
              </div>
              <!-- Item Name -->
              <div class="item-name"> <a href="#.">watch</a> </div>
              <!-- Price --> 
            </div>
            
            <!-- Item -->
            <div class="item"> 
              <!-- Item img -->
              <div class="item-img"> <img class="img-1" src="asset/images/shop-3-img-4.jpg" alt="" > <img class="img-2" src="asset/images/shop-3-img-4.jpg" alt="" > 
                <!-- Overlay -->
                <div class="overlay">
                  <div class="position-center-center"> <a href="#." class="btn btn-small btn-round">MORE</a> </div>
                </div>
              </div>
              <!-- Item Name -->
              <div class="item-name"> <a href="#.">SHOE</a> </div>
              <!-- Price --> 
            </div>
          </div>
        </div>
      </section>
      
      <!-- SPECIALS OFFERS -->
      <section class="special-offers">
        <div class="container">
          <div class="col-md-8 center-block">
            <h4>special</h4>
            <h1 class="extra-huge-text"> women’s
              sale </h1>
            <a href="#." class="btn btn-round margin-top-50"> SHOP NOW</a> </div>
        </div>
      </section>
      
      <!-- About -->
      <section class="small-about padding-top-150 padding-bottom-150">
        <div class="container"> 
          
          <!-- Main Heading -->
          <div class="heading text-center">
            <h4>about Mall Promo</h4>
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
      
      <!-- News Letter -->
      <section class="news-letter style-2 padding-top-150 padding-bottom-150">
        <div class="container">
          <div class="heading light-head text-center margin-bottom-30">
            <h4>NEWSLETTER</h4>
            <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odi </span> </div>
          <form>
            <input type="email" placeholder="Enter your email address" required>
            <button type="submit">SEND ME</button>
          </form>
        </div>
      </section>
    </div>
    
    <!--======= FOOTER =========-->
    <footer>
      <div class="container"> 
        
        <!-- ABOUT Location -->
        <div class="col-md-3">
          <div class="about-footer"> <img class="margin-bottom-30" src="asset/images/logo-foot.png" alt="" >
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
  </main>
</div>
<script src="asset/js/jquery-1.11.3.min.js"></script> 
<script src="asset/js/bootstrap.min.js"></script> 
<script src="asset/js/own-menu.js"></script> 
<script src="asset/js/jquery.lighter.js"></script> 
<script src="asset/js/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="asset/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="asset/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="asset/js/main.js"></script>
</body>
</html>