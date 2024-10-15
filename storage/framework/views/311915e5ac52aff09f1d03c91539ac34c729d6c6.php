<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <form method="POST" action="<?php echo e(route('login')); ?>" class="card">
        <?php echo csrf_field(); ?>
        <div >
            <img src="<?php echo e(asset('images/upz_logo.png')); ?>" title="UPZ" class="img-responsive" width="160" height="150">
        </div>
        <div >
            <h1> Iniciar Sesión</h1>
            <div class="input-box">
                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Correo Electrónico">
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Contraseña">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <input type="submit" class="btn" value="Iniciar Sesión" />
            
            <?php if(Route::has('register')): ?>
                <div class="register-link">
                    <p>¿No estás registrado? <a href="<?php echo e(route('register')); ?>">Registrarse</a></p>
                </div>
            <?php endif; ?>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/auth/login.blade.php ENDPATH**/ ?>