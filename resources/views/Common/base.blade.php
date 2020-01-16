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
				<div class="col-md-7">
					
				</div>
				<div class="col-md-2">

					<a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
					</a>
						
				</div>
			</div>


			{{-- Content --}}
			<div class="container" style="margin-top: 50px;">

				<div class="py-4">
						@yield('main')
				</div>

			</div>


            {{-- Footer --}}
            <div class="container-fluid">
                @include('Common.footer')
            </div>



		</div>
		{{-- End Page --}}



	</body>
</html>
