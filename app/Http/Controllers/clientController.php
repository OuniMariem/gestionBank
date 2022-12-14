<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\comptes;
use Illuminate\Http\Request;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clt= clients::all();
        return view('listeClient', compact('clt'));
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
        
            $clt= new clients();
            $clt->nom=$request->nom;
            $clt->prenom=$request->prenom;
            $clt->tel=$request->tel;
            $clt->adresse=$request->adresse;
            $clt->email=$request->email;
            $clt->login=$request->login;
            $clt->pasword=$request->pasword;
            $clt->save();

            return view('compteAdmin');
    
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(clients $clients)
    {
        //
    }
    // public function ajoutCompte($id)
    // {
    //     $clt= clients::All()->where('id',$id );
    //     echo($clt); 
    //     return view('afficherCompte',compact('clt')); 
    // }

    public function affiche(clients $clients){
        $clt = clients::All();
        return view('afficherClient', compact('clt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(clients $clients)
    {
        //
    }
    public function findClient($id)
    {
        $clt= clients::All()->where('id',$id );
      // dd($clt);
         return view('ajouterCompte',compact('clt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(clients $clients)
    {
        //
    }

    public function identifier(Request $request)
    {
        $data= clients::all()->where('login',$request->login )->where('pasword',$request->pasword);
       
        $data1= clients::all()->where('login',$request->login )->where('pasword',$request->pasword)->first();
        $dt=count($data);
        $cpt=comptes::all()->where('idClient',$data->id);
        if ($dt>=1){
            return view(' compteClient',compact('cpt'));
        }
        else{
            return view('connecterClient',compact('data'));
        }

    }
    public function searchSolde(Request $request)
    {
        $data= clients::all()->where('login',$request->login )->where('pasword',$request->pasword);
        $data=clients::all();

        return view('compteClient',compact('data'));
    }
}
