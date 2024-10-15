<div class="container-fluid mb-4">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #2AEFB6;">
              <a class="navbar-brand" href="#">Publicaciones</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('home')); ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('editoriales')); ?>">Editoriales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('titulos')); ?>">Titulos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('autores')); ?>">Autores</a>
                  </li>
                </ul>
                
                <div id="app">
        
            <div class="container">
                <a class="navbar-brand" >
                    Usuario
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="navbar-brand" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>
                                <li>
                                <div aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Cerrar Sesion')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                                </li>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
      

    </div>
                
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>
        </div><?php /**PATH C:\xampp\htdocs\unidad1\resources\views/Layout/header.blade.php ENDPATH**/ ?>