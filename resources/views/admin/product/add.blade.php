@extends('layouts.app-admin')
@section('title', 'Thêm sản phẩm')
@section('content')
    @php
        $defaultImg = $model->image == null ? asset('images/default-image.png') : $model->image;
    @endphp
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#main-info"><h4>Thông tin sản phẩm</h4></a></li>
                            </ul>
                                <div class="tab-content">
                                    <div id="main-info" class="tab-pane fade in active">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tên sản phẩm <span class="text-danger">*</span></label>
                                                <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm" required value="{{ old('name') }}">
                                                @if ($errors->first('name'))
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Danh mục <span class="text-danger">*</span></label>
                                                <select class="form-control" name="category_id">
                                                    <option value="0">please choose category</option>
                                                    @foreach($cates as $cate)
                                                        <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Nhà cung cấp</label>
                                                <select class="form-control" name="supplier_id">
                                                    <option value="0">please choose supplier</option>
                                                    @foreach($suppliers as $supplier)
                                                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Giá bán </label>
                                                <input type="text" name="price" class="form-control" placeholder="Giá sản phẩm" required value="{{ old('price') }}">
                                                @if ($errors->first('price'))
                                                    <span class="text-danger">{{$errors->first('price')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Số lượng views</label>
                                                <input type="number" name="views" class="form-control" placeholder="Tên sản phẩm" value="{{ old('views') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Sao đánh giá</label>
                                                <input type="number" name="star" class="form-control" placeholder="Tên sản phẩm" value="{{ old('star') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="preview-img">
                                                <img id="preview" src="{{asset($defaultImg)}}" class="img-responsive">
                                            </div>
                                            <div class="form-group">
                                                <label>Ảnh sản phẩm <span class="text-danger">*</span></label>
                                                <input type="file" name="image" class="form-control" onchange="encodeImageFileAsURL(this)">
                                                @if ($errors->first('image'))
                                                    <span class="text-danger">{{$errors->first('image')}}</span>
                                                @endif
                                            </div>
                                            <div class="preview-img" id="preview-multiple">

                                            </div>
                                            <div class="form-group">
                                                <label for="">Ảnh gallery (Chọn nhiều ảnh)</label>
                                                <input id="gallery" type="file" name="galleries[]" class="form-control" multiple onchange="previewFiles()">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Mô tả ngắn</label>
                                                <textarea name="overview" rows="10" class="form-control">{{ old('overview') }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Chi tiết </label>
                                                <textarea name="description" rows="20" class="form-control">{{ old('description') }}</textarea>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-sm btn-success">Tạo sản phẩm</button>
                                                <a href="{{route('product.list')}}" class="btn btn-sm btn-danger">Hủy</a>
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

        function encodeImageFileAsURL(element) {
            var file = element.files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                // console.log('RESULT', reader.result)
                $('#preview').attr('src', reader.result);
            }
            reader.readAsDataURL(file);
        }

        function previewFiles() {

            var preview = document.querySelector('#preview-multiple');
            var files   = document.querySelector('#gallery').files;

            function readAndPreview(file) {

                // Make sure `file.name` matches our extensions criteria
                if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
                    var reader = new FileReader();

                    reader.addEventListener("load", function () {
                        var image = new Image();
                        image.height = 100;
                        image.title = file.name;
                        image.src = this.result;
                        preview.appendChild( image );
                    }, false);

                    reader.readAsDataURL(file);
                }

            }

            if (files) {
                [].forEach.call(files, readAndPreview);
            }

        }
    </script>
@endsection


