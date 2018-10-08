        {{-- links  --}}
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
        <img src="/assets/img/background-city.png"  alt="background">
    </div>
</div>
<!-- end Header -->

<!-- Homepage Slider -->
@include('layouts.slider')
<!-- end Homepage Slider -->

<!-- Page Content -->
<div id="page-content">
    <section id="featured-courses">
        <div class="block">
            <div class="container">
                                                                            {{-- BUSQUEDA CURSOS --}}
                        <section id="course-search">
                            <div class="search-box">
                                <header><span class="fa fa-search"></span><h2>Encuentra el curso para ti</h2></header>
                                <form id="course-search-form" role="form" class="form-inline">
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="course-type">Categorías Cursos</label>
                                            <select name="course-type" id="course-type">
                                                <option value="">Graphic Design and 3D</option>
                                                <option value="2">History and Psychology</option>
                                                <option value="3">Marketing</option>
                                                <option value="4">Science</option>
                                            </select>
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="study-level">Nivel de Estudio</label>
                                            <select name="study-level" id="study-level">
                                                <option value="">Study Level</option>
                                                <option value="2">Beginner</option>
                                                <option value="3">Advanced</option>
                                                <option value="4">Intermediate</option>
                                                <option value="5">Professional</option>
                                            </select>
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="full-text">Full Text</label>
                                            <input name="full-text" id="full-text" placeholder="Enter Keyword" type="text">
                                        </div><!-- /.form-group -->
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Webinar
                                        </label>
                                    </div>
                                    <button type="submit" class="btn pull-right">Search</button>
                                </form><!-- /#<!-- /.form-group -->
                            </div><!-- /.course-search-box -->
                        </section><!-- /#course-search -->

                                                         {{--  FIN BUSQUEDA CURSOS  --}}
                <div class="row">                
                    <div class="col-md-8">
                    @foreach($courses as $course)
                    <div class="col-md-4 col-sm-6"  style="margin-top: 20px;">
                        <article class="featured-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="#"><img src="{{ $course->pathAttachment()}}"></a></div>
                            </figure>
                            <div class="description">
                                <a href="#"><h3>{{$course->name}}</h3></a>
                                <a href="#" class="course-category">{{$course->category->name}}</a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>{{$course->created_at->format('d-m-y')}}</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                </div>
                                <div class="stick-to-bottom"><a href="{{route('courses.detail',$course)}}" class="btn">Ver Mas</a></div>
                            </div>
                        </article><!-- /.featured-course -->
                    </div><!-- /.col-md-3 -->
                   @endforeach
                  <div class="text-center" > {{$courses->links()}} </div>
                 </div> {{-- m-d-4 --}}
                                                         {{--  SIDEBAR --}}
                                                     @include('layouts.sidebar')

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.block -->
    </section>
    <!-- /#featured-courses -->

    <section id="latest-courses">
        <div class="block">
            <div class="container">
                <header><h2>Últimos cursos</h2></header>
                <div class="row">
                    <div class="col-md-4">
                        <div class="latest-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/course-01.jpg"></a></div>
                            </figure>
                            <aside class="description">
                                <a href="course-detail-v1.html"><h4>Neuroscience for the Beginners: Complete Course</h4></a>
                                <!--<a href="#" class="course-category">Science</a>-->
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla</p>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                </div>
                            </aside>
                            <hr>
                        </div><!-- /.latest-course -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="latest-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/course-02.jpg"></a></div>
                            </figure>
                            <aside class="description">
                                <a href="course-detail-v1.html"><h4>Architecture Photography: Power of Light and Shadows</h4></a>
                                <!--<a href="#" class="course-category">Science</a>-->
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla</p>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>8 lessons</span>
                                </div>
                            </aside>
                            <hr>
                        </div><!-- /.latest-course -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="latest-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/course-03.jpg"></a></div>
                            </figure>
                            <aside class="description">
                                <a href="course-detail-v1.html"><h4>Character Drawing: Basic and Advanced Principles</h4></a>
                                <!--<a href="#" class="course-category">Science</a>-->
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla</p>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>8 lessons</span>
                                </div>
                            </aside>
                            <hr>
                        </div><!-- /.latest-course -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="latest-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/course-04.jpg"></a></div>
                            </figure>
                            <aside class="description">
                                <a href="course-detail-v1.html"><h4>Introduction to modo 701</h4></a>
                                <!--<a href="#" class="course-category">Science</a>-->
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla</p>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                </div>
                            </aside>
                            <hr>
                        </div><!-- /.latest-course -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="latest-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/course-01.jpg"></a></div>
                            </figure>
                            <aside class="description">
                                <a href="course-detail-v1.html"><h4>Become self marketer</h4></a>
                                <!--<a href="#" class="course-category">Science</a>-->
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla</p>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>8 lessons</span>
                                </div>
                            </aside>
                            <hr>
                        </div><!-- /.latest-course -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="latest-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/course-02.jpg"></a></div>
                            </figure>
                            <aside class="description">
                                <a href="course-detail-v1.html"><h4>History in complex view</h4></a>
                                <!--<a href="#" class="course-category">Science</a>-->
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla</p>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>8 lessons</span>
                                </div>
                            </aside>
                            <hr>
                        </div><!-- /.latest-course -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.block -->
    </section>
    <!-- /#latest-courses -->


     <!-- Partners, Become a Partner -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <section id="partners">
                        <header>
                            <h2>Profesores y Empresas </h2>
                        </header>
                        <div class="section-content">
                            <div class="logos">
                                <div class="logo"><a href=""><img src="assets/img/logo-partner-01.png" alt=""></a></div>
                                <div class="logo"><a href=""><img src="assets/img/logo-partner-02.png" alt=""></a></div>
                                <div class="logo"><a href=""><img src="assets/img/logo-partner-03.png" alt=""></a></div>
                                <div class="logo"><a href=""><img src="assets/img/logo-partner-04.png" alt=""></a></div>
                                <div class="logo"><a href=""><img src="assets/img/logo-partner-05.png" alt=""></a></div>
                            </div>
                        </div>
                    </section>
                </div><!-- /.col-md-9 -->
                <div class="col-md-3">
                    <section id="donation">
                        <header>
                            <h2>Destacados</h2>
                        </header>
                        <div class="section-content">
                            <a href="" class="universal-button">
                                <h3>Conviertete en un profesor</h3>
                                <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                            </a>
                        </div><!-- /.section-content -->
                    </section>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Partners, Become a Partner -->
</div>
<!-- end Page Content -->

<!-- Footer -->
@include('layouts.footer')

</div>
<!-- end Wrapper -->


@endsection

