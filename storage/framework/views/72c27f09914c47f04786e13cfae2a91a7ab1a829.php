<?php $__env->startSection('content'); ?>
    <div class="container" style="padding: 30px;margin-top:2px">
        <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bilgilendirme</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> İletişim bilgisi sadece 1 defa eklenir. Eklenme butonu 'İletişim' bilgisi anlık boş olması ve silinmesi durumu gözetilerek konulmuştur.</p>
                        <p> Sadece Edit'in kullanılması önerilir.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 30px;">
            <!-- Button trigger modal -->

            <!-- Modal -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center mb-5" style="font-family: 'Harlow Solid Italic'">İLETİŞİM EDİT</h4>
                <div class="col-md-12">
                    <a href="<?php echo e(route('contactadmin.create')); ?>" class="btn btn-danger mb-5">
                        <i class="fa fa-plus"></i>
                        İletişim Bilgisi Ekle
                    </a>
                    <button type="button" class="btn btn-outline-warning mb-5 mx-3" data-toggle="modal" data-target="#exampleModal">
                        Bilgilendirme
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Merkez Adresi</th>
                            <th>Fabrika Adresi</th>
                            <th>Müşteri Hattı</th>
                            <th>Telefon Hattı</th>
                            <th>Whatsapp</th>
                            <th>E-Mail Adresi</th>
                            <th>Açılış Saati</th>
                            <th>Kapanış Saati</th>
                            <th class="text-center" >Edit</th>
                            <th>Silme</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $iletisim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($b->merkez_adresi); ?></td>
                                <td><?php echo e($b->fabrika_adresi); ?></td>
                                <td><?php echo e($b->musteri_hatti); ?></td>
                                <td><?php echo e($b->telefon_hatti); ?></td>
                                <td><?php echo e($b->whatsapp); ?></td>
                                <td><?php echo e($b->email); ?></td>
                                <td><?php echo e($b->acilis); ?></td>
                                <td><?php echo e($b->kapanis); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('contactadmin.edit',$b->id)); ?>" class="btn btn-primary "><i class="fa fa-edit"></i></a>
                                </td>
                                <td> <a href="iletisim/<?php echo e($b->id); ?>" class="btn btn-danger" data-method="delete"
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