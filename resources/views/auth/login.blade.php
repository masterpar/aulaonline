        {{-- header  --}}
@extends('layouts.header-inicio')

@section('contenido')

<body class="page-homepage-courses">
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

    <div class="background">
        <img src="assets/img/background-city.png"  alt="background">
    </div>
</div>
<!-- end Header -->

{{-- enlaces --}}
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Inicio</a></li>
        <li class="active">Sesión</li>
    </ol>
</div>
{{-- fin enlaces --}}

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div id="page-main">
                <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-6">
                            <section id="account-sign-in" class="account-block">
                                <header><h2>Iniciar Sesión</h2></header>
                                <form class="form" role="form" method="POST" action="{{ url('login') }}" }}">
                                   @csrf

                                                                {{-- email   --}} 
                                    <div class="input-group">
                                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                    {{-- errors --}}
                                    @if ($errors->has('email'))
                                                    <li class="alert alert-danger" role="alert">
                                                        <span><strong>{{ $errors->first('email') }}</strong></span>
                                                    </li>
                                    @endif
                                                               {{-- contraseña   --}} 
                                    <div class="input-group">
                                    <input type="password" placeholder="Contraseña" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" value="{{ old('password') }}" required autofocus>
                                    </div>
                                     {{-- errors --}}
                                    @if ($errors->has('password'))
                                                    <li class="alert alert-danger" role="alert">
                                                        <span><strong>{{ $errors->first('password') }}</strong></span>
                                                    </li>
                                    @endif


                                    <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar') }} <i class="fa fa-btn fa-sign-in"></i>
                                    </button> 
                                                                 {{--  login Social --}}
                                    <div class="input-group">
                                    @include('auth.layouts.loginSocial')
                                    </div>
                                </form>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <section id="account-register" class="account-block">                                
                                <header><h2>Crear Cuenta</h2></header>
                                <form class="form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                   @csrf
                                                                     {{-- nombres   --}}                                            
                                    <div class="input-group">
                                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name" placeholder="Nombre(s)"  value="{{ old('name') }}" required autofocus>
                                    </div>
                                    {{-- errors --}}
                                    @if ($errors->has('name'))
                                                        <li class="alert alert-danger" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </li>
                                    @endif
                                                                    {{-- apellidos   --}}                                            
                                    <div class="input-group">
                                    <input type="text" class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                    name="last_name" placeholder="Apellido(s)"  value="{{ old('last_name') }}" required autofocus>
                                    </div>
                                    {{-- errors --}}
                                    @if ($errors->has('last_name'))
                                                    <li class="alert alert-danger" role="alert">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </li>
                                    @endif

                                                                {{-- email   --}} 
                                    <div class="input-group">
                                    <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                    {{-- errors --}}
                                    @if ($errors->has('email'))
                                                    <li class="alert alert-danger" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </li>
                                    @endif
                                                               {{-- contraseña   --}} 
                                    <div class="input-group">
                                    <input type="password" placeholder="Constraseña" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" value="{{ old('password') }}" required autofocus>
                                    </div>
                                     {{-- errors --}}
                                    @if ($errors->has('password'))
                                                    <li class="alert alert-danger" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </li>
                                    @endif 
                                                              {{-- confirmar contraseña   --}} 
                                    <div class="input-group">
                                    <input type="password" placeholder="Confirmar Contraseña" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                    name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus>
                                    </div>

                                    {{-- errors --}}
                                    @if ($errors->has('password_confirmation'))
                                                <li class="alert alert-danger" role="alert">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </li>
                                    @endif
                                
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Acepto <a href="#">Terminos y Condiciones</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn pull-right">Crear Cuenta</button>
                                </form>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-10 -->
            </div><!-- /#page-main -->

            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<!-- Footer -->
@include('layouts.footer')

</div>
<!-- end Wrapper -->

@endsection

