@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
<h1>List of Tipos de Cargo</h1>

<a class="btn btn-success mb-3" href="{{ route('tpocars.create') }}">Create</a>

@if (empty($tpocars))
    <div class="alert alert-warning">La lista de tpocars esta vacia</div>

@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Tipos de Cargo</th>
                    <th>Nombre Tipos de Cargo</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($tpocars as $tpocar1)
                    <tr>
                        <td>{{ $tpocar1->tpocar }}</td>
                        <td>{{ $tpocar1->descripcion }}</td>
                      
                        <td>
                            <a class="btn btn-link"
                                href="{{ route('tpocars.show', ['tpocar' => $tpocar1->tpocar]) }}">Show</a>
                            <a class="btn btn-link"
                                href="{{ route('tpocars.edit', ['tpocar' => $tpocar1->tpocar]) }}"> Edit</a>

                            <form method="POST" class="d-inline"
                                action="{{ route('tpocars.destroy', ['tpocar' => $tpocar1->tpocar]) }}">
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
