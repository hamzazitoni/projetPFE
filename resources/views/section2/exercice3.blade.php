@extends('section2base')
@section('title')
    Exercice 3
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/section2/exercice3/main.css')}}" />
@endsection

@section('content')
    <div class="container">
        <div class="row">

        </div>
    </div>
    <div class="container">
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
                                    <div id = "questionBoxe" class="questions row"></div>
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
@endsection
@section('script')
    <script defer type="module" src="{{asset('/js/section2/exercice3/main.js')}}"></script>
@endsection
