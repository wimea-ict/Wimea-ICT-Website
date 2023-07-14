<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themazine.com/html/fin-tech/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2020 09:55:10 GMT -->
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>WIMEA-ICT</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56"
		href="{{ asset('images/fav-icon/icon1.png') }}">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->

	</head>
    <body>

    @include("layout.header")

		@include("layout.body")

	@yield('content')
    @include("layout.footer")


    <!-- Js File_________________________________ -->



		<!-- j Query -->
		<script data-cfasync="false" src="{{ asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script type="text/javascript" src="{{ asset('vendor/jquery.2.2.3.min.js') }}"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
		<!-- Bootstrap Select JS -->
		<script type="text/javascript" src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>

		<!-- Vendor js _________ -->
		<!-- revolution -->
		<script src="{{ asset('vendor/revolution/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('vendor/revolution/jquery.themepunch.revolution.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.slideanims.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.layeranimation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.navigation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.kenburn.min.js') }}"></script>
		<!-- menu  -->
		<script type="text/javascript" src="{{ asset('vendor/menu/src/js/jquery.slimmenu.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/jquery.easing.1.3.js') }}"></script>
		<!-- isotop -->
		<script type="text/javascript" src="{{ asset('vendor/isotope.pkgd.min.js') }}"></script>
		<!-- fancy box -->
		<script type="text/javascript" src="{{ asset('vendor/fancy-box/jquery.fancybox.pack.js') }}"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!-- js count to -->
		<script type="text/javascript" src="{{ asset('vendor/jquery.appear.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/jquery.countTo.js') }}"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="{{ asset('js/theme.js')}}"></script>

    </body>
    </html>

