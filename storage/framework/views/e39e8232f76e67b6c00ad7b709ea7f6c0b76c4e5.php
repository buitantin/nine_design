<?php $__env->startSection("content"); ?>

   
 
		<div class="row">
			
			<div class=" col-md-12 my_box_content col-md-12 col-sm-12 col-xs-12">
				<ul class="breadcrumb">
					    <li><a href="/">Trang chủ</a></li>
					    <li class="active">Blog</li>
					</ul>
			<div class="content_boxstore">
						
						<ul>

							<?php foreach($list as $blog): ?>
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
					<div class='text-center'>
						<?php echo $list->links();; ?>

					</div>
						

					
		</div>
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("home", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>