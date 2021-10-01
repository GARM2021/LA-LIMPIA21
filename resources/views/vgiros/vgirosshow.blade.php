@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <div class="content">
        <h2>Show Giro</h2>

        <form method="GET" action="{{ route('giros.index', ['giro' => $giro->giro]) }}">
            @csrf
            <div class="form-row">
                <label>Giro {{ $giro->giro }}</label>
                <br>
                {{-- <input class="form-control" type="text" name="giro"  value="{{ old('giro') ?? $giro->giro}}" > --}}
            </div>
            <div class="form-row">
                <label>Nombre Giro</label>
                <br>
                <label>{{ $giro->nomgiro }}</label>
                {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $giro->nomcol}}" required> --}}
            </div>
            <div class="form-row">
                <label>Causa Recargo SI/NO</label>
                <br>
                <label>{{ $giro->causarec }}</label>
                {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $giro->nomcol}}" required> --}}
            </div>



            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Indice de Giros</button>
            </div>
        </form>
    </div>
@endsection
