<?php $__env->startSection('content'); ?>

    <div class="container-fluid" style="margin-top: 2px">
        <div class="row" style="margin-bottom: 30px;">
            <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            <div class="col-md-12">
                <h3 class="text-center" style="font-family: 'Harlow Solid Italic';color: darkslategray"> SİLİNEN VE CEVAPLANAN MESAJLAR </h3>
                <hr>
            </div>
            <form class="float-right" method="get" action="<?php echo e(route('silinenSearch')); ?>">
                <?php echo csrf_field(); ?>
                <input class="form-control" placeholder="İsim Giriniz" name="search" type="text">
                <button type="submit" class="btn btn-info">Ara</button>
            </form>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover text-secondary">
                        <thead>
                        <tr>
                            <th>İsim Soyisim</th>
                            <th>e-posta</th>
                            <th>Mesajı</th>
                            <th>Cevap</th>
                        </tr>
                        </thead>
                        <tbody>
                       <?php if(isset($search)): ?>
                           <?php $__empty_1 = true; $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                               <tr>
                                   <td><?php echo e($b->name); ?> <?php echo e($b->surname); ?></td>
                                   <td><?php echo e($b->email); ?></td>
                                   <td><?php echo e($b->message); ?></td>
                                   <td><?php echo e($b->cevap); ?></td>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                               <marquee behavior="" direction=""><p>Sonuç Bulunamadı</p></marquee>
                           <?php endif; ?>
                       <?php else: ?>
                           <?php $__empty_1 = true; $__currentLoopData = $silinen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                               <tr>
                                   <td><?php echo e($b->name); ?> <?php echo e($b->surname); ?></td>
                                   <td><?php echo e($b->email); ?></td>
                                   <td><?php echo e($b->message); ?></td>
                                   <td><?php echo e($b->cevap); ?></td>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                               <marquee behavior="" direction=""><p>Silinmiş ve Cevaplanmış Mesaj Bulunmamaktadır.</p></marquee>
                           <?php endif; ?>
                       <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset("js/laravel-delete.js")); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>