
<section id="news" class="page news_wrap">
    <section class="section border bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="section-title align-center opacity">
                        <h1 class="header-title">News & <span>Event</span></h1> </hgroup>
                    </div>
                </div>
                <!--/ .row-->
                <div class="row">
                    <!-- News & Event item 1-->
                    @foreach($events as $event)
                    <div class="col-md-6 ">
                        <div class="news_des left">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 col-sm-6">
                                    <div class="event_des">
                                        <ul class="post-option">
                                            <li>By <a href="{{ url('/authorprofile', $event->user->id) }}"> {{ $event->user->name }}</a></li>
                                            <li> {{ $event->created_at }} </li>
                                            <!-- <li><a href="#"> 21 Comments</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="event_des ">
                                        <div class="event-date"> <span>{{ Carbon\Carbon::parse($event->startdate)->format('d')  }}</span>
                                            <h4>{{ Carbon\Carbon::parse($event->startdate)->format('m')  }}</h4> </div>
                                            <div class="event-info">
                                                <p>{{ $event->name }}</p> <a href="{{ url('/eventdetails', $event->id) }}" class="readmore">read more<i class="fa fa-long-arrow-right"></i></a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-sm-6 thumb">
                                        <div class="work-item"> 

                                            @if($event->type==='video')
                                            <video width="300px" height="200px" controls loop autoplay>
                                              <source src="<?php echo url(); ?>{{ $event->photourl1 }}" type="video/mp4">
                                                  <!-- <source src="{{ $event->photourl1 }}" type="video/ogg"> -->
                                                  Your browser does not support the video tag.
                                              </video> 
                                              @else
                                              <img src="{{ $event->photourl1 }}" alt="" />
                                                 @endif
                                              <div class="image-extra">
                                                <div class="extra-content">
                                                    <div class="inner-extra">
                                                        <a class="single-image plus-icon" data-fancybox-group="blog" href="{{ $event->photourl1 }}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- News & Event item 1-->
                        
                        
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>
            <!--/ .section-->
        </section>
        <!-- end News & Event   -->