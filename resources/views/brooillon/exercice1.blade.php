@extends('section2base')
@section('title')
    Exercice 1
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/section2/exercice1/main.css')}}" />
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="row">
                    <div id="game-board" class='col-md-12 ml-2 mr-2 game'>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
@section('script')
    <script defer type="module" src="{{asset('/js/section2/exercice1/main.js')}}"></script>
@endsection
