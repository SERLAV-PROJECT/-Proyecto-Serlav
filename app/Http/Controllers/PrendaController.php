<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;

class PrendaController extends Controller
{
    

    
    public function index()
    {
        $prendas = Prenda::all();
        return view('prenda.listprenda')->with('prendas', $prendas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prenda.createprenda');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prendas = new Prenda();

        $prendas -> nombrePrenda = $request -> get('nombrePrenda');
        $prendas -> tipoTela = $request -> get('tipoTela');
        $prendas -> color = $request -> get('color');
        $prendas -> cantidad = $request -> get('cantidad');
        $prendas -> valor = $request -> get('valor');

        $prendas -> save();

        return redirect('/prendas');
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
        $prenda = Prenda::find($id);
        return view('prenda.editprenda')->with('prenda', $prenda);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prenda = Prenda::find($id); 
        
        $prenda->delete();

        return redirect('/prendas');
    }
}
