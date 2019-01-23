@extends('layouts.app-admin')
@section('title', 'Thêm User')
@section('content')
    @php
        $defaultImg = $model->avatar == null ? asset('images/default-image.png') : $model->avatar;
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
                                <li class="active"><a data-toggle="tab" href="#main-info"><h4>Thông tin User</h4></a></li>
                            </ul>
                                <div class="tab-content">
                                    <div id="main-info" class="tab-pane fade in active">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tên <span class="text-danger">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Tên User" required value="{{ old('name') }}">
                                                @if ($errors->first('name'))
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email@gmail.com" required value="{{ old('email') }}">
                                                @if ($errors->first('email'))
                                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input id="password" type="password" name="password" class="form-control" required>
                                                @if ($errors->first('password'))
                                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password <span class="text-danger">*</span></label>
                                                <input id="password-confirm" type="password" name="password_confirmation" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Phân quyền <span class="text-danger">*</span></label>
                                                <select class="form-control" name="role">
                                                        <option value="1">Người dùng</option>
                                                        <option value="700">Nhân viên</option>
                                                        <option value="900">Quản trị hệ thống</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="preview-img">
                                                <img id="preview" src="{{asset($defaultImg)}}" class="img-responsive">
                                            </div>
                                            <div class="form-group">
                                                <label>Ảnh đại diện <span class="text-danger">*</span></label>
                                                <input type="file" name="avatar" class="form-control" onchange="encodeImageFileAsURL(this)">
                                                @if ($errors->first('avatar'))
                                                    <span class="text-danger">{{$errors->first('avatar')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-sm btn-success">Tạo User</button>
                                                <a href="{{route('user.list')}}" class="btn btn-sm btn-danger">Hủy</a>
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
    </script>
@endsection


