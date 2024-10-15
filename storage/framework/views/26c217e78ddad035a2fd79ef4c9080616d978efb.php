<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Bienvenido</title>
  </head>
  <body>

    <header>
      
    </header>

    <section>
        <?php   
            
            $consulta="select * from editoriales";
            $result = mysqli_query($conexion,$consulta);
        ?>
        <div class="container-md">
          <caption>Lista de Editoriales</caption>
        <table class="table-sm table-hover table-dark">
          
            <thead>
                <tr>
                    <th scope="col">id: </th>
                    <th scope="col">Nombre: </th>
                    <th scope="col">Ciudad: </th>
                    <th scope="col">Estado: </th>

                    <th scope="col">Modificar </th>
                    <th scope="col">Borrar </th>
                    <th scope="col">Consultar </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_array($result)){
                  echo '<tr>';
                  echo '<td>'.$row['id_editoriales'].'</td>';
                  echo '<td>'.$row['nombre_editorial'].'</td>';
                  echo '<td>'.$row['ciudad'].'</td>';
                  echo '<td>'.$row['estado'].'</td>';
                  echo '<td>'.'<a href="" class="btn btn-outline-warning"> Modificar </a>'.'</td>';
                  echo '<td>'.'<a href="" class="btn btn-outline-danger"> Borrar </a>'.'</td>';
                  echo '<td>'.'<a href=""  class="btn btn-outline-info"> Consultar </a>'.'</td>';
                  echo '</tr>';
                  
                }
                ?>
            </tbody>
        </table>
        </div>
    </section>

    <footer>

    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\test1\resources\views/Layout/listadoeditoriales.blade.php ENDPATH**/ ?>