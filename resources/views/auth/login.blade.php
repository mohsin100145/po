<!DOCTYPE html>
<html lang="en">
<head>
	<title>Police</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('assets_login/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_login/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background: #0D0063;">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt style="margin-top: 20px;">
					
					
					<img src="{{ asset('assets_login/images/police_logo_login.png') }}" alt="IMG">

					<!-- <div>
						<img src="images/myol8171.png" alt="my" height="42" width="42" style="margin-left: 60px;">
						<img src="images/idialerAgent.png" alt="mya" height="42" width="122" style="float: right;">
					</div> -->
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title" style="padding-bottom: 10px;">
						Thana Login
					</span>

					<div class="wrap-input100" data-validate = "Phone Extension is required">
						<input class="input100" type="text" name="phone_extension" placeholder="Thana Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 " data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Thana Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn" style="padding-top: 0px;">
						<button class="login100-form-btn">
							Thana Login
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<!-- <div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>

				
				<form method="POST" action="{{ url('/login') }}" class="login100-form validate-form" style="margin-left: 450px; margin-top: -80px;">
					{{ csrf_field() }}
					<span class="login100-form-title" style="padding-bottom: 10px;">
						Dashboard Login
					</span>

					<div class="wrap-input100 {{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Dashboard Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					@if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

					<div class="wrap-input100 {{ $errors->has('password') ? ' has-error' : '' }}" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Dashboard Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					@if ($errors->has('password'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
					
					<div class="container-login100-form-btn" style="padding-top: 0px;">
						<button type="submit" class="login100-form-btn">
							Dashboard Login
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
 -->
					<!-- <div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>

				<div>
					<!-- <img src="images/myol8171.png" alt="my" height="42" width="42" style="margin-left: 60px;"> -->
					<img src="{{ asset('assets_login/images/idialerAgent.png') }}" alt="mya" height="42" width="122">
					<!-- <h2 style="float: right;"><i>i</i>dialar</h2> -->
				</div>
			</div>

		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ asset('assets_login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets_login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets_login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets_login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets_login/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('assets_login/js/main.js') }}"></script>

</body>
</html>