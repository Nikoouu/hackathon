<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido Nicolás
                    <div align="right">

                        <a href="<?php echo e(url('/test6')); ?>" align="top">Historial de Comision</a>

                    </div>
                </div>

                <div class="panel-body">

                    <div align="middle">
                      <h3>Ingresar cliente</h3>
                        <a href="<?php echo e(url('/formulariousuario')); ?>"><img border="1" src="http://www.intgra.com/demo50/img/clientes.png" width="150" height="150" align="bottom"></a>
                </div>
                    <div class="panel-body">
                        <div align="middle">
                            <h3>Buscar Clientes por RUT</h3>
                            <a href="<?php echo e(url('/test')); ?>"><img border="1" src="http://www.clubexcelencia.org/sites/all/themes/personalizado/img/vision.png" width="150" height="150" align="bottom"></a>
                        </div>

                        <div class="panel-body">
                            <div align="middle">
                                <h3>Ver Cliente</h3>
                                <a href="<?php echo e(url('/test5')); ?>"><img border="1" src="http://icon-icons.com/icons2/20/PNG/128/businessapplication_edit_male_user_thepencil_theclient_negocio_2321.png" width="150" height="150" align="bottom"></a>
                            </div>

                            <div class="panel-body">
                                <div align="middle">
                                    <h3>Simulación</h3>
                                    <a href="<?php echo e(url('/test3')); ?>"><img border="1" src="https://portal-desarrollo-portal-api-developers-desarrollo.developer.us.apiconnect.ibmcloud.com/sites/portal-desarrollo-portal-api-developers-desarrollo.developer.us.apiconnect.ibmcloud.com/themes/platanus_connect/css/images/product-04.png" width="150" height="150" align="bottom"></a>
                                </div>

                                <div class="panel-body">
                                    <div align="middle">
                                        <h3>Crédito Hipotecariado</h3>
                                        <a href="<?php echo e(url('/test2')); ?>"><img border="1" src="https://portal-desarrollo-portal-api-developers-desarrollo.developer.us.apiconnect.ibmcloud.com/sites/portal-desarrollo-portal-api-developers-desarrollo.developer.us.apiconnect.ibmcloud.com/themes/platanus_connect/css/images/product-05.png" width="150" height="150" align="bottom"></a>
                                    </div>

                                    <div class="panel-body">
                                        <div align="middle">
                                            <h3>Tasas</h3>
                                            <a href="<?php echo e(url('/test4')); ?>"><img border="1" src="https://portal-desarrollo-portal-api-developers-desarrollo.developer.us.apiconnect.ibmcloud.com/sites/portal-desarrollo-portal-api-developers-desarrollo.developer.us.apiconnect.ibmcloud.com/themes/platanus_connect/css/images/product-01.png" width="150" height="150" align="bottom"></a>
                                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>