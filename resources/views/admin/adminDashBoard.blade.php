@extends('adminBase')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                @if (Session::has('deleteSucces'))
                    <p class='alert alert-success text-center'>{{ Session::get('deleteSucces')  }}</p>
                @enderror
            </div>
        </div>
    </div>
@endsection
