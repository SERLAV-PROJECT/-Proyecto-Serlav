<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\User;

use App\Http\Requests\StoreFacturaRequest;

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
        $usuario = User::all();
        return view('factura.listfactura')->with('facturas', $facturas)->with('usuario',$usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = User::All();
   
        return view('factura.createfactura')->with('usuario', $usuario);
        


    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacturaRequest $request)
    {

        $facturas = new Factura;

        $facturas->nombreCliente = $request->get('nombreCliente');
        $facturas->fecha = $request->get('fecha');
        $facturas->valorTotal = $request->get('valorTotal');
        $facturas->estado = $request->get('estado');
        $facturas->user_id = $request->get('user_id');
      

        $facturas->save();
        
        return redirect('/facturas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idUsuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factura = Factura::find($id);
        return view('factura.editfactura')->with('factura',$factura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFacturaRequest $request, $id)
    {
        $factura = Factura::find($id);

        $factura->nombreCliente = $request->get('nombreCliente');
        $factura->fecha = $request->get('fecha');
        $factura->valorTotal = $request->get('valorTotal');
        $factura->estado = $request->get('estado');
        $factura->user_id = $request->get('user_id');
    
        $factura->save();

        return redirect()->route('/facturas', $id)->with('success', 'Datos Guardados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura = Factura::find($id);
        $factura->delete();

        return redirect('/facturas');
    }
}
