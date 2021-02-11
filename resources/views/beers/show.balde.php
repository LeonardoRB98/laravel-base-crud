@extends('layouts.main')
<?php dump($beer) ?>
@section('header-content')
    <h1>Hai aggiunto</h1>
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
        <tr>
            <td>{{$newBeer['id']}}</td>
            <td>{{$newBeer['nome']}}</td>
            <td>{{$newBeer['tipo']}}</td>
            <td>{{$newBeer['paese']}}</td>
            <td>{{$newBeer['regione']}}</td>
            <td>{{$newBeer['gradazione_alcolica']}}</td>
        </tr>
    </tbody>
</table>
@endsection

@section('footer-content')

@endsection