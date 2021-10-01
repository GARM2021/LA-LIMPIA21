@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <div class="content">
        <h1>Edit a Tipo de Cargos</h1>

        <form method="POST" action="{{ route('tpocars.update', ['tpocar' => $tpocar->tpocar]) }}">
            @csrf
            @method('PUT')
            <div class="form-row">
                <label>Tipo de Cargos {{ $tpocar->tpocar }}</label>

            </div>

            <div class="form-row">
                <label>Descripcion</label>
                <input class="form-control" type="text" name="descripcion"
                    value="{{ old('descripcion') ?? $tpocar->descripcion }}" required>
            </div>

            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Edit tpocar</button>
            </div>
        </form>
    </div>
@endsection
