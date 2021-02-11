@extends('layouts.main')

@section('header-content')
    <h1>Aggiungi birra</h1>
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
     <!-- action='' è lo scrip di destinazione dei nostri dati inseriti nel form -->
    <form action="{{ route('beers.store') }}" method="POST">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="tipo">tipo</label>
            <input type="text" name="tipo" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="paese">Paese</label>
            <input type="text" name="paese" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="regione">Regione</label>
            <input type="text" name="regione" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="gradazione alcolica">Gradazione alcolica</label>
            <input type="text" name="gradazione alcolica" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="descrizione">Descrizione</label>
            <textarea name="descrizione" class="form-control" id="" rows="8"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection

@section('footer-content')
    <h2>Sono il footer</h2>
@endsection

