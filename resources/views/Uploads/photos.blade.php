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
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon1.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->

	</head>
    <body>
    @include("layout.header")

	<div class="inner-banner"
	style="background: url(images/inner-page/banner4.jpg) no-repeat center;
	background-size: cover;
	background-attachment: fixed;">
</div> <!-- /.inner-banner -->
<div class="container">
	<div class="row">
	<div class="card" style="width: 60rem; margin: auto; background: lavender;padding: 30px; margin-bottom: 30px; border-radius: 10px;">
	<div class="row-justify-content-center">
	@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{{ $message }}</strong>
	</div>

	@endif

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<div class="card-body">
	<h5 class="card-title">UPLOAD PHOTOS FORM</h5> &nbsp;
	<form action="{{ route('photos') }}" method="POST" enctype="multipart/form-data">
		@csrf


			<div class="form-group">
				<label for="file">NAME OF THE FILE</label>
				<input type="text" name="name" placeholder="Enter file name"
				 class="form-control @error('name') is-invalid
				@enderror">
				@error('name')

				  <span class="invalid-feedback" role="alert">
					  <strong>{{ $message }}</strong>
				  </span>
			  @enderror
			</div>

			<div class="form-group ml-5">
				<label for="file">FILE TO UPLOAD</label>
				<input type="file" name="file[]" multiple class="form-control"

				id="file">
			</div>
			<div class="form-group  ml-5">
				<label for="" class="date">DATE</label>

				  <input class="form-control @error('date') is-invalid
				  @enderror" name="date" value="{{ old('date') }}" type="date"  value="date">
				  @error('date')

				  <span class="invalid-feedback" role="alert">
					  <strong>{{ $message }}</strong>
				  </span>
			  @enderror

			</div>


			<div class="form-group">
				<button type="submit" class="btn btn-success">Submit</button>
			</div>

		</div>
	</form>
</div>
 </div>
 </div>
 </div>




    @include("layout.footer")


    <!-- Js File_________________________________ -->


		<!-- j Query -->
		<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
		<!-- Bootstrap Select JS -->
		<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>

		<!-- Vendor js _________ -->
		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<!-- menu  -->
		<script type="text/javascript" src="vendor/menu/src/js/jquery.slimmenu.js"></script>
		<script type="text/javascript" src="vendor/jquery.easing.1.3.js"></script>
		<!-- isotop -->
		<script type="text/javascript" src="vendor/isotope.pkgd.min.js"></script>
		<!-- fancy box -->
		<script type="text/javascript" src="vendor/fancy-box/jquery.fancybox.pack.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script type="text/javascript" src="vendor/jquery.appear.js"></script>
		<script type="text/javascript" src="vendor/jquery.countTo.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>

    </body>
    </html>


