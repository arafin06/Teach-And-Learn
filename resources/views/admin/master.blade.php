<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel/Teach&Learn</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}admin/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}admin/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}admin/css/core.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}admin/css/components.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}admin/css/colors.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset('/')}}admin/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}admin/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}admin/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}admin/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('/')}}admin/js/core/app.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
@include('admin.include.header')
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        @include('admin.include.sidebar')
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper" >




            @yield('body')









        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->



</body>
</html>
