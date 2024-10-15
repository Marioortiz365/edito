@extends('Layout.app')

@section('titulos') 
	index de Editoriales
@endsection

@section('content')
	<div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Listado Editoriales <a href="{{url('editoriales/create')}}" method="POST" class="btn btn-success">Agregar</a></h5>
                    <a href="{{ url('editoriales_imprimir') }}"  method="POST" class="btn btn-dark">Imprimir</a>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <table class="table table-striped table-border table-hover table-sm">
                        <caption>Lista de Editoriales</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Borrar</th>
                                <th scope="col">Consulta Editorial</th>
                                <th scope="col">TitulosXEditorial</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($row as $registro)  
							    <tr>
							    	<td> {{ $registro->id}} </td>
									<td> {{ $registro->nombre}} </td>
									<td> {{ $registro->ciudad }} </td>
									<td> {{ $registro->estado }} </td>
							        <td> <a href ="{{url('editoriales/'.$registro->id.'/edit') }}" class ="btn btn-warning ">  <i class="fas fa-edit"></i>  </a> </td>        
                                    <td> <a href ="{{url('editoriales/'.$registro->id) }}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i>  </a></td>
									<td> <a href = "{{url('EditorialCon/'.$registro->id.'ConsultaEditorial') }}" class ="btn btn-info">  <i class="fas fa-search-plus"></i> </a>
								  	</td>
                                    <td> <a href = "{{url('TitulosXE/'.$registro->id.'ConsunltaTitulosEditorial') }}" class ="btn btn-info">  <i class="fas fa-search-plus"></i> </a>
                                    </td>
								  </tr>
								         
							     @empty 
								    <tr>
									  <td colspan=3> No se encontraron registros</td>
									<tr>
								@endforelse 
                        </tbody>
                    </table>
                </div> <!--termina card-body-->
                {{ $row->links() }}
            </div> <!--termina card-->
        </div> <!--container-->
@endsection
