<?php $__env->startSection("content"); ?>
<?php echo $data['content']; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("home", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>