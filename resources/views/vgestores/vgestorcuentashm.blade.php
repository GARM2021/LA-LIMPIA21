@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    @if ($tipocuentas->count() == 0)

        <div class="alert alert-warning"> La lista de cuentas esta vacia </div>

    @else
        <h1>List of Cuentas de la gestor:</h1>
        <h1>{{ $tipocuentas[0]->gestor }}</h1>
        <h1>{{ $tipocuentas[0]->BT_GestorCuentas->descripcion }}</h1>

        <a class="btn btn-success mb-3" href="{{ route('cuentas.create') }}">Create</a>

        @include('components.cuenta-card');
       
    @endif

@endsection
