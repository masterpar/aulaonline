{{-- SIDEBAR Content --}}
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header>
                            <h2>Cursos Destacados</h2>
                        </header>
                        <div class="section-content">
                        @foreach ($populares as $popular)
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>{{$popular->created_at->format('d-m-y')}}</figure>
                                <header><a href="#">{{$popular->name}}</a></header>
                            </article><!-- /article -->
                       @endforeach
                        </div><!-- /.section-content -->
                        <a href="" class="read-more">All News</a>
                    </aside><!-- /.news-small -->
                    <aside id="archive">
                        <header>
                            <h2>Más Cursos</h2>
                            <ul class="list-links">
                                <li><a href="#">February 2018</a></li>
                                <li><a href="#">January 2018</a></li>
                                <li><a href="#">November 2017</a></li>
                                <li><a href="#">October 2017</a></li>
                                <li><a href="#">August 2017</a></li>
                            </ul>
                        </header>
                    </aside><!-- /archive -->

                                               {{--  profesores --}}
                     <aside id="our-professors">
                        <header>
                            <h2>Nuestro Profesores</h2>
                        </header>
                        <div class="section-content">
                            <div class="professors">
                                <article class="professor-thumbnail">
                                    <figure class="professor-image"><a href="member-detail.html"><img src="assets/img/professor.jpg" alt=""></a></figure>
                                    <aside>
                                        <header>
                                            <a href="member-detail.html">Prof. Mathew Davis</a>
                                            <div class="divider"></div>
                                            <figure class="professor-description">Applied Science and Engineering</figure>
                                        </header>
                                        <a href="member-detail.html" class="show-profile">Show Profile</a>
                                    </aside>
                                </article><!-- /.professor-thumbnail -->
                                <article class="professor-thumbnail">
                                    <figure class="professor-image"><a href="member-detail.html"><img src="assets/img/professor-02.jpg" alt=""></a></figure>
                                    <aside>
                                        <header>
                                            <a href="member-detail.html">Prof. Jane Stairway</a>
                                            <div class="divider"></div>
                                            <figure class="professor-description">Applied Science and Engineering</figure>
                                        </header>
                                        <a href="member-detail.html" class="show-profile">Show Profile</a>
                                    </aside>
                                </article><!-- /.professor-thumbnail -->
                                <a href="" class="read-more">All Professors</a>
                            </div><!-- /.professors -->
                        </div><!-- /.section-content -->
                    </aside><!-- /.our-professors -->
                </div><!-- /#sidebar 