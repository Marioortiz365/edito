@extends('Layout.app')

@section('titulos') 
    Consulta Titulo
@endsection

@section('content')
    <div class="container">
            @if ($row)  
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Consulta Titulos </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="{{ url('titulos/'.$row->id)}}" method="POST">
                        <div class="row"> <!--inicia primer row-->
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre del libro</label>
                                <input type="text" class="form-control" name="nombre" placeholder="captura el nombre de la editorial" value="{{$row->nombre}}" maxlength="40" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Tipo</label>
                                    <input type="text" class="form-control" name="tipo" placeholder="captura el tipo del libro" value="{{$row->tipo}}" maxlength="20" readonly>
                                </div>
                            </div>
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Precio</label>
                                    <input type="text" name="precio" class="form-control" placeholder="captura el precio del libro" value="{{$row->precio}}" maxlength="10" readonly>
                                </div>
                            </div>
                            
                        </div> <!--termina segundo row-->
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$row->id}}">
                        {{ csrf_field() }}

                    </form>
                </div> <!--termina card-body-->
            </div> <!--termina card-->
            



            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Agregar Nota </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="{{ url('guardarAutorTitulo/'.$row->id) }}" method="POST">
                        <div class="row"> <!--inicia primer row-->
                            
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="id_autor">Autor</label>
                                    <select name="id_autor" class="form-control">
                                        <option value="">Seleccione el Autor</option>
                                        @foreach($autores as $nt)
                                <option value="{{ $nt->id}}" @if($nt->id == $row->id_autor) selected @endif > {{$nt->au_nombre }}</option readonly>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Nota">Nota</label>
                                    <input type="text" class="form-control" name="Nota" placeholder="captura una nota">
                                </div>
                            </div>
                        </div> <!--termina segundo row-->
                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        

                        <div class="row"> <!--inicia tercer row-->
                            <div class="col-md-4 offset-md-8">
                                <input type="submit" name="Agregar" value="Agregar" class="btn btn-outline-success" method="POST"><a href="{{url('titulos')}}" class="btn btn-outline-danger">Cancelar</a>
                            </div>      
                        </div> <!--termina tercer row-->
                    </form>
                </div> <!--termina card-body-->
            </div> <!--termina card-->


            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Lista Titulos y Autores </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <table class="table table-striped table-border table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Nota</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($autoresTitulos as $autorTitulo)
                                <tr>
                                    <td>{{ $autorTitulo->pivot->id }}</td>
                                    <td>{{ $autorTitulo->au_nombre }}</td>
                                    <td>{{ $row->nombre}}</td>
                                    <td>{{ $autorTitulo->pivot->Nota }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!--termina card-body-->
               
            </div> <!--termina card-->
            @else
                <p>No se encontró ningún título con el ID proporcionado.</p>
            @endif
        </div> <!--container-->
        
@endsection