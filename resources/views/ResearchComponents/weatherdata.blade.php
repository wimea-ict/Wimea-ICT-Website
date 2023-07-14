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
    <div class="project-details">
		<div class="inner-banner"
		style="background: url(images/project/wdr.jpg) no-repeat center;
		background-size: cover;
		background-attachment: fixed;">
   </div> <!-- /.inner-banner -->
		<div class="container">
			<div class="theme-title">
				<h2>WEATHER DATA REPOSITORIES</h2>
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
				<p><b>DIGITIZATION AND DATA RESCUE OF MANUAL WEATHER DATA REPOSITORY</b>
Facilitating the digitization of manual weather records (through a customized digitization programme), which is suitable for the E. African context in view of weather data management needs empirically assessed.

As a data rescue strategy for Uganda, WIMEA-ICT project has initially facilitated the imaging/scanning of 6000 manually recorded paper-based weather records. This is the first stage of digitization. In 2015, WIMEA-ICT project provided digitization equipment (mobile handheld & A3 automatic document feeder/flatbed scanners). The WIMEA-ICT
team trained and supervised the digitization exercise at the Uganda National Meteorological Authority (UNMA).</p>
				<div class="text-right">
					<div class="text-left">
						<h6>ANDREW MWESIGWA</h6>
						<span>PhD STUDENT</span>
					</div>
				</div>
			</div> <!-- /.speach -->
			<img src="images/project/img1.jpg"  alt="Image">

			<div class="details-tab-wrapper">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">WDR DESIGN</a></li>
					<li><a data-toggle="tab" href="#menu1">RC2 RESEARCH</a></li>
					<li><a data-toggle="tab" href="#menu2">TEAM</a></li>
					<li><a data-toggle="tab" href="#menu3">BENCHMARKING</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<p>WIMEA-ICT WEATHER DATA REPOSITORY DESIGN
Design, install and commission customized Weather Data Repository (WDR) software package that integrates digitized old manual and formally scattered weather data, current manually observed data, and data from automatic weather stations being designed by RC3. The WDR will provide real time weather data as input into Research Component 1 to facilitate weather forecasting/climate modeling and into RC4’s designed weather dissemination systems.
 Link to the web version of the WDR beta version: <a href="http://wimea.mak.ac.ug/wdr/" target="blank">http://wimea.mak.ac.ug/wdr </a></p>
					</div>
					  <div id="menu1" class="tab-pane fade">
					  <p>Research part of RC2:
Sustainability, resilience and feasibility investigation of the requirements of integration and management of digital weather data management systems.

This PhD study will explore issues dealing with resource, capacity and organisational change requirements for the digitization transition and sustaining digital weather data management systems. Study results in form of a computer-based dynamic simulation model to provide a guide to policy makers in meteorological agencies and related</p>
					  </div>
					<div id="menu2" class="tab-pane fade">
						<p>Team:
						<ul>
						<li>Dr. Agnes Rwashana Semwanga (Mak)</li>
						<li>Mr. Andrew Mwesigwa (Mak)</li>
						<li>Mr. Daudi Mboma (DIT)</li>
						<li>Dr. Julianne Sansa (PI, Mak)</li>
						<li>Prof. Dr. Joachim Reuder (UiB)</li>
						<li>Miss. Martha Nakuwanda</li>
						</ul>
</p>
					</div>
					<div id="menu3" class="tab-pane fade">
					  <p>
					  Benchmarking on digitization of weather data
A benchmarking visit to the University of Nairobi and the Kenya Meteorological Department revealed a need for other East African meteorological agencies (stakeholders of the WIMEA-ICT project) to benchmark and revisit their workflow processes for manual data digitisation. And Repository requirements for a customized weather data repository. Link to


					  </p>
					  <p>WIMEA-ICT project carried out a survey, which revealed the urgent need to digitize the fast-deteroriating paper-based old weather records and those, which are presently manually observed and recorded on paper and stored in the weather archives. Link to</p>
					  </div>
				</div>
			</div> <!-- /.details-tab-wrapper -->
		</div>

	</div> <!-- /.project-details -->
	<!--
=============================================
 Feature Work
==============================================
-->
<div class="feature-work">
 <div class="container">
     <div class="theme-title text-center">
         <h2>Featured Work</h2>
     </div> <!-- /.theme-title -->

     <ul class="isotop-menu-wrapper text-center">
         <li class="is-checked tran3s" data-filter="*">All</li>
         <li class="tran3s" data-filter=".strategy">Design</li>
         <li class="tran3s" data-filter=".tax">Benchmarking</li>
         <li class="tran3s" data-filter=".research">Research</li>
         <li class="tran3s" data-filter=".payroll">Archives</li>
     </ul>


     <div id="isotop-gallery-wrapper" class="row">
         <div class="grid-sizer"></div>
         <div class="isotop-item strategy">
             <div class="single-item">
                 <img src="images/project/wdr1.jpg" alt="Image">
                 <div class="hover tran4s">
                     <a href="images/project/wdr1.jpg" class="fancybox"><img src="images/icon/5.png" alt="Image"></a>
                 </div>
             </div> <!-- /.single-item -->
         </div> <!-- /.isotop-item -->
         <div class="isotop-item research payroll tax strategy">
             <div class="single-item">
                 <img src="images/project/wdr2.jpg" alt="Image">
                 <div class="hover tran4s">
                     <a href="images/project/wdr2.jpg" class="fancybox"><img src="images/icon/5.png" alt="Image"></a>
                 </div>
             </div> <!-- /.single-item -->
         </div> <!-- /.isotop-item -->
         <div class="isotop-item tax strategy">
             <div class="single-item">
                 <img src="images/project/wdr7.jpg" alt="Image">
                 <div class="hover tran4s">
                     <a href="images/project/wdr7.jpg" class="fancybox"><img src="images/icon/5.png" alt="Image"></a>
                 </div>
             </div> <!-- /.single-item -->
         </div> <!-- /.isotop-item -->
         <div class="isotop-item tax strategy">
             <div class="single-item">
                 <img src="images/project/wdr4.jpg" alt="Image">
                 <div class="hover tran4s">
                     <a href="images/project/wdr4.jpg" class="fancybox"><img src="images/icon/5.png" alt="Image"></a>
                 </div>
             </div> <!-- /.single-item -->
         </div> <!-- /.isotop-item -->
         <div class="isotop-item tax payroll research">
             <div class="single-item">
                 <img src="images/project/wdr5.jpg" alt="Image">
                 <div class="hover tran4s">
                     <a href="images/project/wdr5.jpg" class="fancybox"><img src="images/icon/5.png" alt="Image"></a>
                 </div>
             </div> <!-- /.single-item -->
         </div> <!-- /.isotop-item -->
         <div class="isotop-item strategy payroll tax">
             <div class="single-item">
                 <img src="images/project/wdr6.jpg" alt="Image">
                 <div class="hover tran4s">
                     <a href="images/project/wdr6.jpg" class="fancybox"><img src="images/icon/5.png" alt="Image"></a>
                 </div>
             </div> <!-- /.single-item -->
         </div> <!-- /.isotop-item -->
     </div> <!-- /#isotop-gallery-wrapper -->
 </div> <!-- /.container -->
</div> <!-- /.feature-work -->






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

