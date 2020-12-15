<?php $__env->startSection('content'); ?>
    <script type="javascript">
        function valid_numbers(e)
        {
            var key=e.which || e.KeyCode;
            if  ( key >=48 && key <= 57)
                // to check whether pressed key is number or not
                return true;
            else return false;
            function copyToClipboard() {
                var textBox = document.getElementById("myvalue");
                textBox.select();
                document.execCommand("copy");
            }
        }
    </script>
<div class="container-fluid" style="margin-top: 20px;">
 <span>Siparişler</span>  >  <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
    <hr>
    <div class="row">
        <div class="col-sm-12 locations text-center mb-5">
            <h4 style="font-family: 'Harlow Solid Italic'">TEKLİFLERİM</h4><br><br>
            <?php if(count($orders) == 0): ?>
                <p>Henüz bir teklifiniz yok</p>
            <?php else: ?>

                   <div class="col-12">
                       <div class="row">
                           <div class="col-6">
                               <form method="post" action="<?php echo e(route('teklifSearch')); ?>">
                                   <?php echo csrf_field(); ?>
                                   <div class="form-group">
                                       <button type="submit" class="btn btn-success float-left mx-3">Getir</button>
                                       <input name="created_at" class="w-25 form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Teklif Tarihi" type="text">
                                   </div>
                               </form>

                           </div>
                           <div class="col-6">
                               <a class="text-dark float-right font-weight-bold" href="<?php echo e(url('/orders')); ?>">Geçmiş Tüm Tekliflerim</a>
                           </div>
                       </div>
                   </div>
                <?php if(isset($order)): ?>
                    <table class="table table-dark table-responsive" style="width: 100%">
                        <thead style="border: solid black 1px">
                        <tr >
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri"> Ürün&nbsp;İsmi</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri"> Color</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri"> Coil Length</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">Total Length</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">Unit&nbsp;Price</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">product&nbsp;Price</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">unitWeight</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">totalWeight</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">copperWeight</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">Product Detail</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">qty&nbsp;x&nbsp;price</th>
                            <th></th>
                            <th style=" font-size: small;font-family: DejaVu Sans, sans-seri">Teklif Tarihi</th>
                            <th></th>
                            <hr>
                        </tr>
                        </thead>
                        <tbody style="border: solid black 1px">
                    <?php if(isset($order)): ?>
                        <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr style="border: none">
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->product_name); ?></td>
                                <td></td>
                                <td  style=" border-right: solid 1px black" ><?php echo e(\App\Product::find($data->id)->color); ?></td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->coil_length); ?> mt</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->total_length); ?></td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(number_format(\App\Product::find($data->id)->unit_price,2,',','.')); ?> $</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(number_format(\App\Product::find($data->id)->product_price,2,',','.')); ?> $</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->unitWeight); ?> kg/km</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->totalWeight); ?> kg</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->copperWeight); ?> kg/km</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->product_detail); ?></td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e($data->qty. 'x' .  number_format(\App\Product::find($data->id)->product_price,2,',','.') . '$'); ?></td>
                                <td></td>
                                <td style=" border-right: solid 1px black"><?php echo e($data->created_at); ?></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                        </tbody>
                        <strong  style="margin-left: 80%;font-family: DejaVu Sans, sans-seri">Amount : <strong> <?php echo e(number_format($amount ,2 , '.',',')); ?> $</strong></strong>
                        <hr>
                    </table>
                    <hr>

                    <?php if(isset($data->id)): ?>
                        <a class="btn btn-info float-right" href="<?php echo e(route('teklifPDF',$data->id)); ?>">Teklif PDF'i İndir </a>
                        <?php endif; ?>
                <?php else: ?>
                    <table class="table table-dark table-responsive" style="width: 100%">
                        <thead style="border: solid black 1px">
                        <tr >

                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri"> Ürün&nbsp;İsmi</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri"> Color</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri"> Coil Length</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">Total Length</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">Unit&nbsp;Price</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">product&nbsp;Price</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">unitWeight</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">totalWeight</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">copperWeight</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">Product Detail</th>
                            <th></th>
                            <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">qty&nbsp;x&nbsp;price</th>
                            <th></th>
                            <th style=" font-size: small;font-family: DejaVu Sans, sans-seri">Teklif Tarihi</th>
                            <th></th>

                            <hr>
                        </tr>
                        </thead>
                        <tbody style="border: solid black 1px">
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr style="border: none">
                                <td style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->product_name); ?></td>
                                <td></td>
                                <td  style=" border-right: solid 1px black" ><?php echo e(\App\Product::find($data->id)->color); ?></td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->coil_length); ?> mt</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->total_length); ?></td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(number_format(\App\Product::find($data->id)->unit_price,2,',','.')); ?> $</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(number_format(\App\Product::find($data->id)->product_price,2,',','.')); ?> $</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->unitWeight); ?> kg/km</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->totalWeight); ?> kg</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->copperWeight); ?> kg/km</td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e(\App\Product::find($data->id)->product_detail); ?></td>
                                <td></td>
                                <td  style=" border-right: solid 1px black"><?php echo e($data->qty. 'x' .  number_format($data->price,2,',','.') . '$'); ?></td>
                                <td></td>
                                <td style=" border-right: solid 1px black"><input id="myvalue" type="text" value="<?php echo e($data->created_at); ?>"> <button onclick="copyToClipboard()">sd</button></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div><!-- Container /- -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>