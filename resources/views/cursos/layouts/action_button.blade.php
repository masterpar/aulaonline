@auth
	@can('opt_for_course',$course)

			 @can('subscribe', \App\Couse::class)
				<a href="#" class="btn" id="btn-course-join">Unirme al curso</a>
				  @else
					  	@can('suscribe,$course')
							<a href="#" class="btn" id="btn-course-join">Unirme al curso</a>
						  	@else
							<a href="#" class="btn" id="btn-course-join">Inscrito</a>
					  	@endcan		
			 @endcan
	@else
	<a href="#" class="btn" id="btn-course-join">Soy Autor</a>			 
	@endcan
@else
	<a href="{{route('login')}}" class="btn" id="btn-course-join">Acceder</a>
@endauth