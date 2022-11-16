<?php

namespace App\Http\Controllers;


use App\Models\Detalle;
use App\Models\Prenda;
use App\Models\Factura;
use App\Http\Requests\StoreDetalleRequest;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle = Detalle::all();
        return view('detalle.listdetalle')->with('detalle', $detalle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prenda = Prenda::All();
        $factura = Factura::All();
        return view('detalle.createdetalle')->with('prenda',$prenda)->with('factura',$factura);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetalleRequest $request)
    {
        $detalles = new Detalle;

        $detalles -> descripcion = $request -> get('descripcion');
        $detalles -> prenda_id = $request -> get('prenda_id');
        $detalles -> factura_id = $request -> get('factura_id');


        $detalles -> save();

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
        $prenda = Prenda::All();
        $factura = Factura::All();
        return view('detalle.editdetalle')->with('detalle', $detalle)->with('prenda',$prenda)->with('factura',$factura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDetalleRequest $request, $id)
    {
        $detalle = Detalle::find($id);     

        $detalle -> descripcion = $request -> get('descripcion');
        $detalle -> prenda_id = $request -> get('prenda_id');
        $detalle -> factura_id = $request -> get('factura_id');
     
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
