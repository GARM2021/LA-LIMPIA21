@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h2>Show Tipo</h2>

    <form method="GET" action="{{ route('tipos.index', ['tipo' => $tipo->tipo]) }}">
        @csrf
        <div class="form-row">
            <label>Tipo {{ $tipo->tipo }}</label>
            <br>
            {{-- <input class="form-control" type="text" name="tipo"  value="{{ old('tipo') ?? $tipo->tipo}}" > --}}
        </div>
        <div class="form-row">
            <label>Nombre Tipo</label>
            <br>
            <label>{{ $tipo->descripcion }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $tipo->nomcol}}" required> --}}
        </div>
        <div class="form-row">
            <label>Fecha de Vencimiento</label>
            <br>
            <label>{{ $tipo->fecven }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $tipo->nomcol}}" required> --}}
        </div>
        <div class="form-row">
            <label>Doc Totales</label>
            <br>
            <label>{{ $tipo->doctot }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $tipo->nomcol}}" required> --}}
        </div>



        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Indice de Tipos</button>
        </div>
    </form>
@endsection
