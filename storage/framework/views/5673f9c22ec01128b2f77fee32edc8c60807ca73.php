<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrarse</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('id') ? ' has-error' : ''); ?>">
                                <label for="id" class="col-md-4 control-label">ID</label>

                                <div class="col-md-6">
                                    <input id="id" type="text" class="form-control" name="id" value="<?php echo e(old('id')); ?>" required autofocus>

                                    <?php if($errors->has('id')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('id')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('rut') ? ' has-error' : ''); ?>">
                                <label for="rut" class="col-md-4 control-label">Rut</label>

                                <div class="col-md-6">
                                    <input id="rut" type="text" class="form-control" name="rut" value="<?php echo e(old('rut')); ?>" required autofocus>

                                    <?php if($errors->has('rut')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('rut')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('dv') ? ' has-error' : ''); ?>">
                                <label for="dv" class="col-md-4 control-label"></label>

                                <div class="col-md-6">
                                    <input id="dv" type="text" class="form-control" name="dv" value="<?php echo e(old('dv')); ?>" required>

                                    <?php if($errors->has('dv')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('dv')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
                                <label for="nombre" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control" name="nombre" required>

                                    <?php if($errors->has('nombre')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('nombre')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('apellido') ? ' has-error' : ''); ?>">
                                <label for="apellido" class="col-md-4 control-label">Apellido</label>

                                <div class="col-md-6">
                                    <input id="apellido" type="text" class="form-control" name="apellido" required>

                                    <?php if($errors->has('apellido')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('apellido')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('fecha_nacimiento') ? ' has-error' : ''); ?>">
                                <label for="fecha_nacimiento" class="col-md-4 control-label">Fecha de Nacimiento</label>

                                <div class="col-md-6">
                                    <input id="fecha_nacimiento" type="text" class="form-control" name="fecha_nacimiento" required>

                                    <?php if($errors->has('fecha_nacimiento')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('fecha_nacimiento')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('cod_objetivo') ? ' has-error' : ''); ?>">
                                <label for="cod_objetivo" class="col-md-4 control-label">Código Objetivo</label>

                                <div class="col-md-6">
                                    <input id="cod_objetivo" type="text" class="form-control" name="cod_objetivo" required>

                                    <?php if($errors->has('cod_objetivo')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('cod_objetivo')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('cod_antiguedad') ? ' has-error' : ''); ?>">
                                <label for="cod_antiguedad" class="col-md-4 control-label">Código de Antiguedad</label>

                                <div class="col-md-6">
                                    <input id="cod_antiguedad" type="text" class="form-control" name="cod_antiguedad" required>

                                    <?php if($errors->has('cod_antiguedad')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('cod_antiguedad')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('renta') ? ' has-error' : ''); ?>">
                                <label for="renta" class="col-md-4 control-label">Renta</label>

                                <div class="col-md-6">
                                    <input id="renta" type="text" class="form-control" name="renta" required>

                                    <?php if($errors->has('renta')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('renta')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('fono') ? ' has-error' : ''); ?>">
                                <label for="fono" class="col-md-4 control-label">Fono</label>

                                <div class="col-md-6">
                                    <input id="fono" type="text" class="form-control" name="fono" required>

                                    <?php if($errors->has('fono')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('fono')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" required>

                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="password" class="col-md-4 control-label">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation" class="col-md-4 control-label">Confirmar Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('updated_at') ? ' has-error' : ''); ?>">
                                <label for="updated_at" class="col-md-4 control-label">Fecha de ingreso</label>

                                <div class="col-md-6">
                                    <input id="updated_at" type="date" name="updated_at" step="1" min="2017-01-01" max="2099-12-31" value="2017-07-16">

                                    <?php if($errors->has('updated_at')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('updated_at')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>