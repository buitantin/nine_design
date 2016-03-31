<?php $__env->startSection("content"); ?>

   
 
		<div class="row">
			
			<div class=" col-md-12 my_box_content col-md-12 col-sm-12 col-xs-12">
				<ul class="breadcrumb">
					    <li><a href="/">Trang chủ</a></li>
					    <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
					    <li class="active"><?php echo e($detail['name']); ?></li>
					</ul>
			<div class="content_boxstore">
					<div class='row-fluid'>
							<div class='col-md-7 col-sm-12 main-blog-content'>
								<p>
									<small><?php echo e(App\Library\Data::getWeek($detail->updated_at)); ?>  |  <?php echo e($detail->updated_at); ?></small>
								</p>
								<h1 class="title-blog"><?php echo e($detail->name); ?></h1>
								<h3 class="description-blog"><?php echo $detail->description; ?></h3>

								<div  class="content-blog">
								<img src="<?php echo e(BLOG_URL.'big/blog_'.$detail->id.'.jpg'); ?>" alt="<?php echo e($detail->name); ?>" title="<?php echo e($detail->name); ?>" />
										<?php echo $detail->content; ?>

								</div>
							</div>
							<div class='col-md-5 col-sm-12'>
								<ul class="list-inline">

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
						</div>
					</div>
				
						

					
		</div>
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("home", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>