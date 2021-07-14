@extends('section2base')
@section('title')
    Exercice 3
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/section2/exercice3/main.css')}}" />
@endsection

@section('content')
    <div class="description" id="descriptionBigBox">
        <div class="exercice-title">
        <div class="row">
            <div class="col h-auto d-inline-block">
            <h2>Description de la partie:</h2>
            </div>
        </div>
        </div>
        <div class="exercice-description">
            <p class='descriptionContent'>
                <i class="stop fas fa-exclamation-triangle mr-2"></i> A la fin de cette partie vous serez à mésure de comprendre que
                les personnes créatives croient en leur créativité, les persones qui resolvent les problèmes savent, se motivent et se disent
                qu'ils lepeuvent et que chaque resolution d'un problème est une compétence de plus. <br>
                Pour découvrir et fair connaissance des 9 verrous , nous vous proposons d'un coté des phrases numérotés [1,2..] et de l'autre'
                les compléments de ces phrases [A,B,..] et une bonne combinaisson vous fournit un des verroux mentaux. <br>
                <button class="mt-2 mb-2 showPartieBtn" id="showPartieBtn">Commencer la partie</button> : <span>4 tentatives autorisées pour cette partie.</span>
            </p>
        </div>
    </div>
    <div class="container" id ='testContent'>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row descritionBox mt-3" id = "descritionBox">
                    <div class="col-12 exercice-description mb-3">
                        <p>Lisez les phrases à gauche et faites corrspondre à celles de droite pour obtenir les 9 verroux mentaux.</p>
                    </div>
                    <div class="col-6 questionsContainer" id = 'questionsContainer'>
                    </div>
                    <div class="col-6" id = "answersContainer">
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="container questionsBoxeContainer mt-4 mb-4" >
        <div class="row">
            <div class="col-md-6 mb-2">
                <div class="row">
                    <div class="col-12">
                        <u><h2 class="text-center">Questions <i class="qt far fa-question-circle"></i></h2></u></p>
                    </div>
                    <div class="col-12">
                        <div id="avantageux" class="row">
                            <div class="col-12 box">
                                <div class="col-12 ">
                                    <div id = "questionBoxe" class="questions row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="row">
                    <div class="col-12">
                        <u><h3 class="text-center">Réponses<i class="an far fa-check-circle"></i></h3></u>
                    </div>
                    <div class="col-12">
                        <div id="deavantageux" class="row">
                            <div class="col-12 box">
                                <div class="col-12  reponseBoxe">
                                    <div id = "answerBoxe" class="questions row"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 statistiqueContent" id = "statistiqueContent">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-1">
                <div class="row">
                    <div class="pl-2 pr-2 pt-2 pb-2 col-12 statistiquesContainer">
                        <h3 class="statistiques pl-3">Statistiques : </h3>
                        <p class="appreciation mt-1">
                            Vous avez passez cet exercice avec un score de <span class="scoregame ml-2"> 0 / 20</span>.
                        </p>
                        <div class="decission mt-1 mb-2"></div>
                        <div class="afair pl-1 row mb-3" id='afair'></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
@section('script')
    <script defer type="module" src="{{asset('/js/section2/exercice3/main.js')}}"></script>
@endsection
