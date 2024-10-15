@extends('pdf.layout')

@section('title','Listado de Editoriales')



@section('content')
<br />
<br />
<br />
<p> Este es el listado de editoriales disponibles en el sistema</p>

			<table class="table trable-striped table-bordered">
			  <thead>
				  <tr>
					  <td> Nombre</td>
					  <td> Ciudad </td>
						<td> Estado </td>
					  
				  </tr>	
			  </thead>	  
			  <tbody>
				  
				  @forelse($rows as $editorial)
				    {{-- mandamos el recorrido del arreglo--}}

				    <tr>
						<td> {{ $editorial->nombre }} </td>
						<td> {{ $editorial->ciudad }} </td>
						<td> {{ $editorial->estado }} </td>
					</tr>
					
				  @empty
				      <tr>
					    <td colspan=2> No se encontraron registros</td>
					  <tr>

				  @endforelse 
				         

			  </tbody>  
		    </table>	
		

@endsection