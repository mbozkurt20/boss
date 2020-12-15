<?php $__env->startSection('content'); ?>
    <div class="container" style="padding: 30px;margin-top: 2px">
        <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>  <h4 class="text-center" style="font-family: 'Harlow Solid Italic'">HAKKIMIZDA YAZISI</h4>
        <div class="row" style="margin-bottom: 30px;">
        </div>
        <div class="row">
            <?php if($hakkimizdacount == 0): ?>
                <a href="<?php echo e(route('hakkimizda.create')); ?>" class="btn btn-danger mb-5 mx-3">
                    <i class="fa fa-plus"></i>
                    Yeni Hakkımızda Ekle
                </a>
            <?php endif; ?>
            <div class="col-md-12">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Hakkımızda</th>
                            <th>Kayıt Tarihi</th>
                            <th class="text-center" >Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $hakkimizda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $b->hakkimizda; ?></td>
                                <td><?php echo e($b->created_at); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('hakkimizda.edit',$b->id)); ?>" class="btn btn-primary "><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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