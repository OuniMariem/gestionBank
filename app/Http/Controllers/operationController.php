<?php

namespace App\Http\Controllers;

use App\Models\operations;
use Illuminate\Http\Request;

class operationController extends Controller
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
        $oprt= new operations();
        $oprt->dateOperation=$request->dateOperation;
        $oprt->type=$request->type;
        $oprt->montant=$request->montant;
        $oprt->idCompte=$request->idCompte;


        $oprt->save();
        return view('compteAdmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function show(operations $operations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function edit(operations $operations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, operations $operations)
    {
        //
    }
    public function affiche(operations $operations){
        $operation = operations::All();
        return view('historiqueCompte', compact('operation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function destroy(operations $operations)
    {
        //
    }
}
