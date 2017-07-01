@extends('layouts.defaultp')
@section('content')
<section class="section" id="course">
	<div id="content">
		<div class="container">
			 <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center">
                                <h1 style="color:#050930;">{{ $categoryname->name }}</h1> 
                            </hgroup>
                        </div>
                    </div>
			<div class="row">
				<section id="main" class="col-md-12">
					<section id="main" class="col-md-8">
						
						<!-- <h2 class="entry-title" style="color:#050930;">{{ $categoryname->name }}</h2> -->
						@foreach($courselists as $courselist)
						<div class="row">
							<div class="col-md-12">
								<div class="news_des right">
									<div class="row">
										<div class="col-xs-12 col-md-6 col-sm-6 thumb">
											<div class="work-item"> <img src="{{ $courselist->photourl1 }}" alt="" />
												<div class="image-extra">
													<div class="extra-content">
														<div class="inner-extra">
															<a class="single-image plus-icon" data-fancybox-group="blog" href="{{ $courselist->photourl1 }}"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6 col-sm-6">
											<div class="event_des">
												<ul class="post-option">
												<br>
													<!-- <li><a href="#"> {{ $courselist->professor->name }}</a></li>
													<li> -->
														<h2><a href="{{ url('/coursedetails', $courselist->id) }}">{{ $courselist->name }}</a></h2>
													</li>
													<li><p style="color:#050930;">
														{{ substr($courselist->aboutcourse,0, 150) }}
													</p></li>
													
												</ul>
											</div>
											<div class="event_des ">

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
												<div class="event-info">
													

													<a href="{{ url('/coursedetails', $courselist->id) }}" class="readmore">read more<i class="fa fa-long-arrow-right"></i></a> 
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
						@endforeach


						

					</section>

					<!--/ #main-->
					<aside id="sidebar" class="col-md-4">

						<div class="widget widget_categories">
							<h3 class="widget-title" style="color:#050930;">Categories</h3>
							<ul>
								@foreach($categorys as $category)
								<li><a href="{{ url('/courselists', $category->id) }}">{{ $category->name }}</a></li>
								@endforeach
							</ul>
						</div>
						<!--/ .widget-->
						<div class="widget widget_recent_posts">
							<h3 class="widget-title" style="color:#050930;">Featured courses</h3>
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
