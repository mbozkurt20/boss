<?php $__env->startSection("content"); ?>
    <div class="container " style="padding: 30px;margin-top: 2px">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
        <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <h3 class="text-center mb-5" style="font-family: 'Harlow Solid Italic'">Hakkımzıda Yazısı Güncelleme</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo Form::model($hakkimizda, ['route' => ['hakkimizda.update', $hakkimizda->id], "method" =>  "put","files" => true]); ?>

                    <?php echo Form::bsTextArea("hakkimizda",""); ?>

                    <?php echo Form::bsSubmit("Güncelle"); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("css"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>