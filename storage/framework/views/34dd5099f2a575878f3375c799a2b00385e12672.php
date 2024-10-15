

<?php $__env->startSection('titulos'); ?> 
	Borrar Titulo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Borrar Titulo </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="<?php echo e(url('titulos/'.$row->id)); ?>" method="POST">
                        <div class="row"> <!--inicia primer row-->
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre del libro</label>
                                <input type="text" class="form-control" name="nombre" placeholder="captura el nombre de la editorial" value="<?php echo e($row->nombre); ?>" maxlength="40">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Tipo</label>
                                    <input type="text" class="form-control" name="tipo" placeholder="captura el tipo del libro" value="<?php echo e($row->tipo); ?>" maxlength="20">
                                </div>
                            </div>
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Precio</label>
                                    <input type="text" name="precio" class="form-control" placeholder="captura el precio del libro" value="<?php echo e($row->precio); ?>" maxlength="10">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_editorial">Editorial</label>
                                    <select name="id_editorial" class="form-control">
                                        <option value="">Seleccione la Editorial</option>
                                        <?php $__currentLoopData = $nom_editorial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($ne->id); ?>" <?php if($ne->id == $row->id_editorial): ?> selected <?php endif; ?> > <?php echo e($ne->nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div> <!--termina segundo row-->
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($row->id); ?>">
                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="_method" value="DELETE">

                        <div class="row"> <!--inicia tercer row-->
                            <div class="col-md-4 offset-md-8">
                                <input type="submit" name="Borrar" value="Borrar" class="btn btn-outline-success"><a href="<?php echo e(url('titulos')); ?>" class="btn btn-outline-danger">Cancelar</a>
                            </div>      
                        </div> <!--termina tercer row-->
                    </form>
                </div> <!--termina card-body-->
            </div> <!--termina card-->
        </div> <!--container-->
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/titulo/delete.blade.php ENDPATH**/ ?>