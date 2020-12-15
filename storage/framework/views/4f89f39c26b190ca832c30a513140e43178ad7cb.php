<?php $__env->startSection("content"); ?>
    <div class="container " style="padding: 30px;margin-top: 170px">
        <h3 class="text-center" style="font-family: 'Harlow Solid Italic'">Sosyal Medya Bilgisi Güncelleme Ekranı</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo Form::model($sosyalMedya, ['route' => ['sosyalmedya.update', $sosyalMedya->id], "method" =>  "put","files" => true]); ?>

                    <?php echo Form::bsText("instagram",""); ?>

                    <?php echo Form::bsText("twitter",""); ?>

                    <?php echo Form::bsText("ln",""); ?>

                    <?php echo Form::bsText("facebook",""); ?>

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

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>