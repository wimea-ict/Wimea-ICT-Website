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
	{{-- <h2></h2>  banner--}}
	<div class="inner-banner"
	style="background: url(images/project/img4.jpg) no-repeat center;
	background-size: cover;
	background-attachment: fixed;">
</div> <!-- /.inner-banner -->
    <div class="project-details">

		<div class="container">
			<div class="theme-title">
				<h2>NUMERICAL WEATHER PREDICTION</h2>
			</div> <!-- /.theme-title -->

			<ul class="project-info clearfix">
                <h3>DOCUMENTS</h3><br>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name Of the Document</th>
                        <th scope="col">link</th>
                        <th scope="col">Document category</th>
                        <th scope="col">Date of Submission</th>
                        @if (!Auth::guest())
                        <th>Edit</th>
                        @else

                        @endif
                    </tr>
                    </thead>
                    @foreach ($documents as $key=>$user)
                    <tbody>

                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $user->name }}</td>
                        <td><a href="uploads/{{ $user->document  }} " target="blank">	<i class="fa fa-file" aria-hidden="true"></i> {{ $user->document  }}</a></td>
                        @if($user->manual)
                        <td>{{ $user->manual }}</td>
                        @else
                        <td>{{ $user->category }}</td>
                        @endif
                        <td>{{ $user->date }}</td>
                        @if (!Auth::guest())
                        <td><a href = 'edituser/{{ $user->doc_Id }}'> <button class="btn btn-primary">Edit</button></a></td>
                        @else
                        @endif
                    </tr>
                    </tbody>
                    @endforeach
                </table>
			{{--  --}}

			</ul>

			<div class="speach">
				<p>
                    The research component No.1 is about customizing a numerical weather prediction model for operational weather prediction in partner countries. The Consortium for Small-scale modeling (COSMO) model and the Weather Research and Forecasting (WRF) model are identified as research and operational prediction models. Sample results are presented using Figure 1 below. The component has the following members:The research component No.1 is about customizing a numerical weather prediction model for operational weather prediction in partner countries.
                    The Consortium for Small-scale modeling (COSMO) model and the Weather Research and Forecasting (WRF)
                     model are identified as research and operational prediction models. Sample results are presented using Figure below on the Right.
                </p>
                <div class="text-right">
					<div class="text-left">
						<h6>ISAAC MUGUME</h6>
						<span>PhD CANDIDATE</span>
					</div>
				</div>
			</div> <!-- /.speach -->
        <div class="row">
            <figure class="figure">
			<img src="images/project/wrf1.png" alt="Image"  class="figure-img img-fluid rounded col-md-6" >
            {{-- <figcaption  class="figure-caption text-right"> Figure 1</figcaption> --}}
            </figure>
            <img src="images/project/wrf2.png" alt="Image" class="isotop-item strategy col-md-6" >
        </div>
			<div class="details-tab-wrapper">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">TEAM MEMBERS</a></li>
					<li><a data-toggle="tab" href="#menu1">COLLABORATORS</a></li>
					<li><a data-toggle="tab" href="#menu2">ACHIEVEMENT</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
                        <h2>  The component has the following members:</h2><br>
                        <p>1. Dr. Julianne Sansa-Otim Principal Investigator and PhD adviser.</p>
                        <p>2. Prof. Joachim Reuder, Member and PhD adviser from University of Bergen, Norway</p>
                        <p>3. Assoc. Prof. Charles Basalirwa  Member and PhD adviser from Makerere University, Uganda</p>
                        <p>4. Dr. Daniel Waiswa  Member and PhD adviser from Makerere University, Uganda</p>
                        <p>5. Dr. Alex Nimusiima Member and M.Sc adviser from Makerere University, Uganda</p>
                        <p>6. Mr. Isaac Mugume Member and PhD candidate from Makerere University, Uganda</p>
                        <p>7. Mr. David Lukudu Member and PhD candidate from University of Juba, South Sudan</p>
                        <p>8. Mr. Ronald Opio Member and M.Sc candidate from Makerere University, Uganda</p>
                    </div>

					  <div id="menu1" class="tab-pane fade">
                          <h2> Key collaborators from Uganda National Meteorological Authority on RC1:</h2><br>
                          <p>1. Ms. Teddy Tindamanyire Director Research and Training, UNMA</p>
                          <p>2. Dr. Bob Ogwang Principal Meteorologist, UNMA</p>
                          <p>3. Mr. Godwin Ayesiga PhD Candidate and Principal Meteorologist, UNMA</p>
                          <p>4. Mr. Musa Semujju Forecaster, UNMA</p>

                    </div>

					<div id="menu2" class="tab-pane fade">
                        <p>Training UNMA forecasters in installation and experimentation of the WRF model2.
                            Co-authored scientific papers with UNMA staffs. Offering continuous support in using WRF model.</p>
                    </div>
				</div>
			</div> <!-- /.details-tab-wrapper -->
		</div>
	</div> <!-- /.project-details -->





    @include("layout.footer")


    <!-- Js File_________________________________ -->


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


