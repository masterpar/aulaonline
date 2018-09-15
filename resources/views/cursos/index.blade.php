@extends('cursos.plantilla')
@section('contenido')

<body class="blog header_sticky">
    <div class="boxed">  
   		 <div class="page-wrap">
            <div class="page-title">
                <div class="overlay" style="background-image: url('/usuario/images/principal.jpg'); background-repeat: no-repeat; background-size:cover;" ></div>   
                <div class="page-title-container center">
                    <h1>Nuevos Cursos</h1>
                    <p class="sub-title">Accede a cursos, talleres y diplomados </p>
                </div><!-- /.page-title-container -->                 
            </div><!-- /.page-title --> 

            <section class="blog-posts style1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-sm-12">
                            <div class="post-wrap style2">

                            	{{-- /////////////////////////////////////////////////////////post curso --}}
                            	@forelse($courses as $course)

                                <article class="post clearfix">
                                    <div class="feature-post">
                                        <a href="#">
                                            <img src="{{ $course->pathAttachment()}}" alt="image" title="Nowadays, printed materials become fast">
                                        </a>
                                    </div>
                                    <div class="content-post">
                                        <h3 class="title-post">
                                            <a href="#">{{ $course->name }}</a>
                                        </h3>
                                        <div class="entry-meta">
                                            <ul class="meta-post clearfix">
                                                <li class="day">
                                                    <i class="icon-clock" aria="true"></i><a href="#">{{$course->created_at->format('d/m/Y')}}</a>
                                                </li>
                                                <li class="author">
                                                    <i class="icon-user"></i><a href="#">{{$course->teacher->title }}</a>
                                                </li>
                                                <li class="tag">
                                                    <i class="icon-tag"></i><a href="#">{{$course->category->name }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry-post">
                                            <p>{{str_limit($course->description, 300) }} </p>
                                            <a href="#" class="post-read-more">Seguir Leyendo</a>
                                        </div><!-- /.ingreso-curso -->
                                    </div><!-- /.contenido-curso  -->
                                </article><!-- /.curso -->

                            	@empty
                           	    <div class="alert alert-dark"> {{ __("No hay ningún curso") }} </div>
                            	@endforelse
                          
                            </div><!-- /.curso-wrap -->
                            {{ $courses->links() }}
                        </div><!-- /.col-lg-8 col-sm-12 -->

                      {{-- /////////////////////////////////////////////////////////////////   Buscar --}}
                                                
                        <div class="col-lg-4 col-sm-12">
                            <div class="sidebar">
                                <div class="widget widget-search">
                                    <form action="#" id="search" method="get">
                                        <input type="text" id="search-input" class="form-control" placeholder="Buscar"  autocorrect="off">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </form>
                                </div>

						{{-- /////////////////////////////////////////////////////////////////   post recientes --}}
                               @include('cursos.cursosRecientes')

                        {{-- /////////////////////////////////////////////////////////////////   Categorías --}}
                               @include('cursos.categorias')

                        {{-- /////////////////////////////////////////////////////////////////   etiquetas --}}
                               @include('cursos.tags')

                              
                            </div><!-- /.sidebar -->
                        </div><!-- /.col-lg-4 col-sm-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section> <!-- /.blog-posts -->
        </div><!-- /.page-wrap -->

       
</body>

@endsection

