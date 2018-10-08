<!doctype html>
<html class="no-js " lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Aula Online">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('Aula Online') }}</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/vanillabox/vanillabox.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/layerslider.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/flexslider.css" type="text/css">

    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">

</head>


@yield('contenido')


<script type="text/javascript" src="/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/selectize.min.js"></script>
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="/assets/js/jQuery.equalHeights.js"></script>
<script type="text/javascript" src="/assets/js/icheck.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.tablesorter.min.js"></script>
{{-- <script type="text/javascript" src="assets/js/greensock.js"></script> --}}
{{-- <script type="text/javascript" src="assets/js/layerslider.transitions.js"></script> --}}
{{-- <script type="text/javascript" src="assets/js/layerslider.kreaturamedia.jquery.js"></script> --}}
<script type="text/javascript" src="/assets/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="/assets/js/custom.js"></script>
</html>