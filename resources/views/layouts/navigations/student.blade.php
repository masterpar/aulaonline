
<li class="float-right" role="button"><a href="#"><i class="zmdi zmdi-face"></i>{{__(" Perfil")}}</a> </li>
<li class="float-right" role="button"><a href="#"><i class="zmdi zmdi-assignment"></i>{{__(" Suscripción")}}</a></li>
<li class="float-right" role="button"><a href="#"><i class="zmdi zmdi-art_track"></i>{{__(" Facturas")}}</a> </li>
<li class="float-right" role="button"><a href="#"><i class="zmdi zmdi-queue"></i>{{__(" Cursos")}}</a></li>


<li class="float-right" role="button">
<a  data-close="true" href="{{ route('logout') }}"
       onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
        {{ __('Salir') }}
    <i class="zmdi zmdi-power"></i></a> </li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
        @csrf
    </form> 

            

<li class="dropdown float-right"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications" ></i>
        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
        </a>
        <ul class="dropdown-menu pullDown">
            <li class="body">
                <ul class="menu list-unstyled">
                    <li>
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="/backend/images/xs/avatar6.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Camilo <span class="time">1 Agosto</span></span>
                                    <span class="message">Primer Mensaje</span>                                        
                                </div>
                            </div>
                        </a>
                    </li>                        
                </ul>
            </li>
            <li class="footer"> <a href="javascript:void(0);">Todos los mensajes</a> </li>
        </ul>
    </li>