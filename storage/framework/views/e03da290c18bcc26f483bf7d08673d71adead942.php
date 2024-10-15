<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
   
    <style>
      body{
        background-image: url("https://a-static.besthdwallpaper.com/illustration-of-half-and-and-mountains-wallpaper-1280x768-109309_13.jpg");
        background-size: 100vw 100vh;
        background-repeat: no-repeat;
        z-index: -3;
        background-attachment: fixed;
      }
    </style>


    <title><?php echo $__env->yieldContent('titulos'); ?></title>

<link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">
  </head>
  <body>
    <header>
    
    <?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <section>    
        <div class="content">
            
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </section>    
    <footer>
        
        <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html><?php /**PATH C:\xampp\htdocs\test1\resources\views/Layout/app.blade.php ENDPATH**/ ?>