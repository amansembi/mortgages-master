<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>User Login</title>

    <!-- Icons font CSS-->
    <link href="{{asset('resources/register/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resources/register/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('resources/register/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resources/register/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('resources/register/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">User login</h2>
                </div>
                <div class="card-body">
				@if(count($errors) > 0 )
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{{$error}}</p>
					@endforeach
					@endif
                    <form method="post" action="{{route('layouts/login')}}">
					@csrf
                       
                         <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" value="{{old('email')}}" name="email">
                                </div>
                            </div>
                        </div> 
						<div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">								
								<div class="input-group">
									<input class="input--style-5 input-pass" type="password" name="password">
								</div>
                            </div>
                        </div>
						<div class="form-row p-t-20">
                                <div class="p-t-15">
                                     <a href="{{url('/signup')}}">Click if you are not register.</a>
                                </div>
                        </div>
                    
                   
                   
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Login</button>
                        </div>
						   @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="{{asset('resources/register/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('resources/register/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('resources/register/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('resources/register/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->