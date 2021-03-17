<?php

namespace App\Http\Controllers;

use App\Models\receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas = receta::paginate(3);
        return view('index',compact('recetas'));
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
        receta::create($request->all());
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(receta $id)
    {
        $receta = $id;
        return view('ver',compact('receta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(receta $id)
    {
           $receta = $id;
        return view('edit',compact('receta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, receta $id)
    {


        $id->update($request->all());

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(receta $id)
    {
        $id->delete();
        return back();
    }
}
