{{-- SIDEBAR Content --}}
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                        
                    @forelse($related as $relatedCourse)
                    <aside id="related-courses">
                        <header>
                            <h2>Cursos Relacionados</h2>
                        </header>
                        <article class="course-thumbnail small">
                            <figure class="image">
                                <div class="image-wrapper"><a href=" {{ route('courses.detail', $relatedCourse->slug) }}">
                                    <img src="{{ $relatedCourse->pathAttachment() }}"></a></div>
                            </figure>
                            <div class="description">
                                <a href="{{ route('courses.detail', $relatedCourse->slug) }}"><h3>{{ $relatedCourse->name}}</h3></a>
                                <a href="#" class="course-category">{{$relatedCourse->category->name}}</a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>{{$course->created_at->format('d-m-y')}}</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 meses</span>
                                </div>
                                <div class=""><a href="course-detail-v1.html" class="btn btn-framed btn-color-grey btn-small">Ver más</a></div>
                            </div>
                        </article><!-- /.course-thumbnail .small -->
                    </aside><!-- /#related-courses -->
                    @empty
                                no hay ningún curso relacionado
                    @endforelse
                        

                                                           {{--  requisitos --}}
                           <aside id="archive">
                                <header>
                                    <h2>Requisitos</h2>
                                    <ul class="list-links">

                                    @forelse ($requisitos as $requisito)
                                        <li><a href="#">{{ $requisito->requirement }}</a></li>
                                        @empty
                                         <li><a href="#">{{ __("No se han escrito requisitos para este curso") }}</a></li>
                                    @endforelse

                                    </ul>
                                </header>
                           </aside><!-- /requisitos -->

                                                        {{--  metas --}}
                           <aside id="archive">
                                <header>
                                    <h2>Metas</h2>
                                    <ul class="list-links">

                                    @forelse ($goals as $goal)
                                        <li><a href="#">{{ $goal->goal }}</a></li>
                                        @empty
                                         <li><a href="#">{{ __("No se han escrito metas para este curso") }}</a></li>
                                    @endforelse

                                    </ul>
                                </header>
                           </aside><!-- /metas -->

                                                                {{--  profesores --}}
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
                            </section><!-- /#profesores -->


                            <hr>

                            <section id="rating">
                                <header><h2>Calificación del Curso</h2></header>
                                <div class="center">
                                    <div class="rating-user">
                                        @include('cursos.layouts.rating')
                                        <div class="inner"></div>
                                        <div id="hint"></div>
                                    </div>
                                </div>
                            </section>


                </div>
            </div>
