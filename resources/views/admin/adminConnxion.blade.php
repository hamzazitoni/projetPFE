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
                <form action="{{ route('checkAdminConnxion')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="secretKey">Le code secret :</label>
                        <input type="password" value="{{ old('secretKey') }}" name="secretKey" class="form-control form-control-sm" id="secretKey" placeholder="Votre Code secret...">
                        @error('secretKey')
                            <p>{{ $message  }}</p>
                        @enderror
                        @if (Session::has('secretKeyError'))
                            <p>{{ Session::get('secretKeyError')  }}</p>
                        @enderror
                    </div>
                    <button type="submit" style="width:100%">Se connecter !</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
