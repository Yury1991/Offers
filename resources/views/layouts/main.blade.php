<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav>
                <ul>
                    <li><a href = {{route('main.index')}}>Главная</a></li>
                    <li><a href = {{route('machine.index')}}>Станки</a></li>
                    <li><a href = {{route('offer.index')}}>Предложения</a></li>
                </ul>
            </nav>
        </div>
        @yield('content')
    </div>
</body>
</html>