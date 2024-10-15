

<?php $__env->startSection('Autor'); ?> 
	index de Autor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Listado Autores <a href="<?php echo e(url('autores/create')); ?>" method="POST" class="btn btn-success">Agregar</a></h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <table class="table table-striped table-border table-hover table-sm">
                        <caption>Lista de Autores</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Calle</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Pais</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Borrar</th>
                                <th scope="col">Consultar Autor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>  
							    <tr>
							    	<td> <?php echo e($registro->id); ?> </td>
									<td> <?php echo e($registro->au_nombre); ?> </td>
									<td> <?php echo e($registro->au_apellido); ?> </td>
									<td> <?php echo e($registro->telefono); ?> </td>
                                    <td> <?php echo e($registro->calle); ?> </td>
                                    <td> <?php echo e($registro->ciudad); ?> </td>
                                    <td> <?php echo e($registro->estado); ?> </td>
                                    <td> <?php echo e($registro->pais); ?> </td>
                                
							        <td> <a href ="<?php echo e(url('autores/'.$registro->id.'/edit')); ?>" class ="btn btn-warning ">  <i class="fas fa-edit"></i>  </a> </td>        
                                    <td> <a href ="<?php echo e(url('autores/'.$registro->id)); ?>" class="btn btn-danger"> <i class="fas fa-trash-alt"></i>  </a></td>
									<td> <a href = "<?php echo e(url('AutorCon/'.$registro->id.'ConsultaAutor')); ?>" class ="btn btn-info">  <i class="fas fa-search-plus"></i> </a>
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

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/autor/index.blade.php ENDPATH**/ ?>