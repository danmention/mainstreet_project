<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Mainstreet MfB - View Loan</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework"/>

    <!-- Favicon -->
    {{--    <link rel="shortcut icon" href="favicon.png">--}}
    <link rel="icon" href="{{ asset('dist/img/favicon.png') }}" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="{{ asset('vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <style>
        @if(env('SPOO23')=== true)
        *:not(i) {
            font-family: "Avenir", sans-serif, serif !important;
        }
        @endif
    </style>
    @stack('styles')

</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav">

    <!-- Top Navbar -->
@include('includes.topnav')
<!-- /Top Navbar -->

    <!-- Vertical Nav -->
@include('includes.sidebar')
<!-- /Vertical Nav -->


    <!-- Main Content -->
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
    {{--        <nav class="hk-breadcrumb" aria-label="breadcrumb">--}}
    {{--            <ol class="breadcrumb breadcrumb-light bg-transparent">--}}
    {{--                <li class="breadcrumb-item"><a href="#">Manage Loans</a></li>--}}
    {{--                <li class="breadcrumb-item active" aria-current="page">View Loan</li>--}}
    {{--            </ol>--}}
    {{--        </nav>--}}
    <!-- /Breadcrumb -->

        <!-- Container -->
        <div class="container">
