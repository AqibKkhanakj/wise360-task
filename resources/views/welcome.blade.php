<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Task Management</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/custom.css')}}">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<!-- /.login-logo -->
			<div class="card card-outline card-primary">
			  	<div class="card-header text-center">
					<a href="#" class="h3">Wise360 Solution</a>
			  	</div>
			  	<div class="card-body">
					<p class="login-box-msg">Welcome To Task Management System</p>
                    <img src="{{asset('img/wise360.JPG')}}" class="rounded mx-auto d-block" alt="...">
		  			<p class="mb-1 mt-3 text-center">
				  		<a class="mr-4" href="{{route('login.show')}}">Login</a>
                        <a href="{{route('signup.show')}}">SignUp</a>	
					</p>			
			  	</div>
			  	<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="js/demo.js"></script>
	</body>
</html>