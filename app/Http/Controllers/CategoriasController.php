<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Categoria::get();
        return view('categorias.index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nombre_categoria'=>'required',
        ]);

        $cat=new Categoria;
        $cat->nombre_categoria=$request->nombre_categoria;
        $cat->descripcion=$request->descripcion;
        $cat->save();
        return redirect()->route('categorias.index')->with('success', 'Categoria añadida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $cat)
    {
        return view('categorias.update', ['cat'=>$cat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cat)
    {
        $request->validate([
            'nombre_categoria'=>'required',
        ]);

        $cat= Categoria::find($cat);
        $cat->nombre_categoria=$request->nombre_categoria;
        $cat->descripcion=$request->descripcion;
        $cat->save();
        return redirect()->route('categorias.index')->with('success', 'Categoria actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cat)
    {
        $cat=Categoria::find($cat);
        $cat->each->delete();
        return redirect()->route('categorias.index');
    }
}
