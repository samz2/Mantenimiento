<?php

namespace App\Http\Controllers;

use App\personas;
use Illuminate\Http\Request;
use App\User;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Personas::all();
        return compact("personas");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $persona = new Personas();
            $persona->Documento     = $request->persona["dni"];
            $persona->Nombres       = $request->persona["nombres"];
            $persona->Apellidos     = $request->persona["apellidos"];
            $persona->Direccion     = $request->persona["direccion"];
            $persona->Celular       = $request->persona["celular"];
            $persona->Correo        = $request->persona["correo"];
            $persona->Tipo          = $request->persona["tipo"];
            $persona->Genero        = $request->persona["genero"];
            $persona->Created_at    = date("Y-m-d");
            $persona->save();
            dd($persona);
        } catch (\Throwable $th) {
            dd($th);
        }
        
        $type   = "success";
        $title  = "Ok";
        $text   = "Se han guardado los datos correctamente";

        return compact("type","title","text");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $clientes = User::where("tipo",3)->count();
        return compact("clientes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function persona($dni)
    {
        $persona = Personas::where("Documento",$dni)->first();
        return compact("persona");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit(personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(personas $personas)
    {
        //
    }
}
