<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Aula Online') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Online | Inicio</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    
</head>


    <body class="gray-bg">


     <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">         
                    <ul class="nav navbar-top-links navbar-right">

                          <!-- Cambio de Idioma -->
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i>{{__("Cambiar de Idioma")}}</i>
                                
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                                   
                                <li>
                                    <div class="text-center link-block">
                                        <a href="{{ route('set_language', ['es'])}}">
                                            <i class="fa fa-language"></i> <strong>{{__("Español")}}</strong>
                                        </a>
                                    </div>
                                </li>
                                <li class="divider"></li> 
                                <li>
                                    <div class="text-center link-block">
                                        <a href="{{ route('set_language', ['en'])}}">
                                            <i class="fa fa-language"></i> <strong>{{__("Inglés")}}</strong>
                                        </a>
                                    </div>
                                </li>                                   
                            </ul>
                        </li>
                            
                         <li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                            </li>                    
                        </li>
                    </ul>

                </nav>
            </div>       
        </div>

        @yield('contenido')

</body>

 <!-- Mainly scripts -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>


