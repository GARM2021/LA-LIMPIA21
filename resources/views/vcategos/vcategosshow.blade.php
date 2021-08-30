@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h2>Show Categoria</h2>

    <form method="GET" action="{{ route('categos.index', ['catego' => $catego->catego]) }}">
        @csrf
        <div class="form-row">
            <label>Categoria {{ $catego->catego }}</label>
            <br>
            {{-- <input class="form-control" type="text" name="catego"  value="{{ old('catego') ?? $catego->catego}}" > --}}
        </div>
        <div class="form-row">
            <label>Nombre Categoria</label>
            <br>
            <label>{{ $catego->descripcion }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $catego->nomcol}}" required> --}}
        </div>
        <div class="form-row">
            <label>Tarifa</label>
            <br>
            <label>{{ $catego->tarifa }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $catego->nomcol}}" required> --}}
        </div>
        <div class="form-row">
            <label>Kilos</label>
            <br>
            <label>{{ $catego->kilos }}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $catego->nomcol}}" required> --}}
        </div>



        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Indice de Categorias</button>
        </div>
    </form>
@endsection
