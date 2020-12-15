<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5 mt-5">
                    <div class="card-header "><strong>SLİDER EKLE</strong></div>
                    <div class="card-body">
                        <a href="<?php echo e(route('slider.create')); ?>" class="btn btn-primary">Yeni Slider Ekle</a>
                        <br /><br />
                        <table class="table">
                            <tr>
                                <th>Slider İsmi</th>
                                <th>Slider Açıklama</th>
                                <th>Yüklenen Slider</th>
                                <th>Düzenle</th>
                                <th>Silme</th>
                            </tr>
                            <?php $__empty_1 = true; $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($k->title); ?></td>
                                    <td><?php echo e($k->aciklama); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(route('slider.edit',$k->id)); ?>" class="btn btn-primary "><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td> <a href="<?php echo e(route('slidersil',$k->id)); ?>" class="btn btn-danger" data-method="delete"
                                            data-confirm="Emin Misiniz?"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="2">Yüklenmiş Herhangi Bir Slider Bulunmuyor...</td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>