<?php $__env->startSection('content'); ?>

    <div class=" product_section_container" style="padding: 30px;">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-12">
                <a href="/admin-products/create" class="btn btn-danger">
                    <i class="fa fa-plus"></i>
                    Yeni Ürün Ekle
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Görüntü</th>
                        <th>Kategori</th>
                        <th>Product Name</th>
                        <th>colour</th>
                        <th>Coil Length</th>
                        <th>Total Length</th>
                        <th>Unit Price</th>
                        <th>Price USD</th>

                        <th>Unit Weight</th>
                        <th>Total Weight</th>
                        <th>Copper Weight</th>
                        <th>Detail</th>
                        <th>Stok Miktarı</th>
                        <th>Created At </th>
                        <th>Düzenle</th>
                        <th>Sil</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($product->id); ?></td>
                            <td><img style="height: 20%" src="<?php echo e($product->image); ?>" alt=""></td>
                            <td> <?php echo e($product->categories->category_name); ?>  </td>
                            <td> <?php echo e($product->product_name); ?>  </td>
                            <td> <?php echo e($product->color); ?>  </td>
                            <td> <?php echo e($product->coil_length); ?>  </td>
                            <td> <?php echo e($product->total_length); ?>  </td>
                            <td> <?php echo e($product->unit_price); ?>  </td>
                            <td> <?php echo e($product->product_price); ?>  </td>
                            <td> <?php echo e($product->unitWeight); ?>  </td>
                            <td> <?php echo e($product->totalWeight); ?>  </td>
                            <td> <?php echo e($product->copperWeight); ?>  </td>
                            <td> <?php echo $product->product_detail; ?>  </td>
                            <td> <?php echo e($product->miktar); ?>  </td>
                            <td><?php echo e($product->created_at); ?></td>
                            <td>
                                <a href="/admin-products/<?php echo e($product->id); ?>/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                            </td>
                            <td> <a href="/admin-products/<?php echo e($product->id); ?>" class="btn btn-danger" data-method="delete"
                                    data-confirm="Emin misiniz?"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $products->links(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset("js/laravel-delete.js")); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>