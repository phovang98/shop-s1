@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <aside class="sidebar">
                    <section class="widget widget-category">
                        <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>CATEGORIES</h3>
                        <div class="block_content">
                            <ul class="list-categories list-categories_mod-a list list-links">
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">T-SHIRTS & APPAREL</span> </a> </li>
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">ELECTRONICS & GADGETS</span> </a> </li>
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">TOOLS & OUTDOORS</span> </a> </li>
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">ELECTRONICS & GADGETS</span> </a> </li>
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">AUDIO & SOUND SYSTEMS</span> </a> </li>
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">KIDS TOYS</span> </a> </li>
                            </ul>
                        </div>
                    </section>
                    <!-- end widget-category -->

                    <section class="widget widget-search">
                        <h3 class="widget-title ui-title-block"><i class="icon fa fa-bars"></i>SEARCH</h3>
                        <form method="get" class="form-search clearfix" id="search-global-form">
                            <input class="form-search__input" type="text">
                            <button class="form-search__submit" type="submit"><i class="icon icon-magnifier"></i></button>
                        </form>
                    </section>
                    <section class="widget widget-posts">
                        <h3 class="widget-title ui-title-block"><i class="icon fa fa-bars"></i>recent posts</h3>
                        <div class="block_content">
                            @foreach($articleNews as $articleNew)
                                <div class="widget-posts__wrap">
                                    <section class="widget-posts__item clearfix">
                                        <div class="entry-thumbnail"> <a class="img" href="{{route('client.article-detail',$article->id)}}"> <img class="img-responsive" src="{{ asset($articleNew->image) }}" height="100" width="100" alt="Foto"></a> </div>
                                        <div class="entry-main">
                                            <h4 class="entry-header"><a href="{{route('client.article-detail',$articleNew->id)}}">{{ $articleNew->title }}</a></h4>
                                            <div class="entry-meta">
                                                <div class="meta"><i class="icon icon-calendar"></i>
                                                    {{ $articleNew->created_at }}
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- end widget-post__item -->
                                </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- end widget-posts -->

                    <section class="widget widget-cloud clearfix">
                        <h3 class="widget-title ui-title-block"><i class="icon fa fa-bars"></i>TAGS</h3>
                        <div class="block_content">
                            <div class="tagcloud">
                                <ul class="wp-tag-cloud list-unstyled">
                                    <li><a href="/">Shoes For Her</a></li>
                                    <li><a href="/">Perfumes</a></li>
                                    <li><a href="/">Stuff</a></li>
                                    <li><a href="/">Tablets</a></li>
                                    <li><a href="/">Smartphones</a></li>
                                    <li><a href="/">Office</a></li>
                                    <li><a href="/">iPad</a></li>
                                    <li><a href="/">Apple</a></li>
                                    <li><a href="/">Home Appliances</a></li>
                                    <li><a href="/">Outdoor</a></li>
                                    <li><a href="/">Brand Watches</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- end widget-cloud -->

                    <section class="widget widget-archives">
                        <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>ARCHIVES</h3>
                        <div class="block_content">
                            <ul class="list-categories list-categories_mod-a list list-links">
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">MAY 2015</span> </a> </li>
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">APRIL 2015</span> </a> </li>
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">MARCH 2015</span> </a> </li>
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">FEBRUARY 2015</span> </a> </li>
                                <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">JANUARY 2015</span> </a> </li>
                            </ul>
                        </div>
                    </section>
                    <!-- end widget-archives -->

                    <section class="widget widget-text">
                        <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>TEXT WIDGET</h3>
                        <div class="block_content">
                            <p>Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicit udin sed. Lorem ipsum dolo  sit amet, consectetur adipisicing elit eiusmod tempor incididunt labore etarb dolore magna aliqua. Ut enim ad minim.</p>
                        </div>
                    </section>
                    <!-- end widget-text -->
                </aside>
                <!-- end sidebar -->
            </div>
            <!-- end col -->

            <div class="col-md-9">
                <main class="main-content">
                    <div class="wrap-title-page">
                        <h1 class="ui-title-page">READ OUR BLOG</h1>
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li class="active">Blog</li>
                        </ol>
                    </div>
                    <!-- end wrap-title-page -->

                    <div class="list-posts list-posts_mod-b list-unstyled">
                        @foreach($articles as $article)
                            <article class="list-posts__article clearfix"> <img class="img-responsive" src="{{ asset($article->image) }}" height="150" width="870" alt="Foto">
                                <div class="list-posts__info pull-right"> <i class="icon icon-user"></i>
                                    <span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">{{ $article->author }}</a></span> <i class="icon icon-calendar"></i>
                                    <span class="list-posts__date">{{ $article->created_at }}</span>
                                </div>
                                <h2 class="list-posts__title">{{ $article->title }}</h2>
                                <p>{{ $article->overview }}</p>
                                <a class="btn btn-primary" href="{{route('client.article-detail',$article->id)}}">READ MORE</a>
                            </article>
                        @endforeach
                    </div>
                    {{ $articles->links() }}
                </main>
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