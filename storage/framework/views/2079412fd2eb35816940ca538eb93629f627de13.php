<?php $__env->startSection('content'); ?>
    <div class="container-fluid" style="margin-top: 4px">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Footer Başlıklar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <?php if($title == 0): ?>
                            <form method="post" action="<?php echo e(route('baslikekleme.store')); ?>">
                                <?php echo csrf_field(); ?>
                                <input class="form-control mb-2 " name="title1" type="text">
                                <input class="form-control mb-2" name="title2" type="text">
                                <input class="form-control mb-2" name="title3" type="text">
                                <input class="form-control mb-2"  name="title4" type="text">
                                <button type="submit" class="btn btn-dark float-right">Ekle</button>
                            </form>
                        <?php else: ?>
                            <form method="post" action="<?php echo e(route('baslikekleme.update',$titleFirst->id)); ?>">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <input value="<?php echo e($titleFirst->title1); ?>" class="form-control mb-2 " name="title1" type="text">
                                <input value="<?php echo e($titleFirst->title2); ?>" class="form-control mb-2" name="title2" type="text">
                                <input value="<?php echo e($titleFirst->title3); ?>" class="form-control mb-2" name="title3" type="text">
                                <input value="<?php echo e($titleFirst->title4); ?>" class="form-control mb-2"  name="title4" type="text">
                                <button type="submit" class="btn btn-dark float-right">Güncelle</button>
                            </form>
                           <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>  <h4 class="text-center" style="font-family: 'Harlow Solid Italic'">MAİN YÖNETİM </h4>
        <!-- Modal -->
        <hr>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Bize Ulaşın Bilgisi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <p>"Bize Ulaşın" alanına başlık ekleme yaparken içerik girmenize gerek yoktur, bu alanda sadece başlık yer alacaktır!!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
           <?php if($title == 0): ?>
            <button type="button" class="btn btn-info mb-5 mx-3" data-toggle="modal" data-target="#exampleModal">
              Başlık Ekle
            </button>
            <?php else: ?>
                <a href="<?php echo e(route('mainyonetim.create')); ?>" class="btn btn-danger mb-5 mx-1">
                    <i class="fa fa-plus"></i>
                    Footer Bilgilerini Ekle
                </a>
                <button type="button" class="btn btn-info mb-5 mx-1" data-toggle="modal" data-target="#exampleModal">
                    Başlık Güncelle
                </button>
            <?php endif; ?>
            <button type="button" class="btn btn-outline-warning h-25" data-toggle="modal" data-target="#exampleModalCenter">
                ?
            </button>

            <div class="col-md-12 mb-5">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Üst Başlık</th>
                            <th>Başlık</th>
                            <th>Sayfa İçeriği</th>
                            <th>Eklenme Tarihi</th>
                            <th class="text-center" >Düzenle</th>
                            <th>Silme</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $mainyonetim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                            <td><?php if($m->ustbaslik == 1): ?>
                                                    <p>Kurumsal</p>
                                                    <?php elseif($m->ustbaslik == 2 ): ?>
                                                    <p>Güvenli Alışveriş</p>
                                                    <?php elseif($m->ustbaslik == 3 ): ?>
                                                    <?php echo e(config('app.name')); ?>

                                                    <?php endif; ?>
                                            </td>
                                            <td><?php echo e($m->baslik); ?></td>
                                            <td><?php echo $m->icerik; ?></td>
                                             <td><?php echo e($m->created_at); ?></td>
              <td class="text-center"><a href="<?php echo e(route('mainyonetim.edit',$m->id)); ?>" class="btn btn-primary "><i class="fa fa-edit"></i></a></td>
                    <td> <a href="<?php echo e(route('mainyonetim.destroy',$m->id)); ?>" class="btn btn-danger" data-method="delete"
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