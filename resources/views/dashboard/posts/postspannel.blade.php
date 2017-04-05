@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">post lists</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<a class="btn btn-primary btn-mini pull-left" href="{{ route("posts.create") }}">Add New Eng Post</a>
				<a class="btn btn-info btn-mini pull-left" href="{{ route("postsmyanmar.create") }}">Add New Myan Post</a>
	
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>POSTS</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
					

							<thead>
								<tr>
									<th>#</th>

									<th>Post</th>
									<th>Name</th>
									<th>mName</th>
									<th>Content</th>
									<th>mContent</th>
									<th>Category</th>
									<th>Writer</th>
									<th>Active</th>
									<th>Myanmar</th>
									<th>English</th>
									<th></th>
								</tr>
							</thead>
							<tbody>

								@foreach($posts as $post)
								<tr lass="gradeX">   
									<td>{{ $post->id }}</td>
									<td><img src="{{ $post->photourl1 }}" width="200" height="100"></td>
									<td>{{ $post->name }}</td>
									<td>{{ $post->mname }}</td>
									<td><?php echo $post->description ?></td>
									<td>{{ $post->mdescription }}</td>
									<td>{{ $post->category->name }}</td>
									<td>{{ $post->user->name }}</td>
									@if($post->active==1)
									<td><i class=" icon-check"></i></td>
									@else
									<td></td>
									@endif	
									<td>
										<a class="btn btn-mini btn-info" href="{{ route("posts.edit", $post->id ) }}">Edit</a>
									</td>
									<td>
										<a class="btn btn-mini btn-info" href="{{ route("posts.edit", $post->id ) }}">Edit</a>
									</td>
									@if(Auth::user()->roleid==1)
									<td>
										<form method="POST" action="{{ route("posts.destroy", $post->id) }}" accept-charset="UTF-8">
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
