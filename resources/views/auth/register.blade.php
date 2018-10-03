@extends('auth.layouts.encabezadoAuth')

@section('content')
<div class="page-header">
    <div class="page-header-image" style="background-image:url(/backend/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method=" POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf
                    <div class="header">
                        <div class="logo-container">
                            <img src="/backend/images/logo.svg" alt="">
                        </div>
                        <h5>Registrarme</h5>
                        <span>Registrarme como nuevo Miembro</span>
                    </div>
                    <div class="content">  
                                                                    {{-- nombres   --}}                                            
                        <div class="input-group">
                            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" placeholder="Nombre(s)"  value="{{ old('name') }}" required autofocus>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                                    {{-- errors --}}
                                    @if ($errors->has('name'))
                                                        <li class="alert alert-danger" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </li>
                                    @endif
                                    {{--  end-erros --}}

                                                                       {{-- apellidos   --}}                                            
                        <div class="input-group">
                            <input type="text" class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                            name="last_name" placeholder="Apellido(s)"  value="{{ old('last_name') }}" required autofocus>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                                    {{-- errors --}}
                                    @if ($errors->has('last_name'))
                                                        <li class="alert alert-danger" role="alert">
                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                        </li>
                                    @endif
                                    {{--  end-erros --}}


                                                                    {{-- email   --}} 
                        <div class="input-group">
                            <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                                       {{-- errors --}}
                                    @if ($errors->has('email'))
                                                        <li class="alert alert-danger" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </li>
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
                                                        <li class="alert alert-danger" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </li>
                                    @endif
                                    {{--  end-erros --}}   

                                                                  {{-- confirmar contraseña   --}} 
                        <div class="input-group">
                            <input type="password" placeholder="Confirmar Contraseña" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                             name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>

                                 {{-- errors --}}
                                @if ($errors->has('password_confirmation'))
                                                    <li class="alert alert-danger" role="alert">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </li>
                                @endif
                                {{--  end-erros --}}  

                    </div>
                    <div class="checkbox">
                            <input id="terms" type="checkbox">
                            <label for="terms">
                                    Leo y acepto los <a href="javascript:void(0);">términos</a>
                            </label>
                        </div>
                    <div class="footer text-center">
                        <a href="index.html" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">REGISTRARME</a>                        
                    </div>
                </form>
            </div>
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

@endsection

