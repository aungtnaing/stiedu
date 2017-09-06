  <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
  <nav id="header" class="navbar navbar-default navbar-fixed-top transparent" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="xs-menu-bar"></span> <span class="xs-menu-bar"></span> <span class="xs-menu-bar"></span> </button>
            <h1 id="logo">
                <a class="navbar-brand page-scroll" href="/"><img alt="" class="ls-bg" src="<?php echo url(); ?>/images/logo.png"></a>
            </h1> 
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse navigation">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li><a href="/" class="page-scroll">Home</a></li>

                  <li class="dropdown"><a href="#about" class="page-scroll" data-toggle="dropdown" class="dropdown-toggle">About <b class="caret"></b></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ url('/stimuvision') }}" class="page-scroll">STIMU VISION</a></li>
                            <li><a href="{{ url('/stimumission') }}" class="page-scroll">STIMU MISSION</a></li>
                            <li><a href="{{ url('/history') }}" class="page-scroll">HISTORY</a></li>
                             <li><a href="{{ url('/value') }}" class="page-scroll">VALUE</a></li>
                             <li><a href="{{ url('/ourcampus') }}" class="page-scroll">OUR CAMPUS</a></li>
                              <li><a href="{{ url('/ourprogram') }}" class="page-scroll">OUR PROGRAM</a></li>
                              <li><a href="{{ url('/ourfaculty') }}" class="page-scroll">OUR FACULTY</a></li>
                              <li><a href="{{ url('/ourgraduates') }}" class="page-scroll">OUR GRADUATES</a></li>
                              <li><a href="{{ url('/stimugovernance') }}" class="page-scroll">STIMU GOVERNANCE AND <br>MANAGEMENT STRUCTURE</a></li>
                            <li><a href="" class="page-scroll">Corporate Video Link</a></li>
                            <li><a href="{{ url('/ourgall') }}" class="page-scroll">OUR GALLERY</a></li>
                            
                            
                        </ul>
                    </li>


                     <li class="dropdown"><a href="#course" class="page-scroll" data-toggle="dropdown" class="dropdown-toggle">Programs <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/courselists', 19) }}" class="page-scroll">FACULTY OF BUSINESS</a></li>
                            <li><a href="{{ url('/courselists', 20) }}" class="page-scroll">FACULTY OF ENGINEERING</a></li>
                            <li><a href="{{ url('/courselists', 21) }}" class="page-scroll">FACULTY OF HEALTH <br>SCIENCE</a></li>
                            <li><a href="{{ url('/courselists', 22) }}" class="page-scroll">Faculty of Education <br>& Linguistics</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Admission<b class="caret"></b></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ url('/graduatelists', 1) }}" class="page-scroll">Post Graduate <br>Program</a>
                            
                            </li>
                            <li><a href="{{ url('/graduatelists', 0) }}" class="page-scroll">Undergraduate <br>Program</a>
                           
                            </li>
                          

                            
                        </ul>
                    </li>
                     <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">link<b class="caret"></b></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="https://login.bluehost.com/hosting/webmail" class="page-scroll">EMAIL</a></li>
                            <li><a href="http://ole.ouhk.edu.hk" class="page-scroll">OLE</a></li>
                            <li><a href="https://breo.beds.ac.uk" class="page-scroll">BREO</a></li>
                             <li ><a href="{{ url('/getexamresults') }}" class="page-scroll" class="page-scroll">Exam <br>Result</a></li>
                            
                        </ul>
                    </li>
                                        <li><a href="{{ url('/contactus') }}" class="page-scroll">ContactUs</a></li>

                    @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login / Register</a></li>   
                    @else
                    @if(Auth::user()->photourl!="")
                    <li class="dropdown"><a href="" class="page-scroll" data-toggle="dropdown" class="dropdown-toggle"><img src="{{ Auth::user()->photourl }}" width="20" height="20" class="img-circle">{{ substr(Auth::user()->name,0, 5) }} <b class="caret"></b></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route("profiles.edit", Auth::user()->id) }}" class="page-scroll">My Profile</a></li>
                            <li><i class="icon-signout"></i><a href="{{ url('/auth/logout') }}" class="page-scroll">Logout</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="dropdown"><a href="" class="page-scroll" data-toggle="dropdown" class="dropdown-toggle">{{ Auth::user()->name }} <b class="caret"></b></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route("profiles.edit", Auth::user()->id) }}" class="page-scroll">My Profile</a></li>
                            <li><i class="icon-signout"></i><a href="{{ url('/auth/logout') }}" class="page-scroll">Logout</a></li>
                        </ul>
                    </li>
                    
                    @endif


                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->