<!doctype html>
<html class="no-js " lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('Aula Online') }}</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="/backend/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link  rel="stylesheet" href="/backend/css/main.css">
<link rel="stylesheet" href="/backend/css/blog.css">
<link rel="stylesheet" href="/backend/css/color_skins.css">
</head>
<body class="theme-purple ls-toggle-menu" style="overflow: auto;" >
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="/backend/images/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Cargando...</p>        
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- menúPrincipal -->
@include('layouts.menuHorizontal')
<!-- Menú Admin -->
@include('layouts.menuAdmin')


<section class="content blog-page">
  {{-- Encabezado --}}
   @include('layouts.jumbotron')
                                                    {{-- post --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 left-box">
                                           {{--  cursos --}}
                @foreach ($courses as $course)
                                  
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="blog-details.html">{{$course->name}}</a></h3>
                        <ul class="meta">
                            <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Creado por: {{$course->teacher->title}}</a></li>
                            <li><a href="#"><i class="zmdi zmdi-label col-amber"></i>{{$course->category->name}}</a></li>
                            <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>Comentarios: 3</a></li>
                        </ul>
                    </div>                    
                    <div class="body">
                        <div class="img-post m-b-15">
                            <img src="{{$course->pathAttachment()}}">
                            <div class="social_share">                            
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                            </div>
                        </div>
                        <p>{{$course->description}}</p>
                        <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Seguir Leyendo</a>                        
                    </div>
                </div>                
                     @endforeach
                                            {{-- fin cursos --}}

                                           {{--  paginación --}}
               {{--  <ul class="pagination pagination-primary">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>    --}}
                {{ $courses->links()}}     

                                            {{--  fin paginación    --}}     
            </div>
            <div class="col-lg-4 col-md-12 right-box">
                <div class="card">
                    <div class="body search">
                        <div class="input-group m-b-0">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Popular</strong> Posts</h2>                        
                    </div>
                    <div class="body widget popular-post">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="border single_post">                                    
                                    <div class="img-post m-b-5">
                                        <img src="/backend/images/blog/blog-page-2.jpg" alt="Awesome Image">                                        
                                    </div>
                                    <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                                    <small>Dec 20, 2017</small>
                                </div>
                                <div class="border single_post m-t-20">
                                    <div class="img-post m-b-5">
                                        <img src="/backend/images/blog/blog-page-3.jpg" alt="Awesome Image">                                            
                                    </div>
                                    <p class="m-b-0">new rules, more cars, more races</p>
                                    <small>Dec 20, 2017</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="card">
                    <div class="header">
                        <h2><strong>Tag</strong> Clouds</h2>                        
                    </div>
                    <div class="body widget tag-clouds">
                        <ul class="list-unstyled m-b-0">
                            <li><a href="#" class="tag badge badge-default">Design</a></li>
                            <li><a href="#" class="tag badge badge-success">Project</a></li>
                            <li><a href="#" class="tag badge badge-info">Creative UX</a></li>
                            <li><a href="#" class="tag badge badge-success">Wordpress</a></li>
                            <li><a href="#" class="tag badge badge-warning">HTML5</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Instagram</strong> Post</h2>                        
                    </div>
                    <div class="body widget">
                        <ul class="list-unstyled instagram-plugin m-b-0">
                            <li><a href="#"><img src="/backend/images/blog/05-img.jpg" alt="image description"></a></li>
                            <li><a href="#"><img src="/backend/images/blog/06-img.jpg" alt="image description"></a></li>
                            <li><a href="#"><img src="/backend/images/blog/07-img.jpg" alt="image description"></a></li>
                            <li><a href="#"><img src="/backend/images/blog/08-img.jpg" alt="image description"></a></li>
                            <li><a href="#"><img src="/backend/images/blog/09-img.jpg" alt="image description"></a></li>
                            <li><a href="#"><img src="/backend/images/blog/10-img.jpg" alt="image description"></a></li>
                            <li><a href="#"><img src="/backend/images/blog/11-img.jpg" alt="image description"></a></li>
                            <li><a href="#"><img src="/backend/images/blog/12-img.jpg" alt="image description"></a></li>
                            <li><a href="#"><img src="/backend/images/blog/13-img.jpg" alt="image description"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Email</strong> Newsletter <small>Get our products/news earlier than others, let’s get in touch.</small></h2>
                    </div>
                    <div class="body widget newsletter">                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Email">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-mail-send"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="/backend/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="/backend/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="/backend/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>
</html>