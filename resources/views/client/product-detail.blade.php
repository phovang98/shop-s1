@extends('layouts.app')
@section('content')
    <div class="border-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wrap-title-page">
                        <ul class="pager">
                            <li class="previous"><a href="#"><i></i></a></li>
                            <li class="next"><a href="#"><i></i></a></li>
                        </ul>
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Shop</a></li>
                            <li class="active">Product</li>
                        </ol>
                    </div>
                    <!-- end wrap-title-page -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <section class="product-card">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="product-card__slider" id="image-block">
                            <div class="slider-product flexslider">
                                <ul class="slides">
                                    <li> <a href="{{ asset('client/media/slider_product/large/1.jpg') }}"  class="prettyPhoto"> <img src="{{ asset('client/media/slider_product/large/1.jpg') }}" height="570" width="460" title="Foto" alt="img"> </a> </li>
                                    <li> <a href="{{ asset('client/media/slider_product/large/1.jpg') }}"  class="prettyPhoto"> <img src="{{ asset('client/media/slider_product/large/1.jpg') }}" height="570" width="460" title="Foto"  alt="img"> </a> </li>
                                    <li> <a href="{{ asset('client/media/slider_product/large/1.jpg') }}"  class="prettyPhoto"> <img src="{{ asset('client/media/slider_product/large/1.jpg') }}" height="570" width="460" title="Foto"  alt="img"> </a> </li>
                                    <li> <a href="{{ asset('client/media/slider_product/large/1.jpg') }}" class="prettyPhoto"> <img src="{{ asset('client/media/slider_product/large/1.jpg') }}" height="570" width="460" title="Foto"  alt="img"> </a> </li>
                                </ul>
                            </div>
                            <div class="carousel-product flexslider">
                                <ul class="slides">
                                    <li> <img src="{{ asset('client/media/slider_product/small/1.jpg') }}" height="100" width="100"  alt="img"> </li>
                                    <li> <img src="{{ asset('client/media/slider_product/small/2.jpg') }}" height="100" width="100"  alt="img"> </li>
                                    <li> <img src="{{ asset('client/media/slider_product/small/3.jpg') }}" height="100" width="100"  alt="img"> </li>
                                    <li> <img src="{{ asset('client/media/slider_product/small/4.jpg') }}" height="100" width="100"  alt="img"> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end product-card__slider -->
                    </div>
                    <div class="col-sm-7">
                        <div class="product-card__main">
                            <h1 class="product-card__name">Samsung Gear Fit Watch (Black)</h1>
                            <div class="product-card__category"><a href="#">In WATCHES</a></div>
                            <div class="wrap-rating">
                                <ul class="rating">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star disabled"></i></li>
                                </ul>
                                <span class="product-card__reviews product-card__reviews_marker">5 Reviews</span> <span class="product-card__reviews"><a href="javascript:void(0);">Add Your Review</a></span> </div>
                            <div class="product-card__availability"><i class="icon fa fa-check-circle"></i>Available in Stock</div>
                            <div class="product-card__price"> <span class="product-card__price-new">$435</span> <span class="product-card__price-old">$89.00</span> </div>
                            <div class="product-card__description">
                                <p>Pair up your Samsung Galaxy smartphone with this stylish Galaxy Gear Fit smartwatch. The trendy watch not only notifies you about SMSs, incoming calls, emails, and 3rd party apps, but also doubles up as your personalized fitness manager. Gear Fit deploys an optical heart sensor to keep track of your workouts and provides personalized real time info about your fitness activity. It also offers recommendations regarding your next workout as per the.</p>
                            </div>
                            <div class="product-card__options">
                                <div class="product-card__group"> <span class="product-card__label">Select Color</span>
                                    <div class="jelect">
                                        <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                                        <div tabindex="0" role="button" class="jelect-current">Black</div>
                                        <ul class="jelect-options">
                                            <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Black</li>
                                            <li data-val='1' tabindex="0"  class="jelect-option">White</li>
                                            <li data-val='2' tabindex="0"  class="jelect-option">Green</li>
                                        </ul>
                                    </div>
                                    <!-- end jelect -->
                                </div>
                                <div class="product-card__group"> <span class="product-card__label">Select Size</span>
                                    <div  class="jelect">
                                        <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                                        <div tabindex="0" role="button" class="jelect-current">Free-Size</div>
                                        <ul class="jelect-options">
                                            <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Free-Size 1</li>
                                            <li data-val='1' tabindex="0"  class="jelect-option">Free-Size 2</li>
                                            <li data-val='2' tabindex="0"  class="jelect-option">Free-Size 3</li>
                                        </ul>
                                    </div>
                                    <!-- end jelect -->
                                </div>
                                <div class="product-card__group"> <span class="product-card__label">Display Type</span>
                                    <div  class="jelect">
                                        <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                                        <div tabindex="0" role="button" class="jelect-current">Digital</div>
                                        <ul class="jelect-options">
                                            <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Digital 1</li>
                                            <li data-val='1' tabindex="0"  class="jelect-option">Digital 2</li>
                                            <li data-val='2' tabindex="0"  class="jelect-option">Digital 3</li>
                                        </ul>
                                    </div>
                                    <!-- end jelect -->
                                </div>
                            </div>
                            <footer class="card-btns">
                                <div class="enumerator"> <a class="minus_btn card-btns__btn"><i class="icon fa fa-minus"></i></a>
                                    <input type="text" placeholder="1">
                                    <a class="plus_btn card-btns__btn"><i class="icon fa fa-plus"></i></a> </div>
                                <button class="card-btns__add"><i class="icon icon-bag"></i> Add to cart</button>
                                <span class="card-btns__other">
            <button class="card-btns__btn"><i class="icon icon-heart"></i></button>
            <button class="card-btns__btn"><i class="icon icon-shuffle"></i></button>
            </span> </footer>
                            <div class="product-card__social"> <span class="product-card__label">Share This Product</span> <img src="{{ asset('client/img/social-temp.png') }}" height="24" width="247" alt=""> </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </section>
            <!-- end product-card -->

            <div class="product-description">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                            <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                            <li><a href="#shipping" data-toggle="tab">shipping & returns</a></li>
                            <li><a href="#tags" data-toggle="tab">Tags</a></li>
                        </ul>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tab-content">
                            <div class="tab-pane active" id="description">
                                <p>Pair up your Samsung Galaxy smartphone with this stylish Galaxy Gear Fit smartwatch. The trendy watch not only notifies you about SMSs, incoming calls, emails, and 3rd party apps, but also doubles up as your personalized fitness manager. Gear Fit deploys an optical heart sensor to keep track of your workouts and provides personalized real time info about your fitness activity. It also offers recommendations regarding your next workout as per the calculated results, based on your individual needs. The smart watch is extremely easy to use. Just swipe your finger across the 1.84inch curved Super AMOLED touchscreen display of the watch lets you control alarms, reject calls with messages, reply quickly to messages, and do much more. Content displayed on the screen like wallpapers, background colors, and clock designs can be set according to your preferences. Screen rotation lets you look at the screen both horizontally and vertically. Screen rotation is made possible with the inclusion of a built in gyroscope. An accelerometer is also fitted on this device. The display is set on colorful band that is interchangeable. </p>
                            </div>
                            <div class="tab-pane" id="reviews">
                                <div class="rew_blk">
                                    <h5>Excellent </h5>
                                    <div class="top_row">
                                        <div class="date"><span class="fa fa-calendar"></span>1/3/2020</div>
                                        <a class="user" href="#"><span class="fa fa-user"></span>Sheldon</a>
                                        <div class="product-rating"><i class="icon fa fa-star"></i> <i class="icon fa fa-star"></i> <i class="icon fa fa-star"></i> <i class="icon fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                    </div>
                                    <p>Etiam pretium, arcu id mattis aliquet, est neque sagittis quam, id mollis leo urna non dui. Phasellus lacinia facilisis ipsum, a tempor nibh. Aliquam nec interdum mi. Nunc laoreet molestie massa, at euismod ipsum fringilla id. Vivamus vehicula metus velit, sit amet congue turpis suscipit in. Etiam interdum felis sed consequat varius. Aliquam erat volutpat. </p>
                                </div>
                                <div class="rew_blk clearfix">
                                    <h5>Awesome!</h5>
                                    <div class="top_row clearfix">
                                        <div class="date"><span class="fa fa-calendar"></span>3/12/2020</div>
                                        <a class="user" href="#"><span class="fa fa-user"></span>Sasha</a>
                                        <div class="product-rating"><i class="icon fa fa-star"></i> <i class="icon fa fa-star"></i> <i class="icon fa fa-star"></i> <i class="icon fa fa-star"></i> <i class="icon fa fa-star"></i> </div>
                                    </div>
                                    <p>Etiam pretium, arcu id mattis aliquet, est neque sagittis quam, id mollis leo urna non dui. Phasellus lacinia facilisis ipsum, a tempor nibh. Aliquam nec interdum mi. Nunc laoreet molestie massa, at euismod ipsum fringilla id. Vivamus vehicula metus velit, sit amet congue turpis suscipit in.</p>
                                </div>
                                <form class="form-reviews ui-form" accept-charset="UTF-8" action="action.php" method="post">
                                    <input id="ratings-hidden" name="rating" type="hidden">
                                    <textarea class="form-control" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                                    <button class="btn btn-primary">Add Review</button>
                                </form>
                            </div>
                            <div class="tab-pane" id="shipping">
                                <p>Pair up your Samsung Galaxy smartphone with this stylish Galaxy Gear Fit smartwatch. The trendy watch not only notifies you about SMSs, incoming calls, emails, and 3rd party apps, but also doubles up as your personalized fitness manager. Gear Fit deploys an optical heart sensor to keep track of your workouts and provides personalized real time info about your fitness activity. It also offers recommendations regarding your next workout as per the calculated results, based on your individual needs. The smart watch is extremely easy to use. Just swipe your finger across the 1.84inch curved Super AMOLED touchscreen display of the watch lets you control alarms, reject calls with messages, reply quickly to messages, and do much more. Content displayed on the screen like wallpapers, background colors, and clock designs can be set according to your preferences. Screen rotation lets you look at the screen both horizontally and vertically. Screen rotation is made possible with the inclusion of a built in gyroscope. An accelerometer is also fitted on this device. The display is set on colorful band that is interchangeable. </p>
                            </div>
                            <div class="tab-pane" id="tags">
                                <p>Pair up your Samsung Galaxy smartphone with this stylish Galaxy Gear Fit smartwatch. The trendy watch not only notifies you about SMSs, incoming calls, emails, and 3rd party apps, but also doubles up as your personalized fitness manager. Gear Fit deploys an optical heart sensor to keep track of your workouts and provides personalized real time info about your fitness activity. It also offers recommendations regarding your next workout as per the calculated results, based on your individual needs. The smart watch is extremely easy to use. Just swipe your finger across the 1.84inch curved Super AMOLED touchscreen display of the watch lets you control alarms, reject calls with messages, reply quickly to messages, and do much more. Content displayed on the screen like wallpapers, background colors, and clock designs can be set according to your preferences. Screen rotation lets you look at the screen both horizontally and vertically. Screen rotation is made possible with the inclusion of a built in gyroscope. An accelerometer is also fitted on this device. The display is set on colorful band that is interchangeable. </p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end product-description -->

            <div class="section-area section-products_mod-a">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
                             data-min480="1"
                             data-min768="3"
                             data-min992="4"
                             data-min1200="4"
                             data-pagination="false"
                             data-navigation="true"
                             data-auto-play="4000"
                             data-stop-on-hover="true">
                            <div class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/7.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/7.jpg') }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">Elekta 50” UHD 3D LED TV</a></h4>
                                <div class="products__category"><a href="#">LED TV’s</a></div>
                                <div class="products__inner clearfix"> <span class="products__price-new">$685</span> <span class="products__price-old">$89.00</span>
                                    <ul class="rating">
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star disabled"></i></li>
                                    </ul>
                                </div>
                                <footer class="products-btns clearfix">
                                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                    <span class="products-btns__other pull-right">
                <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                </span> </footer>
                            </div>
                            <div class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/5.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/5.jpg') }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">MP3 Active 2 Neon Blue 4GB</a></h4>
                                <div class="products__category"><a href="#">Music Players</a></div>
                                <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                                    <ul class="rating">
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star disabled"></i></li>
                                    </ul>
                                </div>
                                <footer class="products-btns clearfix">
                                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                    <span class="products-btns__other pull-right">
                <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                </span> </footer>
                                <span class="label-wrap"><span class="label label-danger">SALE</span></span> </div>
                            <div class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/3.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/3.jpg') }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                                <div class="products__category"><a href="#">PERFUMES</a></div>
                                <div class="products__inner clearfix"> <span class="products__price-new">$129</span> <span class="products__price-old">$89.00</span>
                                    <ul class="rating">
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star disabled"></i></li>
                                    </ul>
                                </div>
                                <footer class="products-btns clearfix">
                                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                    <span class="products-btns__other pull-right">
                <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                </span> </footer>
                                <span class="label-wrap"><span class="label label-warning">NEW</span></span> </div>
                            <div class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/4.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/4.jpg') }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">Beats Solo Wireless</a></h4>
                                <div class="products__category"><a href="#">HEADPHONES</a></div>
                                <div class="products__inner clearfix"> <span class="products__price-new">$360</span> <span class="products__price-old">$89.00</span>
                                    <ul class="rating">
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star disabled"></i></li>
                                    </ul>
                                </div>
                                <footer class="products-btns clearfix">
                                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                    <span class="products-btns__other pull-right">
                <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                </span> </footer>
                            </div>
                            <div class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/5.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/5.jpg') }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">MP3 Active 2 Neon Blue 4GB</a></h4>
                                <div class="products__category"><a href="#">Music Players</a></div>
                                <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                                    <ul class="rating">
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star"></i></li>
                                        <li><i class="icon fa fa-star disabled"></i></li>
                                    </ul>
                                </div>
                                <footer class="products-btns clearfix">
                                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                    <span class="products-btns__other pull-right">
                <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                </span> </footer>
                                <span class="label-wrap"><span class="label label-danger">SALE</span></span> </div>
                        </div>
                        <!-- end products -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end section-products_mod-a -->
        </div>
        <!-- end container -->
    </div>
    <!-- end border-main -->

    <div class="section-area section-default section-list-clients">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="list-clients list-unstyled owl-carousel owl-theme_mod-a owl-theme enable-owl-carousel"
                         data-min480="2"
                         data-min768="4"
                         data-min992="4"
                         data-min1200="5"
                         data-pagination="false"
                         data-navigation="true"
                         data-auto-play="4000"
                         data-stop-on-hover="true">
                        <div class="list-clients__item"> <img class="img-responsive" src="{{ asset('client/media/clients/1.png') }}" height="80" width="136" alt="Clients"> </div>
                        <div class="list-clients__item"> <img class="img-responsive" src="{{ asset('client/media/clients/2.png') }}" height="80" width="146" alt="Clients"> </div>
                        <div class="list-clients__item"> <img class="img-responsive" src="{{ asset('client/media/clients/3.png') }}" height="80" width="98" alt="Clients"> </div>
                        <div class="list-clients__item"> <img class="img-responsive" src="{{ asset('client/media/clients/4.png') }}" height="80" width="171" alt="Clients"> </div>
                        <div class="list-clients__item"> <img class="img-responsive" src="{{ asset('client/media/clients/5.png') }}" height="80" width="100" alt="Clients"> </div>
                        <div class="list-clients__item"> <img class="img-responsive" src="{{ asset('client/media/clients/3.png') }}" height="80" width="98" alt="Clients"> </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section-area -->

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-area section-default">
                    <div class="subscribe subscribe_mod-a"> <i class="subscribe__icon icon-envelope-open"></i>
                        <div class="subscribe__inner"> <span class="subscribe__title">Grab the Best Deals</span> <span class="subscribe__description">Get Latest Deals, Offers & Products updates via Email</span> </div>
                        <form class="subscribe__form form-inline" >
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
    </div>
    <!-- end section-area -->
@endsection
@section('script')
    <script src="{{ asset('client/plugins/flexslider/jquery.flexslider.js') }}"></script>
@endsection