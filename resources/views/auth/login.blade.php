@extends('auth.layouts.encabezadoAuth')

@section('content')
<div class="page-header">
    <div class="page-header-image" style="background-image:url(/backend/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="header">
                        <div class="logo-container">
                            <img src="/backend/images/logo.svg" alt="">
                        </div>
                        <h5>Ingresar</h5>

                    </div>
                    <div class="content">  
                                                                    {{-- nombre   --}} 
                        <div class="input-group">
                            <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account"></i>
                            </span>
                        </div>

                                       {{-- errors --}}
                                    @if ($errors->has('email'))
                                        <span >
                                        <li class="alert alert-danger">{{ $errors->first('email') }}</li>
                                        </span>
                                    @endif
                                    {{--  end-erros --}}
                                                                        {{-- contraseña   --}} 
                        <div class="input-group">
                            <input type="password" placeholder="Constraseña" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                             name="password" value="{{ old('password') }}" required autofocus>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                                         {{-- errors --}}
                                    @if ($errors->has('password'))
                                         <span >
                                        <li class="alert alert-danger">{{ $errors->first('password') }}</li>
                                        </span>
                                    @endif
                                    {{--  end-erros --}}   

                        
                        {{--  Inicar por redes sociales --}}
                             @include('auth.layouts.loginSocial')
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-primary btn-lg">{{ __('INGRESAR')}}</button>
                        <hr><a href="{{ route('password.request') }}"><small>{{ __('Recordar mi Contraseña?') }}</small></a>                     
                    </div>                       

                </form>
            </div>
        </div>
            <footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#" target="_blank">Contactos</a></li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Diseñado por<a href="#" target="_blank">Blink</a></span>
            </div>
        </div>
    </footer>
    </div>

</div>

@endsection



           
            


