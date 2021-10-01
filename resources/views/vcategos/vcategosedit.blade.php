@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <div class="content">
        <h1>Edit a Categoria</h1>

        <form method="POST" action="{{ route('categos.update', ['catego' => $catego->catego]) }}">
            @csrf
            @method('PUT')
            <div class="form-row">
                <label>Categoria {{ $catego->catego }}</label>
                {{-- <input class="form-control" type="text" name="catego"  value="{{ old('catego') ?? $catego->catego}}" > --}}
            </div>
            <div class="form-row">
                <label>Nombre Categoria</label>
                <input class="form-control" type="text" name="descripcion"
                    value="{{ old('descripcion') ?? $catego->catego }}" required>
            </div>
            <div class="form-row">
                <label>Tarifa</label>
                <input class="form-control" type="number" name="tarifa" value="{{ old('tarifa') ?? $catego->tarifa }}"
                    required>
            </div>
            <div class="form-row">
                <label>Kilos</label>
                <input class="form-control" type="number" name="kilos" value="{{ old('kilos') ?? $catego->kilos }}"
                    required>
            </div>



            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Edit Categoria</button>
            </div>
        </form>
    </div>
@endsection
