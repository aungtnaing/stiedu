<div class="col_full nobottommargin clearfix">

	<div class="fancy-title title-border">
		<h3>ထွက်ခွာ</h3>
	</div>

	@foreach($deperatures as $deperature)
	<?php
	$tcmt = 0;
	$tcmt = count($deperature->comments);
	foreach($deperature->comments as $cmt) 
	{
		$tcmt = $tcmt + count($cmt->replycomments);
	}
	?>
	<div class="col_one_third">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="{{ $deperature->photourl1 }}"><img class="image_fade" src="{{ $deperature->photourl2 }}" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="{{ url('/postdetailsmyanmar', $deperature->id) }}">{{ $deperature->mname }}</a></h3>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i>{{ $deperature->created_at }}</li>
				<li><a href="{{ url('/postdetailsmyanmar', $deperature->id) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
			</ul>
			<div class="entry-content">
				<p><?php echo substr($deperature->mdescription,0, 200) ?>...</p>
			</div>
		</div>
	</div>
	@endforeach

	
</div>	