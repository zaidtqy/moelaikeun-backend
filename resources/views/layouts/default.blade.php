<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <!-- meta -->
    @include('includes.meta')

    <!-- style -->
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>

<body>
    <!-- Sidebar -->
    @include('includes.sidebar')

    <div id="right-panel" class="right-panel">

        <!-- Navbar -->
        @include('includes.navbar')

        <!-- Content -->
        <div class="content">
            <!-- Content -->
            @yield('content')
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>

    <!-- Script -->
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>

</html>