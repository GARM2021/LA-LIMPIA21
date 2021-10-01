@extends('layouts.master') {{-- C2 --}}
@section('content')
    <div class="content">
        <h1>Create Giro </h1>

        <form method="POST" action="{{ route('giros.store') }}">
            @csrf

            <div class="form-row">
                <label>Nombre Giro</label>
                <input class="form-control" type="text" name="nomgiro" value="{{ old('nomgiro') }}" required>
                <label>Causa Recargos SI/NO</label>
                <input class="form-control" type="text" name="causarec" value="{{ old('causarec') }}" required>
            </div>



            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Create Giro</button>
            </div>

        </form>
    </div>
@endsection
