		<br>
			{{-- github --}}
				<a  
			href="{{ route('social_auth',['driver' => 'github']) }}"
			class="btn btn-color-grey-light btn-small btn-github">
			{{__("GitHub")}} <i class="fa fa-github"></i>
				</a>

			{{-- Facebook --}}		
			<a
			href="{{ route('social_auth',['driver' => 'facebook']) }}"
			class="btn btn-color-primary btn-small btn-facebook">
			{{__("Facebook")}} <i class="fa fa-facebook"></i>
			</a>

