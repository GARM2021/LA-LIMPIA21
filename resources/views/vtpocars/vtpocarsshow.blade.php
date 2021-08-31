@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h2>Show Tipo de Cargo</h2>

    <form method="GET" action="{{ route('tpocars.index', ['tpocar' => $tpocar->tpocar]) }}">
        @csrf
        <div class="form-row">
            <label>Tipo de Cargo {{ $tpocar->tpocar }}</label>
            <br>
            {{-- <input class="form-control" type="text" name="tpocar"  value="{{ old('tpocar') ?? $tpocar->tpocar}}" > --}}
        </div>
        <div class="form-row">
            <label>Nombre Tipo de Cargo</label>
            <br>
            <label>{{ $tpocar->descripcion }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $tpocar->nomcol}}" required> --}}
        </div>
      
        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Indice de Tipos</button>
        </div>
    </form>
@endsection
