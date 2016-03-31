;
<?php $__env->startSection("content"); ?>
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                     Quản lý Danh mục
                     <small>Quản lý Danh mục</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Danh mục</a><span class="divider-last">&nbsp;</span></li>
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

                          <div class="control-group ">
                             <label class="control-label">Nội bật:</label>  
                               <div class="controls">
                               
                                 <label class="radio">
                                 <div class="radio" id="uniform-undefined"><span class="">

                                  <input type="radio" name="is_hot" value="0" style="opacity: 0;"  <?php if($data['is_hot']=='0'): ?> checked="" <?php endif; ?> >

                                  </span></div>
                                 Không
                                 </label>
                                 <label class="radio">
                                 <div class="radio" id="uniform-undefined"><span class="checked">

                                    <input type="radio" name="is_hot" value="1" <?php if($data['is_hot']=='1'): ?> checked="" <?php endif; ?>  style="opacity: 0;">


                                  </span></div>
                                  Có
                                 </label>  
                              
                              </div>
                          </div>

                            <div class="control-group">
                                    <label class="control-label">Danh mục</label>
                                    <div class="controls">
                                       

                                        <?php echo Form::select('cid_cate',$listcate,@$data['cid_cate'],['class'=>'input-large m-wrap']); ?>

                                    </div>
                                </div>

                                  <div class="control-group">
                                    <label class="control-label">Icon</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                              
                                                   <img src="<?php echo e(CATECHILD_URL.'icon/icon_'.$data['id'].'.png'); ?>?version=1" alt="">
                                               
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Chọn ảnh</span>
                                       <input type="file" name="icon" class="default"></span>
                                             
                                            </div>
                                        </div>
                                        <span class="label label-important"></span>
                                 <span>
                                  
                                 </span>
                                    </div>

                                     <span class="help-inline" style='color:red'>* <?php if(!empty($error['icon'])): ?> <?php echo e($error['icon']); ?> <?php endif; ?> </span>
                                </div> 
                              

                              


                              <div class="control-group">
                                    <label class="control-label">Hình ảnh</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                              
                                                 <img src="<?php echo e(CATECHILD_URL.'cate_'.$data['id'].'.png'); ?>?version=1" alt="">
                                               
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Chọn ảnh</span>
                                       <input type="file" name="images" class="default"></span>
                                             
                                            </div>
                                        </div>
                                        <span class="label label-important"></span>
                                 <span>
                                  
                                 </span>
                                    </div>

                                     <span class="help-inline" style='color:red'>* <?php if(!empty($error['images'])): ?> <?php echo e($error['images']); ?> <?php endif; ?> </span>
                                </div>




                               <div class="control-group <?php if(!empty($error['name'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Mẫu:</label>
                                    
                                </div>


                                <div>
                                  <div class="">
                                        <?php echo Form::textarea("description",@$data['description'],['class'=>"input-xxlarge",'placeholder'=>'','id'=>'mybasiceditor']); ?>

                                        <span class="help-inline" style='color:red'>* <?php if(!empty($error['description'])): ?> <?php echo e($error['description']); ?> <?php endif; ?> </span>
                                    </div>
                                </div>

                                <div class="control-group <?php if(!empty($error['code'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Báo giá</label>
                                  
                                </div>
                                 <div class="">
                                        <?php echo Form::textarea("quote",@$data['quote'],['class'=>"input-xxlarge",'placeholder'=>'','id'=>'myeditor']); ?>

                                        <span class="help-inline" style='color:red'>* <?php if(!empty($error['quote'])): ?> <?php echo e($error['quote']); ?> <?php endif; ?> </span>
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