@extends('layouts.app')
@section('content')
    <div class="border-main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar">
                        <section class="widget widget-category widget-category_mod-a">
                            <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>CATEGORIES</h3>
                            <div class="block_content">
                                <ul class="list-categories list list-links">
                                    <li class="list-categories__item dropdown"> <a class="list-sidebar__link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"> <span class="list-categories__name">T-SHIRTS & APPAREL</span> <span class="list-categories__mark"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="javascript:void(0);">Smart LED TV’s</a> </li>
                                            <li> <a href="javascript:void(0);">iPods & Music Players</a> </li>
                                            <li> <a href="javascript:void(0);">Mobile Phones</a> </li>
                                            <li> <a href="javascript:void(0);">Digital Cameras</a> </li>
                                        </ul>
                                    </li>
                                    <li class="list-categories__item dropdown"> <a class="list-sidebar__link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"> <span class="list-categories__name">ELECTRONICS & GADGETS</span> <span class="list-categories__mark"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="javascript:void(0);">Smart LED TV’s</a> </li>
                                            <li> <a href="javascript:void(0);">iPods & Music Players</a> </li>
                                            <li> <a href="javascript:void(0);">Mobile Phones</a> </li>
                                            <li> <a href="javascript:void(0);">Digital Cameras</a> </li>
                                        </ul>
                                    </li>
                                    <li class="list-categories__item dropdown"> <a class="list-sidebar__link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"> <span class="list-categories__name">TOOLS & OUTDOORS</span> <span class="list-categories__mark"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="javascript:void(0);">Smart LED TV’s</a> </li>
                                            <li> <a href="javascript:void(0);">iPods & Music Players</a> </li>
                                            <li> <a href="javascript:void(0);">Mobile Phones</a> </li>
                                            <li> <a href="javascript:void(0);">Digital Cameras</a> </li>
                                        </ul>
                                    </li>
                                    <li class="list-categories__item dropdown"> <a class="list-sidebar__link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"> <span class="list-categories__name">ELECTRONICS & GADGETS</span> <span class="list-categories__mark"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="javascript:void(0);">Smart LED TV’s</a> </li>
                                            <li> <a href="javascript:void(0);">iPods & Music Players</a> </li>
                                            <li> <a href="javascript:void(0);">Mobile Phones</a> </li>
                                            <li> <a href="javascript:void(0);">Digital Cameras</a> </li>
                                        </ul>
                                    </li>
                                    <li class="list-categories__item dropdown"> <a class="list-sidebar__link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"> <span class="list-categories__name">AUDIO & SOUND SYSTEMS</span> <span class="list-categories__mark"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="javascript:void(0);">Smart LED TV’s</a> </li>
                                            <li> <a href="javascript:void(0);">iPods & Music Players</a> </li>
                                            <li> <a href="javascript:void(0);">Mobile Phones</a> </li>
                                            <li> <a href="javascript:void(0);">Digital Cameras</a> </li>
                                        </ul>
                                    </li>
                                    <li class="list-categories__item dropdown"> <a class="list-sidebar__link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"> <span class="list-categories__name">KIDS TOYS</span> <span class="list-categories__mark"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="javascript:void(0);">Smart LED TV’s</a> </li>
                                            <li> <a href="javascript:void(0);">iPods & Music Players</a> </li>
                                            <li> <a href="javascript:void(0);">Mobile Phones</a> </li>
                                            <li> <a href="javascript:void(0);">Digital Cameras</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!-- end widget-category -->

                        <section class="widget widget-price clearfix">
                            <h3 class="widget-title ui-title-block"><i class="icon fa fa-bars"></i>Filter Selection</h3>
                            <div class="wrap-slider-price">
                                <h4 class="slider-price__title slider-price__title_first">PRICE</h4>
                                <div class="slider-price" id="slider-price"></div>
                                <button class="slider-price__btn ui-btn ui-btn_primary">FILTER NOW</button>
                                <span class="slider-price__wrap-input">
                  <input class="slider-price__input text-right" id="slider-price_min">
                  -
                  <input class="slider-price__input text-left" id="slider-price_max">
                  </span>
                                <h4 class="slider-price__title">COLOR</h4>
                                <ul class="list-price list-unstyled">
                                    <li class="list-price__item"> <a class="list-price__link" href="javascript:void(0);"> <span class="list-price__name">White</span> <span class="list-price__amout">(10)</span> </a> </li>
                                    <li class="list-price__item"> <a class="list-price__link" href="javascript:void(0);"> <span class="list-price__name">Red</span> <span class="list-price__amout">(25)</span> </a> </li>
                                    <li class="list-price__item"> <a class="list-price__link" href="javascript:void(0);"> <span class="list-price__name">Blue</span> <span class="list-price__amout">(16)</span> </a> </li>
                                    <li class="list-price__item"> <a class="list-price__link" href="javascript:void(0);"> <span class="list-price__name">black</span> <span class="list-price__amout">(32)</span> </a> </li>
                                </ul>
                                <h4 class="slider-price__title">Manufacturer</h4>
                                <ul class="list-price list-unstyled">
                                    <li class="list-price__item"> <a class="list-price__link" href="javascript:void(0);"> <span class="list-price__name">Apple</span> <span class="list-price__amout">(10)</span> </a> </li>
                                    <li class="list-price__item"> <a class="list-price__link" href="javascript:void(0);"> <span class="list-price__name">toshiba</span> <span class="list-price__amout">(10)</span> </a> </li>
                                    <li class="list-price__item"> <a class="list-price__link" href="javascript:void(0);"> <span class="list-price__name">panasonic</span> <span class="list-price__amout">(10)</span> </a> </li>
                                    <li class="list-price__item"> <a class="list-price__link" href="javascript:void(0);"> <span class="list-price__name">Dr beats audio</span> <span class="list-price__amout">(10)</span> </a> </li>
                                </ul>
                            </div>
                            <!-- end wrap-slider-price -->
                        </section>
                        <!-- end widget-price -->

                        <section class="widget">
                            <h3 class="widget-title ui-title-block"><i class="icon fa fa-bars"></i>ON SALE</h3>
                            <div class="block_content">
                                <ul class="products-small list-unstyled">
                                    <li class="products-small__item"> <a class="products-small__foto" href="{{ asset('client/media/260x305/1.jpg') }}" rel="prettyPhoto"> <img class="img-responsive" src="{{ asset('client/media/100x100/1.jpg') }}" height="100" width="100" alt="Goods"> </a>
                                        <div class="products-small__inner">
                                            <h4 class="products-small__name"><a href="#">Promate Carmine Red Trendy Bag</a></h4>
                                            <ul class="rating">
                                                <li><i class="icon fa fa-star"></i></li>
                                                <li><i class="icon fa fa-star"></i></li>
                                                <li><i class="icon fa fa-star"></i></li>
                                                <li><i class="icon fa fa-star"></i></li>
                                                <li><i class="icon fa fa-star disabled"></i></li>
                                            </ul>
                                            <span class="products-small__price">$35</span> <span class="products-small__action">10% Off</span> </div>
                                        <div class="clearfix"></div>
                                        <footer class="products-btns clearfix">
                                            <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                            <span class="products-btns__other pull-right">
                        <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                        <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                        </span> </footer>
                                    </li>
                                    <li class="products-small__item"> <a class="products-small__foto" href="{{ asset('client/media/260x305/1.jpg') }}" rel="prettyPhoto"> <img class="img-responsive" src="{{ asset('client/media/100x100/3.jpg') }}" height="100" width="100" alt="Goods"> </a>
                                        <div class="products-small__inner">
                                            <h4 class="products-small__name"><a href="#">Elekta 50” LED 3D TV</a></h4>
                                            <ul class="rating">
                                                <li><i class="icon fa fa-star"></i></li>
                                                <li><i class="icon fa fa-star"></i></li>
                                                <li><i class="icon fa fa-star"></i></li>
                                                <li><i class="icon fa fa-star"></i></li>
                                                <li><i class="icon fa fa-star disabled"></i></li>
                                            </ul>
                                            <span class="products-small__price">$685</span> <span class="products-small__action">10% Off</span> </div>
                                        <div class="clearfix"></div>
                                        <footer class="products-btns clearfix">
                                            <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                            <span class="products-btns__other pull-right">
                        <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                        <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                        </span> </footer>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!-- end widget -->

                    </aside>
                    <!-- end sidebar -->
                </div>
                <!-- end col -->

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="wrap-title-page">
                                <h1 class="ui-title-page">SHOP CATEgory</h1>
                                <ol class="breadcrumb">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li class="active">Shop</li>
                                </ol>
                            </div>
                            <!-- end wrap-title-page -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="section-area"> <a href="javascript:void(0);"><img class="img-responsive" src="{{ asset('client/media/banners/8.jpg') }}" height="160" width="870" alt="Banner"></a> </div>
                    <div class="sorting clearfix"> <span class="sorting__info">Showing 1–9 of 16 results</span>
                        <div class="sorting__selects">
                            <div class="sorting__item"> <span class="sorting__name">Show</span>
                                <div class="jelect">
                                    <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                                    <div tabindex="0" role="button" class="jelect-current">9 Items</div>
                                    <ul class="jelect-options">
                                        <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">9 Items</li>
                                        <li data-val='1' tabindex="0"  class="jelect-option">7 Items</li>
                                        <li data-val='2' tabindex="0"  class="jelect-option">8 Items</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sorting__item"> <span class="sorting__name">Sort By</span>
                                <div  class="jelect">
                                    <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                                    <div tabindex="0" role="button" class="jelect-current">Default Sorting</div>
                                    <ul class="jelect-options">
                                        <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Default Sorting</li>
                                        <li data-val='1' tabindex="0"  class="jelect-option">Default Sorting</li>
                                        <li data-val='2' tabindex="0"  class="jelect-option">Default Sorting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end sorting -->

                    <div class="section-area">
                        <ul class="products clearfix">
                            <li class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/2.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/2.jpg') }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">Samsung Galaxy S6 White</a></h4>
                                <div class="products__category"><a href="#">SMARTPHONES</a></div>
                                <div class="products__inner clearfix"> <span class="products__price-new">$720</span> <span class="products__price-old">$89.00</span>
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
                            </li>
                            <li class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/6.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/6.jpg') }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">Canon EOS 1200D</a></h4>
                                <div class="products__category"><a href="#">CAMERAS</a></div>
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
                                <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                            <li class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/7.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/7.jpg') }}" height="260" width="260" alt="Goods"> </a>
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
                            </li>
                            <li class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/8.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/8.jpg') }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">Sony PlayStation 4</a></h4>
                                <div class="products__category"><a href="#">GAMES</a></div>
                                <div class="products__inner clearfix"> <span class="products__price-new">$370</span> <span class="products__price-old">$89.00</span>
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
                            </li>
                            <li class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/9.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/9.jpg') }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                                <div class="products__category"><a href="#">LAPTOPS</a></div>
                                <div class="products__inner clearfix"> <span class="products__price-new">$1.333</span> <span class="products__price-old">$89.00</span>
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
                                <span class="label-wrap"><span class="label label-info">HOT</span></span> </li>
                            <li class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/10.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/10.jpg') }}" height="260" width="260" alt="Goods"> </a>
                                <h4 class="products__name"><a href="#">Eye Shadow Makeup Kit</a></h4>
                                <div class="products__category"><a href="#">MAKEUP</a></div>
                                <div class="products__inner clearfix"> <span class="products__price-new">$80</span> <span class="products__price-old">$89.00</span>
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
                                <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
                            <li class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/5.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/5.jpg') }}" height="260" width="260" alt="Goods"> </a>
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
                                <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
                            <li class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/3.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/3.jpg') }}" height="260" width="260" alt="Goods"> </a>
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
                                <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                            <li class="products__item"> <a class="products__foto" href="{{ asset('client/media/catalog/4.jpg') }}" rel="prettyPhoto"> <img src="{{ asset('client/media/catalog/4.jpg') }}" height="260" width="260" alt="Goods"> </a>
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
                            </li>
                        </ul>
                        <!-- end products -->
                    </div>
                    <!-- end section-area -->

                    <ul class="pagination">
                        <li><a href="#"><i class="icon fa fa-arrow-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icon fa fa-arrow-right"></i></a></li>
                    </ul>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
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