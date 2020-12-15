<?php $__env->startSection('content'); ?>
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12 mb-2 mt-3 ">
                <?php echo Form::open(["url" => "/admin-category", "method" => "post"]); ?>

                <?php echo Form::bsText("category_name","Kategori İsmi"); ?>

                <?php echo Form::bsSubmit("Kategoriyi Oluştur"); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>