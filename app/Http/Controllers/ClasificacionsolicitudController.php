<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\ClasificacionSolicitudRequest;


use App\Clasificacionsolicitud;

class ClasificacionsolicitudController extends Controller
{
    public function index()
    {
    	$ClasSol = Clasificacionsolicitud::orderBy('id','asc')->paginate();

    	return view('clasificacionsolicitud.index', compact('ClasSol'));
    }

    public function create()
    {
    	return view('clasificacionsolicitud.create');
    }

    public function store(ClasificacionSolicitudRequest $request)
    {
    	#$tmp = Clasificacionsolicitud::create([$request->desclasificacion]);
    	#return $tmp->desclasificacion;
    	$tmp = new Clasificacionsolicitud();
    	$tmp->desclasificacion = $request->desclasificacion;
    	$tmp->save();
    	return redirect('clasificacionsolicitud');
    }

        public function show($id)
    {
        $ClasSol = Clasificacionsolicitud::find($id);

        return view('clasificacionsolicitud.show',['ClasSol'=>$ClasSol]);
        
    }

    public function edit($id)
    {
        $ClasSol = Clasificacionsolicitud::find($id);

        return view('clasificacionsolicitud.edit',['ClasSol'=>$ClasSol]);
        
    }

    public function update($id, ClasificacionSolicitudRequest $request)
    {
        $ClasSol = Clasificacionsolicitud::find($id);
        //$input = Request::all();
        //$ClasSol->update($input);
        $ClasSol->fill($request->all());
        $ClasSol->save();
        return redirect('clasificacionsolicitud');
    }

    public function destroy($id)
    {
        Clasificacionsolicitud::destroy($id);
        return redirect('clasificacionsolicitud');
    }
    
}
