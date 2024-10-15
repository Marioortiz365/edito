<div class="container-fluid ">
            <div class="row pie border">
                <div class="col-md-4 text-center">
                    <h3>Sistema de Biblioteca</h3>
                    <p>Departamento de Biblioteca de la UPZ, brinda,
                    los servicios pára los estudiantes todo vía Internet</p>
                </div>
                <div class="col-md-4 ">
                    <h2>Servicios</h2>
                    <?php
                        $servicios = ['Calificaciones', 'Asesorias', 'Materias', 'Docentes'];
                        //leer arreglo de servicios (foreach)
                        foreach ($servicios as $servicio) {
                            echo "$servicio<br/>";
                        }
                    ?>
                </div>
                <div class="col-md-4">
                    <h2>Contacto</h2>
                    <b>Teléfonos:</b> <?php echo "+52 4934592536"; ?>  <br>
                    <b>Correos Electrónicos:</b> contacto@upz.edu.mx </br>
                    <b>Ubicación:</b> La calle y la dirección </br>
                </div>
            </div> 
        </div>