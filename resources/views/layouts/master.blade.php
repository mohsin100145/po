<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Police</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/_all-skins.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style_dash.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/dataTables.bootstrap-1.10.16.min.css') }}" rel="stylesheet">
	<style>
		.main-sidebar {padding-top: 71px; width: 190px;}
		.content-wrapper, .main-footer {margin-left: 190px;}
		.main-header .navbar {margin-left: 190px;}
		.navbar-custom-menu>.navbar-nav>li {padding-right: 60px;}
		.main-footer{padding: 0px;}
		.main-header .sidebar-toggle{padding: 15px 0px;}
		.main-header .navbar .nav>li>a>.label{top: 7px; font-size: 11px}
		.skin-blue .main-header .navbar{background-color: #1c1c1d}
		.main-header .logo{padding: 0px 0px;}
		.alert {padding: 10px; margin-bottom: 5px;}
	</style>
  @yield('style')
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
  	<header class="main-header">
      <a href="{{ url('/') }}" class="logo">
        <span class="logo-mini"><b>999</b></span>
        <span class="logo-lg" style="margin-left: -80px;">Call: <b>999</b></span>
      </a>
    	<nav class="navbar navbar-static-top">
      	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        	<span class="sr-only">Toggle navigation</span>
      	</a> 
    	</nav>
  	</header>

		<aside class="main-sidebar">
  		<section class="sidebar" style="margin-top: -15px;">
    		<ul class="sidebar-menu" data-widget="tree" >
      		<li {{ ( Request::is('home') ? 'class=active' : '' ) }}>
					  <a href="{{ url('/home') }}">
		    		  <i class="fa fa-dashboard"></i> <span>Call Counter Dashboard</span>
					  </a>
				  </li>
          <li {{ ( Request::is('dashboard2') ? 'class=active' : '' ) }}>
            <a href="{{ url('/dashboard2') }}">
              <i class="fa fa-code-fork"></i> <span>Call Disposition Dashboard</span>
            </a>
          </li>
          <li {{ ( Request::is('dashboard3') ? 'class=active' : '' ) }}>
            <a href="{{ url('/dashboard3') }}">
              <i class="fa fa-dashboard"></i> <span>Call Summary Dashboard</span>
            </a>
          </li>
				  <li class="">
					  <a href="#">
		    			<i class="fa fa-phone"></i> <span>Inbound Call</span>
					  </a>
				  </li>
      		<li {{ ( Request::is('phone') || Request::is('phone/*') ? 'class=active' : '' ) }}>
        		<a href="{{ url('/phone') }}">
          		<i class="fa fa-phone-square"></i> <span>Phone Extension</span>
        		</a>
      		</li>
      		<li {{ ( Request::is('carrier') || Request::is('carrier/*') ? 'class=active' : '' ) }}>
        		<a href="{{ url('/carrier') }}">
              <i class="fa fa-text-width"></i> <span>Carrier</span>
        		</a>
      		</li>
          <li {{ ( Request::is('cdr') ? 'class=active' : '' ) }}>
            <a href="{{ url('/cdr') }}">
              <i class="glyphicon glyphicon-phone"></i> <span>Cdr</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user-circle"></i>
              <span>{{ Auth::user()->name }}</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>

		      <li style="margin-top: 50px;" class="thumbnail">      
					  <img src="{{ asset('assets/img/bottom_logo.jpg') }}" alt="Bottom Logo" style="height: 186px; width: 186px;" >          	
				  </li>
    		</ul>
  		</section>
		</aside>

	  <div class="container"> 
	    @include('flash::message')
	  </div>

	  <div class="content-wrapper">
	    @yield('content')
	  </div>
  
  	<footer class="main-footer">
      <div style="background: #43474d;">
        <center><p style="font-family: 'Open Sans', serif; font-size: 12px; margin-top: 0px; padding: 10px;"><span style="color: #FFFFFF">Developed by</span> <a href="#" target="_blank" style="color: red;">Bangladesh Police</a> <span style="color: #FFFFFF">All Rights Reserved.</span></p></center>
      </div>
  	</footer>
  </div>

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
	<script>
  		$.widget.bridge('uibutton', $.ui.button);
	</script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/script.min.js') }}"></script>
	<script src="{{ asset('assets/js/dataTables-1.10.16.min.js') }}"></script>
	<script src="{{ asset('assets/js/dataTables.bootstrap-1.10.16.min.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $("img").bind("contextmenu",function(e){
        return false;
      });
    });
  </script>
  @yield('script')
</body>
</html>
