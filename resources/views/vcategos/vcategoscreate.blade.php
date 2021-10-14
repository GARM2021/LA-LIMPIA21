@extends('layouts.master') {{-- C2 --}}
@section('content')
    <div class="content">
        <h1>Create Categoria </h1>

        <form method="POST" action="{{ route('categos.store') }}">
            @csrf

            <div class="form-row">
                <label>Categoria</label>
                <input class="form-control" type="text" name="catego" value="{{ old('catego') }}" required>

                <label>Descripcion</label>
                <input class="form-control" type="text" name="descripcion" value="{{ old('descripcion') }}" required>
                <label>Tarifa</label>
                <input class="form-control" type="number" step=".01" name="tarifa" value="{{ old('tarifa') }}" required>
                <label>Kilos</label>
                <input class="form-control" type="number" name="kilos" value="{{ old('kilos') }}" required>

            </div>



            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Create Categoria</button>
            </div>

        </form>
    </div>
@endsection
