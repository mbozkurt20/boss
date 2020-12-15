<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::open(["url" => "/admin-products",'files' => 'true', "method" => "post"]); ?>

                <?php echo Form::bsFile("img[]","Ürün Görüntüsü"); ?>

                <?php echo Form::bsSelect("category_id","Kategori",null,$categoriess,"Lütfen Bir Kategori Seçiniz"); ?>

                <?php echo Form::bsText("product_name","Ürün İsmi"); ?>

                <?php echo Form::bsText("miktar","Ürün Miktarı"); ?>

                <?php echo Form::bsText("original_price","Eski Fiyat"); ?>

                <?php echo Form::bsText("product_price","Yeni Fiyat"); ?>

                <?php echo Form::bsTextArea("product_detail","Ürün Detayı",null,["class" => "summernote"]); ?>

                <?php echo Form::label('', 'Vitrinde görünmesini ister misiniz?'); ?>

                <?php echo Form::select('vitrin', ['1' => 'Evet', '0' => 'Hayır'], null, ["class" => "form-control",'rows'=>'5','cols'=>'20']); ?>

                <br>
                <?php echo Form::label('', 'Fırsat Ürünlerde Görünmesini İster Misiniz?'); ?>

                <?php echo Form::select('firsat', ['1' => 'Evet', '0' => 'Hayır'], null, ["class" => "form-control",'rows'=>'5','cols'=>'20']); ?>

                <br>
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