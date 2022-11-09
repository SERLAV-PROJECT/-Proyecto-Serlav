<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\Factura;

class PagoController extends Controller
{
    
    public function index()
    {
        $pagos = Pago::get();
        return view('pago.listpago')->with('pagos', $pagos);
    }


    public function create()
    {
        $factura = Factura::All(); 
        return view('prenda.createpago')->with('factura', $factura); 
    }


    public function store(Request $request)
    {
        
        $pagos = new Pago();

        $pagos -> valor = $request -> get('valor');
        $pagos -> estado = $request -> get('estado');
        $pagos -> factura_id = $request -> get('factura_id');

        $pagos -> save();

        return redirect('/pagos');

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $pago = Pago::find($id);
        return view('pago.editpago')->with('pago', $pago);
    }

 
    public function update(Request $request, $id)
    {
        
        $pago = Pago::find($id);
        
        $pago -> valor = $request -> get('valor');
        $pago -> estado = $request -> get('estado');
        $pago-> factura_id = $request->get('factura_id');

        $pago -> save();

        return redirect('/pagos');

    }

   
    public function destroy($id)
    {
        $pago = Pago::find($id); 
        
        $pago->delete();

        return redirect('/pagos');
    }
}
