@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @php
        $totalPrice = 0;
        if (session()->has('cart')){
            foreach(session('cart') as $c){
                $totalPrice += ($c['quantity']*$c['price']);
            }
        }

    @endphp
    <div class="col-md-4 col-md-offset-4" style="margin-top: 50px">
        <form action="" method="post" class="center">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="customer_name" placeholder="your name" required value="{{ old('customer_name') }}">
                @if ($errors->first('name'))
                    <span class="text-danger">{{$errors->first('customer_name')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" name="customer_email" placeholder="yourEmail@gmail.com" value="{{ old('customer_email') }}">
                @if ($errors->first('customer_email'))
                    <span class="text-danger">{{$errors->first('customer_email')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Phone <span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="customer_phone_number" placeholder="1-(555)-555-5555" required value="{{ old('customer_phone_number') }}">
                @if ($errors->first('customer_phone_number'))
                    <span class="text-danger">{{$errors->first('customer_phone_number')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="inputAddress">Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="customer_address" placeholder="383 Inner Street, Outer City, Newyork , LA USA 33021" required value="{{ old('customer_address') }}">
                @if ($errors->first('customer_address'))
                    <span class="text-danger">{{$errors->first('customer_address')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Payment</label>
                <select class="form-control" name="payment_method">
                    <option value="1">Thanh toán sau khi đã nhận hàng</option>
                    <option value="2">Bảo Kim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Total Price</label>
                <input disabled type="number" class="form-control" value="{{ $totalPrice }}">
                <input type="hidden" class="form-control" name="total_price" value="{{ $totalPrice }}">
            </div>
            <div class="text-center">
                <button class="btn btn-lg btn-success" type="submit" name="btnSubmit">Submit</button>
                <a href="{{ route('client.index') }}" class="btn btn-danger btn-lg">Back</a>
            </div>
        </form>
    </div>
    <div class="clearfix" style="margin-bottom: 50px"></div>
@endsection
@section('style')
    <style>
        select {
            padding: 6px 10px !important;
        }
    </style>
@endsection
