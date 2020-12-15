<?php $__env->startSection("content"); ?>
    <div class="container " style="padding: 30px;margin-top: 140px">
        <h3 class="text-center" style="font-family: 'Harlow Solid Italic';color: darkslategray">Sosyal Medya Ekleme</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo Form::open(["url" => "/sosyalmedya",'files' => 'true', "method" => "post"]); ?>

                    <?php echo Form::bsText("instagram",""); ?>

                    <?php echo Form::bsText("twitter",""); ?>

                    <?php echo Form::bsText("ln",""); ?>

                    <?php echo Form::bsText("facebook",""); ?>

                    <?php echo Form::bsSubmit("Kaydet"); ?>

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