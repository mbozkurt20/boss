<?php $__env->startSection("content"); ?>
    <div class="container-fluid " style="padding: 20px">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
        <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <h3 class="text-center mb-5" style="font-family: 'Harlow Solid Italic'">MainGüncelleme Ekranı</h3>
        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <form method="post" action="<?php echo e(route('mainyonetim.update', $mainyonetim1->id)); ?>" >
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="mx-2">Üst Başlık</label>
                            <select class="form-control" name="ustbaslik" >
                                <option value="<?php echo e($title->title1); ?>"><?php echo e($title->title1); ?></option>
                                <option value="<?php echo e($title->title2); ?>"><?php echo e($title->title2); ?></option>
                                <option value="<?php echo e($title->title3); ?>"><?php echo e($title->title3); ?></option>
                                <option value="<?php echo e($title->title4); ?>"><?php echo e($title->title4); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="mx-2">Main Başlığı</label>
                            <input class="w-25 form-control<?php echo e($errors->has('baslik') ? ' is-invalid' : ''); ?>" name="baslik" type="text" value="<?php echo e($mainyonetim1->baslik); ?>">
                        </div>
                        <label class="mx-2">Sayfa İçeriği</label>
                        <div class="form-group">
                            <textarea type="text" name="icerik" id="" cols="80" rows="10">
                                <?php echo e($mainyonetim1->icerik); ?>

                            </textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success mx-2" type="submit">Kaydet</button>
                            <a class="btn btn-danger" href="<?php echo e(route('mainyonetim.index')); ?>">Geri</a>
                        </div>
                    </form>
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