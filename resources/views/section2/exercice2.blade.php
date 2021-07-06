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
            <div class="col-md-2"></div>
            <div class="col-md-8 draggable-elements">

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
@section('script')
    <script defer type="module" src="{{asset('/js/section2/exercice2/main.js')}}"></script>
@endsection
