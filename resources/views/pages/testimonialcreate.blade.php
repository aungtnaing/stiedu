@extends('layouts.defaultp')
@section('content')

<section id="page-title">

      <div class="container clearfix">
        <h1>.</h1>
      
      </div>

    </section><!-- #page-title end -->
 <section>
 <br>
 <br>
    <div class="second-page-container">
      <div class="block">
        <div class="container">

          

          @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif


        <form action="{{ route("testimonials.store") }}" method="POST" enctype="multipart/form-data">

              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!-- left column -->
            <div class="col-md-3">
             
              <div class="text-center">

                <!-- <div class="image-upload"> -->
                <input style="display:none;" id="file-input" name="photourl1" type='file' onchange="readURL(this);" />                    
                <label for="file-input">
                 <!--  --><i class="glyphicon glyphicon-upload">...Browse Photo</i><br>
                
                 <img id="blah" src="//placehold.it/70" class="avatar img-circle" alt="avatar" alt="your image" />
                
               </label>
               
               
             </div>
           </div>

           <!-- edit form column -->
           <div class="col-md-9 personal-info">
          <!--   <div class="alert alert-info alert-dismissable">
              <a class="panel-close close" data-dismiss="alert">×</a> 
              <i class="fa fa-coffee"></i>
              This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div> -->
            
            <div class="control-group">
                <label class="control-label">Name :</label>
                <div class="controls">
                  <input type="text" class="span11" id="" name="name" placeholder="Enter name" value="{{ old('name') }}" required>
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Positions :</label>
                <div class="controls">
                  <input type="text" class="span11" id="" name="positions" placeholder="Enter positions" value="{{ old('positions') }}" required>
                </div>
              </div> 
              <div class="control-group">
                <label class="control-label">Description:</label>
                <div class="controls">
                  <textarea class="textarea_editor span12" name="description" placeholder="Enter your description" class="span11" rows="4"></textarea>

                </div>
              </div>

              <div class="control-group" style="display:none">
                <input type="checkbox" name="active" value="0">Active
              </div>

         
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <!-- <input class="btn btn-primary" value="Save Changes" type="button"> -->
            <input class="btn btn-primary" name="public" type="submit" value="Submit"> 
            <span></span>
            <!-- <input class="btn btn-default" value="Cancel" type="reset"> -->
          </div>
        </div>
      </form>
      
    </div>
  </div>
</div>

</section>

<script type="text/javascript">
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah')
      .attr('src', e.target.result)
      .width(150)
      .height(150);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

</script>



@stop

