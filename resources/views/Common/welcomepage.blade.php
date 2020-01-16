<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Candidate Profile</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../../css/base.css">

	</head>
	<body>

		<div class="container-fluid">
			<!-- Navigation -->
			<div class="row" style="height:100px; background-color: cadetblue">
				<div class="col-md-3">
					<img src="../../images/logo.png" style="width:200px;height:80px; ">
				</div>
				<div class="col-md-6">
					
				</div>
				<div class="col-md-3">
						<div class="top-right links">
								@auth
									<a href="{{ url('/home') }}">Home</a>
								@else
									<a href="{{ route('login') }}">Login</a>
			
									@if (Route::has('register'))
										<a href="{{ route('register') }}">Register</a>
									@endif
								@endauth
							</div>
				</div>
			</div>


			{{-- Content --}}
			<div class="container" style="margin-top: 50px;">

				<div class="py-4">
						@yield('main')
				</div>

			</div>

		</div>

		{{-- Footer --}}
			@include('Common.footer')
			
		{{-- End Page --}}



	</body>
</html>
