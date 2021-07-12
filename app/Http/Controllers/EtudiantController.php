<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Module;
use App\Models\Section;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function signin(){
        return view('auth.signin');
    }

    public function register(Request $request){
        $request->validate(
            [
                'name' => 'required|min:2',
                'firstName' => 'required|min:2',
                'password' => 'required|min:6',
                'confirmPassword' => 'required|min:6',
                'email' => 'required|email|unique:etudiants',
                'appoge' => 'required',
                'date' => 'required',
                'genre' => 'required'
            ]
        );

        if($request->input('password') != $request->input('confirmPassword')){
            $request->session()->flash('confirmError', "Le mot de passe de confirmation est différent de l'initial.");
            return back()->withInput();
        }

        $etudiant = new Etudiant;
        $etudiant->name = $request->input('name');
        $etudiant->firstName = $request->input('firstName');
        $etudiant->appoge = $request->input('appoge');
        $etudiant->password = sha1($request->input('password'));
        $etudiant->email = $request->input('email');
        $etudiant->sex = $request->input('genre');
        $etudiant->date = $request->input('date');
        $etudiant->appoge = $request->input('appoge');

        $query = $etudiant->save();

        if($query){
            $request->session()->flash('success', "Votre compte à été crée avec succès, veillez vous connecter.");
            return redirect(route('login'));
        }else{
            $request->session()->flash('error','Un problème est survenu lors de la création de votre compte,veillez réessayer .');
            return back()->withInput();
        }
    }

    public function check(Request $request){
        $request->validate(
            [
                'password' => 'required|min:6',
                'email' => 'required|email',
            ]
        );

        $etudiant = Etudiant::where('email', '=', $request->input('email'))->first();

        if($etudiant){
            if($etudiant->password == sha1($request->input('password'))){
                $request->session()->put('etudiant_id',$etudiant->id);
                return redirect(route('home'));
            }else{
                $request->session()->flash('connectionError','Mot de passe invalide.');
                return back()->withInput();
            }
        }else{
            $request->session()->flash('connectionError','Aucun compte trouvé avec cette adreese email.');
            return back()->withInput();
        }
    }

    public function home(){
        $module_informations = Module::where('etudiant_id',session('etudiant_id'))->first();
        return view('home.home',[
            'sections' => Section::all(),
            'module_informations' => $module_informations,
            'coach_name' => $this->getCoach(session('etudiant_id')),
            'totalScore' => $this->getEtudiantTotalScore(),
            'etudiant_name' => $this->getEtudiantName(session('etudiant_id')),
        ]);
    }

    public function logout(){
        if(session()->has('etudiant_id')){
            session()->pull('etudiant_id');
            return redirect(route('login'));
        }
    }

    public function section($id){
        return view('home.sectionContent',[
            'coach_name' => $this->getCoach(session('etudiant_id')),
            'totalScore' => $this->getEtudiantTotalScore(),
            'etudiant_name' => $this->getEtudiantName(session('etudiant_id')),
        ]);
    }

    public function addSectionScore(){
        $score = 0;
        if(!empty($_GET['score'])){
            DB::table('modules')->where([
                ['etudiant_id',session('etudiant_id')],
                ['section', $_GET['sectionID']],
            ])->increment('etudiant_score', $_GET['score']);
        }
        if(!empty($_GET['decraseScore'])){
            $module = Module::where([
                ['etudiant_id',session('etudiant_id')],
                ['section', $_GET['sectionID']],
            ])->first();
            $module->etudiant_score = $module->etudiant_score - $_GET['decraseScore'];
            $module->save();
        }
        if(!empty($_GET['updateScoreSection'])){
            $module = Module::where([
                ['etudiant_id',session('etudiant_id')],
                ['section', $_GET['sectionID']],
            ])->first();
            $module->etudiant_score = $_GET['updateScoreSection'];
            $module->save();
        }
        if(isset($_GET['sectionID'])){
            $score = $this->getEtudiantSectionTotalScore($_GET['sectionID']);
        }
        return response()->json([
            'score' => $score
        ]);
    }

    public function etudiantVieInfo(){
        $vie = 0;
        $etudiant = Etudiant::where('id',session('etudiant_id'))->first();
        $etudiant_vie = $etudiant->etudiant_vie;
        if(isset($_GET['add'])){
            if($etudiant_vie < 100){
                $etudiant->etudiant_vie = $etudiant->etudiant_vie + $_GET['add'];
            }
        }
        if(isset($_GET['minus'])){
            if($etudiant_vie > 0){
                $etudiant->etudiant_vie = $etudiant->etudiant_vie - $_GET['minus'];
            }
        }
        $etudiant->save();

        $etudiantNouvelVieInfo = Etudiant::where('id',session('etudiant_id'))->first();

        if($etudiantNouvelVieInfo->etudiant_vie < 0){
            $vie = 0;
            $etudiantNouvelVieInfo->etudiant_vie = 0;
        }elseif($etudiantNouvelVieInfo->etudiant_vie > 100){
            $vie = 100;
            $etudiantNouvelVieInfo->etudiant_vie = 100;
        }else{
            $vie = $etudiantNouvelVieInfo->etudiant_vie;
        }
        $etudiantNouvelVieInfo->save();

        return response()->json([
            'vie' => $vie
        ]);
    }

    /*--------------------------Treatment part----------*/
    public function getEtudiantSectionTotalScore($section){
        $score = 0;
        $moduleInformations = DB::table('modules')->where([
            ['etudiant_id', session('etudiant_id')],
            ['section', $section]
            ])->first();
        if(!empty($moduleInformations)){
            $score = $moduleInformations->etudiant_score;
        }else{
            $module = new Module();
            $module->etudiant_id = session('etudiant_id');
            $module->section = $section;
            $module->etudiant_score = 0;
            $module->save();
        }
        return $score;
    }

    public function getEtudiantVie(){
        $etudiantInfos = DB::table('etudiants')->where('etudiant_id', session('etudiant_id'))->first();
        return $etudiantInfos->etudiant_vie;
    }


    public function getCoach($id){
        $coach_id = Etudiant::where('id', $id)->first()->coach_id;
        $coach = Coach::where('id',$coach_id)->first();
        if(empty($coach)) {
            $coach_name = '--';
        }else{
            $coach_name = $coach->name;
        }
        return $coach_name;
    }

    public function getEtudiantTotalScore(){
        $score = 0;
        $moduleInformations = DB::table('modules')->where('etudiant_id', session('etudiant_id'))->get();

        foreach($moduleInformations as $info){
            $score += $info->etudiant_score;
        }
        return $score;
    }

    public function getEtudiantName($id){
        $etudiant = Etudiant::where('id', session('etudiant_id'))->first();
        return $etudiant->name." ".$etudiant->firstName;
    }

    public static function getBestScoreOfAnSection($id){
        $scoreMax = 0;
        $moduleInfo = DB::table('modules')->where('section',$id);
        if(!empty($moduleInfo)){
            $scoreMax = $moduleInfo->max('etudiant_score');
        }
        return $scoreMax;
    }

    public static function getAverageOfAnSection($id){
        $moyenneInfo = DB::table('modules')->where('section',$id);
        if($moyenneInfo){
            return $moyenneInfo->avg('etudiant_score');
        }
        return 0;
    }
}
