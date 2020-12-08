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
        <section class="sub-bnr" data-stellar-background-ratio="0.5">
            <div class="position-center-center">
                <div class="container">
                    <h4>ABOUT PAVSHOP</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                        Sed feugiat, tellus vel tristique posuere, diam</p>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">ABOUT</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Content -->
        <div id="content">

            <!-- History -->
            <section class="history-block padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-10 center-block">
                            <div class="col-sm-9 center-block">
                                <h4>A Brief History</h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui at lacus aliquet, a consequat enim aliquet. Integer molestie sit amet sem et faucibus. Nunc ornare pharetra dui, vitae auctor orci fringilla eget. Pellentesque in placerat felis. Etiam mollis venenatis luctus. Morbi ac scelerisque mauris. Etiam sodales a nulla ornare viverra. Nunc at blandit neque, bibendum varius purus. <br>
                                    <br>
                                    Nam sit amet sapien vitae enim vehicula tincidunt. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc faucibus imperdiet vulputate. Morbi volutpat leo iaculis elit vehicula, eu convallis magna finibus. Suspendisse tristique ullamcorper erat a elementum. Cras eget elit non nunc aliquam ullamcorper quis sed metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada, erat in ullamcorper bibendum, elit lacus mattis lorem, quis luctus diam lorem vel ligula. </p>
                            </div>

                            <!-- IMG -->
                            <img class="img-responsive margin-top-80 margin-bottom-80" src="asset/images/about-img.jpg" alt="">
                            <div class="vision-text">
                                <div class="col-lg-5">
                                    <h5 class="text-left">our vision</h5>
                                    <h2>We craft awesome stuff with great experiences</h2>
                                </div>
                                <div class="col-lg-7">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui at lacus aliquet, a consequat enim aliquet. Integer molestie sit amet sem et faucibus. Nunc ornare pharetra dui, vitae auctor orci fringilla eget. Pellentesque in placerat felis. Etiam mollis venenatis luctus. <br>
                                        <br>
                                        Morbi ac scelerisque mauris. Etiam sodales a nulla ornare viverra. Nunc at blandit neque, bibendum varius purus. Nam sit amet sapien vitae enim vehicula tincidunt. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc faucibus imperdiet vulputate. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Culture BLOCK -->
            <section class="cultur-block">
                <ul>
                    <li> <img src="asset/images/cultur-img-1.jpg" alt=""> </li>
                    <li> <img src="asset/images/cultur-img-2.jpg" alt=""> </li>
                    <li> <img src="asset/images/cultur-img-3.jpg" alt=""> </li>
                    <li> <img src="asset/images/cultur-img-4.jpg" alt=""> </li>
                </ul>

                <!-- Culture Text -->
                <div class="position-center-center">
                    <div class="container">
                        <div class="col-sm-6 center-block">
                            <h4>awesome work culture</h4>
                            <p>Phasellus lacinia fermentutm bibendum. Interdum et malante ipuctus non. Nulla lacinia,
                                eros vel fermentum consectetur, ris dolor in ex. </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Video -->
            <section class="video-block"> <img class="img-responsive" src="asset/images/video-img.jpg" alt="">
                <div class="position-center-center"> <a href="#"> <i class="icon-camcorder"></i>watch video </a> </div>
            </section>

            <!-- OUR TEAM -->
            <section class="our-team light-gray-bg padding-top-150 padding-bottom-100">
                <div class="container">
                    <div class="heading text-center">
                        <h4>OUR TEAM</h4>
                        <span>United by love & help to build great brands</span>
                    </div>

                    <!-- TEAM -->
                    <ul class="row">

                        <!-- Member -->
                        <li class="col-md-4 text-center animate fadeInUp" data-wow-delay="0.4s">
                            <article>
                                <!-- abatar -->
                                <div class="avatar"> <img class="img-circle" src="asset/images/team-1.jpg" alt="">
                                    <!-- Team hover -->
                                    <div class="team-hover">
                                        <div class="position-center-center">
                                            <div class="social-icons"> <a href="#."><i class="icon-social-facebook"></i></a> <a href="#."><i class="icon-social-twitter"></i></a> <a href="#."><i class="icon-social-dribbble"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Detail -->
                                <div class="team-names">
                                    <h6>JOSEPH MARK</h6>
                                    <p>CEO & FOUNDER</p>
                                </div>
                            </article>
                        </li>

                        <!-- Member -->
                        <li class="col-md-4 text-center animate fadeInUp" data-wow-delay="0.6s">
                            <article>
                                <!-- abatar -->
                                <div class="avatar"> <img class="img-circle" src="asset/images/team-2.jpg" alt="">
                                    <!-- Team hover -->
                                    <div class="team-hover">
                                        <div class="position-center-center">
                                            <div class="social-icons"> <a href="#."><i class="icon-social-facebook"></i></a> <a href="#."><i class="icon-social-twitter"></i></a> <a href="#."><i class="icon-social-dribbble"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Detail -->
                                <div class="team-names">
                                    <h6>jennifer rod</h6>
                                    <p>DESIGNER</p>
                                </div>
                            </article>
                        </li>

                        <!-- Member -->
                        <li class="col-md-4 text-center animate fadeInUp" data-wow-delay="0.8s">
                            <article>
                                <!-- abatar -->
                                <div class="avatar"> <img class="img-circle" src="asset/images/team-3.jpg" alt="">
                                    <!-- Team hover -->
                                    <div class="team-hover">
                                        <div class="position-center-center">
                                            <div class="social-icons"> <a href="#."><i class="icon-social-facebook"></i></a> <a href="#."><i class="icon-social-twitter"></i></a> <a href="#."><i class="icon-social-dribbble"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Detail -->
                                <div class="team-names">
                                    <h6>natasha singh</h6>
                                    <p>DEVELOPER</p>
                                </div>
                            </article>
                        </li>

                        <!-- Member -->
                        <li class="col-md-4 text-center">
                            <article>
                                <!-- abatar -->
                                <div class="avatar"> <img class="img-circle" src="asset/images/team-4.jpg" alt="">
                                    <!-- Team hover -->
                                    <div class="team-hover">
                                        <div class="position-center-center">
                                            <div class="social-icons"> <a href="#."><i class="icon-social-facebook"></i></a> <a href="#."><i class="icon-social-twitter"></i></a> <a href="#."><i class="icon-social-dribbble"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Detail -->
                                <div class="team-names">
                                    <h6>JOSEPH MARK</h6>
                                    <p>Product Designer</p>
                                </div>
                            </article>
                        </li>

                        <!-- Member -->
                        <li class="col-md-4 text-center">
                            <article>
                                <!-- abatar -->
                                <div class="avatar"> <img class="img-circle" src="asset/images/team-5.jpg" alt="">
                                    <!-- Team hover -->
                                    <div class="team-hover">
                                        <div class="position-center-center">
                                            <div class="social-icons"> <a href="#."><i class="icon-social-facebook"></i></a> <a href="#."><i class="icon-social-twitter"></i></a> <a href="#."><i class="icon-social-dribbble"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Detail -->
                                <div class="team-names">
                                    <h6>jennifer rod</h6>
                                    <p>Quality Head</p>
                                </div>
                            </article>
                        </li>

                        <!-- Member -->
                        <li class="col-md-4 text-center">
                            <article>
                                <!-- abatar -->
                                <div class="avatar"> <img class="img-circle" src="asset/images/team-6.jpg" alt="">
                                    <!-- Team hover -->
                                    <div class="team-hover">
                                        <div class="position-center-center">
                                            <div class="social-icons"> <a href="#."><i class="icon-social-facebook"></i></a> <a href="#."><i class="icon-social-twitter"></i></a> <a href="#."><i class="icon-social-dribbble"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Detail -->
                                <div class="team-names">
                                    <h6>natasha singh</h6>
                                    <p>DEVELOPER</p>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- TWEET -->
            <section class="tweet padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="col-md-8 center-block"> <i class="icon-social-twitter"></i>
                        <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere
                            eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
                        <span><span class="primary-color">@johnsmith</span> 4 hours ago via Twitter</span>
                    </div>
                </div>
            </section>

            <!-- WORK WITH US -->
            <section class="our-team padding-top-150 padding-bottom-100">
                <div class="container">
                    <div class="heading text-center">
                        <h4>We work with the best</h4>
                        <span>We are proud that we have awesome sponsors</span>
                    </div>
                    <ul class="clients-img">
                        <li> <img class="img-responsive" src="asset/images/c-img-1.jpg" alt=""> </li>
                        <li> <img class="img-responsive" src="asset/images/c-img-2.jpg" alt=""> </li>
                        <li> <img class="img-responsive" src="asset/images/c-img-3.jpg" alt=""> </li>
                        <li> <img class="img-responsive" src="asset/images/c-img-4.jpg" alt=""> </li>
                    </ul>
                </div>
            </section>

            <!-- About -->
            <section class="small-about padding-top-150 padding-bottom-150">
                <div class="container">

                    <!-- Main Heading -->
                    <div class="heading text-center">
                        <h4>Can we help you</h4>
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
            <section class="news-letter padding-top-150 padding-bottom-150">
                <div class="container">
                    <div class="heading light-head text-center margin-bottom-30">
                        <h4>NEWSLETTER</h4>
                        <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odi </span>
                    </div>
                    <form>
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit">SEND ME</button>
                    </form>
                </div>
            </section>
        </div>

        <!--======= FOOTER =========-->
        @include('parcial.footer')

    </div>

    @include('parcial.jsuser')

</body>

</html>
