@extends('layouts.default')
@section('content')
<?php

Session::set('backUrl', URL::previous());
?>
<section id="page-title">

    <div class="container clearfix">
        <h1>.</h1>

    </div>

</section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

                       <!--  <ul class="tab-nav tab-nav2 center clearfix">
                            <li class="inline-block"><a href="#tab-login">Login</a></li>
                            <li class="inline-block"><a href="#tab-register">Register</a></li>
                        </ul> -->

                        <div class="tab-container">

                            <div class="tab-content clearfix" id="tab-login">
                                <div class="panel panel-default nobottommargin">
                                    <div class="panel-body" style="padding: 40px;background-color: rgba(64, 64, 106, 0.42);">

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
                                    <form method="POST" action="{{ url('/auth/login') }}">
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     

                                     <h3>Login to your Account</h3>

                                     <div class="col_full">
                                        <label for="login-form-username">Email:</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    </div>

                                    <div class="col_full">
                                        <label for="login-form-password">Password:</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                       <!--  <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login with Facebook</button> -->
                                        <br>
                                        <!-- <a href="#" class="fright1">Forgot Password?</a> -->
                                        <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->


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

