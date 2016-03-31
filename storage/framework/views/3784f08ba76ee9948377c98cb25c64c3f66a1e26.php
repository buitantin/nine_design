;
<?php $__env->startSection("content"); ?>
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                    Banner
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Banner</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>



<div class="row-fluid"><div class=""><div class="dataTables_info" id="sample_1_info">




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

                        



                      

                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>
                                    <i class="icon-signin"></i>
                                    ID</th>
                                    <th>
                                      <i class="icon-film"></i>
                                      Link</th>
                                        <th>
                                      <i class="icon-bell"></i>
                                      Hình ảnh</th>
                                    <th>
                                    <i class="icon-bell"></i>
                                       Danh mục
                                    </th>

                                     <th>
                                    <i class="icon-hdd"></i>
                                    Trạng thái
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list as $element): ?>
                                <tr>
                                    <td><?php echo e($element['id']); ?></td>
                                    <td><?php echo e($element['link']); ?></td>


                                     <td>


                                         <div class="thumbnail">
                                            <div class="item">
                                              <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="<?php echo e(BANNER_URL.'/banner_'.$element['id'].'.png'); ?>?version=111">
                                                <div class="zoom">
                                                  <img  style="max-width:200px" src="<?php echo e(BANNER_URL.'/banner_'.$element['id'].'.png'); ?>?version=111"  alt="Photo">
                                                  <div class="zoom-icon"></div>
                                                </div>
                                              </a>
                                            </div>


                                     </td>
                                    
                                      <td>
                                          <?php echo e($listcate[$element['cid_cate']]); ?>

                                      </td>
                                    
                                  <td>
                                     <a class="label label-success " href="/admin/banner/edit/<?php echo e($element['id']); ?>">Chỉnh sửa</a>

                                     <br />
                                     <br />
                                       <a class="label  remove-button" href="/admin/banner/remove/<?php echo e($element['id']); ?>">Xóa</a>
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


   <?php $__env->stopSection(); ?>


<?php echo $__env->make("admin", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>