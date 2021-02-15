@extends('layouts.main')

@section('header-content')
<h1>Le mie birre</h1>
@endsection

@section('main-content')
<table class="table table-dark table-bordered text-center align-middle">
    <thead class="thead-light">
        <th>id</th>
        <th>nome</th>
        <th>tipo</th>
        <th>paese</th>
        <th>regione</th>
        <th>gradazione alcolica</th>
        <th>descrizione</th>
    </thead>
    <tbody>
        @foreach ($beers as $beer)
            <tr>
                <td>{{$beer->id}}</td>
                <td>{{$beer->nome}}</td>
                <td>{{$beer->tipo}}</td>
                <td>{{$beer->paese}}</td>
                <td>{{$beer->regione}}</td>
                <td>{{$beer->gradazione_alcolica}}</td>
                <td><a href=" {{ route('beers.show', ['beer' => $beer->id] ) }} " class="btn btn-outline-light">MOSTRA</a></td>
                <td><a href=" {{ route('beers.edit', ['beer' => $beer->id] ) }} " class="btn btn-outline-light">Modifica</a></td>
                <td><a href=" {{ route('beers.destroy', ['beer' => $beer->id] ) }} " class="btn btn-outline-light">Elimina</a></td>
                
            </tr>
            
        @endforeach
    </tbody>
</table>
<a href="{{ route('beers.create') }}" class="btn btn-info ">Aggiungi birra</a>
@endsection



