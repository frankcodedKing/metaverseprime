<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=1368">
<title>Metaverse Prime : {{$title}}</title>

<link rel="stylesheet" href="use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}"/>
<!--js-->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/clipboard.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/currency.js')}}"></script>
<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>




<link rel="icon" type="image/png" href="{{asset('images/emailimages/Troveoptiom.png')}}">
</head>
<body>
<header class="home-header">
    <div class="top-header">
	  <div class="container clearfix">
        <div class="logo">

           <a href="{{route('index')}}"> <img src="{{asset('images/emailimages/Troveoptiom.png')}}" width="200px" alt="">
           </a>
	    </div>
	    <div class="theader-right">
	     <!--user buttons-->
		 <ul class="clearfix">
						<li><a href='{{route("register")}}' class="btn btn-blue"><i class="far fa-edit"></i> Register</a></li>
			<li><a href='{{route("login")}}' class="btn btn-green"><i class="far fa-user"></i> Login</a></li>
					 </ul>
		 <!--end user buttons-->
		 <!--lang-->
		 <div class="language-wrapper">
		    <span class="active-lang"><img src="images/united-kingdom.png"/> ENGLISH</span>
			<div class="lang-list" >
			   {{-- <ul style="visibility:hidden">
			      <li><a href='index9122.html?a=home/language/ru'><img src="images/russia.png"/>РУССКИЙ</a></li>
				  <li><a href='index8777.html?a=home/language/cn'><img src="images/china.png"/>中文</a></li>
				  <li><a href='index310c.html?a=home/language/jp'><img src="images/japan.png"/>日本人</a></li>
				  <li><a href='index750f.html?a=home/language/kr'><img src="images/south-korea.png"/>한국어</a></li>
				  <li><a href='index9625.html?a=home/language/es'><img src="images/spain.png"/>español</a></li>
				  <li><a href='indexc503.html?a=home/language/de'><img src="images/germany.png"/>Deutsche</a></li>
				  <li><a href='index090a.html?a=home/language/vt'><img src="images/vietnam.png"/>TiếngViệt</a></li>
			   </ul> --}}
			 </div>
		  </div>
		  <!--end lang-->
		  <!--start btc price-->
		  <div class="btc_price">
		     <i class="fab fa-bitcoin"></i>
			 <span class="coinmarketcap-currency-widget res" data-currency="bitcoin" data-base="USD" data-secondary="" data-ticker="true" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="false"></span>
		  </div>
		  <!--end btc price-->
	    </div>
	  </div>
    </div>
	<!--start bottom header-->
	<div class="bottom-header">
	   <div class="container clearfix">
	      <ul class="main-menu">
		     <li><a href='{{route("index")}}'><i class="fas fa-home"></i></a></li>
			 <li><a href='{{route("about")}}'>About us</a></li>
			 <li><a href='{{route("invest")}}'>Investment</a></li>
			 <li><a href='{{route("affiliate")}}'>Affiliate</a></li>
			 <li><a href='{{route("news")}}'>News</a></li>
			 <li><a href='{{route("faq")}}'>FAQ</a></li>
			 <li><a href='{{route("contact")}}'>Support</a></li>
		  </ul>
		  <div class="server-time">

			 <b></b>&nbsp;
			 <span id="server_time"></span>
		  </div>
	   </div>
	</div>
	<!--end bottom header-->
</header>

@include("flash-message")

    @yield("body")



    <footer>
        <div class="top-footer">
            <div class="container">
                <div class="row">

                <!--start part 1-->

                <div class="col-md-4">
                    <div class="footer-logo">
                               </div>
                    <p class="footer-abt">A VERY PROFESSIONAL SERVICE AND A SMART INVEST PLAN FOR THE FUTURE WE HIGHLY RECOMMEND</p>
                            </div>

                            <!--start part 2-->

                   <div class="col-md-4">
                        <h3 class="footer-title">Navigation</h3>
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                <ul class="footer-links">

                            <li><a href='indexbc14.html?a=home'>Home</a></li>
                            <li><a href='{{route("about")}}'>About</a></li>
                            <li><a href='{{route("invest")}}'>Investment</a></li>
                            <li><a href='{{route("affiliate")}}'>Affiliate</a></li>
                            <li><a href='{{route("affiliate")}}'>News</a></li>				   </ul>
                            </div>
                            <div class="col-md-7 col-sm-6">
                            <ul class="footer-links">
                            <li><a href='{{route("faq")}}'>FAQs</a></li>
                            <li><a href='{{route("contact")}}'>Support</a></li>
                            <li><a href='{{route('terms')}}'>Terms & Conditions</a></li>
                                        </ul>
                            </div>
                        </div>
                    </div>

                    <!--start part 3-->

                    <div class="col-md-4">
                        <h3 class="footer-title">Company</h3>
                            <ul class="company-ft">
                                <li><a href='{{route("contact")}}'>Support</a></li>
                                <li><a href='{{route("terms")}}'>Terms & Conditions</a></li>
                            </ul>
                            <img src="images/btc-accepted.png"/>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-footer">
                    <div class="container">
                        <p class="copyrights">&copy; 2021 Metaverse Prime. All rights reserved.</p>
                        </div>
                    </div>
                    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/618586f26bb0760a49415656/1fjopeb1b';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    </footer>

    </body>

  </html>
