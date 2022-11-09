<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Prenda;

class PrendaController extends Controller
{
    

    
    public function index()
    {
        $prendas = Prenda::get();
        return view('prenda.listprenda')->with('prendas', $prendas);
    }

   
    public function create()
    {
        $factura = Factura::All(); 
        return view('prenda.createprenda')->with('factura', $factura);
    }

   
    public function store(Request $request)
    {
        $prendas = new Prenda; 
       
        $prendas -> nombrePrenda = $request -> get('nombrePrenda');

        $prendas -> tipoTela = $request -> get('tipoTela'); 
        $prendas -> color = $request -> get('color');
        $prendas -> cantidad = $request -> get('cantidad');
        $prendas -> valor = $request -> get('valor');
        
        $prendas -> save();

        return redirect('/prendas');
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $prenda = Prenda::find($id);
        return view('prenda.editprenda')->with('prenda', $prenda);
    }


    public function update(Request $request, $id)
    {
        $prenda = Prenda::find($id);     

        $prenda -> nombrePrenda = $request -> get('nombrePrenda');
        $prenda -> tipoTela = $request -> get('tipoTela');
        $prenda -> color = $request -> get('color');
        $prenda -> cantidad = $request -> get('cantidad');
        $prenda -> valor = $request -> get('valor');
       

        $prenda -> save();

        return redirect('/prendas');
    }

    public function destroy($id)
    {
        $prenda = Prenda::find($id); 
        
        $prenda->delete();

        return redirect('/prendas');
    }
}
