<?php

namespace App\Http\Controllers;

use App\Hotelpdf;
use Illuminate\Http\Request;

class HotelpdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $date = Hotelpdf::all();
        return view('hotelpdf.index',compact('date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotelpdf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required',
            'categoria' =>'required',
            'descripcion'=>''
        ]);

        Hotelpdf::create([
            'nombre' => $datos['nombre'],
            'categoria'=>$datos['categoria'],
            'descripcion' => $datos['descripcion']
        ]);

       return redirect()->route('hotelpdf.home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotelpdf  $hotelpdf
     * @return \Illuminate\Http\Response
     */
    public function show(Hotelpdf $hotelpdf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotelpdf  $hotelpdf
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotelpdf $hotelpdf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotelpdf  $hotelpdf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotelpdf $hotelpdf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotelpdf  $hotelpdf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotelpdf $hotelpdf)
    {
        //
    }
}
