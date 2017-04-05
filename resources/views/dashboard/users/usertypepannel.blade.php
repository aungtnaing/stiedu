@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">user lists</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">


				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>USERS</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>#</th>

									<th>Name</th>
									<th>Email</th>
									<th>Ph1</th>
									<!-- <th>Ph2</th> -->
									<th>Address</th>
									<th>Fb</th>
									<th></th>
								</tr>
							</thead>
							<tbody>

								@foreach($users as $user)
								<tr lass="gradeX">   
									<td>{{ $user->id }}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->ph1 }}</td>
									<!-- <td>{{ $user->ph2 }}</td> -->
									<td>{{ $user->address }}</td>
									<td>{{ $user->fburl }}</td>
									@if(Auth::user()->roleid==1)

									<td class="center">
										<form method="POST" action="{{ route("profiles.destroy", $user->id) }}" accept-charset="UTF-8">
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
					{!! $users->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>



@stop