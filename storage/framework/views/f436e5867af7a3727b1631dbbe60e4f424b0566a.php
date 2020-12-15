<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::model($orders, ['route' => ['admin-orders.update', $orders->id], "method" =>  "put","files" => true]); ?>

                <?php echo Form::bsSelect("status","Status",null,$status,"Please select a status"); ?>

                <?php echo Form::bsSubmit("Update"); ?>

                <?php echo Form::close(); ?>


                <h3>Kullanıcı Bilgileri</h3>
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th>Iyzico Conversation ID</th>
                        <th>İsim Soyisim</th>
                        <th>E-posta</th>
                        <th>Cep Telefonu</th>
                        <th>Address</th>
                        <th>Status</th>
                    </tr>
                    <?php $__currentLoopData = $orders->baskets->basket_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $basket_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($orders->order_no); ?></td>
                            <td><?php echo e($orders->name); ?></td>
                            <td><?php echo e($orders->baskets->user->email); ?></td>
                            <td><?php echo e($orders->m_phone); ?></td>
                            <td><?php echo e($orders->address); ?></td>
                            <td><?php echo e($orders->status); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </table>

                <h3>Sipariş(s) - (SC-<?php echo e($orders->id); ?>)</h3>
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th>Görüntü</th>
                        <th>Ürün İsmi</th>
                        <th>Tutar</th>
                        <th>Adet</th>
                        <th>Toplam Tutar</th>
                        <th>Durum</th>
                    </tr>
                    <?php $__currentLoopData = $orders->baskets->basket_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $basket_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="width: 120px;">
                                <a href="<?php echo e(route('product', $basket_product->product->slug)); ?>">
                                    <?php $__currentLoopData = $basket_product->product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img src="/uploads/<?php echo e($image->name); ?>" width="100">
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
                            <td><?php echo e(number_format($basket_product->price * $basket_product->quantity,2)); ?> ₺</td>
                            <td><?php echo e($orders->status); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <th colspan="4" class="text-right">Toplam Ücret (VAT included)</th>
                        <td colspan="2"><?php echo e($orders->order_price); ?> ₺</td>
                    </tr>

                    <tr>
                        <th colspan="4" class="text-right">Durum</th>
                        <td colspan="2"><?php echo e($orders->status); ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>