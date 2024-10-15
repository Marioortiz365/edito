@extends('Layout.app')

@section('titulos') 
	Editar un Titulo
@endsection

@section('content')
	<div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Editar Titulo </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="{{ url('titulos/'.$row->id)}}" method="POST">
                        <div class="row"> <!--inicia primer row-->
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="captura el nombre del libro" value="{{$row->nombre}}" maxlength="40">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Tipo</label>
                                    <input type="text" class="form-control" name="tipo" placeholder="captura el tipo del libro" value="{{$row->tipo}}" maxlength="20">
                                </div>
                            </div>
                        </div> <!--termina primer row-->

                        <div class="row"> <!--inicia segundo row-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Precio</label>
                                    <input type="text" name="precio" class="form-control" placeholder="captura el precio del libro" value="{{$row->precio}}" maxlength="10">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_editorial">Editorial</label>
                                    <select name="id_editorial" class="form-control">
                                        <option value="">Seleccione la Editorial</option>
                                        @foreach($nom_editorial as $ne)
                                <option value="{{ $ne->id}}" @if($ne->id == $row->id_editorial) selected @endif > {{$ne->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div> <!--termina segundo row-->
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$row->id}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="_method" value="PUT">

                        <div class="row"> <!--inicia tercer row-->
                            <div class="col-md-4 offset-md-8">
                                <input type="submit" name="Modificar" value="Modificar" class="btn btn-outline-success"><a href="{{url('titulos')}}" class="btn btn-outline-danger">Cancelar</a>
                            </div>      
                        </div> <!--termina tercer row-->
                    </form>
                </div> <!--termina card-body-->
            </div> <!--termina card-->
        </div> <!--container-->
        
@endsection