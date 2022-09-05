@extends('layouts.app')
@section('content')
    <head>
        <link rel="stylesheet" href="{{ url('css/products.css') }}">
    </head>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-primary btn-sm" data-coreui-toggle="modal"
                       data-coreui-target="#modal-add-new-product"> Crear nuevo producto</a>
                    <br><br>
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>PRODUCTO</th>
                                <th>CATEGORIA</th>
                                <th>IMAGEN</th>
                                <th>STOCK</th>
                                <th>PRECIO</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration  }}</td>
                                    <td>{{ $product->name  }}</td>
                                    <td>{{ $product->categories }} --- {{ $product->local }}</td>

                                    <td><img class="img_product" src="{{ $product->local == 1 ? $product->img : 'storage/'.$product->img }}" alt=""></td>
                                    <td>{{ $product->stock}}</td>
                                    <td>{{ $product->price}}</td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="" class="btn btn-info btn-sm">Detalles</a>
                                            <a href="" class="btn btn-warning btn-sm">Editar</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal example -->
    @include('products.modal.modal_create')
@endsection
