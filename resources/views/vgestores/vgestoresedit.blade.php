@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <div class="content">
        <h1>Edit a Gestor</h1>

        <form method="POST" action="{{ route('gestores.update', ['gestor' => $gestor->gestor]) }}">
            @csrf
            @method('PUT')
            <div class="form-row">
                <label>Gestor {{ $gestor->gestor }}</label>
                {{-- <input class="form-control" type="text" name="gestor"  value="{{ old('gestor') ?? $gestor->gestor}}" > --}}
            </div>
            <div class="form-row">
                <label>Nombre Gestor</label>
                <input class="form-control" type="text" name="descripcion"
                    value="{{ old('descripcion') ?? $gestor->descripcion }}" required>
            </div>



            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Edit gestor</button>
            </div>
        </form>
    </div>
@endsection
