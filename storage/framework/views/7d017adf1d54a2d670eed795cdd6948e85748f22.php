<?php $__env->startSection('content'); ?>

    <div class="container-fluid" style="margin-top: 2px">
        <div class="row" style="margin-bottom: 30px;">
            <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            <div class="col-md-12">
                <h3 class="text-center" style="font-family: 'Harlow Solid Italic';color: darkslategray"> GELEN MESAJLAR </h3>
                <hr>
            </div>
        </div>
        <form action="">
            <input class="form-control w-25" placeholder="Mesajınızdan Bir Kesit Giriniz..." name="userMesaj" type="text">
            <button class="btn btn-success" type="submit"> Ara</button>
        </form>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover text-secondary">
                        <thead>
                        <tr>
                            <th>Mesajım</th>
                            <th>Cevap</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $mesaj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="text-dark"><?php echo e($b->message); ?></td>
                                <td><?php if(isset($b->cevap)): ?>
                                        <p class="text-dark"><?php echo e($b->cevap); ?></p>
                                    <?php else: ?>
                                    <p class="text-info">Cevap Bekleniyor</p>
                                        <?php endif; ?>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Mesajı Cevapla</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="<?php echo e(route('mesajCevap',$b->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php if(isset($b->cevap)): ?>
                                                    <textarea type="text" rows="8" cols="70" name="cevap"><?php echo e($b->cevap); ?></textarea>
                                                <?php else: ?>
                                                    <textarea type="text" rows="8" cols="70" name="cevap"></textarea>
                                                <?php endif; ?>
                                                <hr>
                                                <button type="submit" class="btn btn-info w-50 float-right "><i class="fa fa-send-o"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <marquee behavior="" direction=""><p>Gelen Mesaj Bulunmamaktadır.</p></marquee>
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