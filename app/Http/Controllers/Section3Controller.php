<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Section3Controller extends Controller
{

    public function introduction(EtudiantController $etudiantController){
        return view('section3.introduction',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }


    public function exercice1(EtudiantController $etudiantController){
        return view('section3.exercice1',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }


    public function exercice1_2(EtudiantController $etudiantController){
        return view('section3.exercice1_2',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }


    public function exercice2(EtudiantController $etudiantController){
        return view('section3.exercice2',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }


    public function chalenge(EtudiantController $etudiantController){
        return view('section3.chalenge',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }

    public function exercice3(EtudiantController $etudiantController){
        return view('section3.exercice3',[
            'coach_name' => $etudiantController->getCoach(session('etudiant_id')),
            'totalScore' => $etudiantController->getEtudiantTotalScore(),
            'etudiant_name' => $etudiantController->getEtudiantName(session('etudiant_id')),
        ]);
    }

}
