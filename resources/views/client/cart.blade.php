@extends('layouts.app')
@section('content')
    @php
        $totalPrice = 0;
        if (session()->has('cart')){
            foreach(session('cart') as $c){
                $totalPrice += ($c['quantity']*$c['price']);
            }
        }

    @endphp
    <div class="box-body no-padding">
        @if(session()->has('cart'))
            <form action="" method="post">
            @csrf
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    @foreach(session('cart') as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{ asset($item['image']) }}" alt="{{$item['name']}}" width="200">
                            </td>
                            <td>{{$item['name']}}</td>
                            <td>${{$item['price']}}</td>
                            <td>
                                <input type="number" min="1" style="width: 50px;" name="qty{{ $item['id'] }} " value="{{ $item['quantity'] }}" size="5"/>
                            </td>
                            <td>
                                <a href="{{ route('client.cart-remove',$item['id']) }}" title="Delete" class="btn btn-danger btn-sm btn-remove"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="6">
                            <div style="float: right">
                            <div class="product-list__total"><h5>Tổng số tiền thanh toán:</h5><span class="product-list__total_price bg-red">${{ $totalPrice }}</span></div>
                            <a href="{{ route('cart.clear') }}" class="abc">Xóa toàn bộ</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <div style="float: right">
                            <button type="submit" class="button">Cập nhật</button>
                            <a href="{{ route('client.checkout') }}" class="abc">Mua hàng</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

        </form>
        @else <h2 class="text-center" style="height: 400px;">Không có sản phẩm nào trong giỏ hàng</h2>
        @endif
    </div>
@endsection

@section('style')
    <style>
        .button {
            background-color: #f40003;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.6;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }

        .button:hover {opacity: 1}

        .abc:link, .abc:visited {
            background-color: #f44336;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }


        .abc:hover, .abc:active {
            background-color: red;
        }
    </style>
@endsection