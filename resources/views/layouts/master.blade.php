
<!doctype html>
<html class="no-js" lang="">
<head>
		<!-- Basic page needs
		============================================ -->
		<meta charset="utf-8">		
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Dotapps - App Landing Page HTML Template</title>
		
		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Google web fonts
		============================================ -->
		<link href="../../../fonts.googleapis.com/css971f.css?family=Lato:300,300i,400,700|Raleway:300,300i,400,700" rel="stylesheet">
		
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- CSS  -->
		<!-- Bootstrap CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		
		<!-- font-awesome CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
		
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
		
		<!-- simple-overlay CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/simple-overlay.css') }}">
        		
		<!-- main CSS
		============================================ -->		
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		
		<!-- responsive CSS
		============================================ -->		
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
		
		<!-- modernizr js
		============================================ -->		
        <script src="{{ asset('assets/js/modernizr.js') }}"></script>		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
    <body>
            
        <!-- =================================================================
                                        BODY START
        ================================================================== -->
      
        <!-- START HEADER SECTION -->
        
        @include('includes.header')
        <!-- / END HEADER SECTION -->

        @yield('content')
        
        <!-- START SCROLL TOP -->
        <div id="scroll-top">
            <div class="container">
                <div class="row">
                        <div class="scrollup">
                            <i class="fa fa-chevron-up" aria-hidden="true"></i>
                        </div>
                </div>
            </div>
        </div>        
        <!-- / END SCROLL TOP -->
        
        @include('includes.footer')
        
        
		<!-- JS -->
		
		<!-- jquery js -->   
		<script src="{{ asset('assets/js/jquery-3.1.1.js') }}"></script>
		<!-- bootstrap js -->
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
		<!-- easing js -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script> 
		<!-- mousescroll js -->
		<script type="text/javascript" src="{{ asset('assets/js/mousescroll.js') }}"></script> 
		<!-- smoothscroll js -->
		<script type="text/javascript" src="{{ asset('assets/js/smoothscroll.js') }}"></script> 
		<!-- owl carousel js -->
		<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<!-- wow js -->
		<script src="{{ asset('assets/js/wow.min.js') }}"></script>		
		<!-- simple overlay video js -->
        <script src="{{ asset('assets/js/simple-overlay.js') }}"></script>
		<script>
				new WOW().init();
		</script>	
		<!-- Main js --> 	
		<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
   
    </body>
</html>