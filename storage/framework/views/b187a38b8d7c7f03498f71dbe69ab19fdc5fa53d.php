
   <div class="footer"><!-- footer -->
		<div class="container-fluid">
			<div class="row footer_main">
				<div class="col-md-4 menulink_footer col-sm-4 col-xs-6">
					<h6>Các dịch vụ nổi bật</h6>
					<ul class="list-unstyled">

					<?php foreach($catechild as $child): ?>
						<li class="">

							<a href="<?php echo e(route('catechild',['id'=>$child->id,'alias'=>App\Library\Data::toAlias2($child->name)])); ?>" target="_blank" title="<?php echo e($child->name); ?>">
									<img src="<?php echo e(CATECHILD_URL.'icon/icon_'.$child->id.'.png'); ?>" alt='<?php echo e($child->name); ?>' title="<?php echo e($child->name); ?>"/>

									<?php echo e($child->name); ?>

							</a>

						</li>
					<?php endforeach; ?>
						
					</ul>
				</div>
				<div class="col-md-3 contact_footer col-sm-3 col-xs-2">
					<h6>Liên hệ</h6>
					<ul class="list-unstyled contact_address">
						<li class=""><p>Điện thoại:</p><p><?php echo e($general['phone']); ?></p></li>
						
						<li class=""><p>Email:</p><p>ninedesign@gmail.com</p></li>
						<li class=""><p>Địa chỉ:</p><p><?php echo e($general['address']); ?></p></li>
					</ul>
					<ul class="list-unstyled connect_social">
						<li> 
							<span>Hình ảnh</span>
							 <a class="btn btn-social-icon" href="<?php echo e($general['pirture']); ?>" target="_blank">
								<i class="connect_img"></i>
							 </a>
						</li>
						<li>
							<span>Facebook</span>
							 <a class="btn btn-social-icon" href="<?php echo e($general['facebook']); ?>" target="_blank">
								<i class="connect_face"></i>
							 </a>
						</li>
						<li>
							<span>Skype</span>
							<a class="btn btn-social-icon" href="<?php echo e($general['skype']); ?>" target="_blank">
								<i class="connect_skype"></i>
							 </a>
						</li>
						<li>
							<span>Twister</span>
							<a class="btn btn-social-icon" href="<?php echo e($general['twitter']); ?>" target="_blank">
								<i class="connect_tw"></i>
							</a>
						</li>
						<li>
							<span>Google+</span>
							<a class="btn btn-social-icon" href="<?php echo e($general['google']); ?>" target="_blank">
								<i class="connect_google"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-4">
					<form  id="contactform">
						<div class="form_footer">
							
							<?php if(!empty($data['contactsuccess'])): ?>
									<h4 class='error-contact'><?php echo e($data['contactsuccess']); ?></h4>
								<?php endif; ?>
							<div class="format_tag">
								<p>Họ và tên:</p>
								<?php echo Form::text("contactname",@$data['contactname']); ?>

								<?php if(!empty($error['contactname'])): ?>
									<p class='error-contact'><?php echo e($error['contactname']); ?></p>
								<?php endif; ?>
							</div>
							<div class="format_tag">
								<p>Email của bạn:</p>
								<?php echo Form::text("contactemail",@$data['contactemail']); ?>

								<?php if(!empty($error['contactemail'])): ?>
									<p class='error-contact'><?php echo e($error['contactemail']); ?></p>
								<?php endif; ?>
							</div>
							<div class="format_tag">
								<p>Chủ đề:</p>
								<?php echo Form::text("contactsubject",@$data['contactsubject']); ?>

								<?php if(!empty($error['contactsubject'])): ?>
									<p class='error-contact'><?php echo e($error['contactsubject']); ?></p>
								<?php endif; ?>
							</div>
							<div class="format_tag">
								<p>Nội dung:</p>
								<?php echo Form::textarea("contactcontent",@$data['contactcontent']); ?>

								<?php if(!empty($error['contactcontent'])): ?>
									<p class='error-contact'><?php echo e($error['contactcontent']); ?></p>
								<?php endif; ?>
							</div>
							<div class="format_tag">
								

								 <?php echo csrf_field(); ?>

						<div  class='captcha_style'>		 
  						 <?php echo captcha_image_html('ExampleCaptcha'); ?>

  						</div>


								<input type="text" class="" placeholder="" name="contactCaptchaCode" id="CaptchaCode" />
								<?php if(!empty($error['contactCaptchaCode'])): ?>
									<p class='error-contact'><?php echo e($error['contactCaptchaCode']); ?></p>
								<?php endif; ?>
							</div>
							<div class="box_sent">
								<input type="submit" class="btn_sendinfo" value="GỬI" />
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row menu_bottom">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<ul class="list-inline">
						<li> <a href="/" target="_blank">Trang chủ</a> </li> /
						<li> <a href="<?php echo e(route('info')); ?>" target="_blank">Giới thiệu</a> </li> /
						<li> <a href="<?php echo e(route('blog')); ?>" target="_blank">Blog</a> </li> /
						<li> <a href="<?php echo e(route('lear')); ?>" target="_blank">Dạy và học</a> </li> /
						<li> <a href="" class="click_contact">Liên hệ</a> </li>																				
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span class="copyright"> Copyrighted of Nine Design</span>
				</div>
			</div>
		</div>
	</div><!-- end footer -->
