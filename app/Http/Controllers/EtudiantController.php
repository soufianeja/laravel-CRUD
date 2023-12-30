<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::paginate(8);
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

    public function update_etudiant($id){
        $etudiant = Etudiant::find($id);
        return view('etudiant.update',compact('etudiant'));
    }

    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'class' => 'required',
        ]);
        $etudiant= Etudiant::where('id',$request->id)->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "class"=>$request->class
            ]);
        return redirect('/etudiant')->with('status','etudiant modifier avec succes.');
    }
    public function delete_etudiant($id)
    {
        $etudiant= Etudiant::find($id);
        $etudiant ->delete();
        return redirect()->back()->with('status','Etudiant supprimer avec succes!');
    }
}
