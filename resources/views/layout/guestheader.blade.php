<div class="main-page-wrapper">

    <!-- ===================================================
        Loading Transition
    ==================================================== -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>


    <!--
    =============================================
        Theme Header
    ==============================================
    -->
    <header>
        <!-- ====================Top header================= -->
        <div class="top-header p-color-bg">
            <div class="container">
                <ul class="float-left">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>  SCIT, 7062 Kampala Uganda</li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> wimea@cit.ac.ug</li>
                </ul>
                <ul class="float-right">

                    <li><a href="https://www.facebook.com/wimeaict" target="blank" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.twitter.com/wimeaict" target="blank" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                </ul>
            </div>
        </div> <!-- /.top-header -->

        <!-- ===================== Bottom Header ======================= -->
        <div class="bottom-header">
            <div class="container">
                <div class="wrapper clearfix">
                    <div class="logo float-left"><a href="index-2.html"><img src="images/logo/log.png" width="400" height="75" alt="Logo"></a></div>

                    <div class="float-right right-side">
                        <ul>
                            <li>
                                <i class="fa fa-phone p-color" aria-hidden="true"></i>
                                <h6>Contact us</h6>
                                <p> 0414-542803</p>
                            </li>
                            <li>
                                <i class="fa fa-clock-o p-color" aria-hidden="true"></i>
                                <h6>Working TIme</h6>
                                <p>Mon - Sat 9.00 - 17.00</p>
                            </li>
                            <li><a href="#" class="tran3s hvr-rectangle-in">GET A QUOTE</a></li>
                        </ul>
                    </div> <!-- /.right-side -->
                </div> <!-- /.wrapper -->
            </div> <!-- /.container -->
        </div> <!-- /.bottom-header -->
    </header>

    <!--
    =============================================
        Theme Main Menu
    ==============================================
    -->
    <div class="theme-main-menu">
       <div class="container">
               <!-- ============== Menu Warpper ================ -->
               <nav id="mega-menu-holder" class="clearfix">
               <ul class="clearfix">
                  <li class="active"><a href="{{route("/")}}">Home</a>
                      <!-- <ul class="dropdown">
                        <li><a href="index-2.html">Home Version One</a></li>
                        <li><a href="index-3.html">Home Version Two</a></li>
                     </ul> -->
                  </li>
                  <li><a href="#">NEWS</a>
                      <ul class="dropdown">
                        <li><a href="{{route("editorial")}}">EDITORIALS</a></li>
                        <li><a href="{{route("media")}}">IN MEDIA</a></li>

                     </ul>
                  </li>
                  <li><a href="#">RESEARCH COMPONENTS</a>
                      <ul class="dropdown">
                        <li><a href="{{ route("numericalweather") }}">Numerical Weather Prediction (RC1)</a>
                                {{-- <ul>
                                    <li><a href="{{ route("numericalweather") }}">ABOUT US</a></li>
                                    <li><a href="{{ route("numericalweather") }}">TEAM MEMBERS</a></li>
                                </ul> --}}
                        </li>
                        <li><a href="{{ route("weatherdata") }}">Weather Data Repositories (RC2)</a></li>
                        <li><a href="{{ route("weatherstation") }}">Weather Station Network Density (RC3)</a></li>
                        <li><a href="{{ route("weatherinformation") }}">Weather Information Dissemination (RC4)</a></li>
                     </ul>
                  </li>
                  <li><a href="#">DOWNLOADS</a>
                      <ul class="dropdown">
                        {{-- <li><a href="{{route("monthlyprogress")}}">Monthly Progress Reports</a></li> --}}
                        <li><a href="{{route("newsletter")}}">Newsletters and Reports</a></li>
                        <li><a href="{{route("publication")}}">Publications</a></li>
                     </ul>
                  </li>
                  <li><a href="{{route("forum")}}">FORUM</a>

                  </li>
                  <li><a href="{{route("gallery")}}">GALLERY</a></li>
                  <li><a href="{{route("aboutus")}}">ABOUT US</a>
                      <ul class="dropdown">
                        <li><a href="{{route("team")}}">Our Team</a></li>
                        <li><a href="{{route("intern")}}">Interns</a></li>

                     </ul>
                  </li>
                  <li><a  href="{{ route('contact') }}">CONTACT US</a></li>

                  <li><a  href="{{ route('login') }}">LOGIN</a></li>
                                  </ul>
            </nav> <!-- /#mega-menu-holder -->
       </div> <!-- /.container -->
    </div> <!-- /.theme-main-menu -->
