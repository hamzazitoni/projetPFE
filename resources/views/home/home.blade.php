@extends('base')

@section('content')
    <div class="sectionPage">
        <div class="container">
            @foreach ($sections as $section)
                <a href="{{ route('sections',['id' => $section->id])}}">
                    <div class="card" >
                        <div class="face face1">
                            <div class="content">
                            <span class="stars"><img src="{{ asset('images/section1/star-fill.png') }}" width="20%"></span>
                            <h2 class="section{{$section->id}}">Bienvenue </h2>
                            <hr>
                            <p class="section{{$section->id}}">Vous aviez +{{$section->id}} Points à gagner</p>
                            <p class="section{{$section->id}}">Le meilleur score est :{{ \App\Http\Controllers\EtudiantController::getBestScoreOfAnSection($section->id)}}</p>
                            <p class="section{{$section->id}}">
                                Moyenne : {{ \App\Http\Controllers\EtudiantController::getAverageOfAnSection($section->id)}}
                            </p>
                            <p class="section{{$section->id}}">Status : {{App\Http\Controllers\EtudiantController::stateOfSection($section->id)}}</p>
                            </div>
                            </div>
                            <div class="face face2">
                            <h2>{{$section->name}}</h2>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
