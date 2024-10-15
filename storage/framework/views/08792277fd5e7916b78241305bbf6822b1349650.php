<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-Primary">
  <a class="navbar-brand" href="#">Bienvenido</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Imagenes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Bases de datos
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Sakila</a>
          <a class="dropdown-item" href="<?php echo e(url('editoriales')); ?>">Editoriales
          </a>
          <a class="dropdown-item" href="#">Hospitales</a>
        </div>
      </li>
      <li class="nav-item">
      <a class="dropdown-item" href="#">Iniciar Sesion</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php /**PATH C:\xampp\htdocs\test1\resources\views/Layout/header.blade.php ENDPATH**/ ?>