@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
<h1>List of Tipos</h1>

<a class="btn btn-success mb-3" href="{{ route('tipos.create') }}">Create</a>

@if (empty($tipos))
    <div class="alert alert-warning">La lista de tipos esta vacia</div>

@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Tipos</th>
                    <th>Nombre Tipos</th>
                    <th>Fecha vencimiento</th>
                    <th>Doc totales</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipos as $tipos1)
                    <tr>
                        <td>{{ $tipos1->tipo }}</td>
                        <td>{{ $tipos1->descripcion }}</td>
                        <td>{{ $tipos1->fecven }}</td>
                        <td>{{ $tipos1->doctot }}</td>

                        <td>
                            <a class="btn btn-link"
                                href="{{ route('tipos.show', ['tipo' => $tipos1->tipo]) }}">Show</a>
                            <a class="btn btn-link"
                                href="{{ route('tipos.edit', ['tipo' => $tipos1->tipo]) }}"> Edit</a>

                            <form method="POST" class="d-inline"
                                action="{{ route('tipos.destroy', ['tipo' => $tipos1->tipo]) }}">
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