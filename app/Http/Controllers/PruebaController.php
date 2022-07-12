<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use App\Models\Municipio;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pruebas= Prueba::get();
        return view('municipios.index', compact('pruebas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Prueba $pruebas)
    {
        $muns=Municipio::select('id', 'nombre')->get();
        return view('municipios.create', ['muns'=>$muns, 'pruebas'=>$pruebas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'municipio_id'=>'required',
            'tiempo'=>'required'
        ]);

        $prueba=new Prueba;
        $prueba->municipio_id=$request->municipio_id;
        $prueba->tiempo=$request->tiempo;

        $prueba->save();

        return redirect()->route('prueba.index')->with('succes', 'añadido');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show(Prueba $prueba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit(Prueba $prueba)
    {
        $muns=Municipio::select('id','nombre')->get();
        return view('municipios.update', ['prueba'=>$prueba, 'muns'=>$muns]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $prueba)
    {
        $prueba = Prueba::find($prueba);
        $prueba->municipio_id=$request->municipio_id;
        $prueba->tiempo=$request->tiempo;

        $prueba->save();

        return redirect()->route('prueba.index')->with('success', 'Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prueba $prueba)
    {
        $prueba=Prueba::find($prueba);
        $prueba->each->delete();
        return redirect()->route('prueba.index')->with('success', 'Borrado');
    }
}
