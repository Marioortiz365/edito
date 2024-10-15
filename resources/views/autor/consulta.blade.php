@extends('Layout.app')

@section('titulos') 
    Consultar Autor
@endsection

@section('content')
    <div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Consultar Autor </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="{{ url('autores/'.$row[0]->id)}}" method="POST">
                        <div class="row"> <!--inicia primer row-->
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="au_nombre" placeholder="captura el nombre del libro" value="{{$row[0]->au_nombre}}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Apellido</label>
                                    <input type="text" class="form-control" name="au_apellido" placeholder="captura el tipo del libro" value="{{$row[0]->au_apellido}}" readonly>
                                </div>
                            </div>
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Telefono</label>
                                    <input type="text" name="telefono" class="form-control" placeholder="captura el precio del libro" value="{{$row[0]->telefono}}" readonly>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Calle</label>
                                    <input type="text" name="calle" class="form-control" placeholder="captura el precio del libro" value="{{$row[0]->calle}}" readonly>
                                </div>
                            </div>
                         </div>
                         <div class="row"> <!--inicia primer row-->
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" placeholder="captura el nombre del libro" value="{{$row[0]->ciudad}}" readonly>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ciudad">Estado</label>
                                    <input type="text" class="form-control" name="estado" placeholder="captura el tipo del libro" value="{{$row[0]->estado}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ciudad">Pais</label>
                                    <input type="text" class="form-control" name="pais" placeholder="captura el tipo del libro" value="{{$row[0]->pais}}" readonly>
                                </div>
                            </div>
                        </div> <!--termina primer row-->
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$row[0]->id}}">
                        {{ csrf_field() }}

                        
                        <div class="row"> <!--inicia tercer row-->
                            <div class="col-md-4 offset-md-8">
                                <a href="{{url('autores')}}" class="btn btn-outline-info">Volver</a>
                            </div>      
                        </div> <!--termina tercer row-->
                    </form>
                </div> <!--termina card-body-->
            </div> <!--termina card-->
        </div> <!--container-->
        
        
@endsection