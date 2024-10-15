

<?php $__env->startSection('titulos'); ?> 
	BorrarAutor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Eliminar Autor </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="<?php echo e(url('autores/'.$row->id)); ?>" method="POST">
                        <div class="row"> <!--inicia primer row-->
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="au_nombre" placeholder="captura el nombre del libro" value="<?php echo e($row->au_nombre); ?>" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Apellido</label>
                                    <input type="text" class="form-control" name="au_apellido" placeholder="captura el tipo del libro" value="<?php echo e($row->au_apellido); ?>" readonly>
                                </div>
                            </div>
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Telefono</label>
                                    <input type="text" name="telefono" class="form-control" placeholder="captura el precio del libro" value="<?php echo e($row->telefono); ?>" readonly>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Calle</label>
                                    <input type="text" name="calle" class="form-control" placeholder="captura el precio del libro" value="<?php echo e($row->calle); ?>" readonly>
                                </div>
                            </div>
                         </div>
                         <div class="row"> <!--inicia primer row-->
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" placeholder="captura el nombre del libro" value="<?php echo e($row->ciudad); ?>" readonly>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ciudad">Estado</label>
                                    <input type="text" class="form-control" name="estado" placeholder="captura el tipo del libro" value="<?php echo e($row->estado); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ciudad">Pais</label>
                                    <input type="text" class="form-control" name="pais" placeholder="captura el tipo del libro" value="<?php echo e($row->pais); ?>" readonly>
                                </div>
                            </div>
                        </div> <!--termina primer row-->
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($row->id); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="DELETE">

                        <div class="row"> <!--inicia tercer row-->
                            <div class="col-md-4 offset-md-8">
                                <input type="submit" name="Borrar" value="Borrar" class="btn btn-outline-success" method="POST"><a href="<?php echo e(url('autores')); ?>" class="btn btn-outline-danger">Cancelar</a>
                            </div>      
                        </div> <!--termina tercer row-->
                    </form>
                </div> <!--termina card-body-->
            </div> <!--termina card-->
        </div> <!--container-->
        
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/autor/delete.blade.php ENDPATH**/ ?>