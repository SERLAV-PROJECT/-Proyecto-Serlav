<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\User;
use App\Models\Detalle;
use App\Models\Prenda;
use App\Http\Requests\StoreFacturaRequest;
use Carbon\Carbon;

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
        $factura->valorTotal = $request->valorTotal;
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
       $detalle = Detalle::all();

        $factura = Factura::find($idFactura);

       
        $prendas = Prenda::all();

        $usuario = User::all();
        return view('factura.editfactura')->with('factura',$factura)->with('detalle',$detalle)->with('usuario',$usuario)->with('prendas', $prendas);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFacturaRequest $request, $idUsuario)
    {
        /*$factura = Factura::find($idFactura);

        $facturas->nombreCliente = $request->get('nombreCliente');
        $facturas->fecha = $request->get('fecha');
        $facturas->valorTotal = $request->get('valorTotal');
        $facturas->estado = $request->get('estado');
        $factura->user_id = $request->get('user_id');
       

        $factura->save();

        return redirect('/facturas');*/
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

    public function notificacion()
    {
        /*$date = Carbon::now();
        $factura = Factura::whereRaw(' DATEDIFF(due_date, ? ) < ?', [$date, 30])->get();
        User::all()->each(function(User $user) use ($factura){
        $user->notify(new ProductsNotification($factura));*/
    }
}

