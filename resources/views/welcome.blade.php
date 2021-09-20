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
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Opcion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>  <a class="btn btn-link" href="/colonias"> Colonias</a> </td>{{-- C4 --}}
                    
                </tr>
                <tr>
                  <td>  <a class="btn btn-link" href="/gestores"> Gestores</a></td>
                    
                </tr>
                <tr>
                   <td> <a class="btn btn-link" href="/giros"> Giros</a></td>
                    
                </tr>
                <tr>
                  <td>  <a class="btn btn-link" href="/subgiros"> Subgiros</a></td>
                    
                </tr>
                <tr>
                  <td>  <a class="btn btn-link" href="/grupos"> Grupos </a></td>
                    
                </tr>
                <tr>
                  <td>  <a class="btn btn-link" href="/tipos"> Tipos </a></td>
                    
                </tr>
                <tr>
                  <td>  <a class="btn btn-link" href="/categos"> Categorias </a></td>
                    
                </tr>
                <tr>
                  <td>  <a class="btn btn-link" href="/recargos"> Recargos </a></td>
                    
                </tr>
                <tr>
                  <td>  <a class="btn btn-link" href="/tpocars"> Tipos de Cargos </a></td>
                    
                </tr>
                <tr>
                   <td> <a class="btn btn-link" href="/cuentas"> Cuentas </a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection
