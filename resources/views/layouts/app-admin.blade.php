<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaopiz | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('layouts.partial-admin.style')
    @yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@include('layouts.partial-admin.header')

<!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
@include('layouts.partial-admin.sidebar')

<!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ session('success') }}
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Danger!</strong> {{ session('danger') }}
            </div>
        @endif
        <!-- Main content -->
        <section class="content">

            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@include('layouts.partial-admin.footer');

</div>
<!-- ./wrapper -->
@include('layouts.partial-admin.script')
@yield('customjs')

</body>
</html>
