@extends('layouts.app-admin')
@section('title', 'Thêm nhà cung cấp')
@section('content')
    @php
        $defaultImg = $model->image == null ? asset('images/default-image.png') : $model->image;
    @endphp
    <input type="hidden" value="{{asset($defaultImg)}}" id="defaultImage">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#main-info"><h4>Thông tin nhà cung cấp</h4></a></li>
                            </ul>
                                <div class="tab-content">
                                    <div id="main-info" class="tab-pane fade in active">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên nhà cung cấp <span class="text-danger">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Tên nhà cung cấp" required value="{{ old('name') }}">
                                                @if ($errors->first('name'))
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email@gmail.com" value="{{ old('email') }}">
                                                @if ($errors->first('email'))
                                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Số điện thoại</label>
                                                <input type="number" name="hotline" class="form-control" placeholder="Tên sản phẩm" value="{{ old('hotline') }}">
                                                @if ($errors->first('hotline'))
                                                    <span class="text-danger">{{$errors->first('hotline')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Ghi chú</label>
                                                <textarea name="note" rows="10" class="form-control">{{ old('note') }}</textarea>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-sm btn-success">Tạo sản phẩm</button>
                                                <a href="{{route('supplier.list')}}" class="btn btn-sm btn-danger">Hủy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('customjs')
    <script>
        $(document).ready(function(){
            tinymce.init({
                selector: 'textarea',
                plugins : 'advlist autolink link image lists charmap print preview'
            });
        })
    </script>
@endsection


