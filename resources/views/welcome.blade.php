<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adi-Chat</title>
    <link rel="stylesheet" href="{{ asset('CSS/welcome.blade.css') }}">
</head>

<body>

    <div class="home_container">

        <header class="home_header">
            <img class="home_icon" src="{{ asset('Assets/adichat.svg') }}" alt="">
            <h1 class="home_heading">Chat App</h1>
        </header>

        <main class="home_login">
           @yield('account')
        </main>
    </div>



</body>

</html>
