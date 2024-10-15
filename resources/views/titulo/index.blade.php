@extends('Layout.app')

@section('titulos') 
	index de Titulos
@endsection

@section('content')
	<div class="container">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h5>Listado Titulos <a href="{{url('titulos/create')}}" method="POST" class="btn btn-success">Agregar</a></h5>
                </div>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <table class="table table-striped table-border table-hover table-sm">
                        <caption>Lista de Titulos</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Editorial</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Borrar</th>
                                <th scope="col">Consulta Titulo</th>
                                <th scope="col">Consulta Autor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($row as $registro)  
							    <tr>
							    	<td> {{ $registro->id}} </td>
									<td> {{ $registro->nombre}} </td>
									<td> {{ $registro->tipo }} </td>
									<td> {{ $registro->precio }} </td>
                                    <td> {{ $registro->reditoriales->nombre }} </td>
							        <td> <a href ="{{url('titulos/'.$registro->id.'/edit') }}" class ="btn btn-warning ">  <i class="fas fa-edit"></i>  </a> </td>        
                                    <td> <a href ="{{url('titulos/'.$registro->id) }}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i>  </a></td>
									<td> <a href = "{{url('TituloCon/'.$registro->id.'ConsultaTitulo') }}" class ="btn btn-info">  <i class="fas fa-search-plus"></i> </a>
                                    </td>
                                    <td> <a href = "{{url('TituloXAut/'.$registro->id.'ConsultaTitulosAutor') }}" class ="btn btn-info">  <i class="fas fa-search-plus"></i> </a>
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
