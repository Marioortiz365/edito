

<?php $__env->startSection('titulos'); ?> 
	index de Editoriales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Listado Editoriales <a href="<?php echo e(url('editoriales/create')); ?>" method="POST" class="btn btn-success">Agregar</a></h5>
                    <a href="<?php echo e(url('editoriales_imprimir')); ?>"  method="POST" class="btn btn-dark">Imprimir</a>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <table class="table table-striped table-border table-hover table-sm">
                        <caption>Lista de Editoriales</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Borrar</th>
                                <th scope="col">Consulta Editorial</th>
                                <th scope="col">TitulosXEditorial</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>  
							    <tr>
							    	<td> <?php echo e($registro->id); ?> </td>
									<td> <?php echo e($registro->nombre); ?> </td>
									<td> <?php echo e($registro->ciudad); ?> </td>
									<td> <?php echo e($registro->estado); ?> </td>
							        <td> <a href ="<?php echo e(url('editoriales/'.$registro->id.'/edit')); ?>" class ="btn btn-warning ">  <i class="fas fa-edit"></i>  </a> </td>        
                                    <td> <a href ="<?php echo e(url('editoriales/'.$registro->id)); ?>" class="btn btn-danger"> <i class="fas fa-trash-alt"></i>  </a></td>
									<td> <a href = "<?php echo e(url('EditorialCon/'.$registro->id.'ConsultaEditorial')); ?>" class ="btn btn-info">  <i class="fas fa-search-plus"></i> </a>
								  	</td>
                                    <td> <a href = "<?php echo e(url('TitulosXE/'.$registro->id.'ConsunltaTitulosEditorial')); ?>" class ="btn btn-info">  <i class="fas fa-search-plus"></i> </a>
                                    </td>
								  </tr>
								         
							     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
								    <tr>
									  <td colspan=3> No se encontraron registros</td>
									<tr>
								<?php endif; ?> 
                        </tbody>
                    </table>
                </div> <!--termina card-body-->
                <?php echo e($row->links()); ?>

            </div> <!--termina card-->
        </div> <!--container-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/editorial/index.blade.php ENDPATH**/ ?>