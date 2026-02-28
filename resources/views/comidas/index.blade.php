@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Menú de Comidas</h1>
        <a href="{{ route('comidas.create') }}" class="btn btn-success">Agregar Nueva Comida</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-hover mt-4">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Costo</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comidas as $comida)
            <tr>
                <td>{{ $comida->id_comida }}</td>
                <td>{{ $comida->nombre_comida }}</td>
                <td>${{ number_format($comida->costo, 2) }}</td>
                <td><span class="badge bg-info text-dark">{{ $comida->categoria }}</span></td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('comidas.edit', $comida->id_comida) }}" class="btn btn-warning btn-sm">Editar</a>
                        
                        <form action="{{ route('comidas.destroy', $comida->id_comida) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta comida?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection