@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
<h1>List of SubGiros</h1>

<a class="btn btn-success mb-3" href="{{ route('subgiros.create') }}">Create</a>

@if (empty($subgiros))
    <div class="alert alert-warning">La lista de subgiros esta vacia</div>

@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Giro</th>
                    <th>   </th>
                    <th>SubGiros</th>
                    <th>Nombre SubGiros este</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subgiros as $subgiros1)
                    <tr>
                        <td>{{ $subgiros1->giro }}</td>
                        <td>{{ $subgiros1->subgiro }}</td>
                        <td>{{ $subgiros1->nomsubgiro }}</td>
                        

                        <td>
                            <a class="btn btn-link"
                                href="{{ route('subgiros.show', ['subgiro' => $subgiros1->subgiro]) }}">Show</a>
                            <a class="btn btn-link"
                                href="{{ route('subgiros.edit', ['subgiro' => $subgiros1->subgiro]) }}"> Editx</a>

                            <form method="POST" class="d-inline"
                                action="{{ route('subgiros.destroy', ['subgiro' => $subgiros1->subgiro]) }}">
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
