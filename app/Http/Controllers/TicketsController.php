<?php

namespace App\Http\Controllers;

use App\tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $atendidos  = tickets::where("Estado","En Atencion")->count();
        $espera     = tickets::where("Estado","En Espera")->count();
        $finalizado = tickets::where("Estado","Finalizado")->count();
        return compact("atendidos","espera","finalizado");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit(tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(tickets $tickets)
    {
        //
    }
}
