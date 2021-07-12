@extends('section2base')
@section('title')
    Exercice 3
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/section2/exercice4/main.css')}}" />
@endsection

@section('content')
    <div class="container">
        <div class="row">

        </div>
    </div>
    <div class="container questionsBoxeContainer" >
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
