  @extends('layouts.defaultp')
  @section('content')


  <div id="content">

    <div class="container-fluid">
      <!--  <h1>Edit Profile</h1> -->


      <hr>
      <div class="row-fluid">
        <div class="span12">

            <br>
              <div class="widget-box">
                  <div class="widget-title">
                    <h5>Faculty-info</h5>
                  </div>
                        <div class="widget-content nopadding">


                          <div class="text-center">

                            <label>
                             <!--  -->
                             <i class="lnr lnr-camera"></i>...photo<br>
                             @if($faculty->photourl1!="")
                             <img id="blah" src= "{{ $faculty->photourl1 }}" width="100" height="100">
                             @else
                             <img id="blah" src="//placehold.it/100" class="avatar img-circle" alt="avatar" alt="your image" />
                             @endif
                           </label>


                         </div>


                         <div class="control-group">
                          <label class="control-label">Name :</label>
                          <div class="controls">

                            <label>{{ $faculty->name }}</label>
                          </div>
                        </div>


                        <div class="control-group">
                          <label class="control-label">Positions :</label>
                          <div class="controls">

                           <label>{{ $faculty->positions }}</label>
                         </div>
                       </div> 

                       <div class="control-group">
                        <label class="control-label">Bio:</label>
                        <div class="controls">
                          <label>{{ $faculty->description }}</label>
                        </div>
                      </div>





                    </div>
          </div>


        </div>
      </div>
  </div>
</div>


<script type="text/javascript">

</script>
@stop