<?php $__env->startSection("content"); ?>
    <div class="container-fluid"style="margin-top: 3px">
        <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <div class="row justify-content-center">
            <div class="col-md-8 mb-5 mt-5 ">
                <div class="card">
                    <div class="card-header " style="background-color: lightgreen"><h5 class="text-white"><?php echo e(config('app.name')); ?> Şifrenizi Yenileyin</h5></div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('change.password')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="text-danger"><?php echo e($error); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Mevcut Şifreniz</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Yeni Şifre</label>

                                <div class="col-md-6">
                                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Şifreynizi Tekrar Giriniz</label>

                                <div class="col-md-6">
                                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="mx-5 w-50 btn btn-outline-success">
                                        Güncelle
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("customJs"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("customCss"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>