<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>@yield('title') | MMM GLOBAL</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" type="text/css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('css/prettyPhoto.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css"> -->

    @yield('stylesheets')
</head>
<body>



	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid" style="background: #21740b;">
			<div class="row navimage">
				<img class="img-responsive center-block" src="{{asset('images/navbar-top.png')}}">
			</div>
		</div>
			  
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><i class="fa fa-home" aria-hidden="true"></i> MENU</button>
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand hidden-xs" href="http://placehold.it/400x300">
	                    <img class="img-responsive" src="http://placehold.it/240x100&text=Brand" alt="">

		            	<div class="green-bg white-color text-center">
		            		<p>SOCIAL FINANCIAL NETWORK</p>
			            	<img class="img-responsive" style="margin-top: 20px;" src="http://placehold.it/250x250&text=Logo">
			            	
			            	<img src="{{asset('images/bitcoin1.png')}}">
			            	<div class="clearfix"></div>
		            	</div>
	               </a>
	              <div class="clearfix"></div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" style="background: #2E962E;" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="{{Request::is('/')? "active" : ""}}">
		        	<a href="{{url('/')}}">HOME</a>
		        </li>
		        <li class="{{Request::is('what-is-mmm')? "active" : ""}}" >
		        <a href="{{url('/what-is-mmm')}}">WHAT IS MMM?</a>
		        </li>
		        <li class="{{Request::is('ideology')? "active" : ""}}">
		        	<a href="/ideology">IDEOLOGY</a>
		        </li>
		        <li class="{{Request::is('faq')? "active" : ""}}">
		        	<a href="{{url('/faq')}}">FAQ</a>
		        </li>
		        <li class="{{Request::is('abroad')? "active" : ""}}">
		        	<a href="{{url('/abroad')}}">MMM ABROAD</a>
		        </li>
		        <li class="{{Request::is('charity')? "active" : ""}}">
		        	<a href="{{url('/charity')}}">CHARITY</a>
		        </li>
		        <li class="{{Request::is('marketing-materials')? "active" : ""}}">
		        	<a href="{{url('/marketing-materials')}}">MARKETING</a>
		        </li>
		        <li class="{{Request::is('tutorials') || Request::is('tutorials/*')? "active" : ""}}">
		        	<a href="{{url('/tutorials')}}">TUTORIALS</a>
		        </li>
		        <li class="{{Request::is('contacts')? "active" : ""}}">
		        	<a href="{{url('/contacts')}}">CONTACTS</a>
		        </li>
		        <li class="{{Request::is('how-to-start-use')? "active" : ""}}">
		        	<a href="{{url('/how-to-start-use')}}"><img class="img-responsive" src="{{asset('images/bitcoin.png')}}"></a>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->

		    <div class="pull-right" style="background-color: transparent !important;"><br>
    		<button type="button" class="btn btn-green register">REGISTER</button>
			<button type="button" class="btn btn-green login">LOGIN</button>
    	</div>

		</div><!-- /.container-fluid -->
	</nav>


	@yield('content')



	<script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>



    <script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>

    <script type="text/javascript">
    	$(document).ready(function(){
				$("a[rel^='prettyPhoto']").prettyPhoto();

		});
    </script>

    @yield('scripts')
</body>
</html>