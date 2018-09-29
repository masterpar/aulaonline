	
	<p>
		<div class="badge badge-primary"> {{__("Iniciar con")}}</div>
		</p>
		{{-- github --}}
		<a
		href="{{ route('social_auth',['driver' => 'github']) }}"
		class=" btn btn-simple btn btn-github ">
		{{__("GitHub")}} <i class="fa fa-github"></i>
		</a>

		{{-- Facebook --}}		
		<a
		href="{{ route('social_auth',['driver' => 'facebook']) }}"
		class=" btn btn-simple btn-facebook">
		{{__("Facebook")}} <i class="fa fa-facebook"></i>
		</a>
</div>