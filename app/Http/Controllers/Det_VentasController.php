<?php

namespace App\Http\Controllers;

use App\Models\Det_Venta;
use Illuminate\Http\Request;

class Det_VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Det_Venta::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //no
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $det_Venta = new Det_Venta();
        $det_Venta->num_venta = $request->numero;
        $det_Venta->cod_producto = $request->producto;
        $det_Venta->cantidad = $request->cantidad;
        $det_Venta->precio_venta = $request->total;
        $det_Venta->save();
        return $det_Venta;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Det_Venta  $det_Venta
     * @return \Illuminate\Http\Response
     */
    public function show(Det_Venta $det_Venta)
    {
        return $det_Venta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Det_Venta  $det_Venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Det_Venta $det_Venta)
    {
        //no
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Det_Venta  $det_Venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Det_Venta $det_Venta)
    {
        $det_Venta->cantidad = $request->cantidad;
        $det_Venta->precio_venta = $request->total;
        $det_Venta->save();
        return $det_Venta;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Det_Venta  $det_Venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Det_Venta $det_Venta)
    {
        $det_Venta->estado = 0;
        $det_Venta->save();
        return $det_Venta;
    }
}
