<?php

namespace App\Http\Controllers;

use App\Tiposolicitud;
use Illuminate\Http\Request;
use App\Clasificacionsolicitud;

class TiposolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tiposolicitud.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ClasSol = Clasificacionsolicitud::pluck('desclasificacion','id');
        return view('tiposolicitud.create',compact('ClasSol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tmp = new Tiposolicitud();
        $tmp->tipoclas = $request->tipoclas;
        $tmp->save();
        return redirect('tiposolicitud');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tiposolicitud  $tiposolicitud
     * @return \Illuminate\Http\Response
     */
    public function show(Tiposolicitud $tiposolicitud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tiposolicitud  $tiposolicitud
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiposolicitud $tiposolicitud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tiposolicitud  $tiposolicitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiposolicitud $tiposolicitud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tiposolicitud  $tiposolicitud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiposolicitud $tiposolicitud)
    {
        //
    }
}
