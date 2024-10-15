<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <form method="POST" action="<?php echo e(route('register')); ?>" class="card">
        <?php echo csrf_field(); ?>
        <div >
            <img src="<?php echo e(asset('images/upz_logo.png')); ?>" title="UPZ" class="img-responsive" width="160" height="150">
        </div>
        <div >
            <h1> Registro</h1>
            <div class="input-box">
                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Nombre">
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Correo Electrónico">
                <i class="bx bxs-envelope"></i>
            </div>
            <div class="input-box">
                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password" placeholder="Contraseña">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="input-box">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <input type="submit" class="btn" value="Registrarse" />
            <div>
               <br> 
            </div>
            <div class="register-link">
                    <p>¿Ya tienes una cuenta? <a href="<?php echo e(route('login')); ?>">Inicia sesión</a></p>
                </div>
            <div>
               <br> 
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/auth/register.blade.php ENDPATH**/ ?>