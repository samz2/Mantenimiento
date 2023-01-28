<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = \Auth::user()->tipo;
        return compact('id');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user)
    {
        $hoy = date("Y-m-d");
        $usuario = new user();
        $usuario->user = $user;
        $usuario->password = bcrypt("46351299abc");
        $usuario->tipo = 5;
        $usuario->avatar = 5;
        $usuario->created_at = $hoy;
        $usuario->save();    
        return "Ok4";
    }

    public function reset($user)
    {
        try {
            user::where("user",$user)->update(
                [
                    "password" => bcrypt("Inicio01")
                ]
                );
            $type = "success";    
            $text = "Contraseña restaurada con éxito";    
        } catch (\Throwable $th) {
            $type = "success";    
            $text = "error: $th";   
        }
        
        return compact("type","text");    
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $usuarios = user::all();
        return compact("usuarios");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,$status)
    {
        try {
            user::where("id",$id)->update
            (
                [
                    "estado" => $status,
                ]
            );
            $text = "usuario actualizado con éxito";
            $type = "success";
        } catch (\Throwable $th) {
            $text = "error: $th";
            $type = "warning";
        }
        return compact("text","type");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
