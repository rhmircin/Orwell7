<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel CRUD App</title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<style>
	body {
		padding-top: 70px;
	}
	.bk-clr-one {
	    background-color: #B9B739;
	}

	.bk-clr-two {
	    background-color: #F94C4C;
	}

	.bk-clr-three {
	    background-color: #119c7e;
	}

	.bk-clr-four {
	    background-color: #b739b9;
	}

	.dashboard-div-icon {
	    height: 75px;
	    width: 75px;
	    border: 2px solid #fff;
	    padding: 20px;
	    border-radius: 50%;
	    -webkit-border-radius:50%;
	    -moz-border-radius:50%;
	    font-size: 30px;
	    margin-bottom: 20px;
	    color: #fff;
	}

	.dashboard-div-wrapper {
	    border-radius: 5px;
	    text-align: center;
	    padding: 15px;
	    color: #fff;
	    margin-bottom: 50px;
	}

    .dashboard-div-wrapper .progress {
        height: 2px;
    }

	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{URL::to('admin')}}">CRUD App</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li><a href="{{ url('login') }}">Login</a></li>
					<li><a href="{{ url('register') }}">Register</a></li>
					@else
					<li><a href="#">{{ Auth::user()->name }}</a></li>
					<li><a href="{{ url('logout') }}">Logout</a></li>
					@endif
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		@yield('content')
	</div>

	<hr/>

	<div class="container">
		{{ date('Y') }}
		<br/>
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
