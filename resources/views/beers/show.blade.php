@extends('layouts.main')

@section('header-content')
    <h1>dettaglio birra</h1>
@endsection

@section('main-content')
        <div class="bg-dark p-3">
            @foreach($beer->getAttributes() as $key => $value)
                <p class="text-uppercase font-weight-bold text-info"><strong>{{ $key }}</strong></p>
                <p class="text-light">{{ $value }}</p>
            @endforeach
        </div>
        <a class="btn btn-primary mt-3" href="{{ route('beers.index') }}">Torna all'elenco</a>
    @endsection

@section('footer-section')
@endsection