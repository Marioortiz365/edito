<div class="container-fluid">
      <div class="row footer borde">
      <div class="col-md-4 text-center">

            <h3>Creador</h3>
            <p>Departamento de la via publia de Durango</p>
          </div>
          
            <div class="col-md-4">
              <h2>Servicios</h2>
              <?php
                $servicios = ['Calificaciones','Asesorias','Materias','Docentes'];

                foreach($servicios as $servicio){
                  echo "$servicio<br/>";
                }
              ?>
            </div>

            
          <div class="col-md-4">
              <h2>Contactos</h2>   
              <b>Telefonos:</b> <?php echo "493-178-32-12"; ?>
              <br>
              <b>Correos Electronicos:</b> Contacto@upz.edu.mx <br/>
              <b>Ubicaciones: </b> Distrito de Madrid Colombia Puerto Rico
              <br/>
          </div>

        </div>
      </div><?php /**PATH C:\xampp\htdocs\test1\resources\views/Layout/footer.blade.php ENDPATH**/ ?>