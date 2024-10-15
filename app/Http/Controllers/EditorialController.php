<?php

namespace App\Http\Controllers;

use App\Models\editorial;
use Illuminate\Http\Request;
use PDF;
 
class EditorialController extends Controller
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
        $registro = editorial::paginate(4);

        return view('editorial.index', ['row'=>$registro]);
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
        $row = new editorial();
        return view('editorial.create',['row'=>$row]);
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
        $row = new editorial($request->all());
        $row->save();
        return redirect('editoriales');

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
        $row = editorial::find($id);
        return view('editorial.delete',['row'=>$row]);
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
        $row = editorial::find($id);
        return view('editorial.edit',['row'=>$row]);

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
        $row=editorial::find($id);
        $row->fill($request->all());
        $row->update();
        return redirect('editoriales');
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
        $row=editorial::find($id);
        $row->delete();
        return redirect('editoriales');
    }
    public function ConsultaEditorial($id){

        //echo "estoy en la función edit";
        $row = editorial::find($id); 
        return view('editorial.consulta',['row'=>$row]);
    }
    public function ConsultaTitulosEditorial($id){

        //echo "estoy en la función edit";
        $row = editorial::find($id);
        $rowlibros = $row->rtitulos()->paginate(3);
        return view('editorial.editorialTitulos',['row'=>$row,'rowlibros'=>$rowlibros]);
    } 

    public function imprimir()
    {
        //
        $rows=editorial::all();
        $pdf= PDF::loadView('pdf.editorial_listado',['rows'=>$rows]);

        return $pdf->stream('listado-editoriales-'.date('Ymd').'.pdf');
    }
}
