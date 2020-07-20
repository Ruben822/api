<?php

namespace App\Http\Controllers;

use App\Institucion;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ins = Institucion::where("BorradoIns","=",null)->get();
        return view("homeIns",compact("ins"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("addInstitucion");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre"=>"required|min:5|max:120",
            "tel"=>"required",
            "correo"=>"required|email|unique:institucions,Correo"
        ]);

        $ins = new Institucion();
        $ins->NombreIns = $request->nombre;
        $ins->Telefono = $request->tel;
        $ins->Correo = $request->correo;
        $ins->save();
        return redirect(route("inicioI"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function borrados(Institucion $institucion)
    {
        $ins = Institucion::where("BorradoIns","!=",null)->get();
        return view("institucionesBorradas",compact("ins"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $sql = Institucion::findOrfail($id);
        return view("editInstitucion",compact("sql"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $institucion)
    {
        $request->validate([
            "nombre"=>"required|min:5|max:120",
            "tel"=>"required",
            "correo"=>"required|email|unique:institucions,Correo,".$institucion.",idIns"
        ]);

        $ins = Institucion::findOrfail($institucion);
        $ins->NombreIns = $request->nombre;
        $ins->Telefono = $request->tel;
        $ins->Correo = $request->correo;
        $ins->save();
        return redirect(route("inicioI"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy( $institucion)
    {
        $borrar = Institucion::find($institucion);
        $borrar->BorradoIns = now();
        $borrar->save();
        return redirect(route('inicioI'));
    }
}
