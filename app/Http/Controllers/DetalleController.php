<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalles = Detalle::all();
        return view('detalle.listdetalle')->with('detalles', $detalles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalle = Detalle::All();
        return view('detalle.createdetalle')->with('detalle', $detalle);
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
            'descripcion' => 'required | max:50'
           
        ],
        [
            'required' => 'Campo obligatorio'
        ]
        );

        $detalles = Detalle::create($datos);

        return redirect('/detalles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalle = Detalle::find($id);
        return view('detalle.editdetalle')->with('detalle', $detalle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detalle = Detalle::find($id);     

        $detalle -> descripcion = $request -> get('descripcion');
        $detalle -> 
       
        $detalle -> save();

        return redirect('/detalles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle = Detalle::find($id); 
        
        $detalle->delete();

        return redirect('/detalles');
    }
}
