  <!--  Course   -->
  <section id="course" class="page course-wrap">
    <section class="section course-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="section-title align-center opacity">
                        <h1 class="header-title">Our <span>Programs</span></h1>
                    </hgroup>
                </div>
            </div>
            <!--/ .row-->
            <div class="row">
                <div class="course_tab_wrap">
                    <!-- Nav tabs -->
                    <ul style="background-color: #f0ff00;" class="nav nav-tabs" role="tablist">
                        @for ($i = 0; $i < count($maincategorys); $i++)
                        
                        @if($i == 0)
                        <li role="presentation" class="active"><a href="#main{{ $maincategorys[$i]->id }}" aria-controls="main{{ $maincategorys[$i]->id }}" role="tab" data-toggle="tab"><b>{{ $maincategorys[$i]->name }}</b></a></li>
                        @else
                        <li role="presentation"><a href="#main{{ $maincategorys[$i]->id }}" aria-controls="main{{ $maincategorys[$i]->id }}" role="tab" data-toggle="tab"><b>{{ $maincategorys[$i]->name }}</b></a></li>
                        @endif
                        @endfor
                    </ul>
                </div>
            </div>

            


        </div>

    </section>

    <div class="row">
        <div class="course_tab_des">
            <div class="col-md-12">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- All COURSES -->
                    @for ($i = 0; $i < count($maincategorys); $i++)
                    @if($i == 0)
                    <div role="tabpanel" class="tab-pane fade in active" id="main{{ $maincategorys[$i]->id }}">
                       <div class="row margin-bottom">
                           <div class="course_tab_wrap">
                            <!-- Nav tabs -->
                            <ul style="background-color: #98cefb;" class="nav nav-tabs" role="tablist">
                                @for ($j = 0; $j < count($maincategorys[$i]->categorys); $j++)
                                @if($j == 0)
                                <li role="presentation" class="active"><a href="#sub{{ $maincategorys[$i]->categorys[$j]->id }}" aria-controls="sub{{ $maincategorys[$i]->categorys[$j]->id }}" role="tab" data-toggle="tab">{{ $maincategorys[$i]->categorys[$j]->name }}</a></li>
                                @else
                                <li role="presentation"><a href="#sub{{ $maincategorys[$i]->categorys[$j]->id }}" aria-controls="sub{{ $maincategorys[$i]->categorys[$j]->id }}" role="tab" data-toggle="tab">{{ $maincategorys[$i]->categorys[$j]->name }}</a></li>
                                @endif

                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <div role="tabpanel" class="tab-pane fade" id="main{{ $maincategorys[$i]->id }}">
                   <div class="row margin-bottom">
                       <div class="course_tab_wrap">
                        <!-- Nav tabs -->
                        <ul style="background-color: #98cefb;" class="nav nav-tabs" role="tablist">
                            @for ($j = 0; $j < count($maincategorys[$i]->categorys); $j++)
                            @if($j == 0)
                            <li role="presentation" class="active"><a href="#sub{{ $maincategorys[$i]->categorys[$j]->id }}" aria-controls="sub{{ $maincategorys[$i]->categorys[$j]->id }}" role="tab" data-toggle="tab">{{ $maincategorys[$i]->categorys[$j]->name }}</a></li>
                            @else
                            <li role="presentation"><a href="#sub{{ $maincategorys[$i]->categorys[$j]->id }}" aria-controls="sub{{ $maincategorys[$i]->categorys[$j]->id }}" role="tab" data-toggle="tab">{{ $maincategorys[$i]->categorys[$j]->name }}</a></li>
                            @endif

                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
            @endif

            @endfor

        </div>
    </div>
</div>
<!--/ .row-->
</div>
<!--/ .row-->
<!--/ .section-->
<section class="section course-body">
<div class="container">
    <div class="row">
        <div class="course_tab_des">
            <div class="col-md-12">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- All COURSES -->
                    @for ($i = 0; $i < count($maincategorys); $i++)
                    @for ($j = 0; $j < count($maincategorys[$i]->categorys); $j++)
                    @if($j == 0 && $i == 0)
                    <div role="tabpanel" class="tab-pane fade in active" id="sub{{ $maincategorys[$i]->categorys[$j]->id }}">
                        <div class="row margin-bottom">
                            <?php $catid = ""; ?>
                            @foreach($maincategorys[$i]->categorys[$j]->courses as $course)
                            <?php $catid = $course->category->id; ?>
                            <div class="col-md-4">
                                <div class="course_cur_wrap">
                                    <div class="work-item"> <img src="{{ $course->photourl1 }}" alt="">
                                        <div class="image-extra">
                                            <div class="extra-content">
                                                <div class="inner-extra">
                                                    <a class="single-image link-icon" href="{{ url('/coursedetails', $course->id) }}"></a>
                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{ $course->photourl1 }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course_cur_des"> 
                                        <h2 class="entry-title"><a href="{{ url('/coursedetails', $course->id) }}">{{ $course->name }}</a></h2>
                                        <div class="entry-meta"> <span class="date">{{ $course->created_at }}</span> </div>
                                        <div class="entry-body">
                                            <p>{{ substr($course->aboutcourse,0, 150) }}...</p>
                                        </div>
                                    </div>
                                    <div class="course_cur_des_ft">
                                        <ul class="course-meta desc">
                                            <li>
                                                <h6>{{ $course->duration }}</h6> <span> Course</span> 
                                            </li>
                                            <li>
                                                <h6>{{ $course->seatsavailable }}</h6> <span> Class Size</span> </li>
                                                <li>
                                                    <h6><span class="course-time">{{ $course->classduration }}</span></h6> <span> Class Duration</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="align-center opacityRun view-more-wrap"> <a class="button large default" href="{{ url('/courselists', $catid) }}">View More</a> </div>
                                                    </div>
                                                </div>
                                </div>
                            </div>
                            @else
                            <div role="tabpanel" class="tab-pane fade" id="sub{{ $maincategorys[$i]->categorys[$j]->id }}">
                                <div class="row margin-bottom">
                                    @foreach($maincategorys[$i]->categorys[$j]->courses as $course)

                                    <div class="col-md-4">
                                        <div class="course_cur_wrap">
                                            <div class="work-item"> <img src="{{ $course->photourl1 }}" alt="">
                                                <div class="image-extra">
                                                    <div class="extra-content">
                                                        <div class="inner-extra">
                                                            <a class="single-image link-icon" href="{{ url('/coursedetails', $course->id) }}"></a>
                                                            <a class="single-image plus-icon" data-fancybox-group="blog" href="{{ $course->photourl1 }}"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course_cur_des"> 
                                                <h2 class="entry-title"><a href="{{ url('/coursedetails', $course->id) }}">{{ $course->name }}</a></h2>
                                                <div class="entry-meta"> <span class="date">{{ $course->created_at }}</span> </div>
                                                <div class="entry-body">
                                                    <p>{{ substr($course->aboutcourse,0, 150) }}...</p>
                                                </div>
                                            </div>
                                            <div class="course_cur_des_ft">
                                                <ul class="course-meta desc">
                                                    <li>
                                                        <h6>{{ $course->duration }}</h6> <span> Course</span> </li>
                                                        <li>
                                                            <h6>{{ $course->seatsavailable }}</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">{{ $course->classduration }}</span></h6> <span> Class Duration</span> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                              

                                                @endforeach
                                                 <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="align-center opacityRun view-more-wrap"> <a class="button large default" href="{{ url('/courselists', $catid) }}">View More</a> </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        @endif
                                         

                                        @endfor

                                         
                                        @endfor




                                    </div>
                                </div>
                            </div>
                            <!--/ .row-->
                        </div>
                        <!--/ .row-->
                       <!--  <div class="row">
                            <div class="col-xs-12">
                                <div class="align-center opacityRun view-more-wrap"> <a class="button large default" href="#">View More</a> </div>
                            </div>
                        </div> -->
                    </div>
                </section>




                <!--/ .section-->
            </section>
    <!--  end Course   -->

      <section class="section parallax parallax-bg-3 bg-dark-color">
                <div class="full-bg-image"></div>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="tweet opacity" data-timeout="6000"></div>
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>