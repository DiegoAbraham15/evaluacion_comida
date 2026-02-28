@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Registrar Nueva Comida</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('comidas.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre de la Comida</label>
                            <input type="text" name="nombre_comida" class="form-control" placeholder="Ej: Enchiladas Verdes" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Costo ($)</label>
                            <input type="number" step="0.01" name="costo" class="form-control" placeholder="0.00" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Categoría</label>
                            <select name="categoria" class="form-select" required>
                                <option value="" selected disabled>Seleccione una categoría</option>
                                <option value="bebidas">Bebidas</option>
                                <option value="postres">Postres</option>
                                <option value="platillos fuertes">Platillos Fuertes</option>
                                <option value="entradas">Entradas</option>
                                <option value="sopas">Sopas</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Detalle o Descripción</label>
                            <textarea name="detalle_comida" class="form-control" rows="3" placeholder="Breve descripción del platillo..."></textarea>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('comidas.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Guardar Comida
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection