<?php

namespace App\Http\Controllers;

use App\Models\titulo;
use App\Models\editorial;
use App\Models\autor;
use Illuminate\Http\Request;

class TituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$registro=editorial::all();
        //dd($registro);
        $registro = titulo::paginate(4);

        return view('titulo.index', ['row'=>$registro]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //echo "estoy en la función create";
        $nom_editorial=editorial::all();
        $row = new titulo();
        return view('titulo.create',['row'=>$row,'nom_editorial'=>$nom_editorial]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //echo "estoy en la función store";
        //echo $request->nombre;
        $row = new titulo($request->all());
        $row->save();
        return redirect('titulos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $nom_editorial=editorial::all();
        $row = titulo::find($id);
        return view('titulo.delete',['row'=>$row,'nom_editorial'=>$nom_editorial]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //echo "estoy en la función edit";
        $nom_editorial=editorial::all();
        $row = titulo::find($id);
        return view('titulo.edit',['row'=>$row,'nom_editorial'=>$nom_editorial]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //echo "estoy en la función update";
        $row=titulo::find($id);
        $row->fill($request->all());
        $row->update();
        return redirect('titulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $row=titulo::find($id);
        $row->delete();
        return redirect('titulos');
    }
    public function ConsultaTitulo($id){

        //echo "estoy en la función edit";
        $nom_editorial=editorial::all();
        $row = titulo::find($id);
        return view('titulo.consulta',['row'=>$row,'nom_editorial'=>$nom_editorial]);
    }
    public function ConsultaTitulosAutor($id){ 

        //echo "estoy en la función edit";
        
        $nom_autores=autor::all();

        $row = titulo::find($id);

        $autoresTitulos = $row->rautores()->withPivot('id','Nota')->get();

        //return view('titulo.tituloAutor',['row'=>$row,'autores'=>$nom_autores]);

        return view('titulo.tituloAutor', ['row' => $row, 'autores' => $nom_autores,'autoresTitulos' => $autoresTitulos]);
    }
    public function guardarAutorTitulo(Request $request, $id){

        $id_autor = $request->id_autor;
        $Nota = $request->Nota;

        $row=titulo::find($id);

        $row->rautores()->attach($id_autor, ['Nota' => $Nota]);

        return redirect('titulos');
        
    }

}
