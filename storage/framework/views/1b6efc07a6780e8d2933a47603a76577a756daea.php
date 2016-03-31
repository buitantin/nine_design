<?php $__env->startSection("content"); ?>

   
 
		<div class="row">
			<div class="col-md-12 tabs_header col-sm-12 col-xs-12"><!-- tab -->
				<ul class="list-inline">
					<?php foreach($categories as $cate): ?>
					<li class="tab_li_1  col-md-3 col-sm-3 col-xs-3" idx="<?php echo e($cate['id']); ?>">
						<a class="">

							<img alt="#" title="#" src="<?php echo e(CATE_URL.'cate_'.$cate['id'].'.png'); ?>" class="" /><p><?php echo e($cate['description']); ?></p>
						</a>
						<div class="box_line"></div>
					</li>
					<?php endforeach; ?>
				</ul>
		    </div><!-- end menu tab -->
			<div class=" col-md-12 my_box_content col-md-12 col-sm-12 col-xs-12">
				
				<?php foreach($categories as $cate): ?>
				<div class="my_box_content<?php echo e($cate['id']); ?> box_cotent" style="display: none;">
					<div class="content_boxstore">
							<?php echo $cate['content']; ?>

					</div>
				</div>
				<?php endforeach; ?>
				


				


			</div><!--end noi dung tab-->
			<div class=" col-md-12 my_box_content col-md-12 col-sm-12 col-xs-12">
			<div class="content_boxstore">
						
						<ul>

							<?php foreach($listblog as $blog): ?>
							<li>
								<figure>
									<p>
									  <a href="<?php echo e(route('detailblog',['id'=>$blog->id,'alias'=>App\Library\Data::toAlias2($blog->name)])); ?>" title="<?php echo e($blog->name); ?>">
										<img src="<?php echo e(BLOG_URL.'big/blog_'.$blog->id.'.jpg'); ?>" alt="<?php echo e($blog->name); ?>" title="<?php echo e($blog->name); ?>" />
									  </a>

									</p>
									  <a href="<?php echo e(route('detailblog',['id'=>$blog->id,'alias'=>App\Library\Data::toAlias2($blog->name)])); ?>" title="<?php echo e($blog->name); ?>">
										<figcaption> <?php echo e($blog->name); ?> </figcaption>
										</a>
								</figure>
							</li>
							<?php endforeach; ?>
						</ul>
						
					</div>
					<div class="bot_read">
						<a href="<?php echo e(route('blog')); ?>" class="btn_readmore" >XEM TIẾP</a>
					</div>

					
		</div>
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("home", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>