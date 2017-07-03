@extends('dashboard.default')
@section('content')

<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>

  <div class="container-fluid">
   
  
    <hr/>
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
									<th>message</th>
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
									<td>{{ $visitor->message }}</td>

									
									<td>{{ $visitor->created_at }}</td>
									<td>
									<a class="btn btn-mini btn-primary" href="{{ route("visitors.edit", $visitor->id ) }}">Read</a>
									</td>
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

</div>
@stop