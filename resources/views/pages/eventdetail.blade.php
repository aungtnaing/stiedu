@extends('layouts.defaultevent')
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
							<div class="entry-image"> <img src="<?php echo url(); ?>{{ $eventdetail->photourl1 }}" alt="" style="width: 777px;height: 504;"/> </div>
							@endif

							<a href="javascript:fbshareCurrentPage()" target="_blank" alt="Share on Facebook"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAAUCAMAAAAA9GVfAAACnVBMVEU0TI01TIw1TY01TY41TY81To82TY42TY85UZU6U5k7VJs7VZ07VaE8VZs8Vp08VqE8VqI8V6I9Vp49V6A9V6M+WJ8+WKA+WKQ+WaQ+WaU/WaM/WaQ/WaY/WqY/WqdAW6ZAW6dAW6hBW6dBXKhBXKlCXapCXatCXqpCXqxDXqtDXqxDX6xEX65EYK5EYK9FX65FYK9FYa9FYbBGYbBGYrFGYrJHYrFHY7JHY7NIZLNIZLRIZbRJZbVJZrZKZrZKZ7dLZ7hLaLhLaLlMablSaKpSaaxTaq1ZcbVbc7hfdLJfdbNfdbRfdrZgdrdhd7dhe8Fiebtie8Fofr9qgcFsgb5shMVthcZugrhugrtvgrxwhL1whL5xhb9xhcBzh8JziL9ziMJziMN1isV1isZ2iL12ir52isF5jMWAjreAk8eEk7+ElMOFlseFmMiIl7yKmsqOnL+RnsGSnsGVpdCXp9SeqsmfrNKfrNOfrdSgrdOgrdSgrtOgrtWhrtShrtWhr9Sir9WisNaisNejsNimstWoss+qtM+suNesudyuudmwvNyyvNazvNizvdqzvtqzvtu0vtu0vty0v9y0v961v921v962v9i3v9a3wd24wt65wtu5w+G8xeG8xuG9xNq+xtzAyeHAyePByuHCyd7Dy+DEzOPFzOHGz+fGz+nJ0OLL0uXN1OjP1urQ1+vS1+bS2OfT2evU2uzV2+vW2+jY3evZ3uzZ3u3b4O7c4vHd4ezd4/Le4/Df4+3f4+/g5PHg5fHh5vHk5/Dk6PLn6vXo6/Xo7Pbp7PTq7fbr7vTr7vbt8Pbx8vfx8vjx8/j09fr09vn19vr19/v29/r3+Pv5+vz6+/z6+/37+/37/P78/P38/P78/f79/f7+/v////+ZYdejAAACCUlEQVR4AWNYEebkTAYMXMHg7+BIFgxlsLMnEzLY2tja7LqHBHYARYiBDFbWVtb3UABQhBjIYGlhaQHTszw5uOTePZCIpakoEwOvmQarMpCNHTKYmJuYQzUeBbKT7t0DiZj4rbtzd09K49UpQDZ2yGBibGIM1dlsEnQESIFETFquL+i4sbzhajcbs5SxkRATA6e+PCMHs5IYMxOfAVgFg56hniFUZ5NeIogCiehNvjuPS12v/uqxazcXa3uvv3P3YOqke6duzVx5687mcLAKBl0dXR2wviNNcboeTbPv3QOJ6KYfv7szT6L26u6EQ6czu85ktd6cOOnepoBZF4oKLy0Dq2DQ0tbSButcC2JpFd+7B6a1QxZevD2t+uoMrVXnc13a9l65N2HCvQnaW0Aq94FVMGiqaaqBdR6uidV0r1lz7x5IRJObRTr+xLEZV/s1V53PWXJ9afvVfqBOta3ns6XZhcEqGFRUVVSh/qxTiQFRIBGV1ddKM84e6LzapwLUue1ywfy7Pb33elXn3J5eemUuWAWDiqKKIlRnlUo0WKciEKbtv3P3ZH7ttSkqqy/mVJy7e/zyhqn3pir6brh1Z6MPWAWDnIKcAlRnpVwUiAKKEAMZZGVkZaA6y2UjQRRQhBjIIC4pLrkdorNMPAJIbgeKEAMZxEXIhAxuggJkQS+GRZ78PGRA10UAUdSA0BPiLlkAAAAASUVORK5CYII=" width="57" /></a>

							<!--/ .entry-image-->
							<!-- Speakers -->
							@if($eventdetail->posttype==='event')
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
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span>{{ $eventdetail->sixspeaker }}</span>
										</div>
									</div>
							

								</div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="time-address">
											<h4 style="color:#050930;"><i class="fa fa-clock-o"></i>Time</h4>
											<!-- <p style="color:#050930;">Start: {{ $eventdetail->startdate }}</p> -->
											<p style="color:#050930;"> {{ $eventdetail->enddate }}</p>
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
							

							@endif
							<!-- Speakers -->
							<div class="entry-body">
								<!-- Description -->
								<div class="description">
									<h4 style="color:#050930;"><i class="fa fa-dot-circle-o"></i>description</h4>
									<p style="color:#050930;"> <?php echo $eventdetail->aboutevent; ?></p>
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


							@if($eventdetail->posttype==='class')
								<div class="speakers-list">
								<h4 style="color:#050930;"><i class="fa fa-user"></i>Our Trainers</h4>
								<div class="row">
									<div class="col-sm-4">
										
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->firstspeaker }}</span>
										</div>
										
									
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->secondspeaker }}</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->thirdspeaker }}</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->fourthspeaker }}</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->fifthspeaker }}</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->sixspeaker }}</span>
										</div>
									</div>
							
								</div>

								<div class="row">
									<div class="col-sm-4">
										
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->sevenspeaker }}</span>
										</div>
										
									
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->eightspeaker }}</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->ninespeaker }}</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->elevenspeaker }}</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->twelespeaker }}</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="aurthor-name style-2"> <span style="color:#050930;">{{ $eventdetail->sixspeaker }}</span>
										</div>
									</div>
							
								</div>
						
							</div>

							@endif

								</div>
								<!--/ .entry-body-->

							</div>
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


							<script language="javascript">
								function fbshareCurrentPage()
								{window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 
									'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
								return false; }
							</script>
	@stop
