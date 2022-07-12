<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas= Tarea::get();
        $cats=Categoria::select('id', 'nombre_categoria')->get();
        return view('tareas.index',['tareas'=>$tareas, 'cats'=>$cats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function create(Tarea $tarea)
    {
        $cats=Categoria::select('id', 'nombre_categoria')->get();
        
        return view('tareas.create', ['tarea'=>$tarea, 'cats'=>$cats]);
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
            'nombre_tarea'=>'required',
            'categoria_id'=>'required'
        ]);

        $tarea= new Tarea;
        $tarea->nombre_tarea=$request->nombre_tarea;
        $tarea->descripcion=$request->descripcion;
        $tarea->categoria_id=$request->categoria_id;//auth()->categorias()->id();

        $tarea->save();
        return redirect()->route('tarea.index')->with('success', 'Tarea añadida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        $cats=Categoria::select('id', 'nombre_categoria')->get();
        return view('tareas.update', ['tarea'=>$tarea, 'cats'=>$cats]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tarea)
    {

        $tarea= Tarea::find($tarea);
        $tarea->nombre_tarea=$request->nombre_tarea;
        $tarea->descripcion=$request->descripcion;
        $tarea->categoria_id=$request->categoria_id;

        $tarea->save();
        return redirect()->route('tarea.index')->with('success', 'Tarea actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea=Tarea::find($tarea);
        $tarea->each->delete();
        return redirect()->route('Tarea.index')->with('success', 'Tarea borrada');
    }
}
