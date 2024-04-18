<?php

namespace App\Http\Controllers;

use App\Models\Experiences;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experiences');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    

        // Création d'une nouvelle instance de Retour avec les données du formulaire
        $experience = new Experiences();
        $experience->email = $request->input('email');
        $experience->nom_activite = $request->input('nom_activite');
        $experience->site = $request->input('site');
        $experience->date = $request->input('date');
        $experience->titre = $request->input('titre');
        $experience->description = $request->input('description');
        $experience->select = $request->input('select');
        $experience->reception_email = $request->input('reception_email');
 
        // Enregistrement de la nouvelle instance dans la base de données
        $experience->save();
 
        // Redirection vers une autre page après l'enregistrement
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
