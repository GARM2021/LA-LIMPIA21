@extends('layouts.master')
@section('css')
    <LInk rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <LINk rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
@endsection
{{-- C2 L30 --}}
@section('content')

    @if ($tipocuentas->count() == 0)
        <div class="alert alert-warning content">La lista de cuentas esta vacia</div>
    @else
        <div class="content">
            <h1>List of Cuentas x de la colonia:</h1>
            <h1>{{ $tipocuentas[0]->colonia }}</h1>
            <h1>{{ $tipocuentas[0]->BT_ColoniaCuentas->nomcol }}</h1>

            <a class="btn btn-success mb-3" href="{{ route('cuentas.create') }}">Create</a>

            @include('components.cuenta-card')
        </div>
    @endif
    
@endsection

</body>






{{-- </body>

</html> --}}
