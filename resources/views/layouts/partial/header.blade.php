@php
    $totalItem = 0;
    $totalPrice = 0;
    foreach($cart as $c){
        $totalItem += $c['quantity'];
        $totalPrice += ($c['quantity']*$c['price']);
    }
@endphp
<header class="header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="top-header__select"><span>Language</span>
                        <div class="btn-group">
                            <button type="button" class="btn_select dropdown-toggle" data-toggle="dropdown">
                                English<span class="caret color_primary"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="javascript:void(0);">English</a></li>
                                <li><a href="javascript:void(0);">Dutch</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="top-header__select"><span>Currency</span>
                        <div class="btn-group">
                            <button type="button" class="btn_select dropdown-toggle" data-toggle="dropdown">
                                USD<span class="caret color_primary"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="javascript:void(0);">USD</a></li>
                                <li><a href="javascript:void(0);">EURO</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="top-header__links list-unstyled">
                        <li class="top-header__link"><a href="javascript:void(0);">MY ACCOUNT</a></li>
                        <li class="top-header__link"><a href="javascript:void(0);">WISHLIST</a></li>
                        <li class="top-header__link"><a href="javascript:void(0);">CHECKOUT</a></li>
                        <li class="top-header__link"><a href="javascript:void(0);">DELIVERY</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="header-inner">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <a href="{{ route('client.index') }}" class="logo"><img class="logo__img" src="{{ asset('client/img/logo.png')}}" height="51" width="162" alt="Logo"></a>
                </div>
                <div class="col-md-6 col-xs-12">
                        <div class="">
                            <form action="{{ route('client.product') }}" method="get" class="product-search" >
                                <input class="product-search__field" id="searchQuery" type="search" name="keyword">
                                <button class="product-search__btn ui-btn ui-btn_primary">SEARCH</button>
                            </form>
                        </div>
                    <!-- end header-search -->
                </div>
                <!-- end col -->

                <div class="col-md-3 col-xs-12">
                    <div class="header-cart">
                        <div class="header-cart__preview"> <span class="icon icon-bag color_primary" aria-hidden="true"></span>
                            <span class="header-cart__inner"> <span class="header-cart__qty">CART ITEMS: <span class="color_primary mini-cart-count">({{ $totalItem }})</span></span>
                                <span class="header-cart__amount">TOTAL: <span class="color_primary ammount">${{ $totalPrice }}</span></span> </span> <i class="caret"></i>
                        </div>
                        <div class="header-cart__product">
                            <h3 class="header-cart__title">cart details</h3>
                            <ul class="product-list list-unstyled mini-cart-list">
                                @foreach ($cart as $item)
                                    <li class="product-list__item clearfix"> <a class="product-list__img" href="javascript:void(0);"><img class="img-responsive" src="{{ asset($item['image'])}}" alt="Product"></a>
                                        <div class="product-list__inner">
                                            <h4 class="product-list__name"><a class="product-list__link" href="javascript:void(0);"><span class="product-list__model">{{ $item['name'] }} </span>@foreach($productCategories as $category)@if($item['category_id'] == $category->id) {{ $category->name }} @endif @endforeach</a></h4>
                                            <span class="product-list__price">{{$item['quantity']}} x ${{$item['price']}}</span>
                                        </div>
                                        <i class="product-list__del icon icon-trash color_primary"></i>
                                    </li>
                                @endforeach

                            </ul>
                            <div class="product-list__total">Subtotal:<span class="product-list__total_price ammount">${{ $totalPrice }}</span></div>
                            <div class="header-cart__buttons clearfix"> <a class="ui-btn ui-btn_default" href="{{ route('client.cart') }}">View Cart</a> @if(session()->has('cart'))<a class="ui-btn ui-btn_primary" href="{{route('client.checkout')}}">Checkout</a> </div>@endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row-->
        </div>
        <!-- end header-inner-->
    </div>
    <!-- end container-->
</header>
