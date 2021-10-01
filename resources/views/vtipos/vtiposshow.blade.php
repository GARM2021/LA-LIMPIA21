@extends('layouts.master') {{-- C2 L30 --}}
@section('css') {{-- C 13.3 --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endsection{{-- C2 L3 --}}
@section('content')
    <div class="content">

        <h2>Show Tipo</h2>

        <form method="GET" action="{{ route('tipos.index', ['tipo' => $tipo->tipo]) }}">
            @csrf
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th> </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tipo</td>
                            <td>{{ $tipo->tipo }}</td>
                        </tr>
                        <tr>
                            <td>Descripcion</td>
                            <td>{{ $tipo->descripcion }}</td>
                        </tr>
                        <tr>
                            <td>Fecha de Vencimiento</td>
                            <td>{{ $tipo->fecven }}</td>
                        </tr>
                        <tr>
                            <td>Documentos Totales</td>
                            <td>{{ $tipo->doctot }}</td>
                        </tr>
                    </tbody>
                </table>





                <div class="form-row mt-3">
                    <button type="submit" class="btn btn-primary btn-lg">Indice de Tipos</button>
                </div>
        </form>
    </div>
@endsection
