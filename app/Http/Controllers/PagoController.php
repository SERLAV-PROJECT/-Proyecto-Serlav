<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\Factura;
use App\Http\Requests\StorePagoRequest;

class PagoController extends Controller
{
    
    public function index()
    {
        $pago = Pago::get();
        $factura = Factura::all();
        return view('pago.listpago')->with('pago', $pago)->with('factura',$factura);
    }


    public function create()
    {

    }


    public function store(StorePagoRequest $request)
    {
        
        $pagos = new Pago();

        $pagos -> valor = $request -> get('valor');
        
        if($pagos->valor == $request -> get('valor'))
        {
            $pagos -> estado = "Paga";
        }else{
            $pagos -> estado = "Pendiente";
        }
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
        $factura = Factura::all();
        return view('pago.editpago')->with('pago', $pago)->with('factura',$factura);
    }

 
    public function update(StorePagoRequest $request, $id)
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

