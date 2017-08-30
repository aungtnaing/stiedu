@extends('layouts.defaultp')
@section('content')
<section class="section" id="course">
	<div id="content">
		<div class="container">
			
			<div class="row">
				<section id="main" class="col-md-8">
					<article class="entry main-entry single">
						<h2 class="entry-title" style="color:#050930;">{{ $coursedetail->name }}</h2>
						<!--/ .entry-title-->
						<ul class="course-meta review style2 clearfix">
							<li class="author">
								@if($coursedetail->professor->photourl1=="")
								<div class="thumb"> <img src="<?php echo url(); ?>/images/testimonials/amanda-70x70.png" alt="image"> 
								</div>
								@else
								<div class="thumb"> <img src="<?php echo url(); ?>{{ $coursedetail->professor->photourl1 }}" alt="image"> 
								</div>
								@endif
								<div class="text"> <a href="{{ url('/facultyprofile', $coursedetail->professor->id) }}">{{ $coursedetail->professor->name }}</a>
									<p>Teacher</p>
								</div>
							</li>
							<li class="categories"> <a href="{{ url('/courselists', $coursedetail->category->id) }}" class="course-name">{{ $coursedetail->category->name }}</a>
								<p>Categories</p>
							</li>
							<li class="review-stars"> 
								@if($coursedetail->rate>=100)
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> 
								@elseif($coursedetail->rate>=80)
								<i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> 	
								@if($coursedetail->rate>80)
								<i class="fa fa-star-half"></i> 
								@else
								<i class="fa fa-star-o"></i>
								@endif
								@elseif($coursedetail->rate>=60)
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> 	

								@if($coursedetail->rate>60)
								<i class="fa fa-star-half"></i> 
								<i class="fa fa-star-o"></i>
								@else
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								@endif

								@elseif($coursedetail->rate>=40)
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i> 

								@if($coursedetail->rate>60)
								<i class="fa fa-star-half"></i> 
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								@else
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								@endif	

								@elseif($coursedetail->rate>=20)
								<i class="fa fa-star"></i>

								@if($coursedetail->rate>20)
								<i class="fa fa-star-half"></i> 
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								@else
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								@endif
								@elseif($coursedetail->rate>0)
								<i class="fa fa-star-half"></i> 
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								@else
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								@endif					

								<p>Reviews</p>
							</li>
							<!-- <li>25 Reviews</li> -->
						</ul>
						<div class="entry-image"> <img src="<?php echo url(); ?>{{ $coursedetail->photourl1 }}" alt="" style="width: 777px;height: 504;"/> </div>
						<!--/ .entry-image-->

						<div class="row">
							<a class="btn-button btn btn-primary" href="{{ url('/visitorinfo', $coursedetail->id) }}">Get Brochures</a> 
							<a class="btn-button btn btn-primary" href="{{ url('/visitorinfoadmission', $coursedetail->id) }}">Seek Appointment With Admission Officer</a> 

						
							<meta property="og:title"         content="{{ $coursedetail->category->name }}" />
							<meta property="og:description"   content="{{ $coursedetail->aboutcourse }}" />
							<meta property="og:image"         content="<?php echo url(); ?>{{ $coursedetail->photourl1 }}" />
							<meta property="fb:app_id" content="132711514007187" />


							<!-- <a class="fb-share-button" href="javascript:fbshareCurrentPage()" target="_blank" alt="Share on Facebook">Share</a> -->

							<a href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://www.example.com&p[images][0]=&p[title]=Title%20Goes%20Here&p[summary]=Description%20goes%20here!" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAAUCAMAAAAA9GVfAAACnVBMVEU0TI01TIw1TY01TY41TY81To82TY42TY85UZU6U5k7VJs7VZ07VaE8VZs8Vp08VqE8VqI8V6I9Vp49V6A9V6M+WJ8+WKA+WKQ+WaQ+WaU/WaM/WaQ/WaY/WqY/WqdAW6ZAW6dAW6hBW6dBXKhBXKlCXapCXatCXqpCXqxDXqtDXqxDX6xEX65EYK5EYK9FX65FYK9FYa9FYbBGYbBGYrFGYrJHYrFHY7JHY7NIZLNIZLRIZbRJZbVJZrZKZrZKZ7dLZ7hLaLhLaLlMablSaKpSaaxTaq1ZcbVbc7hfdLJfdbNfdbRfdrZgdrdhd7dhe8Fiebtie8Fofr9qgcFsgb5shMVthcZugrhugrtvgrxwhL1whL5xhb9xhcBzh8JziL9ziMJziMN1isV1isZ2iL12ir52isF5jMWAjreAk8eEk7+ElMOFlseFmMiIl7yKmsqOnL+RnsGSnsGVpdCXp9SeqsmfrNKfrNOfrdSgrdOgrdSgrtOgrtWhrtShrtWhr9Sir9WisNaisNejsNimstWoss+qtM+suNesudyuudmwvNyyvNazvNizvdqzvtqzvtu0vtu0vty0v9y0v961v921v962v9i3v9a3wd24wt65wtu5w+G8xeG8xuG9xNq+xtzAyeHAyePByuHCyd7Dy+DEzOPFzOHGz+fGz+nJ0OLL0uXN1OjP1urQ1+vS1+bS2OfT2evU2uzV2+vW2+jY3evZ3uzZ3u3b4O7c4vHd4ezd4/Le4/Df4+3f4+/g5PHg5fHh5vHk5/Dk6PLn6vXo6/Xo7Pbp7PTq7fbr7vTr7vbt8Pbx8vfx8vjx8/j09fr09vn19vr19/v29/r3+Pv5+vz6+/z6+/37+/37/P78/P38/P78/f79/f7+/v////+ZYdejAAACCUlEQVR4AWNYEebkTAYMXMHg7+BIFgxlsLMnEzLY2tja7LqHBHYARYiBDFbWVtb3UABQhBjIYGlhaQHTszw5uOTePZCIpakoEwOvmQarMpCNHTKYmJuYQzUeBbKT7t0DiZj4rbtzd09K49UpQDZ2yGBibGIM1dlsEnQESIFETFquL+i4sbzhajcbs5SxkRATA6e+PCMHs5IYMxOfAVgFg56hniFUZ5NeIogCiehNvjuPS12v/uqxazcXa3uvv3P3YOqke6duzVx5687mcLAKBl0dXR2wviNNcboeTbPv3QOJ6KYfv7szT6L26u6EQ6czu85ktd6cOOnepoBZF4oKLy0Dq2DQ0tbSButcC2JpFd+7B6a1QxZevD2t+uoMrVXnc13a9l65N2HCvQnaW0Aq94FVMGiqaaqBdR6uidV0r1lz7x5IRJObRTr+xLEZV/s1V53PWXJ9afvVfqBOta3ns6XZhcEqGFRUVVSh/qxTiQFRIBGV1ddKM84e6LzapwLUue1ywfy7Pb33elXn3J5eemUuWAWDiqKKIlRnlUo0WKciEKbtv3P3ZH7ttSkqqy/mVJy7e/zyhqn3pir6brh1Z6MPWAWDnIKcAlRnpVwUiAKKEAMZZGVkZaA6y2UjQRRQhBjIIC4pLrkdorNMPAJIbgeKEAMZxEXIhAxuggJkQS+GRZ78PGRA10UAUdSA0BPiLlkAAAAASUVORK5CYII=" width="57" /></a>

							<!-- <div class="fb-share-button" data-href="javascript:fbshareCurrentPage()" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.stiedu.net%2Fcoursedetails%2F7&amp;src=sdkpreparse">Share</a></div> -->

						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-5">
								<div class="course-widget-price">
									<h4 class="course-title" style="color:#050930;">COURSE FEATURES</h4>
									<ul>
										<li> <i class="fa fa-clock-o" aria-hidden="true"></i> <span>Starts</span> <span class="time">{{ $coursedetail->startdate }}</span> </li>
										<li> <i class="fa fa-exclamation-circle" aria-hidden="true"></i> <span>Duration</span> <span class="time">{{ $coursedetail->duration }}</span> </li>
										<li> <i class="fa fa-leanpub" aria-hidden="true"></i> <span>Class Duration</span> <span class="time">{{ $coursedetail->classduration }}</span> </li>
										<li> <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Institution</span> <span class="time">{{ $coursedetail->institution }}</span> </li>
										<li> <i class="fa fa-user-plus" aria-hidden="true"></i> <span>Seats Available</span> <span class="time">{{ $coursedetail->seatsavailable }} Student</span> </li>
										<li> <i class="fa fa-users" aria-hidden="true"></i> <span>Level</span> <span class="time">{{ $coursedetail->level }}</span> </li>
									</ul>
									<a class="btn-button btn btn-primary" href="{{ url('/enrollprogram', $coursedetail->id) }}">ENROLL THIS PROGRAM</a> </div>
								</div>
								<div class="col-xs-12 col-sm-8 col-md-7">
									<h4 class="title-1 bold" style="color:#050930;">ABOUT THE COURSE</h4>
									<p style="color:#050930;"> <?php echo $coursedetail->aboutcourse; ?></p>
									
								</div>
							</div>
							<div class="entry-body">
								<h4 class="title-2" style="color:#050930;">What you will learns</h4>
								<p style="color:#050930;"> <?php echo $coursedetail->whatlearn; ?> </p>
							</div>
							<!--/ .entry-body-->
						</article>
						<!--/ .entry-->
						<section id="comments">
							<h3>Comments</h3>
							<ol class="comments-list">

								@foreach($coursedetail->comments as $comment)
								<li class="comment">
									<article>
										@if($comment->user->photourl=="")
										<div class="gravatar"><img alt="" src="<?php echo url(); ?>/images/gravatar.png"></div>
										@else
										<div class="gravatar"><img alt="" src="{{ $comment->user->photourl }}" style="width: 50px;"></div>
										@endif
										<div class="comment-body">
											<div class="comment-meta">
												<div class="comment-author">
													<h6><a href="{{ url('/authorprofile', $comment->user->id) }}">{{ $comment->user->name }}</a></h6></div>
													<div class="comment-date"><a href="#">{{ $comment->created_at }}</a></div>
												</div>
												<!--/ .comment-meta-->

												<p> {{ $comment->comment }} </p>
												<a class='comment-reply-link' href='javascript:replyon({{ $comment->id }})'><i class="icon-reply"></i></a>

											</div>
											<!--/ .comment-body-->
										</article>
										<ul class="children">
											@foreach($comment->replycomments as $replycomment)
											<li class="comment">
												<article>
													@if($replycomment->user->photourl=="")
													<div class="gravatar"><img alt="" src="<?php echo url(); ?>/images/gravatar.png"></div>
													@else
													<div class="gravatar"><img alt="" src="{{ $replycomment->user->photourl }}" style="width: 50px;"></div>
													@endif
													<div class="comment-body">
														<div class="comment-meta">
															<div class="comment-author"><a href="{{ url('/authorprofile', $replycomment->user->id) }}">{{ $replycomment->user->name }}</a></div>
															<div class="comment-date"><a href="#">{{ $replycomment->created_at }}</a></div>
														</div>
														<!--/ .comment-meta-->
														<p> {{ $replycomment->comment }} </p>
														<a class='comment-reply-link' href='javascript:replyon({{ $comment->id }})'><i class="icon-reply"></i></a>
													</div>
													<!--/ .comment-body-->
												</article>
											</li>

											@endforeach
											<!--/ .comment-->
										</ul>
										<form style="display:none;" id="{{ $comment->id }}" action="{{ route("replycomments.store") }}" method="POST">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">


											<div class="col_full">

												<textarea name="replycomment" cols="58" rows="3" tabindex="4" class="sm-form-control"></textarea>
												<input style="display:none;" type="text" name="commentid" value="{{ $comment->id }}">
												<input style="display:none;" type="text" name="courseid" value="{{ $coursedetail->id }}">
												<input style="display:none;" type="text" name="ltype" value="en">
											</div>

											<div class="col_full nobottommargin">
												<input class="btn btn-primary" type="submit" value="Reply Comment"> 

											</div>

										</form>
										<!--/ .children-->
									</li>
									<!--/ .comment-->
									@endforeach
									<!--/ .comment-->
								</ol>
								<!--/ .comments-list-->
							</section>
							<!--/ #comments-->
							<section id="respond">
								<h3>Leave a Comment</h3>
								<form action="{{ route("comments.store") }}" method="POST">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									
									<p class="input-block">
										<label for="comment">Comment</label>
										<textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control" value="{{ old('comment') }}" required></textarea>
										<input style="display:none;" type="text" name="courseid" value="{{ $coursedetail->id }}">
										<input style="display:none;" type="text" name="ltype" value="en">
									</p>
									<p class="input-block">
										<button class="button default middle" type="submit" id="submit">Submit Comment</button>
									</p>
								</form>
								<!--/ .comments-form-->
							</section>
							<!--/ #respond-->
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
														<li><b><a href="{{ url('/courselists', $category->id) }}" style="color: #1e26b0;">{{ $category->name }}</a></b></li>
														@endforeach
													</ul>
												</div>
												<!--/ .widget-->
												<div class="widget widget_recent_posts">
													<h3 class="widget-title">Featured courses</h3>
													<section>
														
														@foreach($courselists as $courselist)	
														<article class="entry">
															<div class="entry-image">

																<img src="<?php echo url(); ?>{{ $courselist->photourl1 }}" alt="image" style="width: 70px;"> 
																
															</div>
															<!--/ .entry-image-->
															<div class="post-holder">
																<div class="entry-meta">
																	<ul class="flat-reviews">
																		@if($courselist->rate>=100)
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 
																		@elseif($courselist->rate>=80)
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 	
																		@if($courselist->rate>80)
																		<i class="fa fa-star-half"></i> 
																		@else
																		<i class="fa fa-star-o"></i>
																		@endif
																		@elseif($courselist->rate>=60)
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 	

																		@if($courselist->rate>60)
																		<i class="fa fa-star-half"></i> 
																		<i class="fa fa-star-o"></i>
																		@else
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		@endif

																		@elseif($courselist->rate>=40)
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i> 

																		@if($courselist->rate>60)
																		<i class="fa fa-star-half"></i> 
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		@else
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		@endif	

																		@elseif($courselist->rate>=20)
																		<i class="fa fa-star"></i>

																		@if($courselist->rate>20)
																		<i class="fa fa-star-half"></i> 
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		@else
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		@endif
																		@elseif($courselist->rate>0)
																		<i class="fa fa-star-half"></i> 
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		@else
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		@endif			
																	</ul>
																</div>
																<!--/ .entry-meta-->
																<h6 class="entry-title">
																	<a href="{{ url('/coursedetails', $courselist->id) }}" style="color: #1e26b0;">{{ $courselist->name }}</a>
																</h6>
																<!-- <div class="flat-money">
																	<p>$170</p>
																</div> -->
															</div>
															<!--/ .post-holder-->
														</article>
														@endforeach

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
							<!--/ .section-->


							<script language="javascript">
								function fbshareCurrentPage()
								{window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 
									'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
								return false; }
							</script>
							@stop
