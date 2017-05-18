@extends('layouts.defaultp')
@section('content')
<section class="section" id="course">
	<div id="content">
		<div class="container">
			<!-- <div class="row">
				<div class="col-xs-12">
					<hgroup class="section-title align-center">
						<h1>Courses Single</h1> 
					</hgroup>
				</div>
			</div> -->
			<!--/ .row-->
			<div class="row">
				<section id="main" class="col-md-8">
					<article class="entry main-entry single">
						<h2 class="entry-title">{{ $coursedetail->name }}</h2>
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
							<div class="col-xs-12 col-sm-4 col-md-5">
								<div class="course-widget-price">
									<h4 class="course-title">COURSE FEATURES</h4>
									<ul>
										<li> <i class="fa fa-clock-o" aria-hidden="true"></i> <span>Starts</span> <span class="time">{{ $coursedetail->startdate }}</span> </li>
										<li> <i class="fa fa-exclamation-circle" aria-hidden="true"></i> <span>Duration</span> <span class="time">{{ $coursedetail->duration }}</span> </li>
										<li> <i class="fa fa-leanpub" aria-hidden="true"></i> <span>Class Duration</span> <span class="time">{{ $coursedetail->classduration }}</span> </li>
										<li> <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Institution</span> <span class="time">{{ $coursedetail->institution }}</span> </li>
										<li> <i class="fa fa-user-plus" aria-hidden="true"></i> <span>Seats Available</span> <span class="time">{{ $coursedetail->seatsavailable }} Student</span> </li>
										<li> <i class="fa fa-users" aria-hidden="true"></i> <span>Level</span> <span class="time">{{ $coursedetail->level }}</span> </li>
									</ul>
									<a class="btn-button btn bg-orange" href="#">ENROLL THIS COURSE</a> </div>
								</div>
								<div class="col-xs-12 col-sm-8 col-md-7">
									<h4 class="title-1 bold">ABOUT THE COURSES</h4>
									<p> {{ $coursedetail->aboutcourse }} </p>
									<!-- <h4 class="title-2">What You Will Learn</h4> -->
									<!-- 	<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere neque in molestie gravida. Integer feugiat neque, elementum posuere purus. Nam vitae convallis ipsum. </p>
										<ul class="flat-list color-black">
											<li>2 Glossaries for difficult terms & acronyms</li>
											<li>25 hours of High Quality e-Learning content</li>
											<li>72 end of chapter quizzes </li>
											<li>30 PDUs Offered </li>
											<li>Collection of 47 six sigma tools for hands-on practice</li>
										</ul> -->
									</div>
								</div>
								<div class="entry-body">
									<h4 class="title-2">What You Will Learn</h4>
									<p> {{ $coursedetail->whatlearn }}. </p>
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
														<li><a href="{{ url('/courselists', $category->id) }}">{{ $category->name }}</a></li>
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
																	<a href="{{ url('/coursedetails', $courselist->id) }}">{{ $courselist->name }}</a>
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
							@stop
