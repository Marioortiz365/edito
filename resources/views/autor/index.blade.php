@extends('Layout.app')

@section('Autor') 
	index de Autor
@endsection

@section('content')
	<div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Listado Autores <a href="{{url('autores/create')}}" method="POST" class="btn btn-success">Agregar</a></h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <table class="table table-striped table-border table-hover table-sm">
                        <caption>Lista de Autores</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Calle</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Pais</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Borrar</th>
                                <th scope="col">Consultar Autor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($row as $registro)  
							    <tr>
							    	<td> {{ $registro->id}} </td>
									<td> {{ $registro->au_nombre}} </td>
									<td> {{ $registro->au_apellido }} </td>
									<td> {{ $registro->telefono }} </td>
                                    <td> {{ $registro->calle }} </td>
                                    <td> {{ $registro->ciudad }} </td>
                                    <td> {{ $registro->estado }} </td>
                                    <td> {{ $registro->pais }} </td>
                                
							        <td> <a href ="{{url('autores/'.$registro->id.'/edit') }}" class ="btn btn-warning ">  <i class="fas fa-edit"></i>  </a> </td>        
                                    <td> <a href ="{{url('autores/'.$registro->id) }}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i>  </a></td>
									<td> <a href = "{{url('AutorCon/'.$registro->id.'ConsultaAutor') }}" class ="btn btn-info">  <i class="fas fa-search-plus"></i> </a>
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
