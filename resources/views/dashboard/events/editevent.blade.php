@extends('dashboard.default')
@section('content')


<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">edit event/news</a> </div>

	</div>
	<div class="container-fluid">

		@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif  
		<hr>

		<div class="row-fluid">

		<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
						<h5>Event/News-info</h5>
					</div>
					<div class="widget-content">

					<form action="{{ route("events.update", $event->id) }}" method="POST" enctype="multipart/form-data">
							<input name="_method" type="hidden" value="PATCH">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							

								<ul class="thumbnails">
									<li class="span3"> <a> 
										<input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);"/>                    
										<label for="file-input1">
											<i class="icon-camera"></i>.Main 360 X 248<br>
											
											@if($event->photourl1!="")
											<img id="blah" src= "<?php echo url(); ?>{{ $event->photourl1 }}" width="100" height="100">
											@else
											<img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />
											@endif

											
										</label>
										<div class="actions"><a id="preview1" class="lightbox_trigger" herf=""><i class="icon-search"></i></a> </div>

									</li>

									<li class="span3"> <a> 
										<input style="display:none;" id="file-input2" name="photourl2" type='file' />                    
										<label for="file-input2">
											<i class="icon-camera"></i>Video.MP4<br>
											
												 <video width="200px" height="200px" controls loop autoplay>
								                  <source src="<?php echo url(); ?>{{ $event->photourl2 }}" type="video/mp4">
								                     
								                      Your browser does not support the video tag.
								                  </video> 

										

										</label>
										<div class="actions"><a id="preview1" class="lightbox_trigger" herf=""><i class="icon-search"></i></a> </div>

									</li>
									
									

								</ul>

								<div class="control-group">
								<label class="control-label">Name :</label>
								<div class="controls">
									<input type="text" class="span11" id="" name="name" placeholder="Enter name" value="{{ $event->name }}" required>
								</div>
							</div>

							<div class="control-group">
						<label class="control-label">Type :</label>
						<br>
						<select name="type">
						<option value="{{ $event->type }}">{{ $event->type }}</option>
						
						<option value="photo">photo</option>
						<option value="video">video</option>
						<option value="youtubelink">youtubelink</option>
							
						</select>

					</div>

					 <div class="control-group">
         <label class="control-label">post type:</label>
          <div class="controls">
               <select name="posttype">
                 	 <option value="{{ $event->posttype }}">{{ $event->posttype }}</option>
                  <option value="event">event</option>
                  <option value="news">news</option>
                  <option value="class">class</option>
                  
               </select>
          </div>
        </div>

								<div class="control-group">
									<label class="control-label">Youtubelink:</label>
									<div class="controls">
										<div class="controls">
										<input type="text" class="span11" id="" name="youtubelink" placeholder="Enter youtubelink" value="{{ $event->youtubelink }}">
								</div>
										
									</div>
								</div>

						<div class="control-group">
								<label class="control-label">First Speaker</label>
								<br>
								 
								<div class="controls">
										<input type="text" class="span11" id="" name="firstspeaker" placeholder="Enter Speaker" value="{{ $event->firstspeaker }}">
								</div>

							</div>

							<div class="control-group">
								<label class="control-label">Second Speaker</label>
								<br>
							 
								<div class="controls">
										<input type="text" class="span11" id="" name="secondspeaker" placeholder="Enter Speaker" value="{{ $event->secondspeaker }}">
								</div>

							</div>

							<div class="control-group">
								<label class="control-label">Third Speaker</label>
								<br>
						 
								<div class="controls">
										<input type="text" class="span11" id="" name="thirdspeaker" placeholder="Enter Speaker" value="{{ $event->thirdspeaker }}">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Fourth Speaker</label>
								<br>
							 
								<div class="controls">
										<input type="text" class="span11" id="" name="fourthspeaker" placeholder="Enter Speaker" value="{{ $event->fourthspeaker }}">
								</div>

							</div>

							<div class="control-group">
								<label class="control-label">Fifth Speaker</label>
								<br>
							 
								<div class="controls">
										<input type="text" class="span11" id="" name="fifthspeaker" placeholder="Enter Speaker" value="{{ $event->fifthspeaker }}">
								</div>

							</div>

							
							<div class="control-group">
								<label class="control-label">About Event:</label>
								<div class="controls">
									<textarea class="textarea_editor span12" name="aboutevent" placeholder="" class="span11" rows="7">{{ $event->aboutevent }}</textarea>

								</div>
							</div>


							<div class="control-group">
								<label class="control-label">date : mm/dd/yyyy</label>
								<div class="controls">
									<input type="text" placeholder="start date" name="startdate" class="span11" value="{{ $event->startdate }}"/>
									
								</div>
							</div>


							<div class="control-group">
								<label class="control-label">display date : myanmar/english</label>
								<div class="controls">
									<input type="text" placeholder="end date" name="enddate" class="span11" value="{{ $event->enddate }}"/>
									
								</div>
							</div>



							<div class="control-group">
								<label class="control-label">Address:</label>
								<div class="controls">
									<textarea class="textarea_editor span12" name="address" placeholder="Enter your event address" class="span11" rows="3">{{ $event->address }}</textarea>

								</div>
							</div>
							
								<div class="control-group">
									
									@if($event->active==0)
									<input type="checkbox" name="active" value="">Active<br>  
									@else   
									<input type="checkbox" name="active" value="" checked>Active<br>
									@endif
								</div>



								<div class="form-actions">
									<input class="btn btn-primary" type="submit" value="Save"> 
								</div>
							</form>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>



	<script src="<?php echo url(); ?>/assets/js/jquery.min.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/jquery.ui.custom.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/bootstrap.min.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/bootstrap-colorpicker.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/bootstrap-datepicker.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/jquery.toggle.buttons.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/masked.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/jquery.uniform.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/select2.min.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/matrix.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/matrix.form_common.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/wysihtml5-0.3.0.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/jquery.peity.min.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/bootstrap-wysihtml5.js"></script> 

	<script>
		$('.textarea_editor').wysihtml5();
	</script>

	<script type="text/javascript">


function readURL(input) {


	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah')
			.attr('src', e.target.result)
			.width(100)
			.height(100);

		};

		reader.readAsDataURL(input.files[0]);
	}
}





</script>
@stop

