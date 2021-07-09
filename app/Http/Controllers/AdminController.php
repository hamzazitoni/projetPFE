<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function adminDashBoard(){
        return view('admin.adminDashBoard');
    }

    public function checkStudentToCoach(Request $request){
        $validator = Validator::make($request->all(),[
            'coach_id' => 'required',
            'etudiant_id' => 'required',
        ]);

        if($validator->fails()){
            $request->session()->flash('error', "Toute les informations requise ne sont pas fournies.");
            return back()->withInput();
        }
        $etudiant = Etudiant::find(intval($request->input('etudiant_id')));
        $etudiant->coach_id = $request->input('coach_id');
        $etudiant->save();

        return redirect(route('addStudentToCoach'));
    }

    public function giveACoachToStudent(){
        return view('admin.addStudent',[
            'etudiants' => Etudiant::where('coach_id',0)->get(),
            'coachs' => Coach::all(),
        ]);
    }

    public function addACoach(){
        return  view('admin.addCoach');
    }

    public function checkAddCoach(Request $request){
        $request->validate([
            'coachName' => 'required|min:2',
            'matricule' => 'unique:coaches',
        ]);

        if(!preg_match('/^[A-Z0-9]{6,}$/',$request->input('matricule'))){
            $request->session()->flash('matriculeError',"Le matricule doit contenir au moins 6 caractères de A-Z/0-9.");
            return back()->withInput();
        }

        $coach = new Coach();
        $coach->name = $request->input('coachName');
        $coach->matricule = $request->input('matricule');
        $coach->save();

        $request->session()->flash('succes', "Le coach ".$coach->name." a été ajouté avec succès.");
        return redirect(route('addACoach'));
    }

    public function adminConnxion(){
        return view('admin.adminConnxion');
    }

    public function checkAdminConnxion(Request $request){
        $request->validate([
            'secretKey' => 'required',
        ]);

        if(!preg_match('/^AD[0-9]{3}m[A-Z]{3}MIN$/',$request->input('secretKey'))){
            $request->session()->flash('secretKeyError',"La clé de connexion en tanque qu'administrateur est invalide.");
            return back()->withInput();
        }

        $request->session()->put('isAdmin',true);
        return redirect(route('adminDashBoard'));
    }

    public function logout(){
        if(session()->has('isAdmin')){
            session()->pull('isAdmin');
            return redirect(route('adminConnexion'));
        }
    }

    public function deleteACoach(Request $request,$coach_id){
        DB::table('etudiants')
        ->where('coach_id', $coach_id)
        ->update(['coach_id' => 0]);

        $coach = Coach::where('id',$coach_id)->first();

        DB::table('coaches')->where('id', $coach_id)->delete();

        $request->session()->flash('deleteSucces',"Le coach ".$coach->name." a été supprimé avec succès.");
        return redirect(route('adminDashBoard'));
    }

    //------------------geting data------------------
    public function getAllCoachs(){
        return Coach::all();
    }
}
