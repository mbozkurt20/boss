<?php $__env->startSection('content'); ?>
    <div class="container-fluid product_section_container" style="padding: 3px;">
        <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
       <h4 class="text-center mb-5" style="font-family: 'Harlow Solid Italic'">PROFİL BİLGİLERİM</h4>
        <div class="row mb-3">
            <div class="col-md-12 mb-5">
                <table class="table table-hover mb-3">
                    <thead>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>E-Mail</th>
                        <th>Adres</th>
                        <th>Sabit Telefon</th>
                        <th>Cep Telefonu</th>
                        <th>Şehir</th>
                        <th>Ülke</th>
                        <th>Posta Kodu</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $userDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($userDetail->user->name); ?> <?php echo e($userDetail->user->surname); ?></td>
                            <td><?php echo e($userDetail->user->email); ?></td>
                            <td><?php echo e($userDetail->address); ?> </td>
                            <td><?php echo e($userDetail->phone); ?></td>
                            <td><?php echo e($userDetail->m_phone); ?></td>
                            <td><?php echo e($userDetail->city); ?></td>
                            <td><?php echo e($userDetail->country); ?></td>
                            <td><?php echo e($userDetail->zipcode); ?></td>
                            <td>
                                <a href="/profile/<?php echo e($userDetail->id); ?>/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>