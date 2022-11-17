<?php

namespace App\Http\Controllers;


use App\Models\Factura;
use App\Models\User;
use App\Models\Detalle;
use App\Models\Prenda;
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

        $fecha = date('Y-m-d');

        $usuarios = User::All();
        return view('factura.createfactura')->with('usuarios', $usuarios)->with('prendas', $prendas)->with('fecha', $fecha);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacturaRequest $request)
    {
        
        
        $facturas = Factura::create($request->except("_token"));

        echo "factura ;";
        //return redirect('/facturas');
        //var_dump($request->all());
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
        $usuario = User::all();
        return view('factura.editfactura')->with('factura',$factura)->with('usuario',$usuario);
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
        $factura = Factura::find($idUsuario);

        $factura->nombreCliente = $request->get('nombreCliente');
        $factura->fecha = $request->get('fecha');
        $factura->valorTotal = $request->get('valorTotal');
        $factura->estado = $request->get('estado');
        $factura->user_id = $request->get('user_id');
       

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

    public function notificacion()
    {
        $date = Carbon::now();
        $factura = Factura::whereRaw(' DATEDIFF(due_date, ? ) < ?', [$date, 30])->get();
        User::all()->each(function(User $user) use ($factura){
        $user->notify(new ProductsNotification($factura));
    });
    }
}
