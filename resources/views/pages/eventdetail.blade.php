@extends('layouts.defaultp')
@section('content')

<section class="section" id="news">
	<div id="content">
		<div class="container">
			
			<div class="row">
				<section id="main" class="col-md-8">
					<article class="entry main-entry single">
						<div class="single-event-detail">
							<h2 class="entry-title" style="color:#050930;">{{ $eventdetail->name }}</h2>
							<!--/ .entry-title-->
							@if($eventdetail->type==='video')
							<video width="777px" height="504px" controls>
								<source src="<?php echo url(); ?>{{ $eventdetail->photourl1 }}" type="video/mp4">
									<!-- <source src="{{ $eventdetail->photourl1 }}" type="video/ogg"> -->
									Your browser does not support the video tag.
								</video> 
							@elseif($eventdetail->type==='youtubelink')
								<iframe width="777px" height="504px"
								src="{{ $eventdetail->youtubelink }}">
							</iframe>
							@else
							<div class="entry-image"> <img src="{{ $eventdetail->photourl1 }}" alt="" style="width: 777px;height: 504;"/> </div>
							@endif
							<!--/ .entry-image-->
							<!-- Speakers -->
							<div class="speakers-list">
								<h4 style="color:#050930;"><i class="fa fa-microphone"></i>Speakers</h4>
								<div class="row">
									<div class="col-sm-4">
										
										<div class="aurthor-name style-2"> <span>{{ $eventdetail->firstspeaker }}</span>
										</div>
										
									
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span>{{ $eventdetail->secondspeaker }}</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span>{{ $eventdetail->thirdspeaker }}</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span>{{ $eventdetail->fourthspeaker }}</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span>{{ $eventdetail->fifthspeaker }}</span>
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="time-address">
											<h4 style="color:#050930;"><i class="fa fa-clock-o"></i>Time</h4>
											<p style="color:#050930;">Start: {{ $eventdetail->startdate }}</p>
											<p style="color:#050930;">End: {{ $eventdetail->enddate }}</p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="time-address">
											<h4 style="color:#050930;"><i class="fa fa-map-marker"></i>Address</h4>
											<p style="color:#050930;">{{ $eventdetail->address }}</p>

										</div>
									</div>
								</div>
							</div>
							<!-- Speakers -->
							<div class="entry-body">
								<!-- Description -->
								<div class="description">
									<h4 style="color:#050930;"><i class="fa fa-dot-circle-o"></i>description</h4>
									<p style="color:#050930;"> {{ $eventdetail->aboutevent }}</p>
								</div>
								<!-- Description -->
								<!-- Join Event Option -->
								<div class="join-event-option">
									
									<div class="social-icons-2">
										<ul class="social-icons">
											<!-- <li class="twitter"><a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="icon-twitter"></i></a></li>
											<li class="facebook"><a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="icon-facebook"></i></a></li>
											<li class="linkedin"><a href="#" data-toggle="tooltip" data-placement="top" title="linkedin"><i class="icon-linkedin"></i></a></li>
											<li class="pinterest"><a href="#" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="icon-pinterest-circled"></i></a></li>
											<li class="rss"><a href="#" data-toggle="tooltip" data-placement="top" title="rss"><i class="icon-rss"></i></a></li>
											<li class="gplus"><a href="#" data-toggle="tooltip" data-placement="top" title="gplus"><i class="icon-gplus"></i></a></li>
											<li class="youtube"><a href="#" data-toggle="tooltip" data-placement="top" title="youtube"><i class="icon-youtube"></i></a></li>
											<li class="instagram"><a href="#" data-toggle="tooltip" data-placement="top" title="instagram"><i class="icon-instagramm"></i></a></li> -->
										</ul>
								<!-- 	</div> <a class="button turquoise large  full-width" href="#">Join this event</a> </div> -->
									<!-- Join Event Option -->
								</div>
								<!--/ .entry-body-->
							</div>
						</article>
						<!--/ .entry-->
					</section>
					<!--/ #main-->
					<aside id="sidebar" class="col-md-4">
						
						<div class="widget widget_categories">
							<h3 class="widget-title" style="color:#050930;">Categories</h3>
							<ul>
								@foreach($categorys as $category)
														<li><b><a href="{{ url('/courselists', $category->id) }}" style="color: #1e26b0;">{{ $category->name }}</a></b></li>
														@endforeach
							</ul>
						</div>
					
						<div class="widget widget_recent_posts">
							<h3 class="widget-title" style="color:#050930;">Recent Posts</h3>
							<section>
								@foreach($eventlists as $eventlist)
								<article class="entry">
									<div class="entry-image">
										<a href="#" class="single-image"> <img alt="" src="{{ $eventlist->photourl1 }}" style="width: 90px;height: 80px;"/> </a>
									</div>
									<!--/ .entry-image-->
									<div class="post-holder">
										<div class="entry-meta"> <span class="date"><a href="#" >{{ $eventlist->created_at }}</a></span> </div>
										<!--/ .entry-meta-->
										<h6 class="entry-title">
											<a href="{{ url('/eventdetails', $eventlist->id) }}" style="color: #1e26b0;">{{ $eventlist->name }}</a>
										</h6> 
									</div>
									<!--/ .post-holder-->
								</article>
								@endforeach
								<!--/ .entry-->
								
								
								<!--/ .entry-->
							</section>
						</div>
						<!--/ .widget-->
					</aside>
					<!--/ #sidebar-->
				</div>
				<!--/ .row-->
			</div>
			<!--/ .container-->
		</div>
		<!--/ #content-->
	</section>
	@stop
