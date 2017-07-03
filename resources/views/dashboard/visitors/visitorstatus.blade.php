@extends('dashboard.default')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">new order</a> </div>
    <!-- <h1>USER LISTS</h1> -->
  </div>
  <div class="container-fluid">
    <!--  <h1>Edit Profile</h1> -->

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
            <h5>Order-info</h5>
          </div>
          <div class="widget-content nopadding">
            <form method="POST" action="{{ route("visitors.update", $visitor->id) }}" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" role="form">
              <input name="_method" type="hidden" value="PATCH">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
         


             <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">

                <label>{{ $visitor->name }}</label>
             </div>
           </div>


           <div class="control-group">
            <label class="control-label">Email :</label>
            <div class="controls">

                   <label>{{ $visitor->email }}</label>
            </div>
          </div> 
            <div class="control-group">
            <label class="control-label">phoneno :</label>
            <div class="controls">
                 <label>{{ $visitor->phone }}</label>
           </div>
         </div>
          <div class="control-group">
            <label class="control-label">like :</label>
            <div class="controls">
                 <label>{{ $visitor->like }}</label>
           </div>
         </div>

        <div class="control-group">
            <label class="control-label">type :</label>
            <div class="controls">

                   <label>{{ $visitor->type }}</label>
            </div>
          </div> 

          <div class="control-group">
            <label class="control-label">message :</label>
            <div class="controls">
                 <label>{{ $visitor->message }}</label>
           </div>
         </div>

          
     
        


       <input class="btn btn-mini btn-info" name="status" type="submit" value="read">
        <input class="btn btn-mini btn-info" name="status" type="submit" value="close">
     </form>
   </div>
 </div>


</div>
</div>
</div>
</div>


@stop