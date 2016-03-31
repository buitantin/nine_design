;
<?php $__env->startSection("content"); ?>
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                    Quản lý Blog
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Danh sách</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>



<div class="row-fluid"><div class="span6"><div class="dataTables_info" id="sample_1_info">

    Hiển thị từ <?php echo $listproduct->firstItem(); ?> đến <?php echo $listproduct->lastItem(); ?> trong tổng cộng    <?php echo $listproduct->total(); ?></div></div>

      <div class="span6">
        <div class="dataTables_paginate paging_bootstrap pagination">
             <?php echo $listproduct->render(); ?>

          </div></div></div>


  <div class="row-fluid">
               <div class="span12">
                    <!-- BEGIN BORDERED TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i></h4>
                        <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                        </span>
                        </div>
                        <div class="widget-body">

                          <div class="row-fluid">
                              <?php echo Form::open(array('class'=>'form-horizontal',"method"=>"get","enctype"=>"multipart/form-data")); ?> 
                                                
                                               

                                                <div class="dataTables_filter" id="sample_1_filter"><label>
                                                  Tìm kiếm:
                                                     <?php echo Form::text("name",@$name,array('class'=>"input-medium ",'placeholder'=>'Tìm kiếm','aria-controls'=>'sample_1')); ?>

                                                  </label></div>
                                <?php echo Form::close(); ?>

                           </div>
                      

                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hình ảnh</th>
                                    <th>Tiêu đề</th>
                                    <th>Ngày tạo</th>
                                    <th>Hiển thị trang chủ</th>
                                    
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($listproduct as $product): ?>
                                <tr>
                                    <td><?php echo e($product['id']); ?></td>
                                    <td>
                                      <div>
                                          <div class="thumbnail">
                                            <div class="item">
                                              <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="<?php echo e(PRODUCT_BIG_URL.'product_'.$product['id'].'.jpg'); ?>">
                                                <div class="zoom">
                                                  <img src="<?php echo e(BLOG_URL.'/small/blog_'.$product['id'].'.jpg'); ?>" alt="Photo">
                                                  <div class="zoom-icon"></div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                    </div>

                                 </td>
                                    <td><?php echo e($product['name']); ?></td>
                                    <td><?php echo e($product['created_at']); ?></td>
                                    <td><?php echo e(($product['is_home']=='0') ? 'Có' : 'Không'); ?></td>
                                    <td>  
                                      <a class="label label-success remove-button" href="/admin/blog/remove/<?php echo e($product['id']); ?>">Xóa</a>
                                      <br />
                                      <br />
                                      <br />
                                      <a class="label label-info" href="/admin/blog/edit/<?php echo e($product['id']); ?>">Sửa</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE widget-->
                </div>
            </div>
<div class="row-fluid"><div class="span6"><div class="dataTables_info" id="sample_1_info">

    Hiển thị từ <?php echo $listproduct->firstItem(); ?> đến <?php echo $listproduct->lastItem(); ?> trong tổng cộng    <?php echo $listproduct->total(); ?></div></div>

      <div class="span6">
        <div class="dataTables_paginate paging_bootstrap pagination">
             <?php echo $listproduct->render(); ?>

          </div></div></div>

   <?php $__env->stopSection(); ?>


<?php echo $__env->make("admin", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>