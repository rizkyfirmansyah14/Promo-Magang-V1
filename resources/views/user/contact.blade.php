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
        <!-- HOME MAIN  -->
        <section class="home-slider simple-head" data-stellar-background-ratio="0.5">

            <!-- Container Fluid -->
            <div class="container-fluid">
                <div class="position-center-center">

                    <!-- Header Text -->
                    <div class="col-lg-7 col-lg-offset-5" style="position: relative; margin-top: -60px;">
                        <h4>please leave a <span style="color: #FFE600;">review</span></h4>
                        <h1 class="extra-huge-text" style="color: black; font-size: 90px;">
                            <span style="color: #FFE600;">your</span> review
                            is <span style="color: #FFE600;">very help</span>ful
                        </h1>
                       
                    </div>

                </div>
            </div>
        </section>

    <!-- Content -->
    <div id="content">

        <!--======= CONATACT  =========-->
        <section class="contact padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="contact-form">
                    <h5>PLEASE fill-up FEW details</h5>
                    <div class="row">
                        <div class="col-md-8">

                            <!--======= Success Msg =========-->
                            <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>

                            <!--======= FORM  =========-->
                            <form role="form" id="contact_form" class="contact-form" action="" method="post" onSubmit="return false">
                                @csrf
                                <ul class="row">
                                    <li class="col-sm-6">
                                        <label>full name *
                                            <input type="text" class="form-control" name="name" id="name" placeholder="">
                                        </label>
                                    </li>
                                    <li class="col-sm-6">
                                        <label>Email *
                                            <input type="text" class="form-control" name="email" id="email" placeholder="">
                                        </label>
                                    </li>
                                    <li class="col-sm-6">
                                        <label>Phone *
                                            <input type="text" class="form-control" name="phone" id="company" placeholder="">
                                        </label>
                                    </li>
                                    <li class="col-sm-6">
                                        <label>SUBJECT
                                            <input type="text" class="form-control" name="website" id="website" placeholder="">
                                        </label>
                                    </li>
                                    <li class="col-sm-12">
                                        <label>Message
                                            <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                                        </label>
                                    </li>
                                    <li class="col-sm-12">
                                        <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND MAIL</button>
                                    </li>
                                </ul>
                            </form>
                        </div>

                        <!--======= ADDRESS INFO  =========-->
                        <div class="col-md-4">
                            <div class="contact-info">
                                <h6>OUR ADDRESS</h6>
                                <ul>
                                    <li> <i class="icon-map-pin"></i> Street No. 12, Newyork 12,<br>
                                        MD - 123, USA.</li>
                                    <li> <i class="icon-call-end"></i> 1.800.123.456789</li>
                                    <li> <i class="icon-envelope"></i> <a href="mailto:someone@example.com" target="_top">info@PAVSHOP.com</a> </li>
                                    <li>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam erat turpis, pellentesque non leo eget.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--======= FOOTER =========-->

    @include('parcial.footer')

    </div>

    @include('parcial.jsuser')
</body>

</html>
