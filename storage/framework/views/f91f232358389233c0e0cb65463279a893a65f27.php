<?php $__env->startSection("content"); ?>
    <div class="table-responsive" style="margin-top: 3px;background-color: ghostwhite">
        <a class="container-fluid" style="color: black " href="<?php echo e(route('home')); ?>"><?php echo e(config('app.name')); ?></a>><a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>

        <div class="col-md-12">
            <div class="row justify-content-center" >
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center" style=""><?php echo e($mainyonetim1->baslik); ?></h4>
                        </div>
                        <div class="card-body">
                            <p class="text-dark mt-5 mb-5"> <?php echo $mainyonetim1->icerik; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("customJs"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("customCss"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>