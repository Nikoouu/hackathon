<?php $__env->startSection('content'); ?>
    <div align="middle">
    <table border="2", width="100%">
        <tr>
            <td><strong></strong></td>
            <td><strong>Nombre</strong></td>
            <td><strong>Apellido</strong></td>
            <td><strong>Rut</strong></td>
            <td><strong>Fecha de Nacimiento</strong></td>
            <td><strong>Codigo de Antiguedad</strong></td>
            <td><strong>Renta</strong></td>
            <td><strong>Fono</strong></td>
            <td><strong>Email</strong></td>
            <td><strong>Fecha de Ingreso</strong></td>

        </tr>

        <tr>
            <td>1</td>
            <td>nicolas</td>
            <td>retamales</td>
            <td>185351017</td>
            <td>09-01-1994</td>
            <td>183874</td>
            <td>300000</td>
            <td>5432430</td>
            <td>nico09.uss@gmail.com</td>
            <td>01-01-2017</td>
        </tr>

        <tr>
            <td>2</td>
            <td>jose</td>
            <td>zuñiga</td>
            <td>186567487</td>
            <td>05-04-1880</td>
            <td>34534534</td>
            <td>1000000</td>
            <td>2536412</td>
            <td>jose.zuñiga@gmail.com</td>
            <td>01-01-2016</td>
        </tr>

        <tr>
            <td>3</td>
            <td>pepe</td>
            <td>grillo</td>
            <td>00000001</td>
            <td>01-01-0001</td>
            <td>1</td>
            <td>99999999</td>
            <td>12345678</td>
            <td>pepegrillin@gmail.com</td>
            <td>01-01-0001</td>
        </tr>
    </table>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>