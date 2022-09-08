<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Jugar</title>
</head>
<body>

<div class="global_container">
    @include('layouts.components.sidebar')
    @include('layouts.components.carousel')
    <br>
    <form action="{{ route('salas.store') }}" method="post">
        @csrf
        <div class="options">

            <div class="input-group">
                <input type="text" name="username" id="username" autocomplete="off" class="input" required>
                <label class="user-label">Nickname</label>
            </div>
            <br>
            <button class="button" type="button" id="add-room-btn" data-toggle="modal" data-target="#modal_sala">
                <span></span>
                <span></span>
                <span></span>
                <span></span> Unirme a sala
            </button>
            <br>
            <button type="submit" class="button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>Crear sala
            </button>

        </div>
    </form>
</div>
{{ session('message') }}
<!--Modal -->
<form action="{{ route('salas.addroom') }}" method="post">
    <div class="modal fade" id="modal_sala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @csrf
                    <input type="hidden" name="username" value="" id="copy_username">
                    <input type="number" name="code" class="form-control">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Unirme</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<script>
    $('#add-room-btn').click(function () {
        var username = $('#username').val();
        $('#copy_username').val(username);
    });
</script>

</body>
</html>
