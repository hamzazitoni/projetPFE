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
        $sections = Section::all();
        $module_informations = Module::where('etudiant_id',session('etudiant_id'))->first();
        return view('home.home',[
            'sections' => $sections,
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

    public function getAnSection($id){
        return view('home.sectionContent',[
            'coach_name' => $this->getCoach(session('etudiant_id')),
            'totalScore' => $this->getEtudiantTotalScore(),
            'etudiant_name' => $this->getEtudiantName(session('etudiant_id')),
        ]);
    }


    /*--------------------------Treatment part----------*/

    public function getCoach($id){
        $coach_id = Etudiant::where('coach_id', $id)->first()->coach_id;
        $coach_name = Coach::where('id',$coach_id)->first()->name;
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
}
