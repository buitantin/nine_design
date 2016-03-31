<?php $__env->startSection('content'); ?>
		<div class="row">
			
			<div class=" col-md-12 my_box_content col-md-12 col-sm-12 col-xs-12">
				<ul class="breadcrumb">
					    <li><a href="/">Trang chủ</a></li>
					     <li><a href="<?php echo e(route('cate',['alias'=>$cate->alias])); ?>"><?php echo e($cate->name); ?></a></li>
					    <li class="active"><?php echo e($child->name); ?></li>
					</ul>
			<div class="content_boxstore">
									<ul>
											<?php foreach($product as $p): ?>
											<li>
												<figure>
													<p>
														<a href="<?php echo e(route('detail',['id'=>$p->name,'alias'=>App\Library\Data::toAlias2($p->name)] )); ?>" title="<?php echo e($p->name); ?>">
													<img src="<?php echo e(PRODUCT_BIG_URL.'product_'.$p->id.'.jpg'); ?>" alt="<?php echo e($p->name); ?>" title="<?php echo e($p->name); ?>" />
														</a>
													</p>


													<a href="<?php echo e(route('detail',['id'=>$p->name,'alias'=>App\Library\Data::toAlias2($p->name)] )); ?>" title="<?php echo e($p->name); ?>">
														<figcaption> <?php echo e($p->name); ?> </figcaption>
													</a>
												</figure>
											</li>
											<?php endforeach; ?>
										</ul>

				<div class="text-center	">										
					<?php echo $product->links(); ?>					
				</div>
		</div>

		</div>
		</div>


	
    <!--  end js click tab -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>