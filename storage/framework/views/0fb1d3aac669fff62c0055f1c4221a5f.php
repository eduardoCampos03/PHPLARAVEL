<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success fade show" id="success-message"
         data-bs-dismiss="alert" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <h1>Lista de docentes grupos</h1>

    <form action="<?php echo e(route('docentes_grupos.index')); ?>" method="GET">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-sm-4">
                <label for="docente_id" class="form-label">Docente</label>
                <select name="docente_id" class="form-control">
                    <option value="">Seleccione un docente</option>
                    <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($docente->id); ?>"><?php echo e($docente->nombre); ?> <?php echo e($docente->apellido); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="<?php echo e(route('docentes_grupos.create')); ?>" class="btn btn-secondary">Ir a crear</a>
            </div>

        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Docente</th>
                <th>Grupo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $docentesGrupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docenteGrupo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($docenteGrupo->docente->nombre); ?> <?php echo e($docenteGrupo->docente->apellido); ?></td>
                    <td><?php echo e($docenteGrupo->grupo->nombre); ?></td>
                    <td>
                        <table>
                            <td>
                                <a href="<?php echo e(route('docentes_grupos.edit', $docenteGrupo->id)); ?>" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('docentes_grupos.show', $docenteGrupo->id)); ?>" class="btn btn-info">Ver</a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('docentes_grupos.delete', $docenteGrupo->id)); ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </table>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            <?php echo e($docentesGrupos->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MINEDUCYT\laravel200241\phplaravel\resources\views/docentes_grupos/index.blade.php ENDPATH**/ ?>