<?php $__env->startSection("content"); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <div class="container">
        <form method="GET" action="<?php echo e(url('my-search')); ?>">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Ara" value="<?php echo e(old('search')); ?>">
                </div>
                <div class="col-md-6">
                    <button class="btn btn-success">Ara</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <tr>
                <th>Nu</th>
                <th>Ürün İsmi</th>
                <th>Ürün Fiyatı</th>
                <th>Ürün Detayı</th>
            </tr>
            <?php if($search->count()): ?>
                <?php $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($search->id); ?></td>
                        <td><?php echo e($search->product_name); ?></td>
                        <td><?php echo e($search->product_price); ?></td>
                        <td><?php echo e($search->product_detail); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">Ürün Bulunamadı.</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection("customJs"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("customCss"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>