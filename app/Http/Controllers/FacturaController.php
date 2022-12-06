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
use Illuminate\Support\Facades\DB;
use PDF;
use App\Http\Requests\StorePrendaRequest;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sql = 'SELECT * FROM factura AS fa RIGHT JOIN users AS us ON fa.id=us.id WHERE us.email = us.email;';
        
        $usuario = DB::select($sql);

        $facturas = Factura::all();
      
        return view('factura.listfactura')->with('facturas', $facturas)->with('usuario',$usuario);
    }

    public function downloadPdf()
    {
        $facturas = Factura::all();

        view()->share('factura.pdf',$facturas);

        $pdf = PDF::loadView('factura.pdf', ['facturas' => $facturas]);

        return $pdf->download('factura.pdf');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prendas = Prenda::all();

        $sql = 'SELECT * FROM users AS us RIGHT JOIN model_has_roles AS mo ON us.id=mo.model_id WHERE mo.role_id = 3;';
        $clientes = DB::select($sql);

        $date = Carbon::now();

        $sql1 = 'SELECT * FROM users AS us RIGHT JOIN model_has_roles AS mo ON us.id=mo.model_id WHERE mo.role_id = 2 || mo.role_id = 1;';
        $usuarios = DB::select($sql1);

        return view('factura.createfactura')->with('usuarios', $usuarios)->with('clientes', $clientes)->with('prendas', $prendas)->with('date', $date);
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
    public function edit(StoreFacturaRequest $request, $idFactura)
    {
        $detalle = Detalle::where('factura_id', '=', $idFactura)->get();

        $total = 0;
        foreach ($detalle as $it){
            $total = ($it->prenda->valor + $total );
        }

        $pago = Pago::where('factura_id', '=', $idFactura)->get();

        $factura = Factura::find($idFactura);

        $sql = 'SELECT * FROM detalle AS de RIGHT JOIN prenda AS pe ON de.prenda_id=pe.id WHERE de.factura_id = '.$idFactura.' ;';

        $prendas = DB::select($sql);

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

