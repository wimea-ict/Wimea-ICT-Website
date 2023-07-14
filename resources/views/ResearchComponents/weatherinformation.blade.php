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
	style="background: url(images/project/img1.jpg) no-repeat center;
	background-size: cover;
	background-attachment: fixed;">
</div> <!-- /.inner-banner -->



	<div class="project-details">
		<div class="container">
			<div class="theme-title">
				<h2>WEATHER INFORMATION DISSEMINATION</h2>
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
                        <b>Topic: Supporting Efficient Weather Dissemination to Stakeholders in East Africa</b><br>
              Weather information is vital for all. The WIMEA-ICT project aims at providing rapid dissemination of accurate, consistent,
               and high-quality forecast information to targeted stakeholders using suitable ICTs.
                The stakeholder will be allowed to ask complex questions about the past, present and future weather information.
                 Of particular interest is ability to provide information in local languages. This MSc research will support on-going
                 PhD research in developing an integrated and effective weather dissemination system for Uganda.
                 The most important components include software architecture, software modeling, formal specifications, Java Programming,
                  C Programming, databases, and enterprise systems engineering.
                    </p>
                <div class="text-right">

					<div class="text-left">
						<h6>DOREEN TUHEIRWE MUKASA</h6>
						<span>PhD STUDENT</span>
					</div>
				</div>
			</div> <!-- /.speach -->
			<img src="images/project/img2.jpg" alt="Image">

			<div class="details-tab-wrapper">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">CONTRIBUTORS</a></li>
					<li><a data-toggle="tab" href="#menu1">Solution</a></li>
					<li><a data-toggle="tab" href="#menu2">Result</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
					<p>1. Seth Mutano</p>
                    <p>2. Ssendawula Stella</p>
                    <p>3. Kamira Moses</p>
                    <p>4. Kitende Raymond</p>

                    </div>
					  <div id="menu1" class="tab-pane fade">
						<p>Since the cost of energy has become a significant factor in the performance of economy of societies, management of energy resources has become very crucial. Energy management involves utilizing the available energy resources more effectively that is inline with minimum incremental costs. Many times it is possible to save expenditure on energy without incorporating fresh technology by simple management techniques.</p> <br>
						<p>FinTech is a global consulting powerhouse. We began our operations a few decades ago and have grown due to excellent relationships with our clients. We started out small, with just a few people and a small office, but today we have offices in multiple countries with hundreds of people working inside them.</p> <br>
						<p>We achieved our success because of how successfully we integrate with our clients. One complaint many people have about consultants is that they can be disruptive. Employees fear outside consultants coming in and destroying the workflow. Our clients face no such issues.</p> <br>
						<p>The image of a company is very important. Would you want to work with a consultation company whose office was in shambles? We judge things often by their appearance, especially when seeing something for the first time. If you are an excellent company with a bad image or appearance then you may have loyal clients but new clients will be hard to get.</p>
					  </div>
					<div id="menu2" class="tab-pane fade">
						<p>Since the cost of energy has become a significant factor in the performance of economy of societies, management of energy resources has become very crucial. Energy management involves utilizing the available energy resources more effectively that is inline with minimum incremental costs. Many times it is possible to save expenditure on energy without incorporating fresh technology by simple management techniques.</p> <br>
						<p>FinTech is a global consulting powerhouse. We began our operations a few decades ago and have grown due to excellent relationships with our clients. We started out small, with just a few people and a small office, but today we have offices in multiple countries with hundreds of people working inside them.</p> <br>
						<p>We achieved our success because of how successfully we integrate with our clients. One complaint many people have about consultants is that they can be disruptive. Employees fear outside consultants coming in and destroying the workflow. Our clients face no such issues.</p> <br>
						<p>The image of a company is very important. Would you want to work with a consultation company whose office was in shambles? We judge things often by their appearance, especially when seeing something for the first time. If you are an excellent company with a bad image or appearance then you may have loyal clients but new clients will be hard to get.</p>
					</div>
				</div>
			</div> <!-- /.details-tab-wrapper -->
		</div>
	</div> <!-- /.project-details -->





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

