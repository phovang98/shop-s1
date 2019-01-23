@extends('layouts.app-admin')
@section('title','Danh sách bài viết')
@section('content')
    <div class="box">
        <div class="box-header">
            <div>
                <form action="" method="get" class="col-sm-4 row">
                    <!-- Search form -->
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" name="keyword" value="{{$keyword}}">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Search</button>
                        </span>
                    </div>
                </form>
                <!-- Button Create -->
                <div class="pull-right">
                    <a href="{{ route('article.add') }}" class="btn btn-success "><i class="fa fa-plus-square"></i> <strong>Create</strong></a>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$article->title}}</td>
                        <td>
                            <img src="{{ asset($article->image) }}" alt="{{$article->name}}" width="100">
                        </td>
                        <td>{{$article->author}}</td>
                        <td>
                            <a href="{{ route('article.edit',$article->id) }}" title="Edit" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:;" linkUrl="{{ route('article.remove',$article->id) }}" title="Delete" class="btn btn-danger btn-sm btn-remove"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                @endforeach
                    <tr>
                        <td colspan="7" class="text-center">
                            {{ $articles->links() }}
                        </td>
                    </tr>

                </tbody></table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
@section('customjs')
    <script>
        $(document).ready(function () {
            $('.btn-remove').on('click', function () {
                var url = $(this).attr('linkUrl');
                Swal({
                    title: 'Bạn chắc chăn muốn xóa?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Đồng ý!'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = url;
                        Swal(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });
    </script>
@endsection