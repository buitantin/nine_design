;
<?php $__env->startSection("content"); ?>
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                     Quản lý Liên hệ
                     <small>Quản lý  Liên hệ</small>
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

    Hiển thị từ <?php echo $list->firstItem(); ?> đến <?php echo $list->lastItem(); ?> trong tổng cộng    <?php echo $list->total(); ?></div></div>

      <div class="span6">
        <div class="dataTables_paginate paging_bootstrap pagination">
             <?php echo $list->render(); ?>

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

                         
                      

                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                 
                                    
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list as $element): ?>
                                <tr>
                                    <td><?php echo e($element['id']); ?></td>
                                    <td><?php echo e($element['name']); ?></td>
                                    <td><?php echo e($element['email']); ?></td>
                                    <td><?php echo e($element['subject']); ?></td>
                                    <td><?php echo e($element['content']); ?></td>
                                   
                                    
                                    <td>  
                                      <a class="label label-success remove-button" href="/admin/contact/remove/<?php echo e($element['id']); ?>">Xóa</a>
                                      <br />
                                      <br />
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

    Hiển thị từ <?php echo $list->firstItem(); ?> đến <?php echo $list->lastItem(); ?> trong tổng cộng    <?php echo $list->total(); ?></div></div>

      <div class="span6">
        <div class="dataTables_paginate paging_bootstrap pagination">
             <?php echo $list->render(); ?>

          </div></div></div>

   <?php $__env->stopSection(); ?>


<?php echo $__env->make("admin", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>