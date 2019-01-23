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
                                    <li> <a href="{{ asset($product->image) }}"  class="prettyPhoto"> <img src="{{ asset($product->image) }}" height="570" width="460" title="Foto" alt="img"> </a> </li>
                                    @foreach($product->productGalleries as $gallery)
                                        <li><a href="{{ asset($gallery->image) }}"  class="prettyPhoto"> <img src="{{ asset($gallery->image) }}" height="570" width="460" title="Foto"  alt="img"> </a> </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="carousel-product flexslider">
                                <ul class="slides">
                                    <li> <img src="{{ asset($product->image) }}" height="100" width="100"  alt="img"> </li>
                                    @foreach($product->productGalleries as $gallery)
                                        <li> <img src="{{ asset($gallery->image) }}" height="100" width="100"  alt="img"> </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- end product-card__slider -->
                    </div>
                    <div class="col-sm-7">
                        <div class="product-card__main">
                            <h1 class="product-card__name">{{ $product->name }}</h1>
                            <div class="product-card__category"><a href="#">{{ $product->category->name }}</a></div>
                            <div class="wrap-rating">
                                <ul class="rating">
                                    @for($i = 0; $i < $product->star; $i++)
                                        <li><i class="icon fa fa-star"></i></li>
                                    @endfor
                                    @for($i = 0; $i < (5 - $product->star) ; $i++)
                                            <li><i class="icon fa fa-star disabled"></i></li>
                                    @endfor
                                </ul>
                                <span class="product-card__reviews product-card__reviews_marker">5 Reviews</span> <span class="product-card__reviews"><a href="javascript:void(0);">Add Your Review</a></span>
                            </div>
                            <div class="product-card__availability"><i class="icon fa fa-check-circle"></i>Available in Stock</div>
                            <div class="product-card__price"> <span class="product-card__price-new">${{ $product->price }}</span> <span class="product-card__price-old">$89.00</span> </div>
                            <div class="product-card__description">
                                {!! $product->overview !!}
                            </div>
                            <footer class="card-btns">
                                <div class="enumerator"> <a class="minus_btn card-btns__btn"><i class="icon fa fa-minus"></i></a>
                                    <input type="text" placeholder="1">
                                    <a class="plus_btn card-btns__btn"><i class="icon fa fa-plus"></i></a>
                                </div>
                                <button class="card-btns__add"><i class="icon icon-bag"></i><a style="color: white" href="{{ route('cart.add',$product->id) }}"> Add to cart </a></button>
                                <span class="card-btns__other">
                                    <button class="card-btns__btn"><i class="icon icon-heart"></i></button>
                                    <button class="card-btns__btn"><i class="icon icon-shuffle"></i></button>
                                </span>
                            </footer>
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
                                {!! $product->description !!}
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
                            @foreach($productCategories as $productCategory)
                                <div class="products__item"> <a class="products__foto" href="{{ route('client.product-detail',$productCategory->id) }}" rel="prettyPhoto"> <img src="{{ asset($productCategory->image) }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">{{ $productCategory->name }}</a></h4>
                                <div class="products__category"><a href="#">{{ $productCategory->category->name }}</a></div>
                                <div class="products__inner clearfix"> <span class="products__price-new">${{ $productCategory->price }}</span> <span class="products__price-old">$89.00</span>
                                    <div class="products__inner clearfix">
                                        <ul class="rating">
                                            @for($i = 0; $i < $productCategory->star; $i++)
                                                <li><i class="icon fa fa-star"></i></li>
                                            @endfor
                                            @for($i = 0; $i < (5 - $productCategory->star) ; $i++)
                                                <li><i class="icon fa fa-star disabled"></i></li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                                <footer class="products-btns clearfix">
                                    <button class="products-btns__btn products-btns__add">
                                        <i class="icon icon-bag color_primary" aria-hidden="true"></i><a class="add_to_cart_btn" href="javascript:void(0);" item_id={{$productCategory->id}}> Add to cart </a>
                                    </button>
                                    <span class="products-btns__other pull-right">
                                        <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                                        <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                                    </span>
                                </footer>
                            </div>
                            @endforeach
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