<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success fade show" id="success-message"
         data-bs-dismiss="alert" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <h1>Lista de grupos</h1>

    <form action="<?php echo e(route('grupos.index')); ?>" method="GET">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="<?php echo e(route('grupos.create')); ?>" class="btn btn-secondary">Ir a crear</a>
            </div>

        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $grupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($grupo->nombre); ?></td>
                    <td><?php echo e($grupo->descripcion); ?></td>
                    <td>
                        <table>
                            <td>
                                <a href="<?php echo e(route('grupos.edit', $grupo->id)); ?>" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('grupos.show', $grupo->id)); ?>" class="btn btn-info">Ver</a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('grupos.delete', $grupo->id)); ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </table>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            <?php echo e($grupos->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MINEDUCYT\laravel200241\phplaravel\resources\views/grupos/index.blade.php ENDPATH**/ ?>