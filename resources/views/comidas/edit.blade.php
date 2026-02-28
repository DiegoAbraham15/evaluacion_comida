@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Editar Comida: {{ $comida->nombre_comida }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('comidas.update', $comida->id_comida) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre de la Comida</label>
                            <input type="text" name="nombre_comida" class="form-control" value="{{ $comida->nombre_comida }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Costo ($)</label>
                            <input type="number" step="0.01" name="costo" class="form-control" value="{{ $comida->costo }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Categoría</label>
                            <select name="categoria" class="form-select" required>
                                <option value="bebidas" {{ $comida->categoria == 'bebidas' ? 'selected' : '' }}>Bebidas</option>
                                <option value="postres" {{ $comida->categoria == 'postres' ? 'selected' : '' }}>Postres</option>
                                <option value="platillos fuertes" {{ $comida->categoria == 'platillos fuertes' ? 'selected' : '' }}>Platillos Fuertes</option>
                                <option value="entradas" {{ $comida->categoria == 'entradas' ? 'selected' : '' }}>Entradas</option>
                                <option value="sopas" {{ $comida->categoria == 'sopas' ? 'selected' : '' }}>Sopas</option>
                            </select>
                            <small class="text-muted">Debe coincidir con las categorías permitidas por el sistema.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Detalle o Descripción</label>
                            <textarea name="detalle_comida" class="form-control" rows="3">{{ $comida->detalle_comida }}</textarea>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('comidas.index') }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-warning">Actualizar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection