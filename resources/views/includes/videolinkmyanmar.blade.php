		
<section id="content">
	<div class="container clearfix">
		<div class="section topmargin nobottommargin nobottomborder">
			<div class="container clearfix">
				<div class="heading-block center nomargin">
					<h3>ဗီဒီယို</h3>
				</div>
			</div>
		</div>

		<div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">

			
			@foreach($videoposts as $videopost)

			<div class="entry clearfix">
				<div class="entry-image">
					<iframe width="560" height="315" src="{{ $videopost->youtubelink }}" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="entry-title">
					<h2><a href="blog-single-full.html">{{ $videopost->mname }}</a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li><i class="icon-calendar3"></i> {{ $videopost->created_at }}</li>
					<li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 34</a></li>
					<li><a href="#"><i class="icon-film"></i></a></li>
				</ul>
				<div class="entry-content">
					<p><?php echo substr($videopost->mdescription,0, 70) ?></p>
					<a href="blog-single-full.html"class="more-link">Read More</a>
				</div>
			</div>


			@endforeach




		</div>






	</div>

</section>