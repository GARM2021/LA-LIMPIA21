@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <div class="content">
        <h1>Edit a Tipo</h1>

        <form method="POST" action="{{ route('tipos.update', ['tipo' => $tipo->tipo]) }}">
            @csrf
            @method('PUT')
            <div class="form-row">
                <label>Tipo {{ $tipo->tipo }}</label>
                {{-- <input class="form-control" type="text" name="tipo"  value="{{ old('tipo') ?? $tipo->tipo}}" > --}}
            </div>
            <div class="form-row">
                <label>Nombre Tipo</label>
                <input class="form-control" type="text" name="tipo" value="{{ old('tipo') ?? $tipo->tipo }}" required>
            </div>
            <div class="form-row">
                <label>Fecha de Vencimiento</label>
                <input class="form-control" type="text" name="fecven" value="{{ old('fecven') ?? $tipo->fecven }}"
                    required>
            </div>
            <div class="form-row">
                <label>Documentos Totales</label>
                <input class="form-control" type="text" name="doctot" value="{{ old('doctot') ?? $tipo->doctot }}"
                    required>
            </div>



            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Edit tipo</button>
            </div>
        </form>
    </div>
@endsection
