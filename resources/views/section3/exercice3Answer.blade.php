@extends('section3base')
@section('content')
    <body>
        <div class="description">
            <h3 class="title text-center">Eclairage</h3>
            <div class="exercice-title">
                <div class="row">
                    <div class="col h-auto d-inline-block">
                      <h2> Redéfinir un problème -Solution de l'exercice  </h2>
                    </div>
                    <div class="col-2 d-flex align-content-center flex-wrap ">
                      <a class="btn disabled " id="passer" role="button">Exercice suivant <i class="fas fa-arrow-right " ></i></a>
                    </div>
                </div>
            </div>
            <div class="exercice-description">
                <p>  L'individu a souvent tendances a se figer Sur des règles Petablier.
                    alors que briser c'est pris présomption faciliter la résolution créative de problèmes.
                    La solution proposée ci-dessus relative exercices.
              </p>
            </div>
          </div>
          <style>
              #img{
                  width: 400px;
                  height: 300px;
              }
          </style>
          <div class="container">

                <img src="{{asset('/images/section3/puzzleSolution.jpg')  }}" id="img" alt="" srcset="">
          </div>
    </body>
@endsection
