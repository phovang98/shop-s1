@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="wrap-title-page">
                    <h1 class="ui-title-page">CONTACT US</h1>
                    <ol class="breadcrumb">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
                <!-- end wrap-title-page -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-area section-map">
                    <img class="img-responsive" src="{{ asset('client/img/map.jpg') }}" height="350" width="1170" alt="Map"></div>
                <!-- end section-area -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <div class="border-main">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <section class="section-area">
                        <h2 class="ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>Contact form</h2>
                        <form class="form-contact ui-form" action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="Name" required>
                                    <input class="form-control" type="tel" placeholder="Phone No." required>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="email" placeholder="Email" required>
                                    <input class="form-control" type="text" placeholder="Subject">
                                </div>
                                <div class="col-xs-12">
                                    <textarea class="form-control" required rows="10"></textarea>
                                    <button class="btn btn-primary">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </section>
                    <!-- end section-area -->
                </div>
                <!-- end col -->

                <div class="col-md-5">
                    <section class="section-area section-contacts">
                        <h2 class="ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>ADDRESS</h2>
                        <div class="contacts">
                            <div class="contacts__item"><span class="contacts__name">ADDRESS</span> <span
                                        class="contacts__info">383 Inner Street, Outer City, Newyork , LA USA 33021</span>
                            </div>
                            <div class="contacts__item"><span class="contacts__name">Phone</span> <span
                                        class="contacts__info">+1 234 567890 <span class="contacts__other">+54 123 456900</span></span>
                            </div>
                            <div class="contacts__item"><span class="contacts__name">Email</span> <span
                                        class="contacts__info">info@domain.net <span class="contacts__other">orders@domain.net</span></span>
                            </div>
                            <div class="contacts__item"><span class="contacts__name">TIMINGS</span> <span
                                        class="contacts__info">Mon to Fri --  9:00am to 10:00pm <br>
                  Sat --  11:00am to 06:00pm</span></div>
                        </div>
                    </section>
                    <!-- end section-area -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end border-main -->

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-area">
                    <ul class="list-advantages list-advantages_mod-b list-unstyled">
                        <li class="list-advantages__item"><a class="list-advantages__link" href="javascript:void(0);">
                                <span class="list-advantages__icon helper"><i class="icon icon-diamond"></i></span>
                                <div class="list-advantages__inner"><span
                                            class="list-advantages__name">Special Offers</span> <span
                                            class="list-advantages__description">Shop Big Save Big</span></div>
                            </a></li>
                        <li class="list-advantages__item"><a class="list-advantages__link" href="javascript:void(0);">
                                <span class="list-advantages__icon helper"><i
                                            class="icon icon-basket-loaded"></i></span>
                                <div class="list-advantages__inner"><span
                                            class="list-advantages__name">Free Delivery</span> <span
                                            class="list-advantages__description">On Orders Above $99</span></div>
                            </a></li>
                        <li class="list-advantages__item"><a class="list-advantages__link" href="javascript:void(0);">
                                <span class="list-advantages__icon helper"><i class="icon icon-like"></i></span>
                                <div class="list-advantages__inner"><span
                                            class="list-advantages__name">30 Days Return</span> <span
                                            class="list-advantages__description">Policy We offers</span></div>
                            </a></li>
                        <li class="list-advantages__item"><a class="list-advantages__link" href="javascript:void(0);">
                                <span class="list-advantages__icon helper"><i class="icon icon-rocket"></i></span>
                                <div class="list-advantages__inner"><span
                                            class="list-advantages__name">Fastest Shipping</span> <span
                                            class="list-advantages__description">2 Days Express</span></div>
                            </a></li>
                    </ul>
                    <!-- end list-advantages -->
                </div>
                <!-- end section-area -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-area">
                    <div class="subscribe subscribe_mod-a"><i class="subscribe__icon icon-envelope-open"></i>
                        <div class="subscribe__inner"><span class="subscribe__title">Grab the Best Deals</span> <span
                                    class="subscribe__description">Get Latest Deals, Offers & Products updates via Email</span>
                        </div>
                        <form class="subscribe__form form-inline">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email ...">
                                <input class="ui-btn ui-btn_warning" type="submit" value="SUBSCRIBE">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end section-area -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <div class="section-area section-social-links">
        <div class="container">
            <div class="row">
                <div class="col-xs-12"><span class="social-links__title">Let’s Connect With Us</span>
                    <ul class="social-links list-unstyled">
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i
                                        class="icon fa fa-twitter"></i></a></li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i
                                        class="icon fa fa-facebook"></i></a></li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i
                                        class="icon fa fa-google-plus"></i></a></li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i
                                        class="icon fa fa-instagram"></i></a></li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i
                                        class="icon fa fa-pinterest-p"></i></a></li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i
                                        class="icon fa fa-rss"></i></a></li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i
                                        class="icon fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section-area -->
@endsection
