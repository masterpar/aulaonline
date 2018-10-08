        {{-- links  --}}
@extends('layouts.header-inicio')

@section('contenido')

<body class="page-sub-page page-course-detail">
<!-- Wrapper -->
<div class="wrapper">

<!-- Header -->
<div class="navigation-wrapper">

                {{--  menú usuario --}}
    <div class="secondary-navigation-wrapper">
        <div class="container">
            <div class="navigation-contact pull-left">Informes:  <span class="opacity-70">000-123-456-789</span></div>
            <ul class="secondary-navigation list-unstyled pull-right">
                @include('layouts.navigations.' . \App\User::navigation() )                
            </ul>
        </div>
    </div><!-- /.menú usuario -->

@include('layouts.menu')

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Curso</a></li>
        <li class="active">{{$course->name}}</li>
    </ol>
</div>
<!-- end Breadcrumb -->

    <div class="background">
        <img src="/assets/img/background-city.png"  alt="background">
    </div>
</div>
<!-- end Header -->

<!-- Footer -->
@include('layouts.footer')
</div>
<!-- end Wrapper -->
@endsection