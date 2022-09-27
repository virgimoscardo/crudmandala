@extends('layout');
@section('contenido')
    <h1>Producto {{ $producto -> nombre }}</h1>
    <p>
        {{ $producto->descripcion }}
    </p>
@endsection