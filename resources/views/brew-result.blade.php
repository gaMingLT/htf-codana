<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/brew-result.css') }}" />

    
    <title>Brew Result!</title>
</head>
<body>
    <header>
        <h1>Your potion!</h1>
    </header>

    <main>
        <div>
            <img id="potion" src="{{ asset('img/potion-1.png') }}" alt="">
            <p>Smurfen Drank!</p>
        </div>

        <div>
            <img id="funny" src="{{ asset('img/funny.jpg') }}" alt="">
        </div>

        <a id="home_button" href="{{ route('home') }}">Try again!</a>
    </main>
    
</body>
</html>