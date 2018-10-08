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
    <div class="background">
        <img src="/assets/img/background-city.png"  alt="background">
    </div>
</div>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Curso</a></li>
        <li class="active">{{$course->name}}</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <header><h1>{{$course->name}}</h1></header>
        <div class="row">
            <!-- Course Image -->
            <div class="col-md-2">
                <figure class="course-image">
                    <div class="image-wrapper"><img src="{{ $course->pathAttachment()}}"></div>
                </figure>
            </div><!-- end Course Image -->
            <!--MAIN Content-->
            <div class="col-md-6">
                <div id="page-main">
                    <section id="course-detail">
                        <article class="course-detail">
                            <section id="course-header">
                                <header>
                                    <h2 class="course-date">{{$course->created_at->format('d-m-y')}}</h2>
                                    <div class="course-category">Categoria:<a href="#">{{$course->category->name}}</a></div>
                                </header>
                                <hr>
                                <div class="course-count-down" id="course-count-down">
                                    <figure class="course-start">Curso comienza en:</figure>
                                    <!-- /.course-start -->
                                    <div class="count-down-wrapper">
                                        <script type="text/javascript">var _date = 'Mar 27, 2015 23:28';</script>
                                    </div><!-- /.count-down-wrapper -->

                                    @include('cursos.layouts.action_button')
                                    
                                </div><!-- /.course-count-down -->
                                <hr>
                                <figure id="course-summary">
                                    <span class="course-summary" id="course-length"><i class="fa fa-calendar-o"></i>7 Semanas</span>    
                                    <span class="course-summary" id="course-course-time"><i class="fa fa-clock-o"></i>6:00pm – 8:00pm</span>
                                </figure><!-- /#course-summary -->
                            </section><!-- /#course-header -->

                            <section id="course-brief">
                                <header><h2>Resumen del Curso</h2></header>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla, volutpat elit non,
                                    tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet. Vestibulum vitae
                                    aliquet felis, ornare feugiat elit. Nulla varius condimentum elit, sed pulvinar leo sollicitudin vel.
                                </p>
                            </section><!-- /#course-brief -->

                            <section id="course-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs course-detail-tabs">
                                    <li class="active"><a href="#tab-schedule" data-toggle="tab">Schedule</a></li>
                                    <li><a href="#tab-video" data-toggle="tab">Video</a></li>
                                    <li><a href="#tab-speakers" data-toggle="tab">Speakers</a></li>
                                    <li><a href="#tab-gallery" data-toggle="tab">Gallery</a></li>
                                    <li><a href="#tab-faq" data-toggle="tab">FAQ</a></li>
                                </ul><!-- /.course-detail-tabs -->

                                <!-- Tab panes -->
                                <div class="tab-content course-tab-content">
                                    <div class="tab-pane fade in active" id="tab-schedule">
                                        <section class="course-schedule">
                                            <article class="course-schedule-block">
                                                <header><h4>Semana 1:</h4></header>
                                                <ul class="schedule-list">
                                                    <li>
                                                        <h5>Día 1:</h5>

                                                        <div class="details-accordion" data-toggle="collapse" data-target="#detail-1">Details<span class="fa fa-plus-square-o"></span></div><!-- /#detail-1 -->
                                                        <div id="detail-1" class="collapse details-accordion-content">
                                                            <div class="inner">
                                                                <div class="time"><strong>Time to complete:</strong> 2,5 hours</div>
                                                                <p>Nam tristique molestie enim. Vivamus at pharetra eros. Mauris vitae eros vitae ligula accumsan vestibulum.
                                                                    Duis sed fermentum lacus
                                                                </p>
                                                                <hr>
                                                                <strong>Video Preview</strong>
                                                                <iframe src="//player.vimeo.com/video/64373696" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                            </div><!-- /.inner -->
                                                        </div><!-- /.details-accordion-content -->

                                                        <p class="description">
                                                            In order for a business to grow, the entrepreneur must grow.
                                                            First, the entrepreneur’s role will evolve from primarily being
                                                            a “doer” to a manager then to a leader and ultimately to being a
                                                            coach/mentor.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h5>Día 2:</h5>

                                                        <div class="details-accordion" data-toggle="collapse" data-target="#detail-2">Details<span class="fa fa-plus-square-o"></span></div><!-- /#detail-2 -->
                                                        <div id="detail-2" class="collapse details-accordion-content">
                                                            <div class="inner">
                                                                <div class="time"><strong>Time to complete:</strong> 2,5 hours</div>
                                                                <p>Nam tristique molestie enim. Vivamus at pharetra eros. Mauris vitae eros vitae ligula accumsan vestibulum.
                                                                    Duis sed fermentum lacus
                                                                </p>
                                                            </div><!-- /.inner -->
                                                        </div><!-- /.details-accordion-content -->

                                                        <p class="description">
                                                            In order for a business to grow, the entrepreneur must grow.
                                                            First, the entrepreneur’s role will evolve from primarily being
                                                            a “doer” to a manager then to a leader and ultimately to being a
                                                            coach/mentor.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </article><!-- /.course-schedule-block -->
                                            <article class="course-schedule-block">
                                                <header><h4>Semana 2:</h4></header>
                                                <ul class="schedule-list">
                                                    <li>
                                                        <h5>Día 1:</h5>

                                                        <div class="details-accordion" data-toggle="collapse" data-target="#detail-3">Details<span class="fa fa-plus-square-o"></span></div><!-- /#detail-3 -->
                                                        <div id="detail-3" class="collapse details-accordion-content">
                                                            <div class="inner">
                                                                <div class="time"><strong>Time to complete:</strong> 2,5 hours</div>
                                                                <p>Nam tristique molestie enim. Vivamus at pharetra eros. Mauris vitae eros vitae ligula accumsan vestibulum.
                                                                    Duis sed fermentum lacus
                                                                </p>
                                                                <hr>
                                                                <strong>Video Preview</strong>
                                                                <iframe src="//player.vimeo.com/video/64373696" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                            </div><!-- /.inner -->
                                                        </div><!-- /.details-accordion-content -->

                                                        <p class="description">
                                                            Using the Leaders Bank and Trilogy Health Services stories we
                                                            will look at how two businesses put in place people policies,
                                                            practices, and a leadership model that led to high employee
                                                            engagement, loyalty, and productivity that drove high customer
                                                            satisfaction.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </article><!-- /.course-schedule-block -->
                                            <article class="course-schedule-block">
                                                <header><h4>Día 3:</h4></header>
                                                <ul class="schedule-list">
                                                    <li>
                                                        <h5>08:00 am:</h5>
                                                        <p class="description">
                                                            In order for a business to grow, the entrepreneur must grow.
                                                            First, the entrepreneur’s role will evolve from primarily being
                                                            a “doer” to a manager then to a leader and ultimately to being a
                                                            coach/mentor.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h5>11:00 am:</h5>
                                                        <p class="description">
                                                            In order for a business to grow, the entrepreneur must grow.
                                                            First, the entrepreneur’s role will evolve from primarily being
                                                            a “doer” to a manager then to a leader and ultimately to being a
                                                            coach/mentor.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </article><!-- /.course-schedule-block -->
                                        </section><!-- /#tab-schedule -->
                                    </div>
                                    <div class="tab-pane fade" id="tab-video"><iframe src="//player.vimeo.com/video/64373696" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                                    <div class="tab-pane fade" id="tab-speakers">
                                        <section id="course-speakers">
                                            <div class="author-block course-speaker">
                                                <a href="member-detail.html"><figure class="author-picture"><img src="/assets/img/student-testimonial.jpg" alt=""></figure></a>
                                                <article class="paragraph-wrapper">
                                                    <div class="inner">
                                                        <a href="member-detail.html"><header>Claire Doe</header></a>
                                                        <figure>Marketing Specialist</figure>
                                                        <p>
                                                            Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                                            Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                                        </p>
                                                    </div>
                                                </article>
                                            </div><!-- /.author -->
                                            <div class="author-block course-speaker">
                                                <a href="member-detail.html"><figure class="author-picture"><img src="/assets/img/discussion-author-02.jpg" alt=""></figure></a>
                                                <article class="paragraph-wrapper">
                                                    <div class="inner">
                                                        <a href="member-detail.html"><header>Rachel Britain</header></a>
                                                        <figure>Data Architect</figure>
                                                        <p>
                                                            Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                                            Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                                        </p>
                                                    </div>
                                                </article>
                                            </div><!-- /.author -->
                                            <div class="author-block course-speaker">
                                                <a href="member-detail.html"><figure class="author-picture"><img src="assets/img/discussion-author-03.jpg" alt=""></figure></a>
                                                <article class="paragraph-wrapper">
                                                    <div class="inner">
                                                        <a href="member-detail.html"><header>John Doe</header></a>
                                                        <figure>Senior Designer</figure>
                                                        <p>
                                                            Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                                            Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                                        </p>
                                                    </div>
                                                </article>
                                            </div><!-- /.author -->
                                        </section><!-- /#course-speakers -->
                                    </div>
                                    <div class="tab-pane fade" id="tab-gallery">
                                        <ul class="gallery-list">
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-01.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-02.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-03.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-04.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-05.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-06.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-07.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-08.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-09.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-10.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-11.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-12.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-13.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="/assets/img/image-14.jpg" alt=""></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="tab-faq">
                                        <ul class="faq-list">
                                            <!-- Question -->
                                            <li>
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et nibh at diam?</h5>
                                                <p class="description">
                                                    Aliquam sed fermentum nulla. Praesent dictum, velit in condimentum volutpat,
                                                    nulla orci vestibulum risus, et facilisis purus urna non metus. Donec aliquam
                                                    urna et tempus luctus.
                                                </p>
                                            </li>
                                            <!-- end Question -->
                                            <!-- Question -->
                                            <li>
                                                <h5>Fusce gravida varius justo sed porta?</h5>
                                                <p class="description">
                                                    Ut tincidunt dui non velit aliquet, quis porta quam
                                                    vehicula. Vivamus suscipit hendrerit arcu. Nullam lacinia purus at porttitor
                                                    varius. Aliquam rutrum feugiat tempor.
                                                </p>
                                            </li>
                                            <!-- end Question -->
                                            <!-- Question -->
                                            <li>
                                                <h5>Vivamus ac risus cursus, eleifend lorem quis, viverra urna.?</h5>
                                                <p class="description">
                                                    Aenean porttitor feugiat nibh. Phasellus et dolor id nulla dictum lacinia
                                                    nec bibendum arcu. Vestibulum ante ipsum primis in faucibus orci luctus
                                                    et ultrices posuere cubilia Curae
                                                </p>
                                            </li>
                                            <!-- end Question -->
                                            <!-- Question -->
                                            <li>
                                                <h5>Hasellus non nisl et quam tristique placerat. Aliquam elementum tempus ?</h5>
                                                <p class="description">
                                                    Pellentesque a luctus libero. Integer mattis diam sem, nec ornare neque
                                                    consequat id. Nullam malesuada lacus in rhoncus pellentesque. Mauris risus
                                                    mauris, commodo ac volutpat eget, lacinia a risus. Aliquam nec semper libero,
                                                    ac pharetra libero.
                                                </p>
                                            </li>
                                            <!-- end Question -->
                                        </ul><!-- /.faq-list -->
                                    </div><!-- /#tab-faq -->
                                </div><!-- /Tab panes -->
                            </section><!-- /#course-tabs -->

                            <section id="course-info">
                                <header><h2>Course Info</h2></header>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla, volutpat elit non,
                                    tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet. Vestibulum vitae
                                    aliquet felis, ornare feugiat elit. Nulla varius condimentum elit, sed pulvinar leo sollicitudin vel.
                                </p>
                                <p>
                                    Maecenas sodales, nisl eget dignissim molestie, ligula est consectetur metus, et mollis justo urna
                                    sit amet nulla. Etiam lectus arcu, pellentesque eu tellus tempor, tristique ultrices leo. Nullam at
                                    felis mauris. Aenean in neque eu ligula tempor ornare. Mauris tristique in elit a blandit. Nam laoreet
                                    vulputate nisi eu accumsan. Sed faucibus arcu nec est facilisis dignissim. Fusce risus leo, euismod ut
                                    cursus vitae, imperdiet id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                    fames ac turpis egestas. Fusce mollis mi vulputate leo vestibulum, quis scelerisque libero condimentum.
                                    Praesent rutrum consequat lacus quis suscipit. Proin dapibus mi non semper lobortis.
                                </p>
                                <p>
                                    Ut dignissim placerat est, sit amet tincidunt enim. Sed nisi nisi, ornare vitae lacinia a, mattis quis tortor.
                                    Suspendisse ornare adipiscing nunc, sit amet aliquam diam condimentum quis. Sed in leo sit amet sapien
                                    porttitor vestibulum a ut est. In hac habitasse platea dictumst. Mauris quam dui, cursus nec lorem non,
                                    pellentesque elementum dui. Vestibulum volutpat, risus vitae scelerisque fringilla, ligula nisi egestas
                                    sem, id vulputate ligula nulla ac ligula.
                                </p>
                            </section><!-- /#course-info -->

                            <section id="presentation">
                                <header><h2>Carta de Presentación</h2></header>
                                <div class="presentation" style="width: 100%">
                                    <a class="pdf-object" href="/assets/pdf/presentation.pdf" style="width: 100%">Course Presentation</a>
                                </div>
                            </section>

                            <section id="learning-material">
                                <header><h2>Material de aprendizaje</h2></header>
                                <article class="learning-material">
                                    <figure class="learning-material-picture"><img src="/assets/img/book-01.jpg" alt=""></figure>
                                    <div class="learning-material-description">
                                        <h4>1000 Chairs</h4>
                                        <figure>Charlotte & Peter Fiell</figure>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu lacus ut ipsum laoreet laoreet.
                                            Nam sollicitudin porta ornare.
                                        </p>
                                    </div>
                                </article><!-- /.learning-material -->
                                <article class="learning-material">
                                    <figure class="learning-material-picture"><img src="/assets/img/book-02.jpg" alt=""></figure>
                                    <div class="learning-material-description">
                                        <h4>The App & Mobile Case Study Book</h4>
                                        <figure>Rob Ford, Julius Wiedemann</figure>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu lacus ut ipsum laoreet laoreet.
                                            Nam sollicitudin porta ornare.
                                        </p>
                                    </div>
                                </article><!-- /.learning-material -->
                            </section><!-- /#learning-material -->

                            <section id="invited-persons">
                                <header><h2>Personas Invitadas</h2></header>
                                <div class="author-block">
                                    <a href="member-detail.html"><figure class="author-picture"><img src="/assets/img/student-testimonial.jpg" alt=""></figure></a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="member-detail.html"><header>Claire Doe</header></a>
                                            <figure>Marketing Specialist</figure>
                                            <p>
                                                Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                            </p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                                <div class="author-block">
                                    <a href="member-detail.html"><figure class="author-picture"><img src="/assets/img/discussion-author-02.jpg" alt=""></figure></a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="member-detail.html"><header>Rachel Britain</header></a>
                                            <figure>Data Architect</figure>
                                            <p>
                                                Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                            </p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                            </section><!-- /#invited-persons -->

                            <section id="sponsors">
                                <header><h2>Profesores</h2></header>
                                <div class="section-content">
                                    <div class="logos">
                                        <div class="logo"><a href=""><img src="/assets/img/logo-partner-01.png" alt=""></a></div>
                                        <div class="logo"><a href=""><img src="/assets/img/logo-partner-02.png" alt=""></a></div>
                                        <div class="logo"><a href=""><img src="/assets/img/logo-partner-03.png" alt=""></a></div>
                                        <div class="logo"><a href=""><img src="/assets/img/logo-partner-04.png" alt=""></a></div>
                                    </div>
                                </div>
                            </section><!-- /#sponsors -->

                            <section id="join-to-course" class="center">
                                <a href="register-sign-in.html" class="btn">Unirme al Curso</a>
                            </section><!-- /#join-to-course -->

                            <hr>

                            <section id="rating">
                                <header><h2>Califica el Curso</h2></header>
                                <div class="center">
                                    <div class="rating-user">
                                        <div class="inner"></div>
                                        <div id="hint"></div>
                                    </div>
                                </div>
                            </section>

                            <section id="comments">
                                <header><h2>Comentarios</h2></header>
                                <ul class="discussion-list">
                                    <li class="author-block">
                                        <figure class="author-picture"><img src="/assets/img/student-testimonial.jpg"></figure>
                                        <article class="paragraph-wrapper">
                                            <div class="inner">
                                                <header><h5>Rachel Britain</h5></header>
                                                <div class="rating-individual" data-score="5"></div>
                                                <p>
                                                    Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus,
                                                    lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                                    Pellentesque congue mollis erat in imperdiet.
                                                </p>
                                            </div>
                                            <div class="comment-controls">
                                                <span>08-24-2014</span>
                                                <a href="#leave-reply">Reply</a>
                                            </div>
                                        </article>
                                    </li><!-- /parent item -->
                                    <li>
                                        <ul class="discussion-child">
                                            <li class="author-block">
                                                <figure class="author-picture"><img src="/assets/img/discussion-author-03.jpg"></figure>
                                                <article class="paragraph-wrapper">
                                                    <div class="inner">
                                                        <header><h5>John Doe</h5></header>
                                                        <div class="rating-individual" data-score="4"></div>
                                                        <p>
                                                            Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus,
                                                            lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                                            Pellentesque congue mollis erat in imperdiet.
                                                        </p>
                                                    </div>
                                                    <div class="comment-controls">
                                                        <span>08-24-2014</span>
                                                        <a href="#leave-reply">Reply</a>
                                                    </div>
                                                </article>
                                            </li>
                                            <li>
                                                <ul class="discussion-child">
                                                    <li class="author-block">
                                                        <figure class="author-picture"><img src="/assets/img/student-testimonial.jpg"></figure>
                                                        <article class="paragraph-wrapper">
                                                            <div class="inner">
                                                                <header><h5>Rachel Britain</h5></header>
                                                                <div class="rating-individual" data-score="4"></div>
                                                                <p>
                                                                    Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus,
                                                                    lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                                                    Pellentesque congue mollis erat in imperdiet.
                                                                </p>
                                                            </div>
                                                            <div class="comment-controls">
                                                                <span>08-24-2014</span>
                                                                <a href="#leave-reply">Reply</a>
                                                            </div>
                                                        </article>
                                                    </li>
                                                </ul><!-- /.discussion-child -->
                                            </li><!-- /parent item -->
                                        </ul><!-- /.discussion-child -->
                                    </li><!-- /parent item -->
                                    <li class="author-block">
                                        <figure class="author-picture"><img src="/assets/img/discussion-author-02.jpg"></figure>
                                        <article class="paragraph-wrapper">
                                            <div class="inner">
                                                <header><h5>Jane Mason</h5></header>
                                                <div class="rating-individual" data-score="5"></div>
                                                <p>
                                                    Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus,
                                                    lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                                    Pellentesque congue mollis erat in imperdiet.
                                                </p>
                                            </div>
                                            <div class="comment-controls">
                                                <span>08-24-2014</span>
                                                <a href="#leave-reply">Reply</a>
                                            </div>
                                        </article>
                                    </li><!-- /parent item -->
                                </ul><!-- /.discussion-list -->
                            </section><!-- /.comments -->

                            <section id="leave-reply">
                                <header><h2>Deja un Comentario</h2></header>
                                <form class="reply-form" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="controls">
                                                    <label for="name">Nombre</label>
                                                    <input type="text" id="name" name="name" required="required">
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="controls">
                                                    <label for="email">Email</label>
                                                    <input type="email"id="email" name="email" required="required">
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="controls">
                                                    <label for="message">Mensaje</label>
                                                    <textarea name="message" id="message" required="required"></textarea>
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                    <div class="form-actions pull-right">
                                        <input type="submit" class="btn btn-color-primary" value="Reply">
                                    </div><!-- /.form-actions -->
                                </form><!-- /.reply-form -->
                            </section>

                        </article><!-- /.course-detail -->
                    </section><!-- /.course-detail -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->
        
                                                {{--  SIDEBAR --}}
                                                     @include('layouts.sidebar')
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<!-- Footer -->
@include('layouts.footer')

</div>
<!-- end Wrapper -->
@endsection