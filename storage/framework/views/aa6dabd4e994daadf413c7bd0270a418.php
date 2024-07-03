<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <h1>Lista de docentes</h1>

    <form action="<?php echo e(route('docentes.index')); ?>" method="GET">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="apellido" placeholder="Apellido">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="<?php echo e(route('docentes.create')); ?>" class="btn btn-secondary">Ir a crear</a>
            </div>

        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($docente->nombre); ?></td>
                    <td><?php echo e($docente->apellido); ?></td>
                    <td><?php echo e($docente->email); ?></td>
                    <td>
                        <table>
                            <td>
                                <a href="<?php echo e(route('docentes.edit', $docente->id)); ?>" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('docentes.show', $docente->id)); ?>" class="btn btn-info">Ver</a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('docentes.delete', $docente->id)); ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </table>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            <?php echo e($docentes->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MINEDUCYT\laravel200241\phplaravel\resources\views/docentes/index.blade.php ENDPATH**/ ?>