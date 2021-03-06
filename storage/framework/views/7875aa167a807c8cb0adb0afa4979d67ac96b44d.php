<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::open(["url" => "/admin-products",'files' => 'true', "method" => "post"]); ?>

                <?php echo Form::bsText("image","Image"),' <a class="btn btn-info btn-sm mb-4" href="https://www.base64-image.de/">Upload</a>'; ?>

                <?php echo Form::bsSelect("category_id","Kategori",null,$categoriess,"Lütfen Bir Kategori Seçiniz"); ?>

                <?php echo Form::bsText("product_name","Product Name"); ?>

                <?php echo Form::bsText("color","Color"); ?>

                <?php echo Form::bsText("coil_length",""); ?>

                <?php echo Form::bsText("total_length",""); ?>

                <?php echo Form::bsText("unit_price",""); ?>

                <?php echo Form::bsText("product_price",""); ?>

                <?php echo Form::bsText("unitWeight",""); ?>

                <?php echo Form::bsText("totalWeight",""); ?>

                <?php echo Form::bsText("copperWeight",""); ?>

                <?php echo Form::bsText("miktar","Quantity"); ?>

                <?php echo Form::bsTextArea("product_detail","",null,["class" => "summernote"]); ?>


                <?php echo Form::bsSubmit("Kaydet"); ?>

                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.summernote').summernote({
            tabsize: 2,
            height: 100
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>