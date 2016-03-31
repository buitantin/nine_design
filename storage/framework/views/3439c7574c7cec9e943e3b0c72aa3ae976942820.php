<?php $__env->startSection('ajax'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ajax', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>