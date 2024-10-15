@extends('Layout.app')

@section('titulos') 
	Consulta de Editorial
@endsection

@section('content')
	<div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Consulta de Editorial </h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <form action="{{ url('editoriales/'.$row->id)}}" method="POST">
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

                       

                        <div class="row"> <!--inicia tercer row-->
                            <div class="col-md-4 ">
                                <a href="{{url('editoriales')}}" class="btn btn-outline-info">Volver</a>
                            </div>      
                        </div> <!--termina tercer row-->
                    </form>
                </div> <!--termina card-body-->
            </div> <!--termina card-->
        </div> <!--container-->
        
@endsection