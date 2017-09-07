 <!--  Professor   -->
        <section id="team" class="page">
            <section class="section bg-gray-color">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title" style="color:#050930;">our Faculty</h1>
                                <!-- <h2 >We are great Faculty in a university</h2>  -->
                                <h4 style="color:#050930;text-align: left;">STI faculty members are diverse with different cultural backgrounds from different parts of Myanmar and the world. They are experienced, honourable and visionary players bringing with them their excellent knowledge and experiences from various fields of studies. Our professionals from overseas include Emeritus University Professors, as well as American and British English and business teachers. STI also brings in various professionals from around the world for seminars and workshops. The renowned speakers are masters in Teacher Training, Business Management, Economics, Marketing, English, IT, Finance, HR and Entrepreneurship. The STI administrative team is solid and all STI staff members are amiable and properly trained ethical professionals.</h4>
                            </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
                <section class="team-member">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="team-slider" class="owl-carousel owl-theme team-contents clearfix">
                                    
                                @foreach($professors as $professor)
                                    <div class="item scale">
                                        <div class="contents clearfix">
                                            <div class="team-info">
                                                <div class="team-image">
                                                    <a class="single-image team-plus-icon" href="{{ url('/facultyprofile', $professor->id) }}"><img src="{{ $professor->photourl1 }}" alt="" /></a>
                                                </div>
                                                <hgroup class="team-group">
                                                    @if(strlen($professor->name) >= 13)
                                                    <a href="{{ url('/facultyprofile', $professor->id) }}"><h4 class="team-title" style="color:#050930;">  
                                                    {{ $professor->name }}
                                                    </h4></a>
                                                    
                                                     @else
                                                     <a href="{{ url('/facultyprofile', $professor->id) }}"><h4 class="team-title" style="color:#050930;">
                                                    {{ $professor->name }}
                                                    </h4></a>
                                                      <br>
                                                     @endif
                                                    
                                                    <h5 class="team-position" style="color:#050930;">{{ $professor->positions }}</h5>

                                                     @if(strlen($professor->description) > 40)
                                                     <h5><p class="opacity" style="color:#050930;"><?php echo substr($professor->description,0, 40); ?> 
                                                    ...</p></h5>
                                                    @else
                                                         <h5><p class="opacity" style="color:#050930;"><?php echo $professor->description; ?> 
                                                    </p></h5>

                                                    @endif
                                                    <a href="{{ url('/facultyprofile', $professor->id) }}"">readmore..</a>

                                                </hgroup>
                                               
                                            </div>
                                            <!--/ .team-info-->
                                        </div>
                                        <!--/ .contents-->
                                    </div>
                                @endforeach
                                </div>
                                <!--/ .team-contents-->
                            </div>
                        </div>
                        <!--/ .row-->
                    </div>
                    <!--/ .container-->
                </section>
                <!--/ .team-member-->
            </section>
            <!--/ .section-->