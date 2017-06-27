  <!--  Course   -->
<style type="text/css">
    
      body,

.course-wrap .course_tab_wrap .nav>li.active>a,
.course-wrap .course_cur_des>span,
.activeSlide {
    background-color: #99ce34;
}
</style>



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
                    <ul style="background-color: rgba(5, 9, 53, 0.9);" class="nav nav-tabs" role="tablist">
                        @for ($i = 0; $i < count($categorys); $i++)
                        
                        @if($i == 0)
                        <li role="presentation" class="active"><a href="#main{{ $categorys[$i]->id }}" aria-controls="main{{ $categorys[$i]->id }}" role="tab" data-toggle="tab" style="color:white;"><b>{{ $categorys[$i]->name }}</b></a></li>
                        @else
                        <li role="presentation"><a href="#main{{ $categorys[$i]->id }}" aria-controls="main{{ $categorys[$i]->id }}" role="tab" data-toggle="tab" style="color:white;"><b>{{ $categorys[$i]->name }}</b></a></li>
                        @endif
                        @endfor
                    </ul>
                </div>
            </div>

            


        </div>

    </section>

    
    <!--/ .section-->
    <section class="section course-body">
        <div class="container">
            <div class="row">
                <div class="course_tab_des">
                    <div class="col-md-12">
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade in active" id="main{{ $categorys[0]->id }}">
                                <div class="row margin-bottom">
                                
                                    @foreach($categorys[0]->courses as $course)
                                    
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
                                                    <p><b>{{ substr($course->aboutcourse,0, 150) }}...</b></p>
                                                </div>
                                            </div>
                                            <div class="course_cur_des_ft">
                                                <ul class="course-meta desc">
                                                    <li><h6>{{ $course->duration }}</h6> <span> Course</span></li>
                                                    <li><h6>{{ $course->seatsavailable }}</h6> <span> Class Size</span> </li>
                                                    <li><h6><span class="course-time">{{ $course->classduration }}</span></h6> <span> Class Duration</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="align-center opacityRun view-more-wrap"> <a class="button large default" href="{{ url('/courselists', $categorys[0]->id) }}">View More</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div role="tabpanel" class="tab-pane fade" id="main{{ $categorys[1]->id }}">
                                <div class="row margin-bottom">
                              
                                    @foreach($categorys[1]->courses as $course)
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
                                                    <p><b>{{ substr($course->aboutcourse,0, 150) }}...</b></p>
                                                </div>
                                            </div>
                                            <div class="course_cur_des_ft">
                                                <ul class="course-meta desc">
                                                    <li><h6>{{ $course->duration }}</h6> <span> Course</span> </li>
                                                    <li><h6>{{ $course->seatsavailable }}</h6> <span> Class Size</span> </li>
                                                    <li><h6><span class="course-time">{{ $course->classduration }}</span></h6> <span> Class Duration</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach


                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="align-center opacityRun view-more-wrap"> <a class="button large default" href="{{ url('/courselists', $categorys[1]->id) }}">View More</a> </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div role="tabpanel" class="tab-pane fade" id="main{{ $categorys[2]->id }}">
                                <div class="row margin-bottom">
                              
                                    @foreach($categorys[2]->courses as $course)
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
                                                    <p><b>{{ substr($course->aboutcourse,0, 150) }}...</b></p>
                                                </div>
                                            </div>
                                            <div class="course_cur_des_ft">
                                                <ul class="course-meta desc">
                                                    <li><h6>{{ $course->duration }}</h6> <span> Course</span> </li>
                                                    <li><h6>{{ $course->seatsavailable }}</h6> <span> Class Size</span> </li>
                                                    <li><h6><span class="course-time">{{ $course->classduration }}</span></h6> <span> Class Duration</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach


                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="align-center opacityRun view-more-wrap"> <a class="button large default" href="{{ url('/courselists', $categorys[2]->id) }}">View More</a> </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="main{{ $categorys[3]->id }}">
                                <div class="row margin-bottom">
                              
                                    @foreach($categorys[3]->courses as $course)
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
                                                    <p><b>{{ substr($course->aboutcourse,0, 150) }}...</b></p>
                                                </div>
                                            </div>
                                            <div class="course_cur_des_ft">
                                                <ul class="course-meta desc">
                                                    <li><h6>{{ $course->duration }}</h6> <span> Course</span> </li>
                                                    <li><h6>{{ $course->seatsavailable }}</h6> <span> Class Size</span> </li>
                                                    <li><h6><span class="course-time">{{ $course->classduration }}</span></h6> <span> Class Duration</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach


                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="align-center opacityRun view-more-wrap"> <a class="button large default" href="{{ url('/courselists', $categorys[3]->id) }}">View More</a> </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
                                    <!--/ .row-->
            </div>
                                <!--/ .row-->

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