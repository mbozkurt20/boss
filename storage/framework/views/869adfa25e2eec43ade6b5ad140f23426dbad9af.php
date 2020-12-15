<?php $__env->startSection('meta'); ?>
    <meta type="keywords" content="İletişim, Telefon, Konum ,Sosyal Medya , Facebook, İnstagram , Twitter">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title',' İletişim'); ?>
<?php $__env->startSection('content'); ?>
    <div class=" contact_container mx-3" style="margin-top: 65px">
        <ul class="breadcrumbs">
            <a class="mx-3" style="color: black " href="<?php echo e(route('home')); ?>">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        </ul>
        <h4 class="text-center mb-5" style="font-family: 'Harlow Solid Italic'">BİZE BURADAN ULAŞABİİRSİNİZ</h4>
        <!-- Map Container -->

        <div class="row">
            <div class="col">
                <div>
                    <div class="">
                        <div class="table-responsive text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.5794617059164!2d29.080669515200544!3d37.776457779759085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c73faf16cfc169%3A0x2b0fd7620ec7a1a0!2sS%C4%B1rakap%C4%B1lar%2C%201585.%20Sk.%20No%3A8%2C%2020010%20Denizli%20Merkez%2FDenizli!5e0!3m2!1str!2str!4v1581623783909!5m2!1str!2str" width="1100" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us -->
       <div class="col-md-12">
           <div class="row">
               <div class="col-md-6 contact_col">
                   <?php $__empty_1 = true; $__currentLoopData = $iletisim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                       <h4 class="mt-4" style="font-family: 'Harlow Solid Italic'">Bizi Burada Bulabilirsiniz...</h4>
                       <p><?php echo e($i->merkez_adresi); ?></p>
                       <div>
                           <h5 style="font-family: 'Harlow Solid Italic'" ><i class="fa fa-volume-control-phone text-dark" ></i> İletişim Hatlarımız...</h5>
                           <p><?php echo e($i->musteri_hatti); ?></p>
                           <p><?php echo e($i->telefon_hatti); ?></p>
                           <br>
                           <h5 style="font-family: 'Harlow Solid Italic'"><i class="fa fa-mail-forward text-dark" ></i> Öneri ve Şikayetlerinizi Buradanda Gönderebilirsiniz... </h5>
                           <p><?php echo e($i->email); ?></p>
                           <br>
                           <h5 style="font-family: 'Harlow Solid Italic'"><i class="fa fa-whatsapp text-success" ></i> Whatsapp Hattımız</h5>
                           <p><?php echo e($i->whatsapp); ?></p>
                       </div>
                       <div>
                           <h5 style="font-family: 'Harlow Solid Italic'"><i class="fa fa-hourglass-1"></i> Ofis Açılış Saatimiz...</h5>
                           <p><?php echo e($i->acilis); ?></p>
                           <br>
                           <h5 style="font-family: 'Harlow Solid Italic'"><i class="fa fa-hourglass-3 text-danger" ></i>  Ofis Kapanış Saatimiz...</h5>
                           <p><?php echo e($i->kapanis); ?></p>
                           <br>
                           <br>
                           <h4 style="font-family: 'Harlow Solid Italic'"> [ Fabrika Adresimiz ]</h4>
                           <p><?php echo e($i->fabrika_adresi); ?></p>
                       </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                   <marquee scrollamount="3" behavior="" direction="down"> <p class="text-secondary">İletişim Alanı Bilgileri Boş Görünüyor...</p></marquee>
               <?php endif; ?>
               </div>
               <div class="col-md-6 follow_us_contents ">
                   <div class="get_in_touch_contents">
                       <h4 style="font-family: 'Harlow Solid Italic'">Bizimle temasa geçebilirsiniz!</h4>
                       <p>Ücretsiz ve gizli bir bilgi almak için aşağıdaki formu doldurunuz.</p>
                       <div class="form-group">
                           <form method="post" action="<?php echo e(route('gelenmesajlar.store')); ?>">
                               <?php echo csrf_field(); ?>
                               <div class="form-group">
                                   <input id="input_name" class="form_input input_name input_ph" type="text" value="<?php echo e($user->name); ?>" name="name" placeholder="isim " required="required" data-error="Name is required.">
                               </div>
                               <div class="form-group">
                                   <input id="input_name" value="<?php echo e($user->surname); ?>" class="form_input input_name input_ph" type="text" name="surname" placeholder="Soyisim" required="required" data-error="Name is required.">
                               </div>
                               <div class="form-group">
                                   <input id="input_email" value="<?php echo e($user->email); ?>" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
                               </div>
                               <div class="form-group">
                                   <textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Mesajınız" rows="3" required data-error="Lütfen bize bir mesaj yazın."></textarea>
                               </div>
                               <div class="form-group">
                                   <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">Mesajı Gönder</button>
                               </div>
                           </form>
                       </div>
                       <div class="col-md-6 get_in_touch_col">
                           <p class="mt-5 text-center" style="font-family: 'Harlow Solid Italic'">Sosyal Medyada da Birlikte Olmak İsteriz</p>
                           <?php $__empty_1 = true; $__currentLoopData = $medya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                               <ul class=" social d-flex flex-row">
                                   <li><a href='<?php echo e($m->facebook); ?>' style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                   <li><a href='<?php echo e($m->twitter); ?>' style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                   <li><a href='<?php echo e($m->instagram); ?>' style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                   <li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                               </ul>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                               <ul class=" social d-flex flex-row">
                                   <li><a href='#' style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                   <li><a href='#' style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                   <li><a href='#' style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                   <li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                               </ul>
                               <marquee  behavior="" direction="down"> <p class="text-secondary">Sosyal Medya Bilgileri Boş Görünüyor...</p></marquee>
                           <?php endif; ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
         </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/contact_custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/contact_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/contact_responsive.css')); ?>">

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>