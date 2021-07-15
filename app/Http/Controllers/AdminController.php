<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function adminConnxion(Request $request){
        $errorConnexion = "";
        if(!empty($_GET['secretKey'])){
            if(!preg_match('/^AD[0-9]{3}m[A-Z]{3}MIN$/',$_GET['secretKey'])){
                $errorConnexion = "Vous n'avez pas le bon code de connexion en tant qu'administrateur";
            }
        }
        if(empty($errorConnexion)){
            $request->session()->put('isAdmin',true);
            return response()->json([
                'error' => '',
            ]);
        }else{
            return response()->json([
                'error' => $errorConnexion,
            ]);
        }
    }

    public function isloggedAsAdmin(){
        if(session()->has('isAdmin')){
            return response()->json([
                'isAdmin' => true,
            ]);
        }else{
            return response()->json([
                'isAdmin' => false,
            ]);
        }
    }

    public function logout(){
        if(session()->has('isAdmin')){
            session()->pull('isAdmin');
        }
    }

    public function addACoach(){
        if(isset($_GET['coachName']) AND isset($_GET['matricule'])){
            if(!preg_match('/^[A-Z0-9]{6,}$/',$_GET['matricule'])){
                $matriculeError = "Le matricule ne correspond pas au format attendu.";
            }
            if(!preg_match('/^[A-Za-z]/',$_GET['coachName'])){
                $nameError = "Le nom doit commencer par une lettre.";
            }
            if(!isset($matriculeError) AND !isset($nameError)){
                $coach = new Coach();
                $coach->name = $_GET['coachName'] ;
                $coach->matricule = $_GET['matricule'];
                $coach->save();
                return response()->json([
                    'message' => 'Le coach '.$coach->name.' a été ajouté avec succès.',
                    'error' => '',
                ]);
            }else{
                return response()->json([
                    'message' => '',
                    'error' => 'Veillez bien remplir tous les champs',
                ]);
            }
        }
    }

    public function giveACoachToStudent(){
        return view('admin.addStudent',[
            'etudiants' => Etudiant::where('coach_id',0)->get(),
            'coachs' => Coach::all(),
        ]);
    }

    public function checkStudentToCoach(Request $request){
        if(isset($_GET['etudiant_id']) AND isset($_GET['coach_id'])){
            $etudiant = Etudiant::find(intval($_GET['etudiant_id']));
            $etudiant->coach_id = intval($_GET['coach_id']);
            $etudiant->save();
            return response()->json([
                'message' => "Affectation éffectuée avec succès",
            ]);
        }
    }

    public function deleteACoach(){
        if(isset($_GET['coach_id'])){
            DB::table('etudiants')
            ->where('coach_id', $coach_id)
            ->update(['coach_id' => 0]);

            $coach = Coach::where('id',$coach_id)->first();

            DB::table('coaches')->where('id', $coach_id)->delete();

            return response()->json([
                'message' => "Le coach ".$coach->name." a été supprimé avec succès .",
            ]);
        }
    }

    public function coachList(){
        return view('admin.coachListe',[
            'coachs' => $this->getAllCoachs(),
        ]);
    }


    //------------------geting data------------------
    public function getAllCoachs(){
        return Coach::all();
    }

    public static function getAllStudentsCountForCoach($id){
        return DB::table('etudiants')
            ->where('coach_id', $id)->count();
    }
}
