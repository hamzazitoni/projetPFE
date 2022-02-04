<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CoachController extends Controller
{

    public function coachConnexion(Request $request){
        return view('coach.connexionCoach');
    }

    public function checkCoachConnexion(Request $request){
        $request->validate([
            'matricule' => 'required',
        ]);

        if(!preg_match('/^[A-Z0-9]{6,}$/',$request->input('matricule'))){
            $request->session()->flash('matriculeError',"Le matricule doit contenir au moins 6 caractères de A-Z/0-9.");
            return back()->withInput();
        }

        $coach = DB::table('coaches')->where('matricule', $request->input('matricule'))->first();
        if(empty($coach)){
            $request->session()->flash('matriculeError',"Aucun coach trouvé pour ce matricule.");
            return back()->withInput();
        }

        $request->session()->put('coach_id',$coach->id);
        return redirect(route('coachDashBoard'));
    }

    public function coachDashBoard(){
        return  view('coach.coachDashBoard',[
            'etudiants' => $this->getAllStudentsForACoach(session('coach_id')),
        ]);
    }

    public function coachLogout(){
        if(session()->has('coach_id')){
            session()->pull('coach_id');
            return redirect(route('coachConnexion'));
        }
    }


    //----------------------Geting data for views-------------------
    public function getAllStudentsForACoach($coach_id){
        return Etudiant::where('coach_id',$coach_id)->get();
    }


}
