@extends('layouts.master') {{-- C2 L30 --}}
@section('css') {{-- C 13.3 --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="table-responsive">
        <a class="btn btn-link" href="/colonias"> Colonias</a> </td>{{-- C4 --}}
        <a class="btn btn-link" href="/gestores"> Gestores</a></td>
        <a class="btn btn-link" href="/giros"> Giros</a></td>
        <a class="btn btn-link" href="/subgiros"> Subgiros</a></td>
        <a class="btn btn-link" href="/grupos"> Grupos </a></td>
        <a class="btn btn-link" href="/tipos"> Tipos </a></td>
        <a class="btn btn-link" href="/categos"> Categorias </a></td>
        <a class="btn btn-link" href="/recargos"> Recargos </a></td>
        <a class="btn btn-link" href="/tpocars"> Tipos de Cargos </a></td>
        <a class="btn btn-link" href="/cuentas"> Cuentas </a></td>
    </div>

@endsection
