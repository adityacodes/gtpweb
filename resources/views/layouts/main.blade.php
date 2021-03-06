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



    @include('partials._prettyPhotoCss')
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
		    <div class="navbar-header" style="background-color: #2E962E; ">
		    	<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><i class="fa fa-home" aria-hidden="true"></i> MENU</button>
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand hidden-xs"  href="http://placehold.it/400x300">
	                    <img class="img-responsive center-block green-bg"  src="{{asset('images/logo.png')}}" alt="">

		            	<div class="green-bg white-color text-center">
		            		<p class="text-center" style="font-size: 30px;"	><strong>UNION</strong></p>
		            		<p>SOCIAL FINANCIAL NETWORK</p>
			            	<img class="img-responsive center-block" style="margin-top: 20px;" src="{{asset('images/spm.jpg')}}">
			            	
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
		        	<a href="{{url('/ideology')}}">IDEOLOGY</a>
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
		        	<a href="{{url('/how-to-start-use')}}"><img class="" style="height: 20px;" src="{{asset('images/bitcoin.png')}}"></a>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <br>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		    	<ul class="col-md-offset-2 list-inline">
		    		<li class="hidden-xs {{Request::is('/legality')? "active" : ""}}">
		    			<a href="{{url('/legality')}}">
		    				<button type="button" class="btn btn-default">LEGALITY</button>
		    			</a>
		    		</li>
		    		<li class="hidden-xs {{Request::is('/how-to-participate')? "active" : ""}}">
		    			<a href="{{url('/how-to-participate')}}">
		    				<button type="button" class="btn btn-danger {{Request::is('/')? 'hidden' : ''}}">HOW TO PARTICIPATE MMMGLOBAL?</button>
		    			</a>
		    		</li>

		    		<li class="hidden-xs {{Request::is('/')? 'col-md-offset-4' : 'col-md-offset-2'}}  {{Request::is('/ads')? "active" : ""}}">
		    			<a href="{{url('/ads')}}">
		    				<button type="button" class="btn btn-primary blue-button">ADVERTISEMENT CLIPBOARD</button>
		    			</a>
		    		</li>
		    	
		    		<li class="pull-right {{Request::is('/register')? "active" : ""}}">
		    			<a href="{{url('/register')}}">
		    				<button type="button" class="btn btn-green register">REGISTER</button>
		    			</a>
		    		</li>
		    		<li class="pull-right">
						<a href="http://securelogin.mmm-union.org">

							<button type="button" class="btn btn-green login">LOGIN</button>
						</a>
					</li>
				</ul>
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