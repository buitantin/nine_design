;
<?php $__env->startSection("content"); ?>
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                     Quản lý Slide
                     <small>Quản lý Slide</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#"> hình ảnh</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>


   <div class="row-fluid">
                <div class="span12 sortable">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i></h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                           
                            <?php echo Form::open(array('class'=>'form-horizontal',"method"=>"post","enctype"=>"multipart/form-data")); ?> 
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                                <div class="control-group <?php if(!empty($error['name'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Tên:</label>
                                    <div class="controls">
                                        <?php echo Form::text("name",@$data['name'],['class'=>"input-xxlarge",'placeholder'=>'']); ?>

                                        <span class="help-inline" style='color:red'>* <?php if(!empty($error['name'])): ?> <?php echo e($error['name']); ?> <?php endif; ?> </span>
                                    </div>
                                </div>

                              


                                

                             
                               <div class="control-group <?php if(!empty($error['images'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Hình ảnh</label>
                                    <div class="controls">
                                      <div class=''>
                                        <?php echo Form::file("images",null); ?>

                                      </div>
                                         <span class="help-inline" style='color:red'>* <?php if(!empty($error['images'])): ?> <?php echo e($error['images']); ?> <?php endif; ?> </span>
                                         <img src="<?php echo e(SLIDESHOW_URL); ?>slide_<?php echo e($data['id']); ?>.png" style="width:auto" />
                                    </div>
                                </div>


                                      <div class="control-group <?php if(!empty($error['code'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Mô tả</label>
                                  
                                </div>
                                 <div class="">
                                        <?php echo Form::textarea("description",@$data['description'],['class'=>"input-xxlarge",'placeholder'=>'','id'=>'mybasiceditor']); ?>

                                        <span class="help-inline" style='color:red'>* <?php if(!empty($error['description'])): ?> <?php echo e($error['description']); ?> <?php endif; ?> </span>
                                    </div>
                                
                               <div class="form-actions">
                                    <button type="submit" class="btn btn-success blue"><i class="icon-ok"></i> Lưu</button>
                                </div>
                            <?php echo Form::close(); ?>

                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>


   <?php $__env->stopSection(); ?>
<?php echo $__env->make("admin", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>