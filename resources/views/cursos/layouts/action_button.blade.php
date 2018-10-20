@auth
	@can('opt_for_course',$course)

			 @can('subscribe', \App\Course::class)
				<a href="#" class="btn" id="btn-course-join"><i class="fa fa-plus"></i> Unirme al curso</a>
			 @else
					  	@can('inscribe',$course)
							<a href="#" class="btn" id="btn-course-join"><i class="fa fa-plus"></i> Unirme al curso</a>
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