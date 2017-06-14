  <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
  <nav id="header" class="navbar navbar-default navbar-fixed-top transparent" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="xs-menu-bar"></span> <span class="xs-menu-bar"></span> <span class="xs-menu-bar"></span> </button>
            <h1 id="logo">
                <a class="navbar-brand page-scroll" href="#page-top"><img alt="" class="ls-bg" src="<?php echo url(); ?>/images/logo.png"></a>
            </h1> 
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse navigation">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li><a href="#page-top" class="page-scroll">Home</a></li>
                <li><a href="#about" class="page-scroll">About</a></li>
                <!-- <li><a href="#team" class="page-scroll">Faculty</a></li> -->
                <li><a href="#gallery" class="page-scroll">Gallery</a></li>
                <li><a href="#course" class="page-scroll">Programs</a></li>
                <li><a href="#news" class="page-scroll">Event</a></li>
               
                  
                    <li class="dropdown"><a href="#useful" data-toggle="dropdown" class="dropdown-toggle">Useful<b class="caret"></b></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="https://login.bluehost.com/hosting/webmail" class="page-scroll">email</a></li>
                            <li><a href="http://ole.ouhk.edu.hk" class="page-scroll">ole</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="#contacts" class="page-scroll">Contact</a></li>
                    @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Signup/in</a></li>   
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