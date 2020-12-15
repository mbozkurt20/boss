<?php $__env->startSection("content"); ?>
<div class="container" style="margin-top: 170px">
    <object data="<?php echo e(asset("uploads/newbayi.pdf")); ?>" type="application/pdf" width="100%" height="600px">
        <p>Alternative text - include a link <a href="<?php echo e(asset("uploads/newbayi.rtf")); ?>">to the PDF!</a></p>
    </object>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("customJs"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("customCss"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>