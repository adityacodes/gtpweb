@extends('layouts.main')

@section('title', 'HOME')

@section('stylesheets')
    <!-- Owl Carousel Assets -->
    <link href="{{asset('css/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl-carousel/mycustomstyle.css')}}" rel="stylesheet">
    
@endsection

@section('content')

	<div class="container-fluid">
		
		<div class="row banner">
            <div class="m-t-10">
            	<div class="col-md-2">&nbsp;
	            </div>
	            <div class="col-md-4 text-center white-color">
	                <h1 >ATTENTION!</h1>
	                <h3>WELCOME TO <span class="mtitle">MMMGLOBAL.COM</span> WEBSITE !</h3>
					<h4>This is a community of ordinary people, selflessly helping each other, a kind of the Global Fund of mutual aid. This is the first sprout of something new in the modern soulless and ruthless world of greed and hard cash. The goal here is not the money. The goal is to destroy the world's unjust financial system. Financial Apocalypse! Before you join, be sure to be acquainted with our <a class="ideology" href="{{url('/ideology')}}">IDEOLOGY</a>!
					</h4><br>
	                <a class="btn btn-danger btn-lg text-center btn-block" style="background-color: red; " href="http://placehold.it/400x300">
	                	<img class="pull-left img-responsive" style="margin-top: -40px;" src="{{asset('/images/ico_questions.png')}}">
	                	<h4>HOW TO BEGIN TO PARTICIPATE</h4>
	                	<h4>MMMGLOBAL.COM?</h4>
	                	<div class="clearfix"></div>
	                </a>


	                <div class="clearfix"></div><br>
	            </div>
	            <div class="col-md-2">
	            	<img class="img-responsive globe" src="{{asset('/images/globus.png')}}">
	            	<div class="clearfix"></div>
	            </div>
	            <div class="col-md-1">&nbsp;</div>
	            <div class="col-md-3">
	            	
	                <div class="panel panel-default m-t-20">
					  <div class="panel-heading"><h4>LETTERS ABOUT GETTING HELP</h4></div>
					  <div class="panel-body">

					  		<marquee scrollamount="1" direction="up" height="270">
                                <strong>2017-02-03</strong>
                                <p style="word-wrap: break-word;">
                                    MMM community family members, I am from Zhejiang ordinary members, my name is Wei, I on October 26 to provide 10,000 dollars to help, before I have applied for part of the interest on November 26 to extract the principal and interest again Plus a total of 14,830 US dollars registered bonus, in the month of this month, get the help of friends all over the country, where I feel MMM family and friends to good, trust, mutual help atmosphere, and happiness in interest, which is Other industries do not have. To tell the truth, I just started not quite believe, and now really think MMM this platform is very magical and incredible. Thank you, Mr. Mavroj quarterly MMM provides us with such a good platform, I hope more people join the MMM community of Chinese communities, to achieve their own aspirations.
                                </p>
					  			<strong>31-01-2017</strong>
					  			<p>Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.Hello this is a notice.</p>

                                
					  		</marquee>
					  </div>
					</div>
	            </div>
            </div>            
        </div>
        <div class="row" style="background: url({{asset('/images/topbg.jpg')}}); margin-top: 4px;">
        		<div class="col-md-8 col-md-offset-4">

                                <div id="owl-demo" class="owl-carousel">

                                    <div class="item">
                                    <a href="https://youtu.be/JhW_rwlmpNY?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery_name]" target="_blank"><img src="https://img.youtube.com/vi/JhW_rwlmpNY/0.jpg"></a> 
                                    </div>
                                    <div class="item">
                                        <a href="https://youtu.be/1kBt_FALQGg?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery_name]" target="_blank"><img src="https://img.youtube.com/vi/1kBt_FALQGg/0.jpg"></a> 
                                    </div>
                                    <div class="item">
                                        <a href="https://youtu.be/F9I7O4iOF2Y?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery_name]" target="_blank"><img src="https://img.youtube.com/vi/F9I7O4iOF2Y/0.jpg"></a> 
                                    </div>
                                    <div class="item">
                                        <a href="https://youtu.be/dPpJWwf9ty8?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery_name]" target="_blank"><img src="https://img.youtube.com/vi/dPpJWwf9ty8/0.jpg"></a> 
                                    </div>
                                    <div class="item">
                                        <a href="https://youtu.be/3J3wEjMF6S0?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery_name]" target="_blank"><img src="https://img.youtube.com/vi/3J3wEjMF6S0/0.jpg"></a> 
                                    </div>
                                    <div class="item">  
                                        <a href="https://youtu.be/fl3xxq0D9RA?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery_name]" target="_blank"><img src="https://img.youtube.com/vi/fl3xxq0D9RA/0.jpg"></a>  
                                    </div>
                                    <div class="item">
                                         <a href="https://youtu.be/Jhb7imAb0yI?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery_name]" target="_blank"><img src="https://img.youtube.com/vi/Jhb7imAb0yI/0.jpg"></a> 
                                    </div>
                                    <div class="item">
                                        <a href="https://youtu.be/Dunf4FAujLc?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery_name]" target="_blank"><img src="https://img.youtube.com/vi/Dunf4FAujLc/0.jpg"></a> 
                                    </div>
                                     <div class="item">
                                        <a href="https://youtu.be/fyUexK6LG60?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery_name]" target="_blank"><img src="https://img.youtube.com/vi/fyUexK6LG60/0.jpg"></a>  
                                    </div>
                                     <div class="item">
                                        <a href="https://youtu.be/me4FhVewdXA?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery_name]" target="_blank"><img src="https://img.youtube.com/vi/me4FhVewdXA/0.jpg"></a>   
                                    </div>
                                  </div>
        		</div>
        </div>
		<div class="row col-md-offset-5 col-md-5">
        	<p class="disclaimer"><i class="fa fa-star" aria-hidden="true"></i>Disclaimer : Income per person will vary depending on the hard work of everyone.</p>
        </div>

        <div class="row">
        	<div class="col-md-offset-4 col-md-8 well">
        		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="//youtu.be/fdzhsnR9NHE?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery3]">
                        <img class="img-responsive" src="//img.youtube.com/vi/fdzhsnR9NHE/0.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="//youtu.be/UX04AaV0HNM?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery3]">
                        <img class="img-responsive" src="//img.youtube.com/vi/UX04AaV0HNM/0.jpg" alt="">
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-4 col-xs-6 thumb" >
                    <a class="thumbnail" href="//youtu.be/WbtXasOaxEI?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery3]">
                        <img class="img-responsive" src="//img.youtube.com/vi/WbtXasOaxEI/0.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="//youtu.be/NMhhhyr5wB0?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery3]">
                        <img class="img-responsive" src="//img.youtube.com/vi/NMhhhyr5wB0/0.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="//youtu.be/HsAVSntmgYs?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery3]">
                        <img class="img-responsive" src="//img.youtube.com/vi/HsAVSntmgYs/0.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="//youtu.be/2gyg-8cJoEI?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery3]">
                        <img class="img-responsive" src="//img.youtube.com/vi/2gyg-8cJoEI/0.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="//youtu.be/xqS-kZws7Dc?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery3]">
                        <img class="img-responsive" src="//img.youtube.com/vi/xqS-kZws7Dc/0.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/zG7IaHgd-bk?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/zG7IaHgd-bk/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/M8dZDW-tUA8?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/M8dZDW-tUA8/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/KTgv2pbtqGk?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/KTgv2pbtqGk/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/pHoW7-Wbh_U?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/pHoW7-Wbh_U/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/OnKp9IzViaw?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img src="//img.youtube.com/vi/OnKp9IzViaw/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/BVMW-jwKzqc?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/BVMW-jwKzqc/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/lPmLO8DEPqI?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/lPmLO8DEPqI/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/fgB5Zrm3m1A?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/fgB5Zrm3m1A/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/R9ezrF7KZEQ?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/R9ezrF7KZEQ/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/u7dRwIoQ_3U?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/u7dRwIoQ_3U/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/q9L1MkiOKJk?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/q9L1MkiOKJk/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/Nh8WH_ksOes?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/Nh8WH_ksOes/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/C8kqf5zBOds?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/C8kqf5zBOds/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/DD4e5RP94qk?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/DD4e5RP94qk/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/i0YOMwXKeEo?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/i0YOMwXKeEo/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/L8u-8GyCvn8?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/L8u-8GyCvn8/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/LyXXtt5vLEk?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/LyXXtt5vLEk/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/WNFUYUTrwjA?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/WNFUYUTrwjA/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/9oLPZ_2RKLw?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/9oLPZ_2RKLw/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/z4_iPLU-mGg?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/z4_iPLU-mGg/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/Z2gwf-h1GkY?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/Z2gwf-h1GkY/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/8urm-FmQgSw?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/8urm-FmQgSw/0.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" rel="prettyPhoto[gallery3]" href="//youtu.be/_lMqxnxM27M?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0"  >
                        <img class="img-responsive" src="//img.youtube.com/vi/_lMqxnxM27M/0.jpg">
                    </a>
                    </div>
        	</div>
        </div>

        <div class="row">
        	<div class="col-md-offset-5 col-md-5">
        		<p class="disclaimer"><i class="fa fa-star" aria-hidden="true"></i>Disclaimer : Income per person will vary depending on the hard work of everyone.</p>
      		</div>
       	</div>

	</div>


<a href="https://youtu.be/d_9UrEa4l7o?iframe=true&amp;width=100%&amp;height=100%&amp;rel=0" rel="prettyPhoto[gallery]" class="hidden" id="welcome" target="_blank"></a> 
@endsection


@section('scripts')

 <script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function(){
          $('.owl-carousel').owlCarousel({
                pagination: false,
                navigation:true,
                navigationText: [
                  "<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>"
                  ],
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:3,
                        nav:true,
                        loop:false
                    }
                }
            });

          // $("#welcome").trigger('click')

        });
    </script>

@endsection