<?php

namespace App\Http\Controllers;

use App\Models\autor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$registro=editorial::all();
        //dd($registro);
          $registro = DB::table('autores')->paginate(5);
 

        return view('autor.index', ['row'=>$registro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "estoy en la función store";
          

        $row = new autor();
        return view('autor.create',['row'=>$row]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $au_nombre = $request->input('au_nombre') ;
        $au_apellido = $request->input('au_apellido') ;
        $telefono = $request->input('telefono') ;
          $calle = $request->input('calle') ;
          $ciudad=  $request->input('ciudad');
          $estado = $request->input('estado') ;
          $pais = $request->input('pais') ;
          
        DB::insert('insert into autores(au_nombre,au_apellido,telefono,calle,ciudad,estado,pais) values(?,?,?,?,?,?,?) ',[$au_nombre,$au_apellido,$telefono,$calle,$ciudad,$estado,$pais]);

         return redirect('autores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $row = autor::find($id);
        return view('autor.delete',['row'=>$row]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $row = DB::table('autores')->select('id','au_nombre','au_apellido','telefono','calle','ciudad','estado','pais')->where('id', $id)->get();
        return view('autor.edit',['row'=>$row]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $au_nombre = $request->input('au_nombre');
    $au_apellido = $request->input('au_apellido');
    $telefono = $request->input('telefono');
    $calle = $request->input('calle');
    $ciudad = $request->input('ciudad');
    $estado = $request->input('estado');
    $pais = $request->input('pais');

    DB::table('autores')
        ->where('id', $id)
        ->update([
            'au_nombre' => $au_nombre,
            'au_apellido' => $au_apellido,
            'telefono' => $telefono,
            'calle' => $calle,
            'ciudad' => $ciudad,
            'estado' => $estado,
            'pais' => $pais
        ]);

    return redirect('autores');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('autores')->where('id', '=',$id)->delete();
        
        return redirect('autores');
    }
    public function ConsultaAutor($id){

        //echo "estoy en la función edit";
       $row = DB::table('autores')->select('id','au_nombre','au_apellido','telefono','calle','ciudad','estado','pais')->where('id', $id)->get();
        return view('autor.consulta',['row'=>$row]);
    }
}
