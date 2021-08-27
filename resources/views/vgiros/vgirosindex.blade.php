@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
<h1>List of Giros</h1>

<a class="btn btn-success mb-3" href="{{ route('giros.create') }}">Create</a>

@if (empty($giros))
    <div class="alert alert-warning">La lista de giros esta vacia</div>

@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Giros</th>
                    <th>Nombre Giros</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($giros as $giros1)
                    <tr>
                        <td>{{ $giros1->giro }}</td>
                        <td>{{ $giros1->nomgiro }}</td>
                        <td>{{ $giros1->causarec }}</td>

                        <td>
                            <a class="btn btn-link"
                                href="{{ route('giros.show', ['giro' => $giros1->giro]) }}">Show</a>
                            <a class="btn btn-link"
                                href="{{ route('giros.edit', ['giro' => $giros1->giro]) }}"> Edit</a>

                            <form method="POST" class="d-inline"
                                action="{{ route('giros.destroy', ['giro' => $giros1->giro]) }}">
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
