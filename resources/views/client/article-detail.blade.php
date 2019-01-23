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
                    <!-- end widget-search -->

                    <section class="widget widget-posts">
                        <h3 class="widget-title ui-title-block"><i class="icon fa fa-bars"></i>recent posts</h3>
                        <div class="block_content">
                            <div class="widget-posts__wrap">
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
                        <h1 class="ui-title-page">READ OUR Article</h1>
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Blog</a></li>
                            <li class="active">Blog Post</li>
                        </ol>
                    </div>
                    <!-- end wrap-title-page -->

                    <div class="list-posts list-posts_mod-b list-unstyled">
                        <article class="list-posts__article list-posts__article_mod-b clearfix"> <img class="img-responsive" src="{{ asset($article->image) }}" height="350" width="870" alt="Foto">
                            <div class="list-posts__info pull-right"> <i class="icon icon-user"></i>
                                <span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">{{ $article->author }}</a></span> <i class="icon icon-calendar"></i>
                                <span class="list-posts__date">{{ asset($article->created_at) }}</span>
                            </div>
                            <h2 class="list-posts__title">{{ $article->title }}</h2>
                                {{ $article->description }}
                            <div class="footer-panel"> <span class="footer-panel__title">TAGS:</span>
                                <ul class="tags-group list-unstyled">
                                    <li><a href="javascript:void(0);">Fashion, </a> </li>
                                    <li><a href="javascript:void(0);">Shop, </a> </li>
                                    <li><a href="javascript:void(0);">Latest Arrivals, </a> </li>
                                    <li><a href="javascript:void(0);">Products, </a> </li>
                                    <li><a href="javascript:void(0);">Makeup Kits</a> </li>
                                </ul>
                            </div>
                        </article>
                        <section class="section-comment">
                            <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>Comments</h3>
                            <ul class="comments-list list-unstyled clearfix">
                                <li>
                                    <article class="comment">
                                        <div class="avatar-placeholder"> <img class="img-responsive" src="assets/media/avatar_comments/1.jpg" height="70" width="70" alt="avatar"></div>
                                        <div class="comment-inner">
                                            <header class="comment-header"> <cite class="comment-author">kate anderson</cite>
                                                <div class="comment-reply">
                                                    <button class="comment-btn">Reply</button>
                                                </div>
                                                <time class="comment-datetime" datetime="2015-06-30 03:25">JUNE 30, 2015 AT 3:25 PM</time>
                                            </header>
                                            <div class="comment-body">
                                                <p>Mollis semper lobortis vitae phasellus turpis commodo libero vamus sed dolor donec turpis. Praesent sit amet non magna vel diam trum elementum. Maecenas quis nulla.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <ul class="children list-unstyled clearfix">
                                        <li>
                                            <article class="comment">
                                                <div class="avatar-placeholder"> <img class="img-responsive" src="assets/media/avatar_comments/2.jpg" height="70" width="70" alt="avatar"></div>
                                                <div class="comment-inner">
                                                    <header class="comment-header"> <cite class="comment-author">Thomas Neil</cite>
                                                        <div class="comment-reply">
                                                            <button class="comment-btn">Reply</button>
                                                        </div>
                                                        <time class="comment-datetime" datetime="2015-06-30 03:25">JUNE 30, 2015 AT 3:25 PM</time>
                                                    </header>
                                                    <div class="comment-body">
                                                        <p>Mollis semper lobortis vitae phasellus turpis commodo libero vamus sed dolor donec turpis. Praesent sit amet non magna vel diam trum elementum. Maecenas quis nulla.</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                    <!-- end children -->
                                </li>
                                <li>
                                    <article class="comment">
                                        <div class="avatar-placeholder"> <img class="img-responsive" src="assets/media/avatar_comments/3.jpg" height="70" width="70" alt="avatar"></div>
                                        <div class="comment-inner">
                                            <header class="comment-header"> <cite class="comment-author">JOHN SMITH</cite>
                                                <div class="comment-reply">
                                                    <button class="comment-btn">Reply</button>
                                                </div>
                                                <time class="comment-datetime" datetime="2015-06-30 03:25">JUNE 30, 2015 AT 3:25 PM</time>
                                            </header>
                                            <div class="comment-body">
                                                <p>Mollis semper lobortis vitae phasellus turpis commodo libero vamus sed dolor donec turpis. Praesent sit amet non magna vel diam trum elementum. Maecenas quis nulla.</p>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                            <!-- end COMMENT LIST -->
                        </section>
                        <!-- end section-comment -->

                        <section class="comment-reply-form">
                            <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>POST A REPLY</h3>
                            <form action="#" method="post" id="comment-reply-form" class="ui-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" placeholder="Name" id="comment-author" name="author" required>
                                        <input class="form-control" type="email" id="comment-email" name="email" required placeholder="Email">
                                        <input class="form-control" type="text" id="comment-website" name="website" placeholder="Website">
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="comment-text" name="comment" required rows="12" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- end comment-reply-form -->
                    </div>
                </main>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
@endsection