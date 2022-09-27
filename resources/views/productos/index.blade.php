@extends('layout')
@section('title', 'Productos')

@section('contenido')
<div class="col-12 mx-auto my-5">
    <h1>Productos</h1>
    <p>Todos nuestros productos</p>
    <a class="btn btn-primary mb-4" href={{ route('productos.create') }}>Crear Producto</a>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="row">
        @foreach ($productos as $producto)
            <div class="col col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><a href="{{ route('productos.show', $producto) }}">{{ $producto-> nombre }}</a></h3>
                        <p class="card-text">{{ $producto -> descripcion }}</p>
                        <h4 class="card-text">${{ $producto -> precio }}</h4>
                        <p class="card-text">Rinde {{ $producto -> porciones }} porciones</p>
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


</div>

@endsection