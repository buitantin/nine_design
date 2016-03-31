;
<?php $__env->startSection("content"); ?>
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                     Thay đổi mật khẩu
                     <small>Thay đổi mật khẩu</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Thay đổi mật khẩu</a><span class="divider-last">&nbsp;</span></li>
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


                                <div class="control-group <?php if(!empty($error['password'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Nhập mật khẩu mới:</label>
                                    <div class="controls">
                                        <?php echo Form::password("password",['class'=>"input-xxlarge",'placeholder'=>'Mật khẩu mới']); ?>

                                        <span class="help-inline" style='color:red'>* <?php if(!empty($error['password'])): ?> <?php echo e($error['password']); ?> <?php endif; ?> </span>
                                    </div>
                                </div>
                                  <div class="control-group <?php if(!empty($error['reset'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Nhập lại lần nữa :</label>
                                    <div class="controls">
                                        <?php echo Form::password("reset",['class'=>"input-xxlarge",'placeholder'=>'Nhập lại lần nữa ']); ?>

                                        <span class="help-inline" style='color:red'>* <?php if(!empty($error['reset'])): ?> <?php echo e($error['reset']); ?> <?php endif; ?> </span>
                                    </div>
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