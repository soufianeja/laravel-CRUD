<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }
    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }
    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'class' => 'required',
        ]);
        $etudiant = new Etudiant();
        $etudiant->nom=$request->nom;
        $etudiant->prenom=$request->prenom;
        $etudiant->class=$request->class;
        $etudiant->save();
        return redirect('/ajouter')->with('status','etudiant ajouter avec succes.');
    }
}
