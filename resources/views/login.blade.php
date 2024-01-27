<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}" />
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
			@if (session('fail'))
			<div class="alert alert-danger" role="alert">
				{{ session('fail') }}
			</div>
		    @endif
			<!-- /.login-logo -->
			<div class="card card-outline card-primary">
			  	<div class="card-header text-center">
					<a href="#" class="h3">Task Management Login</a>
			  	</div>
			  	<div class="card-body">
					<p class="login-box-msg">Sign in to start your session</p>
					<form action="{{route('login.submit')}}" method="post">
                        @csrf
				  		<div class="input-group mb-3">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{old('email')}}">
							<div class="input-group-append">
					  			<div class="input-group-text">
									<span class="fas fa-envelope"></span>
					  			</div>
							</div>
				  		</div>
						  <span class="text-danger">@error('email'){{$message}}@enderror</span>
				  		<div class="input-group mb-3">
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
							<div class="input-group-append">
					  			<div class="input-group-text">
									<span class="fas fa-lock"></span>
					  			</div>
							</div>
				  		</div>
						  <span class="text-danger">@error('password'){{$message}}@enderror</span>
				  		<div class="row">
							<!-- <div class="col-8">
					  			<div class="icheck-primary">
									<input type="checkbox" id="remember">
									<label for="remember">
						  				Remember Me
									</label>
					  			</div>
							</div> -->
							<!-- /.col -->
							<div class="col-4 mx-auto">
					  			<button type="submit" class="btn btn-primary btn-block">Login</button>
							</div>
							<!-- /.col -->
				  		</div>
					</form>
		  			<p class="mb-1 mt-3 ml-5">
				  		<a href="{{route('signup.show')}}">Are you not registered? Sign Up</a>
					</p>					
			  	</div>
			  	<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{asset('js/adminlte.min.js')}}"></script>
        <script>
            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
            });
            </script>
	</body>
</html>