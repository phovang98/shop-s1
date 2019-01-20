@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="wrap-title-page">
                    <h1 class="ui-title-page">ABOUT US</h1>
                    <ol class="breadcrumb">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li class="active">About</li>
                    </ol>
                </div>
                <!-- end wrap-title-page -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xs-12">
                <section class="section-area section-about text-center"> <img class="img-responsive" src="{{ asset('client/media/1170x350/1.jpg') }}" height="350" width="1170" alt="Foto">
                    <h2 class="ui-title-block ui-title-block_large ui-title-block_mod-a">We Offer Best Shopping Experience</h2>
                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicit udin sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                </section>
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
                    <ul class="list-advantages list-advantages_mod-c list-unstyled">
                        <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-diamond"></i></span> <span class="list-advantages__name">Special Offers</span> <span class="list-advantages__description">Shop Big Save Big</span>
                                <p>Lorem felis do sollicit un sed. Lorem ipsu Mauris dolor. Aliquam erat volutpat</p>
                            </a> </li>
                        <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-basket-loaded"></i></span> <span class="list-advantages__name">Free Delivery</span> <span class="list-advantages__description">On Orders Above $99</span>
                                <p>Lorem felis do sollicit un sed. Lorem ipsu Mauris dolor. Aliquam erat volutpat</p>
                            </a> </li>
                        <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-like"></i></span> <span class="list-advantages__name">30 Days Return</span> <span class="list-advantages__description">Policy We offers</span>
                                <p>Lorem felis do sollicit un sed. Lorem ipsu Mauris dolor. Aliquam erat volutpat</p>
                            </a> </li>
                        <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-rocket"></i></span> <span class="list-advantages__name">Fastest Shipping</span> <span class="list-advantages__description">2 Days Express</span>
                                <p>Lorem felis do sollicit un sed. Lorem ipsu Mauris dolor. Aliquam erat volutpat</p>
                            </a> </li>
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
                    <ul class="list-staff list-unstyled">
                        <li class="list-staff__item">
                            <div class="list-staff__foto"><a class="list-staff__link" href="{{ asset('client/media/staff/1.jpg') }}" rel="prettyPhoto"><img class="img-responsive" src="{{ asset('client/media/staff/1.jpg') }}" alt="Staff" height="150" width="170"></a></div>
                            <span class="list-staff__name">John Smith</span> <span class="list-staff__post">Director</span>
                            <ul class="list-staff-social list-unstyled">
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-twitter"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-facebook"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-google-plus"></i></a> </li>
                            </ul>
                        </li>
                        <li class="list-staff__item">
                            <div class="list-staff__foto"><a class="list-staff__link" href="{{ asset('client/media/staff/2.jpg') }}" rel="prettyPhoto"><img class="img-responsive" src="{{ asset('client/media/staff/2.jpg') }}" alt="Staff" height="150" width="170"></a></div>
                            <span class="list-staff__name">Rex Burton</span> <span class="list-staff__post">shop admin</span>
                            <ul class="list-staff-social list-unstyled">
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-twitter"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-facebook"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-google-plus"></i></a> </li>
                            </ul>
                        </li>
                        <li class="list-staff__item">
                            <div class="list-staff__foto"><a class="list-staff__link" href="{{ asset('client/media/staff/3.jpg') }}" rel="prettyPhoto"><img class="img-responsive" src="{{ asset('client/media/staff/3.jpg') }}" alt="Staff" height="150" width="170"></a></div>
                            <span class="list-staff__name">Sara Linda</span> <span class="list-staff__post">Marketing</span>
                            <ul class="list-staff-social list-unstyled">
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-twitter"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-facebook"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-google-plus"></i></a> </li>
                            </ul>
                        </li>
                        <li class="list-staff__item">
                            <div class="list-staff__foto"><a class="list-staff__link" href="{{ asset('client/media/staff/4.jpg') }}" rel="prettyPhoto"><img class="img-responsive" src="{{ asset('client/media/staff/4.jpg') }}" alt="Staff" height="150" width="170"></a></div>
                            <span class="list-staff__name">Jasmine Roy</span> <span class="list-staff__post">Shop admin</span>
                            <ul class="list-staff-social list-unstyled">
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-twitter"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-facebook"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-google-plus"></i></a> </li>
                            </ul>
                        </li>
                        <li class="list-staff__item">
                            <div class="list-staff__foto"><a class="list-staff__link" href="{{ asset('client/media/staff/5.jpg') }}" rel="prettyPhoto"><img class="img-responsive" src="{{ asset('client/media/staff/5.jpg') }}" alt="Staff" height="150" width="170"></a></div>
                            <span class="list-staff__name">Robert Doe</span> <span class="list-staff__post">Web developer</span>
                            <ul class="list-staff-social list-unstyled">
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-twitter"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-facebook"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-google-plus"></i></a> </li>
                            </ul>
                        </li>
                        <li class="list-staff__item">
                            <div class="list-staff__foto"><a class="list-staff__link" href="{{ asset('client/media/staff/6.jpg') }}" rel="prettyPhoto"><img class="img-responsive" src="{{ asset('client/media/staff/6.jpg') }}" alt="Staff" height="150" width="170"></a></div>
                            <span class="list-staff__name">Jane Wanda</span> <span class="list-staff__post">senior Staff</span>
                            <ul class="list-staff-social list-unstyled">
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-twitter"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-facebook"></i></a> </li>
                                <li class="list-staff-social__item"><a class="list-staff-social__link" href="javascript:void(0);"><i class="icon fa fa-google-plus"></i></a> </li>
                            </ul>
                        </li>
                    </ul>
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
            <div class="col-md-6">
                <section class="section-area section-default">
                    <h2 class="ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>OUR HISTORY</h2>
                    <p>Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicit udin sed. Lorem ipsum dolo  sit amet, consectetur adipisicing elit eiusmod tempor incididunt labore etarb dolore magna aliqua. Ut enim ad sed minim. Sunt in culpa qui officiad.</p>
                    <p>Ceniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                    <p>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae auder illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                </section>
                <!-- end section-area -->
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <section class="section-area section-default">
                    <h2 class="ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>WHO WE ARE</h2>
                    <div class="panel-group accordion accordion_mod-1" id="accordion-1">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1"><i class="icon fa"></i></a>
                                <h3 class="panel-title">Expanding Our Branch Network</h3>
                            </div>
                            <div id="collapse-1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p class="ui-text">Craesent justo laoreet dignissim lectus etiam ipsum habitan tristique nam est. Donec venenatis leo eu varius cursus ma metus adipiscing ante orb placerat volutpat diam uspendise vel sed ipsum justo mattis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading"> <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2"><i class="icon fa"></i></a>
                                <h3 class="panel-title">Our Mission Statement</h3>
                            </div>
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="ui-text">Craesent justo laoreet dignissim lectus etiam ipsum habitan tristique nam est. Donec venenatis leo eu varius cursus ma metus adipiscing ante orb placerat volutpat diam uspendise vel sed ipsum justo mattis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading"> <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3"><i class="icon fa"></i></a>
                                <h3 class="panel-title">Featured in Shop Magazine - JUN 2015</h3>
                            </div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="ui-text">Craesent justo laoreet dignissim lectus etiam ipsum habitan tristique nam est. Donec venenatis leo eu varius cursus ma metus adipiscing ante orb placerat volutpat diam uspendise vel sed ipsum justo mattis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
                <section class="section-area section-default">
                    <div class="subscribe subscribe_mod-a"> <i class="subscribe__icon icon-envelope-open"></i>
                        <div class="subscribe__inner"> <span class="subscribe__title">Grab the Best Deals</span> <span class="subscribe__description">Get Latest Deals, Offers & Products updates via Email</span> </div>
                        <form class="subscribe__form form-inline" >
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email ...">
                                <input class="ui-btn ui-btn_warning" type="submit" value="SUBSCRIBE">
                            </div>
                        </form>
                    </div>
                </section>
                <!-- end section-area -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <section class="section-area section-social-links">
        <div class="container">
            <div class="row">
                <div class="col-xs-12"> <span class="social-links__title">Let’s Connect With Us</span>
                    <ul class="social-links list-unstyled">
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-twitter"></i></a> </li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-facebook"></i></a> </li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-google-plus"></i></a> </li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-instagram"></i></a> </li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-pinterest-p"></i></a> </li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-rss"></i></a> </li>
                        <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-youtube-play"></i></a> </li>
                    </ul>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end section-area -->
@endsection