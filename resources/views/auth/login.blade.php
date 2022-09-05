@extends('layouts.guest')
@section('content')
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <h1>iniciar sesión</h1>
                                    <p class="text-medium-emphasis">
                                        Iniciar sesión en su cuenta</p>
                                    <div class="input-group mb-3">
                                    <span class="input-group-text">
                                    <svg class="icon">
                                        Logo
                                    </svg>
                                    </span>
                                        <input class="form-control" type="email" required name="email"
                                               placeholder="Correo electronico">
                                    </div>
                                    <div class="input-group mb-4">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                        icon
                                        </svg>
                                    </span>
                                        <input class="form-control" name="password" type="password"
                                               placeholder="Contraseña">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">Iniciar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card col-md-5 text-white bg-primary py-5">
                            <div class="card-body text-center">
                                <div>
                                    <h2>Registrate</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                    <a class="btn btn-sm btn-outline-light mt-3" type="button">Registrate Ahora!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
