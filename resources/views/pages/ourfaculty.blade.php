@extends('layouts.defaultp')
@section('content')

<section id="page-title">

<div class="container clearfix">
<br>
<br>
<br>
<br>
    <h3><p style="color:#050930;"><b>OUR FACULTY</b></p></h3>
                        <h4><p class="opacity" style="color:#050930;"> 
STI faculty members are diverse with different cultural backgrounds from different parts of Myanmar and the world. They are experienced, honourable and visionary players bringing with them their excellent knowledge and experiences from various fields of studies. Our professionals from overseas include Emeritus University Professors, as well as American and British English and business teachers. STI also brings in various professionals from around the world for seminars and workshops. The renowned speakers are masters in Teacher Training, Business Management, Economics, Marketing, English, IT, Finance, HR and Entrepreneurship. The STI administrative team is solid and all STI staff members are amiable and properly trained ethical professionals. </p>
</h4>

	<div class="row">
				<section id="main" class="col-md-12">
					<section id="main" class="col-md-8">
				@foreach($facultylists as $facultylist)
					<div class="row">
						<div class="col-md-12">
							<div class="news_des right">
								<div class="row">
									<div class="col-xs-12 col-md-6 col-sm-6 thumb">
										<div class="work-item"> <img src="<?php echo url(); ?>{{ $facultylist->photourl1 }}" alt="" />
											<div class="image-extra">
												<div class="extra-content">
													<div class="inner-extra">
														<a class="single-image plus-icon" data-fancybox-group="blog" href="<?php echo url(); ?>{{ $facultylist->photourl1 }}"></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-6 col-sm-6">
										<div class="event_des">
											<ul class="post-option">
											<br>
											
													<h2><a href="{{ url('/facultyprofile', $facultylist->id) }}" style="color: #1e26b0;">{{ $facultylist->name }}</a></h2>
												</li>
												<li><p style="color:#050930;">
													{{ $facultylist->positions }}
												</p></li>

												@if(strlen($facultylist->description)>=150)
												<li><p style="color:#050930;">
													<?php echo substr($facultylist->description,0, 150); ?>
												</p></li>
												@else
												<li><p style="color:#050930;">
													<?php echo $facultylist->description; ?>
												</p></li>
												@endif
												
											</ul>
										</div>
										<div class="event_des ">

											<div class="event-info">
												

												<a href="{{ url('/facultyprofile', $facultylist->id) }}" class="readmore" style="color: #1e26b0;">read more<i class="fa fa-long-arrow-right"></i></a> 
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
					@endforeach
					{!! $facultylists->render() !!}

					</section>
					</section>
					</div>
                     

</section>


@stop