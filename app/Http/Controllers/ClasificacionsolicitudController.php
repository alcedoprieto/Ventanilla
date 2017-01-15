<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clasificacionsolicitud;

class ClasificacionsolicitudController extends Controller
{
    public function create()
    {
    	return view('clasificacionsolicitud.create');
    }

    public function store(Request $request)
    {
    	#$tmp = Clasificacionsolicitud::create([$request->desclasificacion]);
    	#return $tmp->desclasificacion;
    	$tmp = new Clasificacionsolicitud();
    	$tmp->desclasificacion = $request->desclasificacion;
    	$tmp->save();
    	return $tmp->desclasificacion;
    }

}
