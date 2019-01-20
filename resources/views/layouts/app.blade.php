<!doctype html>
<html>
<head>
    @include('layouts.partial.style')
</head>

<body>
<!-- Loader -->
{{--<div id="page-preloader"><span class="spinner"></span></div>--}}
<!-- Loader end -->
<div class="layout-theme   animated-css" data-header="sticky" data-header-top="200">
    <!-- Start Switcher -->
    @include('layouts.partial.switches')
    <!-- End Switcher -->

    <div id="wrapper">
        @include('layouts.partial.header')
        <!-- HEADER END -->

        @include('layouts.partial.menu')
        <!--end top-nav -->

        <!-- HOME -->
            @yield('content')

        @include('layouts.partial.footer')
    </div>
    <!-- end #wrapper -->

</div>
<!-- end layout-theme -->

<!-- SCRIPTS -->
@include('layouts.partial.script')
</body>
</html>
