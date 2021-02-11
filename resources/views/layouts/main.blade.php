<!-- 
scheletro del mio template 
qui si utilizza yield(agganciare)
 -->
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
        <header>
        @yield('header-content')
        </header>

        <main>
        @yield('main-content')
        </main>
        
        <footer>
        @yield('footer-content')
            <p></p>
        </footer>
    </div>
</body>
</html>