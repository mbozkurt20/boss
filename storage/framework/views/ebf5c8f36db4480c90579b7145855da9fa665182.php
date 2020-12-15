    
<?php $__env->startSection('content'); ?>
   <div class="row justify-content-center" style="margin-top: -35px">
       <div class="col-md-9 col-sm-12">
           <div class="box">
               <div class="card-header text-white text-center mb-1"><?php echo e(config('app.name')); ?> ÜYELİK BİLGİLERİ</div>
               <div class="card-body">
                   <form method="POST" action="<?php echo e(route('register')); ?>" aria-label="<?php echo e(__('Register')); ?>">
                       <?php echo csrf_field(); ?>
                       <div class="col-md-12">
                           <div class="row">
                               <div class="col-md-6 form-group">
                                   <div class="form-group inputBox row">
                                       <input id="name" type="text"
                                              class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                              name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                       <?php if($errors->has('name')): ?>
                                           <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                       <?php endif; ?>
                                       <label for="surname" class="col-form-label text-md-right">İsim</label>
                                   </div>
                                   <div class="form-group inputBox row">
                                       <input id="surname" type="text"
                                              class="form-control<?php echo e($errors->has('surname') ? ' is-invalid' : ''); ?>"
                                              name="surname" value="<?php echo e(old('surname')); ?>" required autofocus>

                                       <?php if($errors->has('surname')): ?>
                                           <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('surname')); ?></strong>
                                    </span>
                                       <?php endif; ?>
                                       <label for="surname" class="col-form-label text-md-right">Soyisim</label>
                                   </div>
                                   <div class="form-group inputBox row">
                                       <input id="kimlik" type="text" onkeypress='return event.keyCode >= 48 && event.keyCode <= 57' maxlength="11"
                                              class="form-control<?php echo e($errors->has('kimlik') ? ' is-invalid' : ''); ?>"
                                              name="kimlik" value="<?php echo e(old('kimlik')); ?>" required autofocus>

                                       <?php if($errors->has('kimlik')): ?>
                                           <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('kimlik')); ?></strong>
                                    </span>
                                       <?php endif; ?>
                                       <label for="surname" class="col-form-label text-md-right">Kimlik Numaranız</label>
                                   </div>
                                   <div class="form-group inputBox row">
                                       <input id="telefon" type="text" onkeypress='return event.keyCode >= 48 && event.keyCode <= 57' maxlength="11"
                                              class="form-control<?php echo e($errors->has('telefon') ? ' is-invalid' : ''); ?>"
                                              name="telefon" value="<?php echo e(old('telefon')); ?>" required autofocus>
                                       <?php if($errors->has('telefon')): ?>
                                           <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('telefon')); ?></strong>
                                    </span>
                                       <?php endif; ?>
                                       <label for="surname" class="col-form-label text-md-right">Telefon Numaranız</label>
                                   </div>
                               </div>
                               <div class="col-md-6 form-group">
                                   <div class="form-group inputBox row">

                                       <input id="email" type="email"
                                              class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                              name="email" value="<?php echo e(old('email')); ?>" required>

                                       <?php if($errors->has('email')): ?>
                                           <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                       <?php endif; ?>
                                       <label for="surname" class="col-form-label text-md-right">E-posta Adresiniz</label>
                                   </div>
                                   <div class="form-group row inputBox">
                                       <input id="password" type="password"
                                              class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                              name="password" required>

                                       <?php if($errors->has('password')): ?>
                                           <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                       <?php endif; ?>
                                       <label for="surname" class="col-form-label text-md-right">Şifeniz</label>
                                   </div>
                                   <div class="form-group row inputBox">
                                       <input id="password-confirm" type="password" class="form-control"
                                              name="password_confirmation" required>
                                       <label for="password-confirm" class=" col-form-label text-md-right">Şifre Tekrarı*</label>
                                   </div>
                                   <div class="form-group">

                                           <input required  id="sozlesme" type="checkbox"> <a  style="color: white; font-weight: bold" href="<?php echo e(route("bayi")); ?>">Üyelik Sözleşmesi</a><label for="sozlesme"><strong class="text-white">'ni okudum ve kabul ediyorum.</strong></label>

                                   </div>
                                   <div class="form-group row mb-0 ">
                                       <div class="col-md-6 offset-md-4">
                                           <button type="submit" class="btn btn-lg w-100 btn-outline-light text-secondary font-weight-bold">
                                               <?php echo e(__('Kaydol')); ?>

                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                   </form>
               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('js'); ?>
        <script>
            $(document).ready(function() {
                $(".number").keydown(function (e) {
                    //  backspace, delete, tab, escape, enter and vb tuşlara izin vermek için.
                    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                        //  Ctrl+A Tuş kobinasyonuna izin vermek için.
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                        //  Ctrl+C Tuş kobinasyonuna izin vermek için.
                        (e.keyCode == 67 && e.ctrlKey === true) ||
                        //  Ctrl+X Tuş kobinasyonuna izin vermek için.
                        (e.keyCode == 88 && e.ctrlKey === true) ||
                        // home, end, left, right gibi tuşlara izin vermek için.
                        (e.keyCode >= 35 && e.keyCode <= 39)) {

                        return;
                    }
                    // Basılan Tuş takımının Sayısal bir değer taşıdığından emin olmak için.
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });
            });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>