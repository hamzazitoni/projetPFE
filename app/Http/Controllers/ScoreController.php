<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function addSection2Score(Request $request,EtudiantController $e){
        return response()->json([
            'score' => $e->getEtudiantTotalScore(),
            'id' => session('etudiant_id')
        ]);
    }
}
