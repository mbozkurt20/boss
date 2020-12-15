<?php $__env->startSection('content'); ?>


    <?php if($order->user_id === Auth::id()): ?>
        <!-- Checkout Content -->
        <div class="container-fluid no-padding checkout-content" style="margin-top: 5px;">
            <a href="<?php echo e(route('orders')); ?>" class="text-secondary">
                <i class="glyphicon glyphicon-arrow-left"></i> < Siparişlerime Geri Dön
            </a>
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Order Summary -->
                    <div class="col-sm-12 locations text-left">
                        <div class="section-padding"></div>
                        <br><br>
                        <h2>Sipariş (S-<?php echo e($order->id); ?>) <br><br></h2>
                        <table class="table table-bordererd table-hover">
                            <tr>
                                <th>Ürün Görüntüleri</th>
                                <th>Ürün İsmi</th>
                                <th>Adet Fiyatı</th>
                                <th>Adet</th>
                                <th>Toplam Tutar</th>
                            </tr>
                            <?php $__currentLoopData = $order->baskets->basket_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $basket_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo e(route('product', $basket_product->product->slug)); ?>">
                                            <?php $__currentLoopData = $basket_product->product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <img class="img-responsive" style="width: 50px;"
                                                     src="/uploads/<?php echo e($image->name); ?>">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('product', $basket_product->product->slug)); ?>">
                                            <?php echo e($basket_product->product->product_name); ?>

                                        </a>
                                    </td>
                                    <td><?php echo e(number_format($basket_product->price,2)); ?> ₺</td>
                                    <td><?php echo e($basket_product->quantity); ?></td>
                                    <td><?php echo e($basket_product->price * $basket_product->quantity); ?> ₺</td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th colspan="4" class="text-right">Toplam(Kdv Dahil)</th>
                                <td colspan="2"><?php echo e($order->order_price); ?> ₺</td>
                            </tr>

                            <tr>
                                <th colspan="4" class="text-right">Durum</th>
                                <td colspan="2"><?php echo e($order->status); ?></td>
                            </tr>
                        </table>
                    </div>


                </div>

            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Checkout Content /- -->

    <?php else: ?>

        <div class="container-fluid no-padding checkout-content" style="margin-top: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 order-summary">
                        <div class="alert alert-danger text-center">
                            <h2>No records found!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>