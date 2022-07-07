<?php

namespace App\Http\Controllers;

use App\Models\Vista;
use App\Models\Tarea;
use App\Models\Categoria;
use Illuminate\Http\Request;

class VistaController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Vista $vistas)
    {
        $vistas=Vista::get();
        return view('home', compact('vistas'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vista  $vista
     * @return \Illuminate\Http\Response
     */
    public function show(Vista $vista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vista  $vista
     * @return \Illuminate\Http\Response
     */
    public function edit(Vista $vista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vista  $vista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vista $vista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vista  $vista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vista $vista)
    {
        //
    }
}
