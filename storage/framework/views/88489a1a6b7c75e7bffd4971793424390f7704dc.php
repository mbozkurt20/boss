<?php $__env->startSection('content'); ?>

    <div class="container" style="margin-top: 2px">
        <div class="row" style="margin-bottom: 30px;">
            <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            <div class="col-md-12">

                <h3 class="text-center" style="font-family: 'Harlow Solid Italic';color: darkslategray"> SOSYAL MEDYA EDİT</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <a href="<?php echo e(route('sosyalmedya.create')); ?>" class="btn btn-danger mb-5">
                    <i class="fa fa-plus"></i>
                    Yeni Url Ekle
                </a>
                <div class="table-responsive">
                    <table class="table table-hover text-secondary">
                        <thead>
                        <tr>
                            <th>İnstagram</th>
                            <th>Twitter</th>
                            <th>ln</th>
                            <th>Facebook</th>
                            <th class="text-center" >Edit</th>
                            <th>Silme</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $sosyalMedya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($b->instagram); ?></td>
                                <td><?php echo e($b->twitter); ?></td>
                                <td><?php echo e($b->ln); ?></td>
                                <td><?php echo e($b->facebook); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('sosyalmedya.edit',$b->id)); ?>" class="btn btn-primary "><i class="fa fa-edit"></i></a>
                                </td>
                                <td> <a href="<?php echo e(route('sosyalmedya.destroy',$b->id)); ?>" class="btn btn-danger" data-method="delete"
                                        data-confirm="Emin Misiniz?"><i class="fa fa-trash"></i></a></td>
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