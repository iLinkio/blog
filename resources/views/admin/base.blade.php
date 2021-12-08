<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Admin-Pro lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Admin-Pro lite design, Admin-Pro lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Admin-Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>@yield('title') | United</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="{{ route('home') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ route('home') }}/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="{{ route('home') }}/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{ route('home') }}/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ route('home') }}/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ route('home') }}/css/pages/dashboard.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ route('home') }}/css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">

<!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Pro</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        @include('admin.partials.topbar')


        @include('admin.partials.navbar')


        <div class="page-wrapper">

            <div class="container-fluid">

            @include('admin.partials.header')


                @yield('content')


            </div>



        </div>

    </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ route('home') }}/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ route('home') }}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ route('home') }}/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="{{ route('home') }}/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ route('home') }}/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ route('home') }}/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="{{ route('home') }}/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="{{ route('home') }}/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="{{ route('home') }}/assets/plugins/d3/d3.min.js"></script>
    <script src="{{ route('home') }}/assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="{{ route('home') }}/js/dashboard.js"></script>
</body>

</html>