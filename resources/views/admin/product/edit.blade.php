@extends('layouts.app-admin')
@section('title', 'Sửa sản phẩm')
@section('content')
    @php
        $defaultImg = $product->image == null ? asset('images/default-image.png') : $product->image;
    @endphp

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{route('product.save-edit',$product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#main-info"><h4>Thông tin sản phẩm</h4></a></li>
                                <li><a data-toggle="tab" href="#galler-info"><h4>Gallery</h4></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="main-info" class="tab-pane fade in active">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tên sản phẩm <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" value="{{old('name', $product->name)}}" placeholder="Tên sp">
                                            @if ($errors->first('name'))
                                                <span class="text-danger">{{$errors->first('name')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Danh mục <span class="text-danger">*</span></label>
                                            <select name="category_id" class="form-control">
                                                @foreach ($cates as $cate)
                                                    <option
                                                            @if ($cate->id === $product->category_id)
                                                            selected
                                                            @endif
                                                            value="{{$cate->id}}">{{$cate->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nhà cung cấp <span class="text-danger">*</span></label>
                                            <select name="supplier_id" class="form-control">
                                                @foreach ($suppliers as $supplier)
                                                    <option
                                                            @if ($supplier->id === $product->supplier_id)
                                                            selected
                                                            @endif
                                                            value="{{$supplier->id}}">{{$supplier->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Giá bán <span class="text-danger">*</span></label>
                                            <input type="number" name="price"
                                                   value="{{old('price', $product->price)}}"
                                                   class="form-control" placeholder="Giá sp">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Số lượng views </label>
                                            <input type="number" name="views"
                                                   value="{{old('views', $product->views)}}"
                                                   class="form-control" placeholder="Số lượt xem" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Sao đánh giá </label>
                                            <input type="number" name="star"
                                                   value="{{old('star', $product->star)}}"
                                                   class="form-control" placeholder="Sao đánh giá" value="5">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="preview-img">
                                            <img id="preview" src="{{asset($defaultImg)}}" class="img-responsive">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ảnh sản phẩm <span class="text-danger">*</span></label>
                                            <input type="file" name="image" class="form-control" onchange="encodeImageFileAsURL(this)">
                                            @if ($errors->first('image'))
                                                <span class="text-danger">{{$errors->first('image')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Mô tả ngắn</label>
                                            <textarea name="short_desc" rows="10" class="form-control">{!! old('short_desc', $product->overview)!!}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Chi tiết </label>
                                            <textarea name="detail" rows="20" class="form-control">{!!old('detail', $product->description)!!}</textarea>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-sm btn-primary">Cập nhật sản phẩm</button>
                                            <a href="{{route('product.list')}}" class="btn btn-sm btn-danger">Hủy</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="galler-info" class="tab-pane fade">
                                    <table class="table table-stripped">
                                        <tr>
                                            <th>#</th>
                                            <th>Ảnh</th>
                                            <th>URL</th>
                                            <th>
                                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-add">
                                                    Thêm ảnh
                                                </button>
                                            </th>
                                        </tr>
                                        @foreach ($galleries as $item)
                                            <tr id="gl_{{$item->id}}">
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <img src="{{asset($item->image)}}" width="100">
                                                </td>
                                                <td>
                                                    {{asset($item->image)}}
                                                </td>
                                                <td>
                                                    <a href="javascript:;" gallery_id="{{$item->id}}" linkRoute="{{ route('product.remove-gallery',$item->id) }}" class="btn btn-sm btn-danger btn-gallery-remove">Xóa</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
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

    <div class="modal fade" id="modal-add" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Thêm ảnh</h4>
                </div>
                <form action="{{route('product.upload-gallery',$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="preview-img" id="preview-multiple">

                        </div>
                        <div class="form-group">
                            <label for="">Ảnh gallery <span class="text-danger">*</span></label>
                            <input id="gallery" type="file" name="galleries[]" class="form-control" multiple onchange="previewFiles()">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
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

        $('.btn-gallery-remove').on('click', function(){
            var galleryId = $(this).attr('gallery_id');
            var url = $(this).attr('linkRoute');
            Swal({
                title: 'Bạn có chắc chắn muốn xóa ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý'
            })
                .then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: url,
                            method: 'POST',
                            data: {
                                id: galleryId,
                                _token: '{{ csrf_token() }}'
                            },
                            dataType: 'JSON',
                            success: function(rp){

                                $('#gl_'+rp.id).remove();
                            },
                            error: function(){
                                console.log('error');
                            }
                        });
                    }
                })
        });
    </script>
@endsection

