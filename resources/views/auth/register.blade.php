@extends('layouts.guest')
@section('content')
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4 mx-4">
                        <div class="card-body p-4">
                            <h1>Register</h1>
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <p class="text-medium-emphasis">Crea tu cuenta</p>
                                <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <svg class="icon">
                                       logo
                                    </svg>
                                </span>
                                    <input class="form-control" name="name" type="text" placeholder="Nombres" required>
                                </div>
                                <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <svg class="icon">
                                    logo
                                    </svg>
                                </span>
                                    <input class="form-control" name="email" type="email" placeholder="Correo electronico" required>
                                </div>
                                <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <svg class="icon">
                                        logo
                                    </svg>
                                </span>
                                    <input class="form-control" name="password" type="password" placeholder="contraseña" required>
                                </div>
                                <button class="btn btn-block btn-success" type="submit">Create Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
