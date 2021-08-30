@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h2>Show Grupo</h2>

    <form method="GET" action="{{ route('grupos.index', ['grupo' => $grupo->grupo]) }}">
        @csrf
        <div class="form-row">
            <label>Grupo {{ $grupo->grupo }}</label>
            <br>
            {{-- <input class="form-control" type="text" name="grupo"  value="{{ old('grupo') ?? $grupo->grupo}}" > --}}
        </div>
        <div class="form-row">
            <label>Nombre Grupo</label>
            <br>
            <label>{{ $grupo->descripcion }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $grupo->nomcol}}" required> --}}
        </div>
        <div class="form-row">
            <label>Fundamento</label>
            <br>
            <label>{{ $grupo->fundamento }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $grupo->nomcol}}" required> --}}
        </div>



        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Indice de Grupos</button>
        </div>
    </form>
@endsection
