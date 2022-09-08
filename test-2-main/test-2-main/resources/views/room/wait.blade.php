<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/wait.css')}}">
</head>
<body>
    <div class="container-wait">
<div class="room">
    <div>
        1003004
    </div>
</div>
{{--        @foreach($room as $sala)--}}
{{--            {{dd($sala)}}--}}
{{--        @endforeach--}}
{{--            {{$sala}}--}}
        <div class="players">
{{--            {{$id = 0}}--}}
            @foreach($users as $user)
{{--            @if($id != $user->user_id && $id != 0 )--}}
            <div>
                <img src="{{url('img/perfil.png')}}" alt="">
                <p>Nickname</p>
            </div>
{{--            {{$id = $user->user_id}}--}}
{{--                @endif--}}
            @endforeach
        </div>
<div class="con-btn">
{{--    <form action="{{route('salas.update')}}" method="post">--}}
{{--        @csrf--}}
{{--        <button type="submit" id="btn-sub">Iniciar</button>--}}
{{--    </form>--}}
</div>
    </div>
    <script>
    function recargar(){
        window.location.reload()
    }
    setInterval(recargar,3000)
    </script>
</body>
</html>
