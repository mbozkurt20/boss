<?php $__env->startSection("content"); ?>
    <div class="container-fluid"style="margin-top: 4px">
        <a class="mx-3 mt-2" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            <?php $__empty_1 = true; $__currentLoopData = $hakkimizda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="card mb-5 mt-4">
                <div class="card-header" style="background-color: ghostwhite">
                    <h4 style="font-family: 'Harlow Solid Italic';margin-top: 15px   " class="text-center"> HAKKIMIZDA </h4>
                </div>
                <div class="card-body">
                    <p class="card-text"> <?php echo $h->hakkimizda; ?></p>
                </div>
            </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <marquee behavior="" direction=""><p>Boş Görünüyor ...</p></marquee>
                <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("customJs"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("customCss"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>