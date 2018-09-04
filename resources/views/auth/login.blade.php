
@extends('layouts.navigation')
@section('contenido')


<body class="gray-bg"> 
    <div class="middle-box text-center loginscreen  animated fadeInDown">
             <div>
                <h1 class="logo-name">Aula5</h1>

            </div>
            <h3>Bienvenido a Aula Online</h3>
            <p>Plataforma de Cursos Online </p>
            <p>Iniciar Sesión</p>


           <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail" name="email"
                    value="{{ old('email') }}" required autofocus>
                </div>

                         @if ($errors->has('email'))
                                <li class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </li>
                         @endif

                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                    placeholder="Contraseña" name="password" required>
                </div>

                        @if ($errors->has('password'))
                            <li class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </li>
                        @endif

                <button type="submit" class="btn btn-success block full-width m-b">Entrar</button>
                <a href="{{ route('password.request') }}"><small>Olvidaste tu Contraseña?</small></a>
            </form>

           {{--  Inicar por redes sociales --}}
            @include('layouts.loginSocial')
            
    </div>

</body>

 @endsection
