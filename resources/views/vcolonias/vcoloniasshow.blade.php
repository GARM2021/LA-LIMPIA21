@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <div class="content">
        <h1>Show Colonia</h1>

        <form method="GET" action="{{ route('colonias.index', ['colonia' => $colonia->colonia]) }}">
            @csrf
            <div class="form-row">
                <label>Colonia {{ $colonia->colonia }}</label>
                {{-- <input class="form-control" type="text" name="colonia"  value="{{ old('colonia') ?? $colonia->colonia}}" > --}}
            </div>
            <div class="form-row">
                <label>Nombre Colonia</label>
                <br>
                <label>{{ $colonia->nomcol }}</label>
                {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $colonia->nomcol}}" required> --}}
            </div>



            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Indice de Colonias</button>
            </div>
        </form>
    </div>
@endsection
