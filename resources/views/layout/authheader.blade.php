

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
                    <div class="logo float-left"><a href="index-2.html"><img src="{{ asset('images/logo/log.png') }}" width="400" height="75" alt="Logo"></a></div>

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
                        <li><a href="{{route("editorial")}}">EDITORIALS</a>
                            {{-- <ul>
                                <li><a href="{{route("editorial")}}">EDITORIALS</a></li>
                            </ul> --}}
                        </li>
                        <li><a href="{{route("media")}}">IN MEDIA</a></li>

                     </ul>
                  </li>
                  <li><a href="#">RESEARCH COMPONENTS</a>
                      <ul class="dropdown">
                        <li><a href="{{ route("numericalweather") }}">Numerical Weather Prediction</a></li>
                        <li><a href="{{ route("weatherdata") }}">Weather Data Repositories</a></li>
                        <li><a href="{{ route("weatherstation") }}">Weather Station Network Density</a></li>
                        <li><a href="{{ route("weatherinformation") }}">Weather Information Dissemination</a></li>
                     </ul>
                  </li>
                  <li><a href="#">UPLOAD FILES</a>
                      <ul class="dropdown">
                        <li><a href="{{route("technicaldocuments")}}">Technical Documents</a></li>
                        <li><a href="{{route("photos")}}">Photos</a></li>
                        <li><a href="{{route("publication")}}">Publications</a></li>
                     </ul>
                  </li>
                  <li><a href="#">DOWNLOADS</a>
                    <ul class="dropdown">
                      {{-- <li><a href="{{route("monthlyprogress")}}">Monthly Progress Reports</a></li> --}}
                      <li><a href="{{route("newsletter")}}">Newsletters and Reports</a></li>
                      <li><a href="{{route("publication")}}">Publications</a></li>
                   </ul>
                </li>

                  <li><a href="{{route("gallery")}}">GALLERY</a></li>
                  <li><a href="{{ route("aboutus") }}">ABOUT US</a>
                      <ul class="dropdown">
                        <li><a href="{{route("team")}}">Our Team</a></li>
                        <li><a href="{{route("intern")}}">Interns</a></li>

                     </ul>
                  </li>

                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                  </li>




                  <li class="float-right search-box">
                      <button id="search"><i class="fa fa-search" aria-hidden="true"></i></button>
                      <form action="#" class="tran4s">
                          <input type="text" placeholder="Search...">
                      </form>
                  </li>
               </ul>
            </nav> <!-- /#mega-menu-holder -->
       </div> <!-- /.container -->
    </div> <!-- /.theme-main-menu -->
