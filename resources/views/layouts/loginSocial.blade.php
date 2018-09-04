	
	<p>
		<div class="badge badge-primary"> {{__("Iniciar con")}}</div>
		</p>
		{{-- github --}}
		<a
		href="{{ route('social_auth',['driver' => 'github']) }}"
		class=" btn btn-default btn btn-github btn-lg btn-block">
		{{__("GitHub")}} <i class="fa fa-github"></i>
		</a>

		{{-- Facebook --}}		
		<a
		href="{{ route('social_auth',['driver' => 'facebook']) }}"
		class=" btn btn-success btn-facebook btn-lg btn-block">
		{{__("Facebook")}} <i class="fa fa-facebook"></i>
		</a>
</div>