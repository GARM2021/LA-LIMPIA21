@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h2>Show Recargo</h2>

    <form method="GET" action="{{ route('recargos.index', ['recargo' => $recargo->ayo]) }}">
        @csrf
        <div class="form-row">
            <label>Recargo {{ $recargo->ayo }}</label>
            <br>
            {{-- <input class="form-control" type="text" name="ayo"  value="{{ old('ayo') ?? $ayo->ayo}}" > --}}
        </div>
       
        <div class="form-row">
            <label>Porcentaje de Recargo</label>
            <br>
            <label>{{ $recargo->pctajerec }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $ayo->nomcol}}" required> --}}
        </div>
        <div class="form-row">
            <label>Porcentaje de Recargo 2</label>
            <br>
            <label>{{ $recargo->pctajerec2 }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $ayo->nomcol}}" required> --}}
        </div>



        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Indice de Recargos</button>
        </div>
    </form>
@endsection
