	<section id="content">	
		<div class="content-wrap">

			
			<div class="section topmargin nobottommargin nobottomborder">
				<div class="container clearfix">
					<div class="heading-block center nomargin">
						<h3><a href="blog-single.html">Travel Sector Update</a></h3>
					</div>
				</div>
			</div>

			
			<div class="container clearfix" style="padding-left:180px;">
				<div class="col_one_third">
					<a href="booking.html">
						<img src="images/air.png">
					</a>
					<br></br>
					<a href="booking.html"><h4>
						Booking Air
					</h4></a>
				</div>
				<div class="col_one_third">
					<a href="booking.html">
						<img src="images/car.png">
					</a>
					<br></br>
					<a href="booking.html">		<h4>
						Booking Car
					</h4></a>
				</div>
				<div class="col_one_third col_last">
					<a href="#">
						<img src="images/tour.png">
					</a>
					<br></br>
					<a href="booking.html">	<h4>
						Booking Tour
					</h4></a>
				</div>
			</div>
			
			
			
			<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">

						@foreach($travelsectorposts as $travelsectorpost)
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="{{ $travelsectorpost->photourl1 }}" data-lightbox="image"><img class="image_fade" src="{{ $travelsectorpost->photourl2 }}" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">{{ $travelsectorpost->name }}</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> {{ $travelsectorpost->created_at }}</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p><?php echo substr($travelsectorpost->description,0, 70) ?></p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>

						@endforeach


					</div>
					
					

				</div>
			</div>
		</section>