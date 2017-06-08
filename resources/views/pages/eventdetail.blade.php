@extends('layouts.defaultp')
@section('content')

<section class="section" id="news">
	<div id="content">
		<div class="container">
			<!-- <div class="row">
				<div class="col-xs-12">
					<hgroup class="section-title align-center">
						<h1>Event Single</h1> 
					</hgroup>
				</div>
			</div> -->
			<!--/ .row-->
			<div class="row">
				<section id="main" class="col-md-8">
					<article class="entry main-entry single">
						<div class="single-event-detail">
							<h2 class="entry-title">{{ $eventdetail->name }}</h2>
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
								<h4><i class="fa fa-microphone"></i>Speakers</h4>
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
											<h4><i class="fa fa-clock-o"></i>Time</h4>
											<p>Start: {{ $eventdetail->startdate }}</p>
											<p>End: {{ $eventdetail->enddate }}</p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="time-address">
											<h4><i class="fa fa-map-marker"></i>Address</h4>
											<p>{{ $eventdetail->address }}</p>

										</div>
									</div>
								</div>
							</div>
							<!-- Speakers -->
							<div class="entry-body">
								<!-- Description -->
								<div class="description">
									<h4><i class="fa fa-dot-circle-o"></i>description</h4>
									<p> {{ $eventdetail->aboutevent }}</p>
								</div>
								<!-- Description -->
								<!-- Join Event Option -->
								<div class="join-event-option">
									<!-- <ul class="btn-list">
										<li><a class="btn white sm z-depth-2 full-width" href="#">Google Calendar +</a></li>
										<li><a class="btn white sm z-depth-2 full-width" href="#">Ical Import +</a></li>
									</ul> -->
									<div class="social-icons-2">
										<ul class="social-icons">
											<li class="twitter"><a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="icon-twitter"></i></a></li>
											<li class="facebook"><a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="icon-facebook"></i></a></li>
											<li class="linkedin"><a href="#" data-toggle="tooltip" data-placement="top" title="linkedin"><i class="icon-linkedin"></i></a></li>
											<li class="pinterest"><a href="#" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="icon-pinterest-circled"></i></a></li>
											<li class="rss"><a href="#" data-toggle="tooltip" data-placement="top" title="rss"><i class="icon-rss"></i></a></li>
											<li class="gplus"><a href="#" data-toggle="tooltip" data-placement="top" title="gplus"><i class="icon-gplus"></i></a></li>
											<li class="youtube"><a href="#" data-toggle="tooltip" data-placement="top" title="youtube"><i class="icon-youtube"></i></a></li>
											<li class="instagram"><a href="#" data-toggle="tooltip" data-placement="top" title="instagram"><i class="icon-instagramm"></i></a></li>
										</ul>
									</div> <a class="button turquoise large  full-width" href="#">Join this event</a> </div>
									<!-- Join Event Option -->
								</div>
								<!--/ .entry-body-->
							</div>
						</article>
						<!--/ .entry-->
					</section>
					<!--/ #main-->
					<aside id="sidebar" class="col-md-4">
						<!-- <div class="widget widget_search">
							<form action="http://html.webtemplatemasters.com/" id="searchform" method="get">
								<p>
									<input placeholder="Search" type="text" value="" name="s">
									<button class="submit-search" type="submit">Search</button>
								</p>
							</form>
						</div> -->
						<!--/ .widget-->
						<!-- <div class="widget widget_text">
							<h3 class="widget-title">Text Widget</h3>
							<div class="textwidget"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere neque in molestie gravida. Integer eu feugiat neque, elementum posuere purus. </div>
						</div> -->
						<!--/ .widget-->
						<div class="widget widget_categories">
							<h3 class="widget-title">Categories</h3>
							<ul>
								@foreach($categorys as $category)
								<li><a href="{{ url('/courselists', $category->id) }}">{{ $category->name }}</a></li>
								@endforeach
							</ul>
						</div>
						<!--/ .widget-->
						<!-- <div class="widget widget_tag_cloud">
							<h3 class="widget-title">Tags</h3>
							<div class="tagcloud"> <a href="#">Web</a> <a href="#">Video</a> <a href="#">Business</a> </div>
						</div> -->
						<!--/ .widget-->
						<div class="widget widget_recent_posts">
							<h3 class="widget-title">Recent Posts</h3>
							<section>
								@foreach($eventlists as $eventlist)
								<article class="entry">
									<div class="entry-image">
										<a href="#" class="single-image"> <img alt="" src="{{ $eventlist->photourl1 }}" style="width: 90px;height: 80px;"/> </a>
									</div>
									<!--/ .entry-image-->
									<div class="post-holder">
										<div class="entry-meta"> <span class="date"><a href="#">{{ $eventlist->created_at }}</a></span> </div>
										<!--/ .entry-meta-->
										<h6 class="entry-title">
											<a href="{{ url('/eventdetails', $eventlist->id) }}">{{ $eventlist->name }}</a>
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
