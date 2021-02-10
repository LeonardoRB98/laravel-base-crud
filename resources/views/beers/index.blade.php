

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Beers</title>
</head>
<body>
    

    <div class="container">
        <h1>le mie birre</h1>
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
                        <td>{{$beer->descrizione}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>