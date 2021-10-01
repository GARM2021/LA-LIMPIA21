@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <div class="content">
        @if ($tipocuentas->count() == 0)

            <div class="alert alert-warning"> La lista de cuentas esta vacia </div>

        @else

            <h1>List of Cuentas del Grupo:</h1>
            <h1>{{ $tipocuentas[0]->BT_TipoCuentas->descripcion }}</h1>

            <a class="btn btn-success mb-3" href="{{ route('cuentas.create') }}">Create</a>

            @include('components.cuenta-card');

        @endif
    </div>
@endsection


{{-- </body>

</html> --}}
