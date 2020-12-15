<?php $__env->startSection('content'); ?>

    <!-- Checkout Content -->
    <div class="container-fluid no-padding checkout-content" style="margin-top: 40px;">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Order Summary -->
                <div class="col-md-12 order-summary">
                    <div class="section-padding"></div>
                    <!-- Section Header -->
                    <div class="section-header">
                        <h3>SEPETİM</h3>
                    </div><!-- Section Header /- -->
                    <div class="order-summary-content">
                        <?php if(count(Cart::content())>0): ?>
                            <table class="shop_cart">
                                <thead>
                                <tr>
                                    <th class="product-name">ÜRÜN İSMİ</th>
                                    <th class="product-quantity">ÜRÜN ADET,</th>
                                    <th class="product-price">ADET FİYATI</th>
                                    <th class="product-remove">TOPLAM</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="cart_item">


                                        <td data-title="<?php echo e($productCartItem->name); ?>" class="product-name">
                                            <a title="<?php echo e($productCartItem->name); ?>" href="<?php echo e(route('product', $productCartItem->options->slug)); ?>">
                                                <?php echo e($productCartItem->name); ?>

                                            </a>
                                        </td>
                                        <td data-title="Quantity" class="product-quantity">
                                            <div class="quantity">

                                                <?php $max=\App\Product::find($productCartItem->id)->miktar;
                                                ?>
                                                <input type="number" class="quantityf" data-id="<?php echo e($productCartItem->rowId); ?>" value="<?php echo e($productCartItem->qty); ?>" min="0" max="<?php echo e($max); ?>">

                                             </div>
                                        </td>

                                        <td data-title="Total" class="product-subtotal">
                                            <span><?php echo e($productCartItem->price); ?> ₺</span>
                                        </td>
                                        <td data-title="Total" class="product-remove">
                                            <span><?php echo e(($productCartItem->price) * ($productCartItem->qty)); ?> ₺</span>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <form action="<?php echo e(route('basket.destroy')); ?>" method="POST">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('DELETE')); ?>

                                            <input  type="submit" class="btn-danger btn pull-left" value="Tümünü Temizle">
                                        </form>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                            <!-- Proceed To Checkout -->
                            <div class="col-md-12 col-sm-12 text-right">
                                <div class="wc-proceed-to-checkout">
                                    <p>TOPLAM <span><?php echo e(Cart::subtotal()); ?> ₺ </span></p>
                                    <a href="<?php echo e(route('payment')); ?>" class="red_button" >PDF OLARAK İNDİR</a>
                                </div>
                            </div><!-- Proceed To Checkout /- -->

                        <?php else: ?>
                            <div class="container-fluid no-padding checkout-content">
                                <div class="container">
                                    <br>
                                    <div class="row">
                                        <br>
                                        <div class="col-md-12 order-summary">
                                            <div class="alert alert-danger text-center">
                                                <h4>Sepetinizde Ürün Bulunmamaktadır!</h4>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div><!-- Order Summary /- -->
            </div>
        </div><!-- Container /- -->
        <div class="section-padding"></div>
    </div><!-- Checkout Content /- -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(function(){
            $('.quantityf').on('change', function() {
                var id = $(this).attr('data-id');
                var max = $(this).attr('max');
                var quantity = $(this).val();
                max = parseInt(max);
                quantity = parseInt(quantity);
                if(quantity > max) {
                    document.getElementsByClassName('quantityf').value=max;
                    Swal.fire({
                        icon: 'error',
                        title: 'Uyarı',
                        text: 'Girdiğiniz ürün miktarı ürün stoğunu aşmaktadır.',
                        footer: '<span class="alert alert-primary w-auto font-weight-bold"> Ürün stok durumu :'+ max +' ürün mevcut</span>'
                    }).then(function () {
                        window.location.href = '<?php echo e(route('basket')); ?>';
                    })
                }else{
                    toastr.options.timeOut = 4500;
                    $.ajax({
                        type: "PATCH",
                        url: '<?php echo e(url('basket/update')); ?>' + '/' + id,
                        data: {
                            'quantity': this.value,
                        },
                        success: function(data) {
                            console.log(data);
                            toastr.success('Güncelleme Başarılı!!');
                            window.location.href = '<?php echo e(route('basket')); ?>';
                        }
                    });
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>