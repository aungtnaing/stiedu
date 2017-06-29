@extends('layouts.defaultp')
@section('content')
<section class="section" id="course">
	<div id="content">
		<div class="container">
			
			<div class="row">
				<section id="main" class="col-md-8">
					<article class="entry main-entry single">
						
				
					<h2 class="entry-title" style="color:#050930;">Get Brochures</h2>
						<p>Plese fill your's information for our brochures.</p>
						<div class="entry-image"> <img src="<?php echo url(); ?>{{ $coursedetail->photourl1 }}" alt="" style="width: 500px;height: 400;"/> </div>
					<form action="{{ route("visitors.store") }}" method="POST" enctype="multiGet Brochurespart/form-data">

							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="col-md-9 personal-info">


								<div class="control-group">
									<label class="control-label">Name :</label>
									<div class="controls">
										<input type="text" class="span11" id="" name="name" placeholder="Enter name" value="{{ old('name') }}" required>
									</div>
								</div>


								<div class="control-group">
									<label class="control-label">Email :</label>
									<div class="controls">
										<input type="text" class="span11" id="" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
									</div>
								</div> 
								<div class="control-group">
									<label class="control-label">Phone :</label>
									<div class="controls">
										<input type="text" class="span11" id="" name="phone" placeholder="Enter phone" value="{{ old('phone') }}" required>
									</div>
								</div>


								<div class="control-group">
									<label class="control-label">Like Program :</label>
									<div class="controls">
										<select name="like">
											@foreach($likes as $like)
											<option value="{{ $like->name }}">{{ $like->name }}</option>
											@endforeach
										</select>
									</div>
								</div>

								<input type="text" name="type" value="brochures ({{ $coursedetail->category->name }})" style="display:none">
								<input type="text" name="categoryid" value="{{ $coursedetail->category->id }}" style="display:none">
								<input type="text" name="contentmessage" value="STI University" style="display:none">


								<br>

								<div class="control-group">
									
									<div class="col-md-8">

										<input class="btn btn-primary" name="submittype" type="submit" value="Get Brochures"> 

									</div>
								</div>
							</form>	


						</article>



					</section>

					<aside id="sidebar" class="col-md-4">

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

										<h6 class="entry-title">
											<a href="{{ url('/coursedetails', $courselist->id) }}">{{ $courselist->name }}</a>
										</h6>

									</div>

								</article>
								@endforeach


							</section>
						</div>

					</aside>

				</div>

			

		</div>



	</section>

	@stop












