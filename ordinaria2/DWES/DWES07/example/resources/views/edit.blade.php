@extends('base')
@section('title', 'Editar Producto')
@section('content')
    <h1>Editar Producto</h1>
    <form action="{{ url('/productos/' . $producto->id . '/update') }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" required><br>

        <label for="nombre_corto">Nombre Corto:</label>
        <input type="text" id="nombre_corto" name="nombre_corto" value="{{ $producto->nombre_corto }}" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required>{{ $producto->descripcion }}</textarea><br>

        <label for="pvp">Precio:</label>
        <input type="number" step="0.01" id="pvp" name="pvp" value="{{ $producto->pvp }}" required><br>

        <label for="familia">Familia:</label>
        <input type="text" id="familia" name="familia" value="{{ $producto->familia }}" required><br>

        <button type="submit">Actualizar</button>
    </form>
@endsection
