<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EtudiantController;

class Section2Controller extends Controller
{
    public function exercice1(EtudiantController $etudiantController){
        return view('section2.exercice3',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }

    public function exercice2(EtudiantController $etudiantController){
        return view('section2.exercice2',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }

    public function exercice3(EtudiantController $etudiantController){
        return view('section2.exercice1',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }

    public function exercice4(EtudiantController $etudiantController){
        return view('section2.exercice4',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }

    public function challenge(EtudiantController $etudiantController){
        return view('section2.challenge',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }
}
