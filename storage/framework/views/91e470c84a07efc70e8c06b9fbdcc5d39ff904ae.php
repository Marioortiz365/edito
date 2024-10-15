

<?php $__env->startSection('title','Listado de Editoriales'); ?>



<?php $__env->startSection('content'); ?>
<br />
<br />
<br />
<p> Este es el listado de editoriales disponibles en el sistema</p>

			<table class="table trable-striped table-bordered">
			  <thead>
				  <tr>
					  <td> Nombre</td>
					  <td> Ciudad </td>
						<td> Estado </td>
					  
				  </tr>	
			  </thead>	  
			  <tbody>
				  
				  <?php $__empty_1 = true; $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $editorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				    

				    <tr>
						<td> <?php echo e($editorial->nombre); ?> </td>
						<td> <?php echo e($editorial->ciudad); ?> </td>
						<td> <?php echo e($editorial->estado); ?> </td>
					</tr>
					
				  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				      <tr>
					    <td colspan=2> No se encontraron registros</td>
					  <tr>

				  <?php endif; ?> 
				         

			  </tbody>  
		    </table>	
		

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pdf.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/pdf/editorial_listado.blade.php ENDPATH**/ ?>