 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Aula Online') }}</title>

    
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="/usuario/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/usuario/revolution/css/settings.css">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="/usuario/stylesheet/bootstrap.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="/usuario/stylesheet/style.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="/usuario/stylesheet/colors/color1.css" id="colors"> 

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="/usuario/stylesheet/responsive.css">

    <!-- Carousel -->
    <link rel="stylesheet" type="text/css" href="/usuario/stylesheet/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/usuario/stylesheet/owl.theme.default.min.css">

    <!-- FancyBox -->
    <link rel="stylesheet" type="text/css" href="/usuario/fancybox/jquery.fancybox.css" media="screen"/>

    <!-- Favicon and touch icons  -->
    <link href="icons/icon.png" rel="shortcut icon">

    <!-- Jquery -->
    <script src="/usuario/js/jquery.min.js"></script>  

</head>
    <div id="preloader">
            <div id="preloader-status"></div>
        </div>

        <div class="header-wrap">
            <header id="header" class="header clearfix">
                <div class="container big">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo logo-top" >                  
                                <a href="index.html" title="Rano Landing Page">
                                    <img class="site-logo"  src="/usuario/images/logo.png" alt="Rano logo"  data-retina="/usuario/images/logo@2x.png" />
                                </a>
                            </div><!-- /.logo -->

                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu main-menu">
                                        <li  class="menu-item">
                                            <a href="index.html" class="active">Inicio</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="index.html">Pagina 1</a></li>
                                                <li class="menu-item"><a href="index-v2.html">Pagina 2</a></li>
                                            </ul>
                                        </li>
                                        <li  class="menu-item">
                                            <a href="#features">Features</a>
                                        </li>
                                        <li  class="menu-item">
                                            <a href="#function">Functionalities</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#latestnews">Latest News</a>
                                        </li>
                                    </ul>    
                                </nav><!-- #site-navigation -->  
                                <div class="btn-menu">
                                    <span></span>
                                </div><!-- //mobile menu button -->
                            </div><!-- /.nav-wrap -->

                        </div><!-- /.col-sm-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </header><!-- /.header -->   
        </div> <!-- /.header-wrap -->

@yield('contenido')


       
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div id="logo-footer" class="logo-ft" >                  
                            <a href="index.html"  title="Rano Template">
                               <img class="site-logo-ft" src="/usuario/images/logo-black.png" alt="image" data-retina="/usuario/images/logo-black@2x.png"/>
                            </a>
                        </div>
                    </div><!-- /.col-lg-4 col-sm-12 -->

                    <div class="col-lg-4 col-sm-12">
                        <div class="copyright">
                            <p>© <a href="#">Aula Online</a> 2018. Todos los derechos reservados.</p>
                        </div>
                    </div><!-- /.col-lg-4 col-sm-12 -->

                    <div class="col-lg-4 col-sm-12">
                        <ul class="flat-socials">
                            <li class="facebook">
                                <a href="#" target="_blank" rel="alternate" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#" target="_blank" rel="alternate" title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="google-plus">
                                <a href="#" target="_blank" rel="alternate" title="Google plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="#" target="_blank" rel="alternate" title="Linkedin"> <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="#" target="_blank" rel="alternate" title="Youtube">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                        </ul><!-- /.flat-socials -->      
                    </div><!-- /.col-lg-4 col-sm-12 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.bottom -->
        
        <div class="button-go-top">
            <a href="#" title="" class="go-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div><!-- /.go top -->

    </div><!-- /.boxed -->

    <!-- Main javascript -->
    <script  src="/usuario/js/jquery.easing.js"></script>
    <script src="/usuario/js/jquery.waypoints.min.js"></script>
    
    <script  src="/usuario/js/jquery.cookie.js"></script>
    <script  src="/usuario/js/main.js"></script>


</html>