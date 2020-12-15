<?php $__env->startSection('content'); ?>

<div class="container-fluid" style="margin-top: 20px;">
 <span>Siparişler</span>  >  <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
    <div class="row">
        <div class="col-sm-12 locations text-center mb-5">
            <h4 style="font-family: 'Harlow Solid Italic'">SİPARİŞLERİM</h4><br><br>
            <?php if(count($orders) == 0): ?>
                <p>Henüz bir siparişiniz yok</p>
            <?php else: ?>
                <table class="table table-bordererd table-hover mb-5">
                    <tr>
                        <th>Sipariş Numarası</th>
                        <th>Sipariş Tutarı</th>
                        <th>Durumu</th>
                         <th></th>
                    </tr>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-$order">
                            <td>PN-<?php echo e($order->id); ?></td>
                            <td><?php echo e($order->order_price); ?> ₺</td>
                            <td><?php echo e($order->status); ?></td>
                            <td><a href="/orders/<?php echo e($order->id); ?>" class="btn-sm btn-success">Detay</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div><!-- Container /- -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>