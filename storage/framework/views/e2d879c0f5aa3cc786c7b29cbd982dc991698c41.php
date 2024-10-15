

<?php $__env->startSection('titulos'); ?> 
    Consulta Titulo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
            <?php if($row): ?>  
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Consulta Titulos </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="<?php echo e(url('titulos/'.$row->id)); ?>" method="POST">
                        <div class="row"> <!--inicia primer row-->
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre del libro</label>
                                <input type="text" class="form-control" name="nombre" placeholder="captura el nombre de la editorial" value="<?php echo e($row->nombre); ?>" maxlength="40" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Tipo</label>
                                    <input type="text" class="form-control" name="tipo" placeholder="captura el tipo del libro" value="<?php echo e($row->tipo); ?>" maxlength="20" readonly>
                                </div>
                            </div>
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Precio</label>
                                    <input type="text" name="precio" class="form-control" placeholder="captura el precio del libro" value="<?php echo e($row->precio); ?>" maxlength="10" readonly>
                                </div>
                            </div>
                            
                        </div> <!--termina segundo row-->
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($row->id); ?>">
                        <?php echo e(csrf_field()); ?>


                    </form>
                </div> <!--termina card-body-->
            </div> <!--termina card-->
            



            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Agregar Nota </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="<?php echo e(url('guardarAutorTitulo/'.$row->id)); ?>" method="POST">
                        <div class="row"> <!--inicia primer row-->
                            
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="id_autor">Autor</label>
                                    <select name="id_autor" class="form-control">
                                        <option value="">Seleccione el Autor</option>
                                        <?php $__currentLoopData = $autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($nt->id); ?>" <?php if($nt->id == $row->id_autor): ?> selected <?php endif; ?> > <?php echo e($nt->au_nombre); ?></option readonly>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Nota">Nota</label>
                                    <input type="text" class="form-control" name="Nota" placeholder="captura una nota">
                                </div>
                            </div>
                        </div> <!--termina segundo row-->
                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        

                        <div class="row"> <!--inicia tercer row-->
                            <div class="col-md-4 offset-md-8">
                                <input type="submit" name="Agregar" value="Agregar" class="btn btn-outline-success" method="POST"><a href="<?php echo e(url('titulos')); ?>" class="btn btn-outline-danger">Cancelar</a>
                            </div>      
                        </div> <!--termina tercer row-->
                    </form>
                </div> <!--termina card-body-->
            </div> <!--termina card-->


            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Lista Titulos y Autores </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <table class="table table-striped table-border table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Nota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $autoresTitulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autorTitulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($autorTitulo->pivot->id); ?></td>
                                    <td><?php echo e($autorTitulo->au_nombre); ?></td>
                                    <td><?php echo e($row->nombre); ?></td>
                                    <td><?php echo e($autorTitulo->pivot->Nota); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div> <!--termina card-body-->
               
            </div> <!--termina card-->
            <?php else: ?>
                <p>No se encontró ningún título con el ID proporcionado.</p>
            <?php endif; ?>
        </div> <!--container-->
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/titulo/tituloAutor.blade.php ENDPATH**/ ?>