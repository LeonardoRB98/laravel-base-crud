@extends('layouts.main')

@section('header-content')
    <h1>Modifica</h1>
@endsection

@section('main-content')
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form action="{{ route('beers.update', $beer) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{$beer->nome}}" placeholder="">
        </div>
        <div class="form-group">
            <label for="tipo">tipo</label>
            <input type="text" name="tipo" class="form-control" value="{{$beer->tipo}}" placeholder="">
        </div>
        <div class="form-group">
            <label for="paese">Paese</label>
            <input type="text" name="paese" class="form-control" value="{{$beer->paese}}" placeholder="">
        </div>
        <div class="form-group">
            <label for="regione">Regione</label>
            <input type="text" name="regione" class="form-control" value="{{$beer->regione}}" placeholder="">
        </div>
        <div class="form-group">
            <label for="gradazione alcolica">Gradazione alcolica</label>
            <input type="text" name="gradazione alcolica" class="form-control" value="{{$beer->gradazione_alcolica}}" placeholder="">
        </div>
        <div class="form-group">
            <label for="descrizione">Descrizione</label>
            <textarea name="descrizione" class="form-control" rows="8">{{$beer->descrizione}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva modifiche</button>
    </form>
    <a href="{{ route('beers.index') }}" class="btn btn-secondary mt-3">Torna all'elenco</a>
@endsection

@section('footer-section')

@endsection