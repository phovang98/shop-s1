@extends('layouts.app-admin')
@section('title', 'Thêm bài viết')
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
                                <li class="active"><a data-toggle="tab" href="#main-info"><h4>Thông tin bài viết</h4></a></li>
                            </ul>
                                <div class="tab-content">
                                    <div id="main-info" class="tab-pane fade in active">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tiêu đề <span class="text-danger">*</span></label>
                                                <input type="text" name="title" id="title" class="form-control" placeholder="Tên sản phẩm" required value="{{ old('title') }}" onkeyup="generateSlug('title', 'slug')">
                                                @if ($errors->first('title'))
                                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Slug <span class="text-danger">*</span></label>
                                                <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" required value="{{ old('slug') }}">
                                                @if ($errors->first('slug'))
                                                    <span class="text-danger">{{$errors->first('slug')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Tác giả <span class="text-danger">*</span></label>
                                                <input type="text" name="author" class="form-control" placeholder="Tên tác giả" required value="{{ old('author') }}">
                                                @if ($errors->first('author'))
                                                    <span class="text-danger">{{$errors->first('author')}}</span>
                                                @endif
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
            if(file == undefined){
                $('#preview' ).attr('src', $('#defaultImage').val());
                return false;
            }
            var reader = new FileReader();
            reader.onloadend = function() {
                // console.log('RESULT', reader.result)
                $('#preview').attr('src', reader.result);
            }
            reader.readAsDataURL(file);
        }

        function generateSlug(inputStart, inputEnd) {
            var title;
            var slug;

            //Lấy text từ thẻ input title
            title = document.getElementById(inputStart).value;

            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*||∣|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '') + '.html';
            //In slug ra textbox có id “slug”
            document.getElementById(inputEnd).value = slug;
        }
    </script>
@endsection


