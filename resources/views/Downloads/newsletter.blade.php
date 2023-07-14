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
	style="background: url(images/project/img2.jpg) no-repeat center;
	background-size: cover;
	background-attachment: fixed;">
</div> <!-- /.inner-banner -->


<div class="project-details">
    <div class="container">
        <div class="theme-title">
            <h2>WIMEA-ICT NEWSLETTERS AND REPORTS</h2>
        </div> <!-- /.theme-title -->

        <ul class="project-info clearfix">
            <h3>DOCUMENTS</h3><br>

            <table class="table table-hover table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Name Of the Document</th>
                    <th>link</th>
                    <th>Document category</th>
                    <th>Date of Submission</th>
                    @if (!Auth::guest())
                    <th >Edit</th>
                    @else

                    @endif
                </tr>
                @foreach ($documents as $key=>$user)
                <tr>
                    <td>{{ $key+1 }}</td>
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
                @endforeach
            </table>


        {{--  --}}

        </ul>
        <img src="images/project/img2.jpg" alt="Image">

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


