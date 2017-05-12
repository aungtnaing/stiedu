@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">professors</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">

				
				<a class="btn btn-primary btn-mini pull-left" href="{{ route("professors.create") }}">Add New professor</a>
			
	
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>Professors</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
					

							<thead>
								<tr>
									<th>sort</th>
									<th>Photo</th>					
									
									<th>name</th>
									<th>positions</th>
									
									<th>description</th>
									<th>Active</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>

								@foreach($professors as $professor)
								<tr lass="gradeX">   
									<td>{{ $professor->id }}</td>
									<td><img src="{{ $professor->photourl1 }}" width="200" height="100"></td>
									<td>{{ $professor->name }}</td>
									<td>{{ $professor->positions }}</td>
									<td>{{ $professor->description }}</td>
								
									@if($professor->active==1)
									<td><i class=" icon-check"></i></td>
									@else
									<td></td>
									@endif
									
								
									<td>
										<a class="btn btn-mini btn-primary" href="{{ route("professors.edit", $professor->id ) }}">Edit</a>
									</td>
									@if(Auth::user()->roleid==1 || Auth::user()->roleid==2)
									<td>
										<form method="POST" action="{{ route("professors.destroy", $professor->id) }}" accept-charset="UTF-8">
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

