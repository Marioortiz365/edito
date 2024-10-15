

<?php $__env->startSection('titulos'); ?> 
	Agregar una editorial
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Agregar Editorial </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="<?php echo e(url('editoriales')); ?>" method="POST">
                        <div class="row"> <!--inicia primer row-->
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre de la Editorial</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="captura el nombre de la editorial">
                                </div>
                            </div>
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" placeholder="captura el nombre de la ciudad">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <input type="text" name="estado" class="form-control" placeholder="captura el nombre del estado">
                                </div>
                            </div>
                        </div> <!--termina segundo row-->
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($row->id); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="row"> <!--inicia tercer row-->
                            <div class="col-md-4 offset-md-8">
                                <input type="submit" name="Agregar" value="Agregar" class="btn btn-outline-success" method="POST"><a href="<?php echo e(url('editoriales')); ?>" class="btn btn-outline-danger">Cancelar</a>
                            </div>      
                        </div> <!--termina tercer row-->
                    </form>
                </div> <!--termina card-body-->
            </div> <!--termina card-->
        </div> <!--container-->
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/editorial/create.blade.php ENDPATH**/ ?>