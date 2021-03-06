;
<?php $__env->startSection("content"); ?>
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                   Sản phẩm
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#"><?php echo e($data['name']); ?></a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>
  <?php echo Form::open(array('class'=>'form-horizontal',"method"=>"post","enctype"=>"multipart/form-data","files"=>true)); ?> 

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
                           
                          
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <div class="control-group <?php if(!empty($error['name'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Tên</label>
                                    <div class="controls">
                                        <?php echo Form::text("name",@$data['name'],['class'=>"input-xxlarge",'placeholder'=>'Tên']); ?>

                                        <span class="help-inline" style='color:red'>* <?php if(!empty($error['name'])): ?> <?php echo e($error['name']); ?> <?php endif; ?> </span>
                                    </div>
                                </div>

                                 <div class="control-group ">
                                      <label class="control-label">Hiện thị</label>
                                  <div class="controls">
                                     <label class="radio">
                                       <?php echo Form::radio("status",'0',($data['status']=='0') ? true : false ); ?>

                                      Có
                                     </label>
                                     <label class="radio">
                                       <?php echo Form::radio("status",'1',($data['status']=='1') ? true : false ); ?>

                                      Không
                                     </label>  

                                  
                                  
                                     
                                  </div>
                               </div>






                                <div class="control-group <?php if(!empty($error['images'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Hình ảnh</label>
                                    <div class="controls">
                                      <div class=''>
                                        <?php echo Form::file("images",null); ?>

                                      </div>
                                         <span class="help-inline" style='color:red'>* <?php if(!empty($error['images'])): ?> <?php echo e($error['images']); ?> <?php endif; ?> </span>



                                         <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="<?php echo e(PRODUCT_SMALL_URL); ?>product_<?php echo e($data['id']); ?>.jpg" alt="">
                                            </div>
                                            <div>
                                  
                                            </div>
                                        </div>





                                    </div>
                                </div>

                                 <div class="control-group <?php if(!empty($error['images'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Hình ảnh khác</label>
                                    <div class="controls">
                                      <div class=''>
                                        <?php echo Form::file("otherimg[]",array("multiple"=>true)); ?>

                                      </div>
                                         <span class="help-inline" >Chọn nhiều sản phẩm</span>


                                         <?php for($i=0;$i<6;$i++): ?>
                                          <?php if(is_file(PRODUCTS_PATH."small/product_".$data['id']."_$i.jpg")): ?>
                                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="<?php echo e(PRODUCT_SMALL_URL); ?>product_<?php echo e($data['id']); ?>_<?php echo e($i); ?>.jpg" alt="">
                                                </div>
                                                <div>
                                      
                                                    <a href="/admin/product/removeimage?name=product_<?php echo e($data['id']); ?>_<?php echo e($i); ?>.jpg" class="btn delete_image">Xóa</a>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        <?php endfor; ?>


         



                                    </div>
                                </div>

                              
                           <div class="control-group <?php if(!empty($error['code'])): ?> error <?php endif; ?>">
                                    <label class="control-label">Danh mục</label>
                                    <div class="controls">
                                        <?php echo Form::select("cid_catechild",$listcate,@$data['cid_catechild']); ?>

                                        <span class="help-inline" style='color:red'>* <?php if(!empty($error['cid_catechild'])): ?> <?php echo e($error['cid_catechild']); ?> <?php endif; ?> </span>
                                    </div>
                                </div>
                                
                               


                             <div class="control-group">
                                    <label class="control-label">Mô tả</label>
                                    <div class="controls">
                                        <?php echo Form::textarea("description",@$data['description'],['class'=>"span9 " ,'placeholder'=>'description']); ?>

                                        <span class="help-inline" style='color:red'>* <?php if(!empty($error['description'])): ?> <?php echo e($error['description']); ?> <?php endif; ?> </span>
                                    </div>
                                </div>

                                          <div class="control-group">
                                    <label class="control-label">Nội dung</label>
                                   
                                </div>

                                 <div class="">
                                        <?php echo Form::textarea("content",@$data['content'],['class'=>"span9 " ,'placeholder'=>'','id'=>"myeditor"]); ?>

                                        <span class="help-inline" style='color:red'><?php if(!empty($error['content'])): ?> <?php echo e($error['content']); ?> <?php endif; ?> </span>
                                    </div>
                              
                          
                             
                          
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
</div>


             <div class="row-fluid">
                  <div class="span12 sortable">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget">
                        
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                               <div class="form-actions">
                                    <button type="submit" class="btn btn-success blue"><i class="icon-ok"></i> Lưu</button>
                                </div>
                       </div>
               </div>
              </div>

            </div>
  <?php echo Form::close(); ?>


   <?php $__env->stopSection(); ?>
<?php echo $__env->make("admin", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>