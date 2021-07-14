@extends('section2base')
@section('title')
    Challenge
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/section2/challenge/main.css')}}" />
@endsection

@section('content')
    <div class="description" id="descriptionBigBox">
        <div class="exercice-title">
            <div class="row">
                <div class="col h-auto d-inline-block">
                <h2>Test de niveau :</h2>
                </div>
            </div>
        </div>
        <div class="exercice-description">
            <p class='descriptionContent'>
                <i class="mr-3 ok fas fa-thumbs-up"></i>Vous avez passez avec succès toutes les parties précedentes ? <br>
                L'heur est venue pour tester votre niveau sur les notions de bases.
                <br><button class=" mt-3 mb-1 showPartieBtn" id="showPartieBtn">Commencer le challenge</button>
            </p>
        </div>
    </div>
    <div class="container mt-3" id = "challenge1">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb-3 exercice-description">
                <h6 class='text-center'>Après avoir suivi les partie précedentes , Combien de verrous mentaux existent-ils ?</h6>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-1">
                <div class="row">
                    <div class="col-12 mb-3 mauvaiseReponse exercice-description">
                        <h6 class='text-center'><i class="fas fa-thumbs-down thumb mr-2"></i>Mauvaise reponse , votre vie a diminué de 8 %</h6>
                    </div>
                    <div class="col-6">
                        <button id ='9' class='boutton'><i class="fas fa-question"></i></button>
                    </div>
                    <div class="col-6">
                        <button id ='12' class='boutton'><i class="fas fa-question"></i></button>
                    </div>
                </div>
                <div class="row mt-3" >
                    <div class="col-6">
                        <button id ='16' class='boutton'><i class="fas fa-question"></i></button>
                    </div>
                    <div class="col-6">
                        <button id ='5 ' class='boutton'><i class="fas fa-question"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="container mt-5" id = "challenge2">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb-3 exercice-description">
                <h6 class='text-center'>Parmis ces propositions suivantes , identifiez celles qui figurent parmis les verrous mentaux</h6>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-1">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10 exercice-description" id = 'tentiveMessage'>
                        <p ><i class="fas fa-thumbs-down thumb mr-2"></i>Mauvaise reponse , vous avez perdu 8% de vie.</p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row mt-3" id="testBoxe">

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="container mt-3 vie" id = "vie">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-1 viepopup" >
                <div class="row">
                    <div class="pl-2 pr-2 pt-2 pb-2 col-12 vieContainer">
                        <h3 class="statistiques pl-3">Statistiques : </h3>
                        <p class="appreciation mt-1">
                            Désolé, vous n'avez plus de vie pour continuer le challenge <br><br> Veillez refaire les parties pour en gagner et revenir.
                        </p>
                        <p class="appreciationcontent mt-1" id='appreciationcontent'></p>
                        <div class="afair pl-1 row mb-3" id='afair'>
                            <a class="ml-4" href="{{ route('exercice1',['id' => 2])}}"><button id=''>Refair les parties !</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="container mt-5 final" id = "final">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-1 viepopup" >
                <div class="row">
                    <div class="pl-2 pr-2 pt-2 pb-2 col-12 vieContainer">
                        <h3 class="statistiques pl-3">Félicitations : </h3>
                        <p class="appreciation mt-1 text-center">
                            Vous avez terminez le challenge de cette section avec succès. <span id ='starStus'><br><br> Vous obetenez une étoile !!!! <br><br><i class="star far fa-star"></i></span>
                        </p>
                        <div class="afair mt-4 pl-1 row mb-3" id='afair'>
                            <a class="ml-5 text-center" href="{{ route('s3_exercice1',['id' => 3])}}"><button id='nextSection'>Commencer la section suivante !</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
@section('script')
    <script defer type="module" src="{{asset('/js/section2/challenge/main.js')}}"></script>
@endsection
