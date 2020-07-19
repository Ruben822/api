<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Institucion;
use App\Mascota;
use App\Raza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql=DB::table('mascotas')
        ->Join('razas', 'mascotas.Raza', '=', 'razas.idRaz')
        ->Join('animals', 'mascotas.Especie', '=', 'animals.idAni')
        ->Join('institucions', 'mascotas.Institucion', '=', 'institucions.idIns')
        ->orderBy('idMas','asc')
        ->get();
        return view("home",compact("sql"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especie = Animal::all();
        $institucion = Institucion::all();
        $raza = Raza::all();
        return view("addMascota",compact("especie","institucion","raza"))->with("agregar","se registro");
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
            "nombre"=>"required|min:3|max:100",
            "especie"=>"required",
            "raza"=>"required",
            "fecha"=>"required",
            "foto"=>"mimes:jpeg,jpg,png|max:1000",
            "institucion"=>"required"
        ]);
        $mas = new Mascota();
        $mas->NombreMas = $request->nombre;
        $mas->Especie = $request->especie;
        $mas->Raza = $request->raza;
        $mas->FechaNacimiento = $request->fecha;
        $mas->Institucion = $request->institucion;
        $image = $request->file('foto');
        if($image!=null){
            $image->move('imagenes', $image->getClientOriginalName());
            $mas->Foto = $image->getClientOriginalName();
        }
        $mas->save();
        $confimacion ="Se registro con exito";
        return redirect(route('inicio'))->with($confimacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sql = Mascota::findOrfail($id);
        $especie = Animal::all();
        $institucion = Institucion::all();
        $raza = Raza::all();
        return view("editMascota",compact("sql","especie","institucion","raza"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mascota)
    {
        $request->validate([
            "nombre"=>"required|min:3|max:100",
            "especie"=>"required",
            "raza"=>"required",
            "fecha"=>"required",
            "foto"=>"mimes:jpeg,jpg,png|max:1000",
            "institucion"=>"required"
        ]);
        $mas =  Mascota::findOrfail($mascota);
        $mas->NombreMas = $request->nombre;
        $mas->Especie = $request->especie;
        $mas->Raza = $request->raza;
        $mas->FechaNacimiento = $request->fecha;
        $mas->Institucion = $request->institucion;
        $image = $request->file('foto');
        if($image!=null){
            $image->move('imagenes', $image->getClientOriginalName());
            $mas->Foto = $image->getClientOriginalName();
        }
        $mas->save();
        return redirect(route('inicio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        //
    }
}
