<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
<meta charset="utf-8" />
<title>{{trans('app.short_name')}}</title>
<meta name="description" content="{{trans('app.name')}}" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="{{url('css/all.css')}}" rel="stylesheet">
<!--[if lt IE 9]>
	<script src="{{url('js/ie-plugin.js')}}"></script>
  <![endif]-->
</head>
<body class="">
	<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
		<div class="container aside-xxl">
			<a class="navbar-brand block" href="index.html">{{trans('app.short_name')}}</a>
			<section class="panel panel-default bg-white m-t-lg">
				<header class="panel-heading text-center">
					<strong>Sign in</strong>
				</header>
				<form action="index.html" class="panel-body wrapper-lg">
					<div class="form-group">
						<label class="control-label">Email</label> <input type="email" placeholder="test@example.com" class="form-control input-lg">
					</div>
					<div class="form-group">
						<label class="control-label">Password</label> <input type="password" id="inputPassword" placeholder="Password" class="form-control input-lg">
					</div>
					<div class="checkbox">
						<label> <input type="checkbox"> Keep me logged in
						</label>
					</div>
					<a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a>
					<button type="submit" class="btn btn-primary">Sign in</button>
					<div class="line line-dashed"></div>
					<a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a> <a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
					<div class="line line-dashed"></div>
					<p class="text-muted text-center">
						<small>Do not have an account?</small>
					</p>
					<a href="signup.html" class="btn btn-default btn-block">Create an account</a>
				</form>
			</section>
		</div>
	</section>
	<!-- footer -->
	<footer id="footer">
		<div class="text-center padder">
			<p>
				<small>Web app framework base on Bootstrap<br>&copy; 2013
				</small>
			</p>
		</div>
	</footer>
	<script src="{{url('js/all.js')}}"></script>
</body>
</html>