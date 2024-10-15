<?php $__env->startSection('titulos'); ?>
    Universadad Politécnica de Zacatecas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="offset-md-1 col-md-10 text-center">
                <h1>Universadad Politécnica de Zacatecas</h1>
            </div>
        </div>
    <div class="content">
        <div class="row">
            <div class="offset-md-2 col-md-8 text-center">
                <img src="<?php echo e(asset('images/upz.png')); ?>" title="UPZ" class="img-responsive">
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/home.blade.php ENDPATH**/ ?>