;
<?php $__env->startSection("content"); ?>
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                     Website
                     <small></small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Thông tin</a><span class="divider-last">&nbsp;</span></li>
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
                                <div class="control-group">
                                    <label class="control-label">Tên Site</label>
                                    <div class="controls">
                                        <?php echo Form::text("name",@$data['name'],['class'=>"input-xxlarge",'placeholder'=>'Tên']); ?>

                                        <span class="help-inline" style='color:red'>*</span>

                                        <?php if(!empty($error['name'])): ?>
                                            <p class="help-inline" style='color:red'><?php echo e($error['name']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <?php echo Form::text("email",@$data['email'],['class'=>"input-xxlarge",'placeholder'=>'Email']); ?>

                                        <span class="help-inline" style='color:red'>*</span>
                                           <?php if(!empty($error['email'])): ?>
                                            <p class="help-inline" style='color:red'><?php echo e($error['email']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Số điện thoại</label>
                                    <div class="controls">
                                        <?php echo Form::text("phone",@$data['phone'],['class'=>"input-xxlarge",'placeholder'=>'Số điện thoại']); ?>

                                        <span class="help-inline" style='color:red'>*</span>
                                           <?php if(!empty($error['phone'])): ?>
                                            <p class="help-inline" style='color:red'><?php echo e($error['phone']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                    <div class="control-group">
                                    <label class="control-label">Địa chỉ</label>
                                    <div class="controls">
                                        <?php echo Form::text("address",@$data['address'],['class'=>"input-xxlarge",'placeholder'=>'Địa chỉ']); ?>

                                        <span class="help-inline" style='color:red'>*</span>


                                           <?php if(!empty($error['address'])): ?>
                                            <p class="help-inline" style='color:red'><?php echo e($error['address']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">HOTLINE</label>
                                    <div class="controls">
                                        <?php echo Form::text("hotline",@$data['hotline'],['class'=>"input-xxlarge",'placeholder'=>'']); ?>

                                        <span class="help-inline" style='color:red'>*</span>
                                           <?php if(!empty($error['hotline'])): ?>
                                            <p class="help-inline" style='color:red'><?php echo e($error['hotline']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">Hình ảnh</label>
                                    <div class="controls">
                                        <?php echo Form::text("picture",@$data['picture'],['class'=>"input-xxlarge",'placeholder'=>'']); ?>

                                        <span class="help-inline" style='color:red'>*</span>
                                           <?php if(!empty($error['picture'])): ?>
                                            <p class="help-inline" style='color:red'><?php echo e($error['picture']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">Facebook</label>
                                    <div class="controls">
                                        <?php echo Form::text("facebook",@$data['facebook'],['class'=>"input-xxlarge",'placeholder'=>'']); ?>

                                        <span class="help-inline" style='color:red'>*</span>
                                           <?php if(!empty($error['facebook'])): ?>
                                            <p class="help-inline" style='color:red'><?php echo e($error['facebook']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">Skype</label>
                                    <div class="controls">
                                        <?php echo Form::text("skype",@$data['skype'],['class'=>"input-xxlarge",'placeholder'=>'']); ?>

                                        <span class="help-inline" style='color:red'>*</span>
                                           <?php if(!empty($error['skype'])): ?>
                                            <p class="help-inline" style='color:red'><?php echo e($error['skype']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">Twitter</label>
                                    <div class="controls">
                                        <?php echo Form::text("twitter",@$data['twitter'],['class'=>"input-xxlarge",'placeholder'=>'']); ?>

                                        <span class="help-inline" style='color:red'>*</span>
                                           <?php if(!empty($error['twitter'])): ?>
                                            <p class="help-inline" style='color:red'><?php echo e($error['twitter']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                 <div class="control-group">
                                    <label class="control-label">google</label>
                                    <div class="controls">
                                        <?php echo Form::text("google",@$data['google'],['class'=>"input-xxlarge",'placeholder'=>'']); ?>

                                        <span class="help-inline" style='color:red'>*</span>
                                           <?php if(!empty($error['google'])): ?>
                                            <p class="help-inline" style='color:red'><?php echo e($error['google']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>







                                   <div class="control-group">
                                    <label class="control-label">Mô tả seo</label>
                                    <div class="controls">
                                        <?php echo Form::textarea("seo_des",@$data['seo_des'],['class'=>"input-xxlarge",'placeholder'=>'']); ?>

                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Từ khóa seo</label>
                                    <div class="controls">
                                        <?php echo Form::textarea("seo_key",@$data['seo_key'],['class'=>"input-xxlarge",'placeholder'=>'']); ?>

                                    </div>
                                </div>

                                

                                 <div class="control-group">
                                    <label class="control-label">Logo</label>
                                    <div class="controls">
                                        <?php echo Form::file("logo"); ?>


                                        <img src='/public/default/img/logo.png?version=1.1.1' />
                                       
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn blue"><i class="icon-ok"></i> Lưu</button>
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