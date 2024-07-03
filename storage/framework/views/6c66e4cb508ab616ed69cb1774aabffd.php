<?php $__env->startSection('content'); ?>
    <h1>Editar grupo</h1>
    <form action="<?php echo e(route('grupos.update', $grupo->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre"
                name="nombre" value="<?php echo e($grupo->nombre); ?>"
                    required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="descrpcion" class="form-label">Descripcion</label>
                <textarea class="form-control" id="descrpcion"
                 name="descripcion"><?php echo e($grupo->descripcion); ?></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Modificar</button>
                <a href="<?php echo e(route('grupos.index')); ?>" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MINEDUCYT\laravel200241\phplaravel\resources\views/grupos/edit.blade.php ENDPATH**/ ?>