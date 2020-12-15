<?php $__env->startSection('content'); ?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?php echo e(asset('css/menu.css')); ?>">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div style="background: #ff820e" class="panel-heading">
                            <h4 class="panel-title">

                            <a style="color: #EFEFEF">  PRİM MENÜ</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Genel Bakış</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">Ekibim</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Gelirlerim</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Cüzdanım</a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Kazanç Özetim</a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Hesap Menü</a>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>





                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-9">
                <div class="well">

                </div>
            </div>
        </div>
    </div>








<?php $__env->stopSection(); ?>



<?php $__env->startSection('customCss'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>