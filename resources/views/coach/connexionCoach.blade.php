@extends('coachBase')

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
                <form action="{{ route('checkCoachConnexion')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="matricule">Votre matricule de coaching</label>
                        <input type="password" value="{{ old('matricule') }}" name="matricule" class="form-control form-control-sm" id="matricule" placeholder="votre matricule...">
                        @error('matricule')
                            <p>{{ $message  }}</p>
                        @enderror
                        @if (Session::has('matriculeError'))
                            <p>{{ Session::get('matriculeError')  }}</p>
                        @enderror
                    </div>
                    <button type="submit" style="width:100%">Ajoutez le Coach</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
