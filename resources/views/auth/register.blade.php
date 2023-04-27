@extends('layouts.auth')
@section('title','Register')
@section('content')
<div class="limiter">

		<div class="container-login100" style="background-image: url('{{asset('auth/images/bg-01.jpg')}}');">
			<div class="wrap-login100">

				<form class="login100-form validate-form" action="{{route('postRegister')}}" method="post">@csrf
					<span class="login100-form-logo">
                        <i class="zmdi zmdi-assignment-o"><h3>PM</h3></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Register Here
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter Your Name">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="{{route('login')}}">
							i have an account!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>



