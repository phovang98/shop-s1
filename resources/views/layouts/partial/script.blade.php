<script src="{{ asset('client/js/jquery-migrate-1.2.1.js')}}"></script>
<script src="{{ asset('client/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('client/js/modernizr.custom.js')}}"></script>
<script src="{{ asset('client/plugins/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{ asset('client/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('client/js/waypoints.min.js')}}"></script>
<script src="{{ asset('client/plugins/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('client/plugins/jelect/jquery.jelect.js')}}"></script>
<script src="{{ asset('client/plugins/nouislider/jquery.nouislider.all.min.js')}}"></script>

<!--Color Switcher-->
<script src="{{ asset('client/plugins/switcher/js/bootstrap-select.js')}}"></script>
<script src="{{ asset('client/plugins/switcher/js/dmss.js')}}"></script>

<!--THEME-->
<script src="{{ asset('client/js/cssua.min.js')}}"></script>
<script src="{{ asset('client/js/wow.min.js')}}"></script>
<script src="{{ asset('client/js/custom.js')}}"></script>

<script>
    $(document).ready(function(){
        $('.add_to_cart_btn').on('click', function(){
            var itemId = $(this).attr('item_id');
            $.ajax({
                url: '{{route('cart.add')}}',
                method: 'POST',
                data: {
                    id: itemId,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'JSON',
                success: function(rp){
                    // tang so luong san pham tren header
                    var totalItem = 0;
                    var totalPrice = 0;
                    var assetBaseUrl = '{{asset('/')}}';
                    var cartDetail = ``;
                    for(var i = 0; i < rp.data.length; i++){
                        var cItem = rp.data[i];
                        totalItem += rp.data[i].quantity;
                        totalPrice += (rp.data[i].quantity*rp.data[i].price);
                        cartDetail += `<li class="product-list__item clearfix"> <a class="product-list__img" href="javascript:void(0);"><img class="img-responsive" src="${assetBaseUrl + cItem.image}" alt="Product"></a>
                                                <div class="product-list__inner">
                                                <h4 class="product-list__name"><a class="product-list__link" href="javascript:void(0);"><span class="product-list__model">${cItem.name} </span></a></h4>
                                            <span class="product-list__price">${cItem.quantity} x $${cItem.price}</span>
                                                </div>
                                                <i class="product-list__del icon icon-trash color_primary"></i>
                                        </li>`;


                    }
                    $('.mini-cart-count').text(totalItem);
                    $('.ammount').text('$' + totalPrice);
                    $('.mini-cart-list').empty();
                    $('.mini-cart-list').append(cartDetail);
                    console.log(rp);
                }
            })
        })
    });
</script>

@yield('script')