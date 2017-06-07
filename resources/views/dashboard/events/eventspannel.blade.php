@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">events/new</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">

				
				<a class="btn btn-primary btn-mini pull-left" href="{{ route("events.create") }}">Add New event/new</a>
			
	
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>News and Events</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
					

							<thead>
								<tr>
									<th>sort</th>
									<th>Photo</th>				
									<th>name</th>
									<th>aboutevent</th>
									<th>date</th>
									<th>address</th>
									<th>Active</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>

								@foreach($events as $event)
								<tr lass="gradeX">   
									<td>{{ $event->id }}</td>
									@if($event->type==='video')
									<td> <video width="200px" height="200px" controls loop autoplay>
								                  <source src="<?php echo url(); ?>{{ $event->photourl1 }}" type="video/mp4">
								                     
								                      Your browser does not support the video tag.
								                  </video> </td>
									@else
									<td><img src="{{ $event->photourl1 }}" width="100" height="100"></td>
									@endif
									<td>{{ $event->name }}</td>
									<td>{{ $event->aboutevent }}</td>
									<td>{{ $event->startdate }} to {{ $event->enddate }}</td>
									<td>{{ $event->address }}</td>
									@if($event->active==1)
									<td><i class=" icon-check"></i></td>
									@else
									<td></td>
									@endif
									
								
									<td>
										<a class="btn btn-mini btn-primary" href="{{ route("events.edit", $event->id ) }}">Edit</a>
									</td>
									@if(Auth::user()->roleid==1 || Auth::user()->roleid==2)
									<td>
										<form method="POST" action="{{ route("events.destroy", $event->id) }}" accept-charset="UTF-8">
											<input name="_method" type="hidden" value="DELETE">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input class="btn btn-mini btn-danger" type="submit" value="Delete">
										</form>
									</td>
									@endif
								</tr>
								@endforeach


							</tbody>
						</table>

					</div>
					
				</div>
			</div>

		</div>
	</div>

</div>

<script src="<?php echo url(); ?>/assets/js/jquery.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo url(); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.uniform.js"></script> 
<script src="<?php echo url(); ?>/assets/js/select2.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.tables.js"></script>

@stop

