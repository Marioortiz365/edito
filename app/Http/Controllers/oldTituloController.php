<?php

namespace App\Http\Controllers;

use App\Models\titulo;
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
        $row = new titulo();
        return view('titulo.create',['row'=>$row]);
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
     * @param  \App\Models\titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $row = titulo::find($id);
        return view('titulo.delete',['row'=>$row]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //echo "estoy en la función edit";
        $row = titulo::find($id);
        return view('titulo.edit',['row'=>$row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\titulo  $titulo
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
     * @param  \App\Models\titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $row=titulo::find($id);
        $row->delete();
        return redirect('titulos');
    }
}
