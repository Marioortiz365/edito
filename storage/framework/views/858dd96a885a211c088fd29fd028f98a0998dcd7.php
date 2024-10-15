

<?php $__env->startSection('titulos'); ?> 
    Consulta de Titulos por Editorial
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Consulta de Titulos por Editorial</h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="<?php echo e(url('editoriales/'.$row->id)); ?>" method="POST">
                        <caption>Editorial</caption>
                        <div class="row"> <!--inicia primer row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <input type="text" name="id" class="form-control" value="<?php echo e($row->id); ?>" maxlength="10" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre de la Editorial</label>
                                <input type="text" class="form-control" name="nombre" placeholder="captura el nombre de la editorial" value="<?php echo e($row->nombre); ?>" maxlength="40" readonly>
                                </div>
                            </div>
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" placeholder="captura el nombre de la ciudad" value="<?php echo e($row->ciudad); ?>" maxlength="20" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <input type="text" name="estado" class="form-control" placeholder="captura el nombre del estado" value="<?php echo e($row->estado); ?>" maxlength="10" readonly>
                                </div>
                            </div>
                        </div> <!--termina segundo row-->
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($row->id); ?>">
                        <?php echo e(csrf_field()); ?>

                    </form>
                    <table class="table table-striped table-border table-hover table-sm">
                        <caption>Lista de Titulos</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $rowlibros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>  
                                <tr>
                                    <td> <?php echo e($libro->id); ?> </td>
                                    <td> <?php echo e($libro->nombre); ?> </td>
                              
                                    
                                         
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                                    <tr>
                                      <td colspan=3> No se encontraron registros</td>
                                    <tr>
                                <?php endif; ?>
                        </tbody>
                    </table>
                    <div class="row"> <!--inicia tercer row-->
                            <div class="col-md-4 ">
                                <a href="<?php echo e(url('editoriales')); ?>" class="btn btn-outline-info">Volver</a>
                            </div>      
                        </div> <!--termina tercer row-->
                </div> <!--termina card-body-->
                
            </div> <!--termina card-->
    </div> <!--container-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/editorial/editorialTitulos.blade.php ENDPATH**/ ?>