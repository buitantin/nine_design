   <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Nine Design </title>
     <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
     <meta http-equiv="Cache-Control" content="no-store" />
     <meta http-equiv="cache-control" content="max-age=0" />
      <meta http-equiv="cache-control" content="no-cache" />
      <meta http-equiv="expires" content="0" />
      <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
      <meta http-equiv="pragma" content="no-cache" />
       <META HTTP-EQUIV="Expires" CONTENT="-1">
       

   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="<?php echo e(asset('/public/admin/assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />
   <link href="<?php echo e(asset('/public/admin/assets/bootstrap/css/bootstrap-responsive.min.css')); ?>" rel="stylesheet" />
   <link href="<?php echo e(asset('/public/admin/assets/bootstrap/css/bootstrap-fileupload.css')); ?>" rel="stylesheet" />
   <link href="<?php echo e(asset('/public/admin/assets/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
   <link href="<?php echo e(asset('/public/admin/css/style.css')); ?>" rel="stylesheet" />
   <link href="<?php echo e(asset('/public/admin/css/style_responsive.css')); ?>" rel="stylesheet" />
   <link href="<?php echo e(asset('/public/admin/css/style_default.css')); ?>" rel="stylesheet" id="style_color" />


   

   <link href="<?php echo e(asset('/public/admin/assets/fancybox/source/jquery.fancybox.css')); ?>" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/admin/assets/gritter/css/jquery.gritter.css')); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/admin/assets/uniform/css/uniform.default.css')); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/admin/assets/chosen-bootstrap/chosen/chosen.css')); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/admin/assets/jquery-tags-input/jquery.tagsinput.css')); ?>" />    
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/admin/assets/clockface/css/clockface.css')); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/admin/assets/bootstrap-datepicker/css/datepicker.css')); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/admin/assets/bootstrap-timepicker/compiled/timepicker.css')); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/admin/assets/bootstrap-colorpicker/css/colorpicker.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('/public/admin/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('/public/admin/assets/data-tables/DT_bootstrap.css')); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/admin/assets/bootstrap-daterangepicker/daterangepicker.css')); ?>" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <?php echo $__env->make('admin.layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
       <?php echo $__env->make("admin.layout.side", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                  <?php echo $__env->yieldContent('content'); ?>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
    <?php echo $__env->make('admin.layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   
<?php if( session("success")): ?>
   <!-- Button to trigger modal -->
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Nine Design</h3>
  </div>
  <div class="modal-body">
    <p><?php echo e(session("success")); ?></p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">OK</button>
  </div>
</div>
<script type="text/javascript">  $('#myModal').modal('show');  </script>

<?php endif; ?>
</body>
<!-- END BODY -->
</html>