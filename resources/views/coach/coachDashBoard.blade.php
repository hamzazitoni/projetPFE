@extends('coachBase')

@section('content')
    <div class="container mt-3">
        @forelse ($etudiants as $etudiant)
            {{ $etudiant_name }}
        @empty
            <p>Aucun etudiant pour vous .</p>
        @endforelse
    </div>
@endsection
