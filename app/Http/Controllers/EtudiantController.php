<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        return view('etudiant.liste');
    }
    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }
}
