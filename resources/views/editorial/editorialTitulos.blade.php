@extends('Layout.app')

@section('titulos') 
    Consulta de Titulos por Editorial
@endsection

@section('content')
    <div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Consulta de Titulos por Editorial</h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="{{ url('editoriales/'.$row->id)}}" method="POST">
                        <caption>Editorial</caption>
                        <div class="row"> <!--inicia primer row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <input type="text" name="id" class="form-control" value="{{$row->id}}" maxlength="10" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre de la Editorial</label>
                                <input type="text" class="form-control" name="nombre" placeholder="captura el nombre de la editorial" value="{{$row->nombre}}" maxlength="40" readonly>
                                </div>
                            </div>
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" placeholder="captura el nombre de la ciudad" value="{{$row->ciudad}}" maxlength="20" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <input type="text" name="estado" class="form-control" placeholder="captura el nombre del estado" value="{{$row->estado}}" maxlength="10" readonly>
                                </div>
                            </div>
                        </div> <!--termina segundo row-->
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$row->id}}">
                        {{ csrf_field() }}
                    </form>
                    <table class="table table-striped table-border table-hover table-sm">
                        <caption>Lista de Titulos</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($rowlibros as $libro)  
                                <tr>
                                    <td> {{ $libro->id}} </td>
                                    <td> {{ $libro->nombre}} </td>
                              
                                    
                                         
                                 @empty 
                                    <tr>
                                      <td colspan=3> No se encontraron registros</td>
                                    <tr>
                                @endforelse
                        </tbody>
                    </table>
                    <div class="row"> <!--inicia tercer row-->
                            <div class="col-md-4 ">
                                <a href="{{url('editoriales')}}" class="btn btn-outline-info">Volver</a>
                            </div>      
                        </div> <!--termina tercer row-->
                </div> <!--termina card-body-->
                
            </div> <!--termina card-->
    </div> <!--container-->
@endsection
