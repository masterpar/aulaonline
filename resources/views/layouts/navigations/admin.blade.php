           
<li><a href="#"><i class="fa fa-user"></i>{{ __("Perfil") }}</a></li>
<li><a href="#">{{ __("Suscripción") }}</a></li>
<li><a href="#">{{ __("Facturas") }}</a></li>
<li><a href="#">{{ __("Cursos") }}</a></li>


<li  role="button">
<a  data-close="true" href="{{ route('logout') }}"
       onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
        {{ __('Salir') }}
    <i class="zmdi zmdi-power"></i></a> </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
        @csrf
    </form> 