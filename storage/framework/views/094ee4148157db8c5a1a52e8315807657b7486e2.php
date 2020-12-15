<?php $__env->startSection('content'); ?>
        <div class=" justify-content-center mt-4">
            <div class="col-md-4 col-sm-12">
                <div class="box">
                    <h2><?php echo e(config('app.name')); ?></h2>
                    <form method="POST" action="<?php echo e(route('login')); ?>" aria-label="<?php echo e(__('Login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row inputBox">
                            <input id="id" type="text"   class="form-control<?php echo e($errors->has('id') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('emailx')); ?>" required autofocus>
                            <label for="id" >E-Posta Adresiniz...</label>
                            <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row inputBox">
                            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                            <label for="password" >Şifreniz...</label>
                            <?php if($errors->has('password')): ?>
                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg w-50 btn-outline-light text-secondary font-weight-bold"style="float:right">Giriş Yap
                            </button>
                            <div class="form-group row">
                                <div class="checkbox">
                                    <label class="text-white">
                                        <input class="" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Beni Hatırla')); ?>

                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <a class="btn btn-link text-white" href="<?php echo e(route('password.request')); ?>">
                                    <p>Şifremi Hatırlamıyorum?</p>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>