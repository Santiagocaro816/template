<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/game.css')}}">
    <link rel="stylesheet" href="{{url('css/rarity.css')}}">

</head>
<body>
<div class="container">
    <article class="con-num-sala">
<p>3243543 {{--{{$room->coode}}--}}</p>
    </article>

    @foreach($soccer as $player)
    <article class="con-player">
        <div class="img-player">
            <img src="https://cdn4.iconfinder.com/data/icons/miscellaneous-icons-1/200/misc_game_multiplayer-512.png" alt="">
        </div>
        <div class="con-card-player">
{{--            <img src="../../public/img/default_card.png" alt="" class="card">--}}
{{--            <img src="../../public/img/unknown%20_card.png" alt="" class="card-back">--}}

            @include('components.card')

        </div>
    </article>
    @endforeach

    <article class="con-player con-player-main">
        <div class="img-player">
            <img src="https://cdn4.iconfinder.com/data/icons/miscellaneous-icons-1/200/misc_game_multiplayer-512.png" alt="">
        </div>
        <div class="con-card-player">
            <img src="../../public/img/default_card.png" alt="" class="card">
            <img src="../../public/img/unknown%20_card.png" alt="" class="card-back">
        </div>
    </article>
    <article class="table-game">

    </article>
</div>
</body>
</html>
