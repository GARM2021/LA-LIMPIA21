@extends('layouts.master') {{-- C2 L30 --}}
@section('css') {{-- C 13.3  --}}
<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    <h1>List of Gestores</h1>

    <a class="btn btn-success mb-3" href="{{ route('gestores.create') }}">Create</a>

    @if (empty($gestores))
        <div class="alert alert-warning">La lista de gestores esta vacia</div>

    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Gestor</th>
                        <th>Nombre Gestor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gestores as $gestor1)
                        <tr>
                            <td>{{ $gestor1->gestor }}</td>
                            <td>{{ $gestor1->descripcion }}</td>

                            <td>
                                <a class="btn btn-link"
                                    href="{{ route('gestores.show', ['gestor' => $gestor1->gestor]) }}">Show</a>
                                <a class="btn btn-link"
                                    href="{{ route('gestores.edit', ['gestor' => $gestor1->gestor]) }}"> Edit</a>
                                <a class="btn btn-link"
                                    href="{{ route('gestores.cuentasgestoresshow', ['gestor' => $gestor1->gestor]) }}">
                                    Cuentas</a>
                                <form method="POST" class="d-inline"
                                    action="{{ route('gestores.destroy', ['gestor' => $gestor1->gestor]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @endif

@endsection


{{-- </body>

</html> --}}
