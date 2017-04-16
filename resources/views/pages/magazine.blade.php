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
					
						@include('pages.magazine.travelupdate') 
					

						@include('pages.magazine.exposure') 

					<div class="bottommargin-lg clearfix">
						<img src="<?php echo url() ?>/images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
					</div>

						@include('pages.magazine.picturesques') 


					<div class="col_full nobottommargin clearfix">

						<div class="fancy-title title-border">
							<h3>Arrival</h3>
						</div>

						
						<div class="col_one_third">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h3><a href="blog-single.html">Yum, McDonald's apologize as new China food scandal brews</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 9th Sep 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 23</a></li>
								</ul>
								<div class="entry-content">
									<p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
								</div>
							</div>
						</div>

				

						<div class="clear"></div>

						<div class="fancy-title title-border">
							<h3>In focus</h3>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h3><a href="blog-single.html">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 17th Jan 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 50</a></li>
								</ul>
								<div class="entry-content">
									<p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
								</div>
							</div>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h3><a href="blog-single.html">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 20th Nov 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								</ul>
								<div class="entry-content">
									<p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
								</div>
							</div>
						</div>

						<div class="col_one_third nobottommargin col_last">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h3><a href="blog-single.html">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 10th Dec 2013</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								</ul>
								<div class="entry-content">
									<p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
								</div>
							</div>
						</div>



					</div>	
					<div class="clearfix"></div>
					<br>
				</br>


				<div class="bottommargin-lg clearfix">
					<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
				</div>

				<div class="clear"></div>

				<div class="fancy-title title-border">
					<h3>Deperature</h3>
				</div>

				<div class="col_one_third nobottommargin">
					<div class="ipost clearfix">
						<div class="entry-image">
							<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
						</div>
						<div class="entry-title">
							<h3><a href="blog-single.html">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 17th Jan 2014</li>
							<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 50</a></li>
						</ul>
						<div class="entry-content">
							<p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
						</div>
					</div>
				</div>

				<div class="col_one_third nobottommargin">
					<div class="ipost clearfix">
						<div class="entry-image">
							<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
						</div>
						<div class="entry-title">
							<h3><a href="blog-single.html">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 20th Nov 2014</li>
							<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
						</ul>
						<div class="entry-content">
							<p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
						</div>
					</div>
				</div>

				<div class="col_one_third nobottommargin col_last">
					<div class="ipost clearfix">
						<div class="entry-image">
							<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
						</div>
						<div class="entry-title">
							<h3><a href="blog-single.html">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 10th Dec 2013</li>
							<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
						</ul>
						<div class="entry-content">
							<p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
						</div>
					</div>
				</div>



				<div class="clearfix"></div>
				<br>
			</br>


			<div class="bottommargin-lg">
				<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
			</div>
			<div class="clear"></div>

			<div class="fancy-title title-border">
				<h3>Snap Shop</h3>
			</div>



			<div class="col_one_third nobottommargin">
				<div class="ipost clearfix">
					<div class="entry-image">
						<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
					</div>
					<div class="entry-title">
						<h3><a href="blog-single.html">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
					</div>
					<ul class="entry-meta clearfix">
						<li><i class="icon-calendar3"></i> 17th Jan 2014</li>
						<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 50</a></li>
					</ul>
					<div class="entry-content">
						<p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
					</div>
				</div>
			</div>

			<div class="col_one_third nobottommargin">
				<div class="ipost clearfix">
					<div class="entry-image">
						<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
					</div>
					<div class="entry-title">
						<h3><a href="blog-single.html">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
					</div>
					<ul class="entry-meta clearfix">
						<li><i class="icon-calendar3"></i> 20th Nov 2014</li>
						<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
					</ul>
					<div class="entry-content">
						<p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
					</div>
				</div>
			</div>

			<div class="col_one_third nobottommargin col_last">
				<div class="ipost clearfix">
					<div class="entry-image">
						<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
					</div>
					<div class="entry-title">
						<h3><a href="blog-single.html">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
					</div>
					<ul class="entry-meta clearfix">
						<li><i class="icon-calendar3"></i> 10th Dec 2013</li>
						<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
					</ul>
					<div class="entry-content">
						<p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<br>
		</br>
		<div class="bottommargin-lg">
			<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
		</div>
		<div class="clear"></div>

		<div class="fancy-title title-border">
			<h3>Check In</h3>
		</div>



		<div class="col_one_third nobottommargin">
			<div class="ipost clearfix">
				<div class="entry-image">
					<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
				</div>
				<div class="entry-title">
					<h3><a href="blog-single.html">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
				</div>
				<ul class="entry-meta clearfix">
					<li><i class="icon-calendar3"></i> 17th Jan 2014</li>
					<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 50</a></li>
				</ul>
				<div class="entry-content">
					<p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
				</div>
			</div>
		</div>

		<div class="col_one_third nobottommargin">
			<div class="ipost clearfix">
				<div class="entry-image">
					<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
				</div>
				<div class="entry-title">
					<h3><a href="blog-single.html">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
				</div>
				<ul class="entry-meta clearfix">
					<li><i class="icon-calendar3"></i> 20th Nov 2014</li>
					<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
				</ul>
				<div class="entry-content">
					<p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
				</div>
			</div>
		</div>

		<div class="col_one_third nobottommargin col_last">
			<div class="ipost clearfix">
				<div class="entry-image">
					<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
				</div>
				<div class="entry-title">
					<h3><a href="blog-single.html">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
				</div>
				<ul class="entry-meta clearfix">
					<li><i class="icon-calendar3"></i> 10th Dec 2013</li>
					<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
				</ul>
				<div class="entry-content">
					<p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
		<br>
	</br>

	<div class="bottommargin-lg">
		<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
	</div>
	<div class="clear"></div>

	<div class="fancy-title title-border">
		<h3>Stand Out</h3>
	</div>



	<div class="col_one_third nobottommargin">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="blog-single.html">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i> 17th Jan 2014</li>
				<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 50</a></li>
			</ul>
			<div class="entry-content">
				<p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
			</div>
		</div>
	</div>

	<div class="col_one_third nobottommargin">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="blog-single.html">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i> 20th Nov 2014</li>
				<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
			</ul>
			<div class="entry-content">
				<p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
			</div>
		</div>
	</div>

	<div class="col_one_third nobottommargin col_last">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="blog-single.html">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i> 10th Dec 2013</li>
				<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
			</ul>
			<div class="entry-content">
				<p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<br>
</br>

<div class="bottommargin-lg">
	<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
</div>
<div class="clear"></div>

<div class="fancy-title title-border">
	<h3>Underground</h3>
</div>



<div class="col_one_third nobottommargin">
	<div class="ipost clearfix">
		<div class="entry-image">
			<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
		</div>
		<div class="entry-title">
			<h3><a href="blog-single.html">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
		</div>
		<ul class="entry-meta clearfix">
			<li><i class="icon-calendar3"></i> 17th Jan 2014</li>
			<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 50</a></li>
		</ul>
		<div class="entry-content">
			<p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
		</div>
	</div>
</div>

<div class="col_one_third nobottommargin">
	<div class="ipost clearfix">
		<div class="entry-image">
			<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
		</div>
		<div class="entry-title">
			<h3><a href="blog-single.html">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
		</div>
		<ul class="entry-meta clearfix">
			<li><i class="icon-calendar3"></i> 20th Nov 2014</li>
			<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
		</ul>
		<div class="entry-content">
			<p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
		</div>
	</div>
</div>

<div class="col_one_third nobottommargin col_last">
	<div class="ipost clearfix">
		<div class="entry-image">
			<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
		</div>
		<div class="entry-title">
			<h3><a href="blog-single.html">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
		</div>
		<ul class="entry-meta clearfix">
			<li><i class="icon-calendar3"></i> 10th Dec 2013</li>
			<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
		</ul>
		<div class="entry-content">
			<p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
		</div>
	</div>
</div>

</div>
<div class="col-md-4">
	<div class="line hidden-lg hidden-md"></div>
	<div class="col_full bottommargin-lg"> </div>			

	<div class="sidebar-widgets-wrap clearfix">
		<div class="widget clearfix">
			<img class="aligncenter" src="images/MMM Cover.jpg" alt="">
		</div>
		<div style="padding-left:10px;">
			<a href="#" class="button button-large button-rounded">Subscribe</a>
			<a href="shop.html" class="button button-large button-rounded">Book Store</a>
		</div>

		<div class="widget widget_links clearfix">

			<h4>Categories</h4>
			<div class="col_half nobottommargin">
				<ul>
					<li><a href="#">Travel sector update</a></li>
					<li><a href="#">Check In</a></li>
					<li><a href="#">Exposure</a></li>
					<li><a href="#">Picturesques</a></li>
					<li><a href="#">Arrival</a></li>
					<li><a href="#">Infocus</a></li>


				</ul>
			</div>
			<div class="col_half nobottommargin col_last">
				<ul>
					<li><a href="#">Deperature</a></li>
					<li><a href="#">Stand out</a></li>
					<li><a href="#">Style</a></li>
					<li><a href="#">Underground</a></li>

				</ul>
			</div>

		</div>



		<div class="widget clearfix">

			<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

				<ul class="tab-nav clearfix">
					<li><a href="#tabs-1">Popular</a></li>
					<li><a href="#tabs-2">Recent</a></li>
					<li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
				</ul>

				<div class="tab-container">

					<div class="tab-content clearfix" id="tabs-1">
						<div id="popular-post-list-sidebar">

							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-comments-alt"></i> 35 Comments</li>
									</ul>
								</div>
							</div>

							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-comments-alt"></i> 24 Comments</li>
									</ul>
								</div>
							</div>

							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-comments-alt"></i> 19 Comments</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-content clearfix" id="tabs-2">
						<div id="recent-post-list-sidebar">

							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
									</div>
									<ul class="entry-meta">
										<li>10th July 2014</li>
									</ul>
								</div>
							</div>

							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
									</div>
									<ul class="entry-meta">
										<li>10th July 2014</li>
									</ul>
								</div>
							</div>

							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
									</div>
									<ul class="entry-meta">
										<li>10th July 2014</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-content clearfix" id="tabs-3">
						<div id="recent-post-list-sidebar">

							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
								</div>
								<div class="entry-c">
									<strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
								</div>
							</div>

							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
								</div>
								<div class="entry-c">
									<strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
								</div>
							</div>

							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
								</div>
								<div class="entry-c">
									<strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
								</div>
							</div>

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
