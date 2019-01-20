@extends('layouts.app')
@section('content')
    <!-- HOME -->
    <script type="text/javascript" src="{{ asset('client/plugins/sliderpro/js/jquery.sliderPro.min.js')}}"></script>
    <div id="sliderpro1" class="slider-pro main-slider">
        <div class="sp-slides">
            <div class="sp-slide"><img class="sp-image"
                        src="{{ asset('client/media/main-slider/a.png')}}"
                        data-src="{{ asset('client/media/main-slider/a.png')}}"
                        data-retina="{{ asset('client/media/main-slider/a.png')}}" alt="img"/>
                <div class="item-wrap sp-layer  sp-padding" data-horizontal="270" data-vertical="115"
                     data-show-transition="left" data-hide-transition="up" data-show-delay="400"
                     data-hide-delay="200"><img src="{{ asset('client/media/main-slider/a1.png') }}" alt="slide element"/></div>
                <div class="item-wrap sp-layer  sp-padding" data-horizontal="266" data-vertical="290"
                     data-show-transition="left" data-hide-transition="up" data-show-delay="700"
                     data-hide-delay="200"><img src="{{ asset('client/media/main-slider/a2.png') }}" alt="slide element"/></div>
                <div class="item-wrap sp-layer  sp-padding" data-horizontal="340px" data-vertical="405"
                     data-show-transition="left" data-hide-transition="up" data-show-delay="500"
                     data-hide-delay="300"><a href="category-1.html"><img src="{{ asset('client/media/main-slider/a3.png') }}"
                                                                          alt="slide element"/></a></div>
            </div>
            <div class="sp-slide"><img class="sp-image"
                                       src="{{ asset('client/media/main-slider/b.png')}}"
                                       data-src="{{ asset('client/media/main-slider/b.png')}}"
                                       data-retina="{{ asset('client/media/main-slider/b.png') }}" alt="img')}}"/>
                <div class="item-wrap sp-layer  sp-padding" data-horizontal="1050" data-vertical="175"
                     data-show-transition="left" data-hide-transition="up" data-show-delay="400"
                     data-hide-delay="200"><img src="{{ asset('client/media/main-slider/b1.png') }}" alt="slide element"/></div>
                <div class="item-wrap sp-layer  sp-padding" data-horizontal="1250" data-vertical="360"
                     data-show-transition="left" data-hide-transition="up" data-show-delay="700"
                     data-hide-delay="200"><img src="{{ asset('client/media/main-slider/b2.png') }}" alt="slide element"/></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- end main-slider -->

                <ul class="category-images">
                    <li class="grid">
                        <figure class="effect-bubba wow fadeInLeft" data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;"><img
                                    class="img-responsive" src="{{ asset('client/media/420x170/1.jpg')}}" height="170" width="420"
                                    alt="Foto">
                            <figcaption><span class="links-categories__inner"> <span
                                            class="links-categories__label">NEW</span> <span
                                            class="links-categories__name">FASHION COLLECTION</span> </span> <a
                                        href="#">View more</a></figcaption>
                        </figure>
                    </li>
                    <li class="grid left-space right-space">
                        <figure class="effect-bubba wow fadeInUp" data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"><img
                                    class="img-responsive" src="{{ asset('client/media/420x170/2.jpg')}}" height="170" width="420"
                                    alt="Foto">
                            <figcaption><span class="links-categories__inner"> <span
                                            class="links-categories__label">NEW</span> <span
                                            class="links-categories__name">PERFUMES COLLECTION</span> </span> <a
                                        href="#">View more</a></figcaption>
                        </figure>
                    </li>
                    <li class="grid">
                        <figure class="effect-bubba wow fadeInRight" data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                            <img class="img-responsive" src="{{ asset('client/media/420x170/1.jpg')}}" height="170" width="420"
                                 alt="Foto">
                            <figcaption><span class="links-categories__inner"> <span
                                            class="links-categories__label">NEW</span> <span
                                            class="links-categories__name">FASHION COLLECTION</span> </span> <a
                                        href="#">View more</a></figcaption>
                        </figure>
                    </li>
                </ul>

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
                    <ul id="filter" class="clearfix wow bounceInLeft" data-wow-duration="2s" data-wow-delay=".5s">
                        <li><a href="" data-filter="*" class="current">ALL PRODUCTS</a></li>
                        <li><a href="" data-filter=".best">BEST SELLERS</a></li>
                        <li><a href="" data-filter=".newest">NEWEST ADDED</a></li>
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
            <div class="col-xs-12">
                <div class="section-area">
                    <div class="isotope-frame wow bounceInRight" data-wow-duration="2s">
                        <ul class="isotope-filter products clearfix">
                            @foreach($products as $product)
                                    <li class="isotope-item best products__item">
                                        <a class="products__foto" href="" rel="prettyPhoto">
                                            <img src="{{ asset($product->image)}}" height="260" width="260" alt="Goods">
                                        </a>
                                        <h4 class="products__name"><a href="#">{{ $product->name }}</a></h4>
                                        <div class="products__category"><a href="#">{{ $product->category->name }}</a></div>
                                        <div class="products__inner clearfix"><span class="products__price-new">${{ $product->price }}</span>
                                            <span class="products__price-old">${{ $product->price }}</span>
                                            <ul class="rating">
                                                @for($i=0;$i<$product->star;$i++)
                                                    <li><i class="icon fa fa-star"></i></li>
                                                @endfor
                                            </ul>
                                        </div>
                                        <footer class="products-btns clearfix">
                                            <button class="products-btns__btn products-btns__add">
                                                <i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart
                                            </button>
                                            <span class="products-btns__other pull-right">
                                                <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                                                <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                                            </span>
                                        </footer>
                                        <span class="label-wrap"><span class="label label-danger">SALE</span></span>
                                    </li>
                            @endforeach
                        </ul>
                    </div>
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
                <div class="section-area section-banner">
                    <div class="banner banner_w-btn wow bounceInUp" data-wow-duration="2s"><img
                                class="img-responsive" src="{{ asset('client/media/banners/5.jpg')}}" height="200" width="1170"
                                alt="Banner">
                        <div class="banner__inner">
                            <div class="banner__title">Mega Makeup Sale</div>
                            <span class="banner__info">UPTO 35% OFF</span> <a
                                    class="banner__btn ui-btn ui-btn_primary" href="javascript:void(0);">SHOP
                                NOW</a></div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <div class="border-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <section class="section-area section-default wow bounceInRight" data-wow-duration="2s">
                                <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>SPECIAL PRODUCTS</h3>
                                <div class="wrap-slider">
                                    <ul class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
                                        data-min480="1"
                                        data-min768="2"
                                        data-min992="2"
                                        data-min1200="2"
                                        data-pagination="false"
                                        data-navigation="true"
                                        data-auto-play="4000"
                                        data-stop-on-hover="true">
                                        <li class="products__item"><a class="products__foto"
                                                                      href="{{ asset('client/media/catalog/5.jpg')}}"
                                                                      rel="prettyPhoto"> <img
                                                        src="{{ asset('client/media/catalog/2.jpg')}}" height="260" width="260"
                                                        alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Samsung Galaxy S6 White</a></h4>
                                            <div class="products__category"><a href="#">SMARTPHONES</a></div>
                                            <div class="products__inner clearfix"><span class="products__price-new">$720</span>
                                                <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i
                                                            class="icon icon-bag color_primary"
                                                            aria-hidden="true"></i> Add to cart
                                                </button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span></footer>
                                        </li>
                                        <li class="products__item"><a class="products__foto"
                                                                      href="{{ asset('client/media/catalog/6.jpg')}}"
                                                                      rel="prettyPhoto"> <img
                                                        src="{{ asset('client/media/catalog/3.jpg')}}" height="260" width="260"
                                                        alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                                            <div class="products__category"><a href="#">PERFUMES</a></div>
                                            <div class="products__inner clearfix"><span class="products__price-new">$129</span>
                                                <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i
                                                            class="icon icon-bag color_primary"
                                                            aria-hidden="true"></i> Add to cart
                                                </button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span></footer>
                                            <span class="label-wrap"><span
                                                        class="label label-warning">NEW</span></span></li>
                                        <li class="products__item"><a class="products__foto"
                                                                      href="{{ asset('client/media/catalog/7.jpg')}}"
                                                                      rel="prettyPhoto"> <img
                                                        src="{{ asset('client/media/catalog/4.jpg')}}" height="260" width="260"
                                                        alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Beats Solo Wireless</a></h4>
                                            <div class="products__category"><a href="#">HEADPHONES</a></div>
                                            <div class="products__inner clearfix"><span class="products__price-new">$360</span>
                                                <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i
                                                            class="icon icon-bag color_primary"
                                                            aria-hidden="true"></i> Add to cart
                                                </button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span></footer>
                                        </li>
                                        <li class="products__item"><a class="products__foto"
                                                                      href="{{ asset('client/media/catalog/6.jpg')}}"
                                                                      rel="prettyPhoto"> <img
                                                        src="{{ asset('client/media/catalog/3.jpg')}}" height="260" width="260"
                                                        alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                                            <div class="products__category"><a href="#">PERFUMES</a></div>
                                            <div class="products__inner clearfix"><span class="products__price-new">$129</span>
                                                <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i
                                                            class="icon icon-bag color_primary"
                                                            aria-hidden="true"></i> Add to cart
                                                </button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span></footer>
                                            <span class="label-wrap"><span
                                                        class="label label-warning">NEW</span></span></li>
                                    </ul>
                                    <!-- end products -->
                                </div>
                                <!-- end wrap-slider -->
                            </section>
                            <!-- end section-area -->

                        </div>
                        <div class="col-md-6 col-xs-12">
                            <section class="section-area section-default wow bounceInRight" data-wow-duration="2s">
                                <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>HOT DEALS</h3>
                                <div class="wrap-slider">
                                    <div class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
                                         data-min480="1"
                                         data-min768="2"
                                         data-min992="2"
                                         data-min1200="2"
                                         data-pagination="false"
                                         data-navigation="true"
                                         data-auto-play="400000"
                                         data-stop-on-hover="true">
                                        <div class="products__item"><a class="products__foto"
                                                                       href="{{ asset('client/media/catalog/6.jpg')}}"
                                                                       rel="prettyPhoto"> <img
                                                        src="{{ asset('client/media/catalog/3.jpg')}}" height="260" width="260"
                                                        alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                                            <div class="products__category"><a href="#">PERFUMES</a></div>
                                            <div class="products__inner clearfix"><span class="products__price-new">$235</span>
                                                <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i
                                                            class="icon icon-bag color_primary"
                                                            aria-hidden="true"></i> Add to cart
                                                </button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span></footer>
                                            <span class="label-wrap"><span
                                                        class="label label-info">HOT</span></span></div>
                                        <div class="products__item"><a class="products__foto"
                                                                       href="{{ asset('client/media/catalog/9.jpg')}}"
                                                                       rel="prettyPhoto"> <img
                                                        src="{{ asset('client/media/catalog/9.jpg')}}" height="260" width="260"
                                                        alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                                            <div class="products__category"><a href="#">LAPTOPS</a></div>
                                            <div class="products__inner clearfix"><span class="products__price-new">$1.333</span>
                                                <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i
                                                            class="icon icon-bag color_primary"
                                                            aria-hidden="true"></i> Add to cart
                                                </button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span></footer>
                                            <span class="label-wrap"><span
                                                        class="label label-info">HOT</span></span></div>
                                        <div class="products__item"><a class="products__foto"
                                                                       href="{{ asset('client/media/catalog/7.jpg')}}"
                                                                       rel="prettyPhoto"> <img
                                                        src="{{ asset('client/media/catalog/7.jpg')}}" height="260" width="260"
                                                        alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Elekta 50” UHD 3D LED TV</a></h4>
                                            <div class="products__category"><a href="#">LED TV’s</a></div>
                                            <div class="products__inner clearfix"><span class="products__price-new">$685</span>
                                                <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i
                                                            class="icon icon-bag color_primary"
                                                            aria-hidden="true"></i> Add to cart
                                                </button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span></footer>
                                            <span class="label-wrap"><span
                                                        class="label label-info">HOT</span></span></div>
                                        <div class="products__item"><a class="products__foto"
                                                                       href="{{ asset('client/media/catalog/9.jpg')}}"
                                                                       rel="prettyPhoto"> <img
                                                        src="{{ asset('client/media/catalog/9.jpg')}}" height="260" width="260"
                                                        alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                                            <div class="products__category"><a href="#">LAPTOPS</a></div>
                                            <div class="products__inner clearfix"><span class="products__price-new">$1.333</span>
                                                <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i
                                                            class="icon icon-bag color_primary"
                                                            aria-hidden="true"></i> Add to cart
                                                </button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span></footer>
                                            <span class="label-wrap"><span
                                                        class="label label-info">HOT</span></span></div>
                                    </div>
                                    <!-- end products -->
                                </div>
                                <!-- end wrap-slider -->
                            </section>
                            <!-- end section-area -->

                        </div>
                    </div>
                    <section class="section-area section-list-posts wow bounceInRight" data-wow-duration="2s">
                        <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>LATEST BLOG POSTS</h3>
                        <div class="wrap-slider">
                            <div class="list-posts_mod-a list-posts_carusel list-unstyled owl-carousel owl-theme_mod-b owl-theme enable-owl-carousel"
                                 data-min480="1"
                                 data-min768="3"
                                 data-min992="3"
                                 data-min1200="3"
                                 data-pagination="false"
                                 data-navigation="true"
                                 data-auto-play="4000"
                                 data-stop-on-hover="true">
                                <article class="list-posts__article clearfix">
                                    <div class="img-hover-effect"><img class="img-responsive"
                                                                       src="{{ asset('client/media/420x250/1.png') }}" height="250"
                                                                       width="420" alt="Foto"></div>
                                    <div class="list-posts__info"><i class="icon icon-user"></i><span
                                                class="list-posts__autor">By <a class="color_primary"
                                                                                href="javascript:void(0);">MEX</a></span>
                                        <i class="icon icon-calendar"></i><span class="list-posts__date"> June 20, 2015 </span>
                                    </div>
                                    <h2 class="list-posts__title">Praesent auctor justo et pulvinar</h2>
                                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec
                                        hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem
                                        felis sollicitudin sed.</p>
                                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a>
                                </article>
                                <article class="list-posts__article clearfix">
                                    <div class="img-hover-effect"><img class="img-responsive"
                                                                       src="{{ asset('client/media/420x250/2.png') }}" height="250"
                                                                       width="420" alt="Foto"></div>
                                    <div class="list-posts__info"><i class="icon icon-user"></i><span
                                                class="list-posts__autor">By <a class="color_primary"
                                                                                href="javascript:void(0);">MEX</a></span>
                                        <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span>
                                    </div>
                                    <h2 class="list-posts__title">Nam volutpat ornare enim cras</h2>
                                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec
                                        hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem
                                        felis sollicitudin sed.</p>
                                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a>
                                </article>
                                <article class="list-posts__article clearfix">
                                    <div class="img-hover-effect"><img class="img-responsive"
                                                                       src="{{ asset('client/media/420x250/1.png') }}" height="250"
                                                                       width="420" alt="Foto"></div>
                                    <div class="list-posts__info"><i class="icon icon-user"></i><span
                                                class="list-posts__autor">By <a class="color_primary"
                                                                                href="javascript:void(0);">MEX</a></span>
                                        <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span>
                                    </div>
                                    <h2 class="list-posts__title">Praesent auctor justo et pulvinar</h2>
                                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec
                                        hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem
                                        felis sollicitudin sed.</p>
                                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a>
                                </article>
                                <article class="list-posts__article clearfix">
                                    <div class="img-hover-effect"><img class="img-responsive"
                                                                       src="{{ asset('client/media/420x250/2.png') }}" height="250"
                                                                       width="420" alt="Foto"></div>
                                    <div class="list-posts__info"><i class="icon icon-user"></i><span
                                                class="list-posts__autor">By <a class="color_primary"
                                                                                href="javascript:void(0);">MEX</a></span>
                                        <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span>
                                    </div>
                                    <h2 class="list-posts__title">Nam volutpat ornare enim cras</h2>
                                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec
                                        hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem
                                        felis sollicitudin sed.</p>
                                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a>
                                </article>
                            </div>
                        </div>
                        <!-- end wrap-slider -->
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

    <div class="section-area section-default section-list-clients wow bounceInUp" data-wow-duration="2s">
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
                        <div class="list-clients__item"><img class="img-responsive" src="{{ asset('client/media/clients/1.png') }}"
                                                             height="80" width="136" alt="Clients"></div>
                        <div class="list-clients__item"><img class="img-responsive" src="{{ asset('client/media/clients/2.png') }}"
                                                             height="80" width="146" alt="Clients"></div>
                        <div class="list-clients__item"><img class="img-responsive" src="{{ asset('client/media/clients/3.png') }}"
                                                             height="80" width="98" alt="Clients"></div>
                        <div class="list-clients__item"><img class="img-responsive" src="{{ asset('client/media/clients/4.png') }}"
                                                             height="80" width="171" alt="Clients"></div>
                        <div class="list-clients__item"><img class="img-responsive" src="{{ asset('client/media/clients/5.png') }}"
                                                             height="80" width="100" alt="Clients"></div>
                        <div class="list-clients__item"><img class="img-responsive" src="{{ asset('client/media/clients/3.png') }}"
                                                             height="80" width="98" alt="Clients"></div>
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
                    <div class="subscribe subscribe_mod-a"><i class="subscribe__icon icon-envelope-open"></i>
                        <div class="subscribe__inner"><span class="subscribe__title">Grab the Best Deals</span>
                            <span class="subscribe__description">Get Latest Deals, Offers & Products updates via Email</span>
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

    <div class="section-area section-social-links wow bounceInRight" data-wow-duration="2s" data-wow-delay="1s">
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
    <!-- end section-social-links -->

@endsection