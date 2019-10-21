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
			</div>


			{{-- Content --}}
			<div class="container" style="margin-top: 50px;">

				<div class="py-4">
						@yield('main')
				</div>

			</div>


            {{-- Footer --}}
            <div class="container-fluid">
                <footer>
					<div class="container">
					  <div class="row">

						<div class="col-lg-4 col-md-6">
						  <h3>Site Map</h3>
						  <ul class="list-unstyled three-column">
							<li>Home</li>
							<li>Services</li>
							<li>About</li>
							<li>Code</li>
							<li>Design</li>
							<li>Host</li>
							<li>Contact</li>
							<li>Company</li>
						  </ul>
						  <ul class="list-unstyled socila-list">
							<li><img src="http://placehold.it/48x48" alt="" /></li>
							<li><img src="http://placehold.it/48x48" alt="" /></li>
							<li><img src="http://placehold.it/48x48" alt="" /></li>
							<li><img src="http://placehold.it/48x48" alt="" /></li>
							<li><img src="http://placehold.it/48x48" alt="" /></li>
							<li><img src="http://placehold.it/48x48" alt="" /></li>
						  </ul>
						</div>

						<div class="col-lg-4 col-md-6">
						  <h3>latest Articles</h3>
						  <div class="media">
							<a href="#" class="pull-left">
							  <img src="http://placehold.it/64x64" alt="" class="media-object" />
							</a>
							<div class="media-body">
							  <h4 class="media-heading">Programming</h4>
							  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
						  </div>

						  <div class="media">
							<a href="#" class="pull-left">
							  <img src="http://placehold.it/64x64" alt="" class="media-object" />
							</a>
							<div class="media-body">
							  <h4 class="media-heading">Coding</h4>
							  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
						  </div>

						  <div class="media">
							<a href="#" class="pull-left">
							  <img src="http://placehold.it/64x64" alt="" class="media-object" />
							</a>
							<div class="media-body">
							  <h4 class="media-heading">Web Sesign</h4>
							  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
						  </div>

						</div>

						<div class="col-lg-4">
						  <h3>Our Work</h3>
						  <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
						  <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
						  <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
						  <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
						</div>

					  </div>
					</div>
					<div class="copyright text-center">
					  Copyright &copy; 2017 <span>Your Template Name</span>
					</div>
				</footer>
            </div>



		</div>
		{{-- End Page --}}



	</body>
</html>
