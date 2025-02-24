@extends('base')
@section('title', 'Listado de Productos') 
@section('content')
    <h1>Listado de Productos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nombre Corto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Familia</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->nombre_corto }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->pvp }} €</td>
                    <td>{{ $producto->familia }}</td>
                    <td>
                        <a href="{{ url('/productos/' . $producto->id . '/edit') }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection