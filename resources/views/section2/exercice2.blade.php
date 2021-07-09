@extends('section2base')
@section('title')
    Exercice 2
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/section2/exercice2/main.css')}}" />
@endsection

@section('content')
    <div class="container">
        <div class="row">

        </div>
    </div>
    <div class="container">
        <div id="adjectifDiv" class="row mb-5" >

        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center"><u>Avantageux <i class="ok far fa-check-circle"></i></u></p>
                        </div>
                        <div class="col-12">
                            <div id="avantageux" class="row">
                                <div class="col-12 box">
                                    <div class="col-12 reponseBoxe"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center"><u>Moins avantageux <i class="noOk far fa-check-circle"></i></u></p>
                        </div>
                        <div class="col-12">
                            <div id="avantageux" class="row ">
                                <div class="col-12 box">
                                    <div class="col-12  reponseBoxe"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3"></div>
                <div class="col-6" id = 'validation'>
                    <button id='validationBtn'  class="" style="width:100%">Validez <i class='ml-2 fas fa-check'></i></button>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script defer type="module" src="{{asset('/js/section2/exercice2/main.js')}}"></script>
@endsection
