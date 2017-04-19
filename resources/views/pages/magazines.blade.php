@extends('layouts.default')
@section('content')
<section id="page-title">

	<div class="container clearfix">
		<h1>Magazine</h1>
		
	</div>

</section>
<section id="content">
	<div class="content-wrap">		
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-8 bottommargin">
					<div class="col_full bottommargin-lg"> </div>						
					
					@include('pages.magazine.travelsector') 
					

					@include('pages.magazine.exposure') 

					<div class="bottommargin-lg clearfix">
						<img src="<?php echo url() ?>/images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
					</div>

					@include('pages.magazine.picturesque') 


					@include('pages.magazine.arrivalandinfocus') 


					<div class="clearfix"></div>
					<br>
				</br>


				<div class="bottommargin-lg clearfix">
					<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
				</div>

				<div class="clear"></div>

				
				@include('pages.magazine.deperature') 


				<div class="clearfix"></div>
				<br>
			</br>


			<div class="bottommargin-lg">
				<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
			</div>
			<div class="clear"></div>

			@include('pages.magazine.snapshop') 


			<div class="clearfix"></div>
			<br>
		</br>
		
		<div class="bottommargin-lg">
			<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
		</div>
		<div class="clear"></div>

		@include('pages.magazine.checkin') 

		<div class="clearfix"></div>
		<br>
	</br>

	<div class="bottommargin-lg">
		<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
	</div>
	<div class="clear"></div>

	@include('pages.magazine.standout') 

	<div class="clearfix"></div>
	<br>
</br>

<div class="bottommargin-lg">
	<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
</div>
<div class="clear"></div>

@include('pages.magazine.underground') 

</div>
<div class="col-md-4">
	<div class="line hidden-lg hidden-md"></div>
	<div class="col_full bottommargin-lg"> </div>			

	<div class="sidebar-widgets-wrap clearfix">
		<div class="widget clearfix">
			<img class="aligncenter" src="{{ $book->photourl1 }}" alt="">
		</div>
		<div style="padding-left:10px;">
			<a href="#" class="button button-large button-rounded">Subscribe</a>
			<a href="bookstore" class="button button-large button-rounded">Book Store</a>
		</div>

		<div class="widget widget_links clearfix">

			<h4>Categories</h4>
			<div class="col_half nobottommargin">
				<ul>
					@for($i = 0; $i < count($categorys); $i++)
						@if($i < 6)
						<li><a href="{{ url('/postlists', $categorys[$i]->id) }}">{{ $categorys[$i]->name }}</a></li>
						@endif
					@endfor


				</ul>
			</div>
			<div class="col_half nobottommargin col_last">
				<ul>

					@for($i = 6; $i < count($categorys); $i++)
						
						<li><a href="{{ url('/postlists', $categorys[$i]->id) }}">{{ $categorys[$i]->name }}</a></li>
						
					@endfor
				

				</ul>
			</div>

		</div>


		<div class="widget clearfix">

			<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

				<ul class="tab-nav clearfix">
					<li><a href="#tabs-1">Popular</a></li>
					<li><a href="#tabs-2">Recent</a></li>
					<!-- <li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li> -->
				</ul>

				<div class="tab-container">

					<div class="tab-content clearfix" id="tabs-1">
						<div id="popular-post-list-sidebar">


							@foreach($popularposts as $popularpost)
							<?php
							$tcmt1 = count($popularpost->comments);
							foreach($popularpost->comments as $cmt) 
							{
								$tcmt1 = $tcmt1 + count($cmt->replycomments);
							}
							?>
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="{{ $popularpost->photourl1 }}" class="nobg"><img class="img-circle" src="{{ $popularpost->photourl2 }}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ url('/postdetails', $popularpost->id) }}">{{ $popularpost->name }}</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-comments-alt"></i>{{ $tcmt1 }}Comments</li>
									</ul>
								</div>
							</div>
							@endforeach



						</div>
					</div>
					<div class="tab-content clearfix" id="tabs-2">
						<div id="recent-post-list-sidebar">

							@foreach($recentposts as $recentpost)

							<div class="spost clearfix">
								<div class="entry-image">
									<a href="{{ $recentpost->photourl1 }}" class="nobg"><img class="img-circle" src="{{ $recentpost->photourl2 }}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ url('/postdetails', $recentpost->id) }}">{{ $recentpost->name }}</a></h4>
									</div>
									<ul class="entry-meta">
										<li>{{ $recentpost->createed_at }}</li>
									</ul>
								</div>
							</div>

							@endforeach

						</div>
					</div>
					

				</div>

			</div>

		</div>


		<div class="widget clearfix">
			<img class="aligncenter" src="images/magazine/ad.png" alt="">
		</div>

		<div class="widget clearfix">
			<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=350&amp;height=240&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:240px; max-width: 100% !important;" allowTransparency="true"></iframe>
		</div>

	</div>

</div>

</div>

</div>

</div>

</section><!-- #content end -->
@stop
