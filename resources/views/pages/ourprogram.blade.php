@extends('layouts.defaultp')
@section('content')

<section id="page-title">

	<div class="container clearfix">
		<br>
		<br>
		<br>
		<br>

		<h3><p style="color:#050930;"><b>OUR PROGRAM</b></p></h3>
		<h4><p class="opacity" style="color:#050930;">  STI's excellent reputation has been achieved through its good knowledge of the various market segments and by providing proven quality education to develop the Myanmar's most valuable human assets. We offer Certificate, Diploma, Bachelor, Master and 'Teachers' Training qualification. Our program include Bachelor in Engineering, Bachelor of Business Administration in Accounting, Entrepreneurship, Marketing, International Business, Master of Financial Services, Master of Engineering, Master of Business Administrator and Master of Education. While Our Teacher Training Programs include Teaching English as Foreign Language (TEFL), Teaching English to Young Learners and Teenagers (TEYLT), Teaching English to Speakers of Other Languages (TESOL), Post Graduate Leading and Managing for Effective Education, Post Graduate Child Development and Post Graduate Learning, Curriculum and Assessment.

			Each course program is carefully designed to provide the students with the intellectual foundations necessary to expose them to current knowledge that will help them build successful future and careers with greater community service.

			Our students are part of our local community with the belief of giving back to the society and they are given the opportunities for the realization of their belief.</p></h4>


			<div class="row">
				<section id="main" class="col-md-12">

					@foreach($courselists as $courselist)
					<div class="row">
						<div class="col-md-12">
							<div class="news_des right">
								<div class="row">
									<div class="col-xs-12 col-md-6 col-sm-6 thumb">
										<div class="work-item"> <img src="{{ $courselist->photourl1 }}" style="width: 400px; height: 250px;" alt="" />
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
												<h2><a href="{{ url('/coursedetails', $courselist->id) }}" style="color: #1e26b0;">{{ $courselist->name }}</a></h2>
											</li>
											<li><p style="color:#050930;">
												{{ substr($courselist->aboutcourse,0, 150) }}
											</p></li>

										</ul>
									</div>
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


										<a href="{{ url('/coursedetails', $courselist->id) }}" class="readmore" style="color: #1e26b0;">read more<i class="fa fa-long-arrow-right"></i></a> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				@endforeach

			</section>
		</div>
	</div>

</section>



@stop