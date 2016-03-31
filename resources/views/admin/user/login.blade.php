<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Nine Design</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="{{ asset('/public/admin/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
   <link href="{{ asset('/public/admin/assets/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
   <link href="{{ asset('/public/admin/assets/bootstrap/css/bootstrap-fileupload.css')}}" rel="stylesheet" />
   <link href="{{ asset('/public/admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
   <link href="{{ asset('/public/admin/css/style.css')}}" rel="stylesheet" />
   <link href="{{ asset('/public/admin/css/style_responsive.css')}}" rel="stylesheet" />
   <link href="{{ asset('/public/admin/css/style_default.css') }}" rel="stylesheet" id="style_color" />
   <link href="{{ asset('/public/admin/css/style_purple.css')}}" rel="stylesheet" id="style_color" />


   

   <link href="{{ asset('/public/admin/assets/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/assets/gritter/css/jquery.gritter.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/assets/uniform/css/uniform.default.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/assets/chosen-bootstrap/chosen/chosen.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/assets/jquery-tags-input/jquery.tagsinput.css') }}" />    
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/assets/clockface/css/clockface.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/assets/bootstrap-datepicker/css/datepicker.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/assets/bootstrap-timepicker/compiled/timepicker.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/assets/bootstrap-colorpicker/css/colorpicker.css') }}" />
   <link rel="stylesheet" href="{{ asset('/public/admin/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css') }}" />
   <link rel="stylesheet" href="{{ asset('/public/admin/assets/data-tables/DT_bootstrap.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/assets/bootstrap-daterangepicker/daterangepicker.css') }}" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
  <div class="login-header">
      <!-- BEGIN LOGO -->
      <div id="logo" class="center">
          <img src="/public/default/img/logo.png" alt="logo" class="center" />
      </div>
      <!-- END LOGO -->
  </div>

  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
    {!! Form::open(['class'=>'form-vertical no-padding no-margin','method'=>'post'])!!}
    
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      
      <div class="lock">
          <i class="icon-lock"></i>
      </div>
      <div class="control-wrap">
          <h4>Đăng nhập</h4>
          <div style='color:red'>{{$error}}</div>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      {!! Form::text("username",@$data['username'],array("placeholder"=>"Tên đăng nhập") ) !!}

                  </div>
              </div>
          </div>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      {!! Form::password("password",array("placeholder"=>"Mật khẩu" ) )!!}
                  </div>
                

                  <div class="clearfix space5"></div>
              </div>

          </div>
      </div>

      <input type="submit" id="login-btn" class="btn btn-block login-btn" value="Đăng nhập" />
   {!! Form::close() !!}
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form id="forgotform" class="form-vertical no-padding no-margin hide" action="index.html">
      <p class="center">Enter your e-mail address below to reset your password.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input id="input-email" type="text" placeholder="Email"  />
          </div>
        </div>
        <div class="space20"></div>
      </div>
      <input type="button" id="forget-btn" class="btn btn-block login-btn" value="Submit" />
    </form>
    <!-- END FORGOT PASSWORD FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
      
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/jquery.blockui.js"></script>
  <script src="js/scripts.js"></script>
  <script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>