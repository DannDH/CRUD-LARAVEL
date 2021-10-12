<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use Illuminate\Http\Request;
use App\Http\Controllers\ActividadesController;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['actividades'] = Actividades::paginate(5);
        return view('actividad.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('actividad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosActividad = request()->except('_token');
        Actividades::insert($datosActividad);

        return redirect('actividad')->with('mensaje','Actividad agregada.');

        //return response()->json($datosActividad);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show(Actividades $actividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $actividades = Actividades::findOrFail($id);
        return view('actividad.edit', compact('actividades'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosActividad = request()->except(['_token','_method']);
        Actividades::where('id','=',$id)->update($datosActividad);
        $actividades = Actividades::findOrFail($id);
        return view('actividad.edit', compact('actividades'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Actividades::destroy($id);
        return redirect('actividad')->with('mensaje','La actividad ha sido borrada.');
    }
}
