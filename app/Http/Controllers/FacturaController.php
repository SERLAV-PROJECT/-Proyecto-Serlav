<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\User;
use App\Models\Detalle;
use App\Models\Prenda;
use App\Models\Pago;
use App\Http\FacturaNotification;
use App\Http\Requests\StoreFacturaRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification; 

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

    public function pdf()
    {
        $facturas = Factura::all();
        return view('factura.pdf')->with('facturas', $facturas);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prendas = Prenda::all();

        $date = Carbon::now();

        $usuarios = User::All();
        return view('factura.createfactura')->with('usuarios', $usuarios)->with('prendas', $prendas)->with('date', $date);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacturaRequest $request)
    {

        $factura = new Factura();
        $factura->nombreCliente= $request->nombreCliente;
        $factura->fecha = $request->fecha;
        $factura->valorTotal = "0";
        $factura->estado = "Pendiente";
        $factura->user_id = $request->user_id;
        $factura->save();

        return redirect('/facturas/'.$factura->id.'/edit');


        //redirigir a rutas 
        //return view('factura.editfactura');
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
        $detalle = Detalle::where('factura_id', '=', $idFactura)->get();

        $total = 0;
        foreach ($detalle as $it){
            $total = ($it->prenda->valor + $total );
        }

        $pago = Pago::where('factura_id', '=', $idFactura)->get();

        var_dump($pago);

        $factura = Factura::find($idFactura);

        $prendas = Prenda::orderBy('id','DESC')->get();

        $usuario = User::all();
        return view('factura.editfactura')->with('pago', $pago)->with('factura',$factura)->with('total',$total)->with('detalle',$detalle)->with('usuario',$usuario)->with('prendas', $prendas);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFacturaRequest $request, $idFactura)
    {
        $factura = Factura::find($idFactura);

        $factura->nombreCliente = $request->get('nombreCliente');
        $factura->fecha = $request->get('fecha');
        $factura->valorTotal = $request->get('valorTotal');
        $factura->estado = "Pendiente";

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

    public function notificacion($id)
    {
        $date = Carbon::now()->addDays(30);
        $user = User::find($id);
        Factura::where('fecha', '<', $date)->get()->each(function($factura) use ($user) {
        Notification::send($user, /*new FacturaNotification($factura)*/);
        });
    }
}

