<?php

namespace App\Http\Controllers;

use App\Models\comptes;
use App\Models\clients;

use Illuminate\Http\Request;

class compteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $cpt=comptes::all();
        return view('listeCompte',compact('cpt'));
        
    
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

    public function listeCompte(Request $request){
        $cpt= comptes::All();

        return view('solde',compact('cpt'));
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cpt= new comptes();
        $cpt->rib=$request->rib;
        $cpt->solde=$request->solde;
        $cpt->idClient=$request->idClient;

        $cpt->save();
        $data=comptes::all();
        return view('compteAdmin', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $cpt= comptes::All()->where('id',$request->id);

        return view('solde',compact('cpt'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function edit(comptes $comptes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comptes $comptes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function destroy(comptes $comptes)
    {
        //
    }
    public function solde(comptes $comptes){
        $cpt= comptes::All();
        return view('solde',compact('cpt'));
    }
}
