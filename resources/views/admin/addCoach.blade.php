@extends('adminBase')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        @if (Session::has('succes'))
                            <p class='alert alert-success'>{{ Session::get('succes')  }}</p>
                        @enderror
                    </div>
                </div>
                <form action="{{ route('checkAddCoach')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="coachName">Le nom du coach</label>
                        <input type="text" value="{{ old('coachName')}}"name="coachName" class="form-control form-control-sm" id="coachName" placeholder="Le nom complet du coach">
                        @error('coachName')
                            <p>{{ $message  }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="matricule">Le matricule du coach</label>
                        <input type="text" value="{{ old('matricule') }}" name="matricule" class="form-control form-control-sm" id="matricule" placeholder="exemple : ARD1278">
                        @error('matricule')
                            <p>{{ $message  }}</p>
                        @enderror
                        @if (Session::has('matriculeError'))
                            <p>{{ Session::get('matriculeError')  }}</p>
                        @enderror
                    </div>
                    <button type="submit" style="width:100%">Ajoutez un Coach</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
