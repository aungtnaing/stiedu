@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">visitors</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">

			
	
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>Visitors</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
					

							<thead>
								<tr>
									<th>sort</th>
									<th>name</th>					
									
									<th>email</th>
									<th>phone</th>
									
									<th>like</th>
									<th>type</th>
									<th>enquiry date</th>
									<th></th>
									
								</tr>
							</thead>
							<tbody>

								@foreach($visitors as $visitor)
								<tr lass="gradeX">   
									<td>{{ $visitor->id }}</td>
									
									<td>{{ $visitor->name }}</td>
									<td>{{ $visitor->email }}</td>
									<td>{{ $visitor->phone }}</td>
								
									
									<td>{{ $visitor->like }}</td>
									<td>{{ $visitor->type }}</td>
								
									
									<td>{{ $visitor->created_at }}</td>
									
									@if(Auth::user()->roleid==1 || Auth::user()->roleid==2)
									<td>
										<form method="POST" action="{{ route("visitors.destroy", $visitor->id) }}" accept-charset="UTF-8">
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

