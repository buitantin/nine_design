   <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Nine </title>
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
   @include('admin.layout.header')
   <!-- BEGIN CONTAINER -->
  

     <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">

         <div class="sidebar-toggler hidden-phone"></div>   

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
       @include("admin.layout.side")
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
           
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
                  @yield('content')
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
    @include('admin.layout.footer')
   
</body>
<!-- END BODY -->
</html>