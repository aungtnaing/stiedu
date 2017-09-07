@extends('layouts.defaultp')
@section('content')
<section class="section" id="course">
	<div id="content">
		<div class="container">
			<!--  <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center">
                                
                            </hgroup>
                        </div>
                    </div> -->
			<div class="row">
				<section id="main" class="col-md-12">
					<section id="main" class="col-md-8">
						
					@foreach($bloglists as $bloglist)
						<div class="row">
							<div class="col-md-12">
								<div class="news_des right">
									<div class="row">
										<div class="col-xs-12 col-md-6 col-sm-6 thumb">
											<div class="work-item"> <img src="<?php echo url(); ?>{{ $bloglist->photourl1 }}" alt="" />
												<div class="image-extra">
													<div class="extra-content">
														<div class="inner-extra">
															<a class="single-image plus-icon" data-fancybox-group="blog" href="<?php echo url(); ?>{{ $bloglist->photourl1 }}"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6 col-sm-6">
											<div class="event_des">
												<ul class="post-option">
												<br>
												
														<h2><a href="{{ url('/blogdetails', $bloglist->id) }}" style="color: #1e26b0;">{{ $bloglist->title }}</a></h2>
													</li>
													<li><p style="color:#050930;">by 
														{{ $bloglist->bloger }}
													</p></li>
													<li><p style="color:#050930;">
														{{ substr($bloglist->content,0, 150) }}
													</p></li>
													
												</ul>
											</div>
											<div class="event_des ">

												<div class="event-info">
													

													<a href="{{ url('/blogdetails', $bloglist->id) }}" class="readmore" style="color: #1e26b0;">read more<i class="fa fa-long-arrow-right"></i></a> 
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
								<li><b><a href="{{ url('/courselists', $category->id) }}" style="color: #1e26b0;">{{ $category->name }}</a></b></li>
								@endforeach
							</ul>
						</div>

						        <div class="widget widget_recent_posts">
                        <h3 class="widget-title">Recent Blogs</h3>
                        <section>

                        @foreach($blolists as $bloglist)
                            <article class="entry">
                                <div class="entry-image">
                                    <a href="{{ url('/blogdetails', $bloglist->id) }}" class="single-image"> <img alt="" src="<?php echo url(); ?>{{ $bloglist->photourl1 }}" style="width: 70px;"/> </a>
                                </div>
                                <!--/ .entry-image-->
                                <div class="post-holder">
                                    <div class="entry-meta"> <span class="date">{{ $bloglist->created_at }}</span><!--  <span>0 Comments</span>  --></div>
                                    <!--/ .entry-meta-->
                                    <h6 class="entry-title">
                                    @if(strlen($bloglist->title>=70))
                                     <a href="{{ url('/blogdetails', $bloglist->id) }}">{{ substr($bloglist->title,0, 70) }}...</a>
                                     @else
                                     <a href="{{ url('/blogdetails', $bloglist->id) }}">{{ $bloglist->title }}...</a>

                                     @endif
                                 </h6> 
                             </div>
                             <!--/ .post-holder-->
                         </article>
                         @endforeach
            
                 <!--/ .entry-->
             </section>
         </div>
						<!--/ .widget-->
			
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
