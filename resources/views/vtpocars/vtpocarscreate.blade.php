@extends('layouts.master') {{-- C2 --}}
@section('content')
    <div class="content">
        <h1>Create Tipo de Cargo </h1>

        <form method="POST" action="{{ route('tpocars.store') }}">
            @csrf

            <div class="form-row">
                <label>Tipo de Cargo</label>
                <input class="form-control" type="number" name="tpocar" value="{{ old('tpocar') }}" required>
                <label>Nombre Tipo de Cargo</label>
                <input class="form-control" type="text" name="descripcion" value="{{ old('descripcion') }}" required>


            </div>



            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Create Tipo de Cargo</button>
            </div>

        </form>
    </div>
@endsection
