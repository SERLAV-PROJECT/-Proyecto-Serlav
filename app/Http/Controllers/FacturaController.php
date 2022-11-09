<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\User;
use App\Models\Detalle;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::all();
        return view('factura.listfactura')->with('facturas', $facturas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = User::All();
        $detalle = Detalle::All();
        return view('factura.createfactura', ['usuario', $usuario , 'detalle', $detalle]);


    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $facturas = new Factura;

        $facturas->nombreCliente = $request->get('nombreCliente');
        $facturas->fecha = $request->get('fecha');
        $facturas->valorTotal = $request->get('valorTotal');
        $facturas->estado = $request->get('estado');
        $facturas->idUsuario = $request->get('usuario_id');
        $facturas->idDetalle = $request->get('detalle_id');

        $facturas->save();
        
        return redirect('/facturas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idUsuario
     * @return \Illuminate\Http\Response
     */
    public function show($idFactura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit($idFactura)
    {
        $factura = Factura::find($idFactura);
        return view('factura.editfactura')->with('factura',$factura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idFactura)
    {
        $factura = Factura::find($idFactura);

        $factura->nombreCliente = $request->get('nombreCliente');
        $factura->fecha = $request->get('fecha');
        $factura->valorTotal = $request->get('valorTotal');
        $factura->estado = $request->get('estado');
        $factura->idUsuario = $request->get('usuario_id');
        $factura->idDetalle = $request->get('detalle_id');

        $factura->save();

        return redirect('/facturas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($idFactura)
    {
        $factura = Factura::find($idFactura);
        $factura->delete();

        return redirect('/facturas');
    }
}
