@extends('index')

@section('content')

<div class="d-flex justify-content-center h-100">
	<div class="user_card">
		<div class="d-flex justify-content-center">
			<div class="brand_logo_container">
			</div>
		</div>
		<div class="d-flex justify-content-center form_container">
			<form method="POST" action="{{ route('login') }}">
			    @csrf
				<div class="input-group mb-3">
					<div class="input-group-append">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
					name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Introduce Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				
				<div class="input-group mb-2">
					<div class="input-group-append">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
					name="password" required autocomplete="current-password" placeholder="Introduce Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				
				<div class="form-group">

				</div>
				
			    <div class="d-flex justify-content-center mt-3 login_container">
				 	<input type="submit" name="button" class="btn login_btn" value="Login"></input>
	           </div>
	           
			</form>

		</div>
			    <div class="d-flex justify-content-center mt-3 login_container">
				 				<form method="GET" action="{{ url('home') }}">
				<input type="submit" name="buttonGuest" class="btn login_btn" value="Enter as guest"></input>
			</form>
	           </div>


		<div class="mt-4">
			<div class="d-flex justify-content-center links">
				Don't have an account? <a href="{{url('register')}}" class="ml-2">Sign Up</a>
			</div>
			<div class="d-flex justify-content-center links">
			    @if (Route::has('password.request'))
				    <a href="{{ route('password.request') }}">Forgot your password?</a>
				@endif
			</div>
		</div>
	</div>
</div>

@endsection
