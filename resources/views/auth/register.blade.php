@extends('index')

@section('content')


	<div class="d-flex justify-content-center h-100">
        			<div class="user_card">
        				<div class="d-flex justify-content-center">
        					<div class="brand_logo_container">
        					</div>
        				</div>
        				<div class="d-flex justify-content-center form_container">
            				<form method="POST" action="{{ route('register') }}">
            				    @csrf
            				    
        						<div class="input-group mb-3">
        							<div class="input-group-append">
        								<span class="input-group-text"><i class="fas fa-user"></i></span>
        							</div>
        							
        						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
        						name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
        						</div>
        						
        						<div class="input-group mb-3">
        							<div class="input-group-append">
        								<span class="input-group-text"><i class="fas fa-key"></i></span>
        							</div>
        							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
        							name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
        						</div>
        						
        						<div class="input-group mb-3">
        							<div class="input-group-append">
        								<span class="input-group-text"><i class="fas fa-key"></i></span>
        							</div>
        							
        							<input id="password-confirm" type="password" class="form-control" 
        							name="password_confirmation" required autocomplete="new-password" placeholder="Repeat password">
        						</div>
        						
        						<div class="input-group mb-3">
        							<div class="input-group-append">
        								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
        							</div>
        							
        							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
        							name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
        						</div>
        					
        						
    						    <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" class="btn login_btn">
                                        {{ __('Register') }}
                                    </button>    				           
                                </div>
            				</form>
        				</div>
        			</div>
        		</div>


@endsection
