 <!-- BEGIN FOOTER -->
   <div id="footer">
       2016 &copy; Thiết kế
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
 



   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?php echo e(asset('/public/admin/js/jquery-1.8.2.min.js')); ?>"></script>    
   
   <!-- <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/ckeditor/ckeditor.js')); ?>"></script> -->

   
   <script src="<?php echo e(asset('/public/admin/assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/bootstrap/js/bootstrap-fileupload.js')); ?>"></script>
   <script src="<?php echo e(asset('/public/admin/js/jquery.blockui.js')); ?>"></script>

   
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?php echo e(asset('/public/admin/js/excanvas.js')); ?>"></script>
   <script src="<?php echo e(asset('/public/admin/js/respond.js')); ?>"></script>
   <![endif]-->
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/chosen-bootstrap/chosen/chosen.jquery.min.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/uniform/jquery.uniform.min.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')); ?>"></script> 
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/clockface/js/clockface.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/jquery-tags-input/jquery.tagsinput.min.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')); ?>"></script>   
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/bootstrap-daterangepicker/date.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script> 
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')); ?>"></script>  
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('/public/admin/assets/bootstrap-inputmask/bootstrap-inputmask.min.js')); ?>"></script>
   <script src="<?php echo e(asset('/public/admin/assets/fancybox/source/jquery.fancybox.pack.js')); ?>"></script>


   <script  type="text/javascript" src="<?php echo e(asset('/public/admin/js/scripts.js')); ?>"></script>

  

   <script  type="text/javascript" src="<?php echo e(asset('/public/ckeditor/ckeditor.js')); ?>"></script>
   <script  type="text/javascript" src="<?php echo e(asset('/public/admin/js/function.js')); ?>"></script>

   
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
    
         App.init();

         $("input , select").click(function(){
            $(this).parent().parent().removeClass("error");
         })
         $(".remove-button").click(function(){
                  if(confirm("Bạn muốn xóa?")){
                      $.get($(this).attr("href"),function(){

                      });
                      $(this).parent().parent().remove();
                   }
             return false;
         })

         $(".delete_image").click(function(){
              if(confirm("Bạn muốn xóa hình trên?")){
                      $.get($(this).attr("href"),function(){

                      });
                      $(this).parent().parent().remove();
                   }
             return false;
         });
         $(".button-approve").click(function(){
                    $.get($(this).attr("href"),function(){
                        alert("Đã duyệt xong.");
                      });
                      $(this).parent().parent().remove();
                      return false;
         });
         if($("#myeditor").length){
          initEditor("myeditor"); 
         }
         if($("#mybasiceditor").length){
           initEditorBasic("mybasiceditor");
        }

      });
   </script>
   <!-- END JAVASCRIPTS -->   
<!-- 
   <script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('images').addEventListener('change', handleFileSelect, false);
</script> -->


