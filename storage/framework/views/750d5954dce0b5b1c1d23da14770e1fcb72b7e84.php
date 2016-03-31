   <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" ng-app='ninedesign'> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
          <?php $general=App\General::find(1);
                $categories=App\Cate::all();
                $catechild=App\Catechild::whereRaw("is_hot='1'")->get();

              $seo_catechild="";
              foreach ($catechild as$value) {
                $seo_catechild=$seo_catechild.",".$value->name;
              }

         ?> 

   <meta charset="utf-8" />
   <title>Nine Design </title>


   <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  

    <meta content="noodp,noydir" name="robots">

    <meta name="Author" content="Thiết kế website hình ảnh Nine Design ">
    <!-- Open Graph -->

  
   <meta content="<?php echo e($seo_catechild); ?>" name="description" />
   <meta content="<?php echo e($seo_catechild); ?>" name="keyword" />


    <meta property="og:type" content="product.group">
    <meta property="og:site_name" content="nine design">

    <meta property="og:title" content="Thiết kế design hình ảnh in ấn | NineDesign | <?php echo e($seo_catechild); ?>">
    <meta property="og:description" content="Thiết kế design hình ảnh in ấn giá rẻ, chất lượng tốt tại Thiết kế website NineDesign, <?php echo e($seo_catechild); ?>">


    <link type="image/x-icon" href="favicon.ico" rel="Shortcut Icon">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/default/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/default/css/bootstrap-social.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/default/css/home.css')); ?>" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/public/default/css/photo.css')); ?>" /> 
  
<link href="<?php echo e(captcha_layout_stylesheet_url()); ?>" type="text/css" rel="stylesheet" />


   <script type="text/javascript" src="<?php echo e(asset('/public/default/angular/angular.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('/public/default/js/app.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('/public/default/js/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/public/default/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/public/default/js/default.js')); ?>"></script>

</head>

<body>
             
<?php echo $__env->make("default.layout.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <div class="content_main container"><!-- nội dung chính -->
                  <?php echo $__env->yieldContent('content'); ?>
</div>    
<div class='container'>
<?php echo $__env->make("default.layout.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>       
</div>
        
      







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