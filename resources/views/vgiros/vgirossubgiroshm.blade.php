@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <div class="content">
        @if ($girosubgiros->count() == 0)

            <div class="alert alert-warning"> La lista de cuentas esta vacia </div>

        @else

            <h1>List of SubGiros del Giro:</h1>
            <h1>{{ $girosubgiros[0]->BT_GiroSubgiros->nomgiro }}</h1>

            <a class="btn btn-success mb-3" href="{{ route('subgiros.create') }}">Create</a>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-light">
                        <tr>


                            <th>Giro</th>
                            <th>Sub Giro</th>
                            <th>Nombre Subgiro</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($girosubgiros as $subgiro1)
                            <tr>

                                <td>{{ $subgiro1->giro }}</td>
                                <td>{{ $subgiro1->subgiro }}</td>
                                <td>{{ $subgiro1->nomsubgiro }}</td>

                                <td>
                                    <a class="btn btn-link"
                                        href="{{ route('subgiros.show', ['subgiro' => $subgiro1->subgiro]) }}">Show
                                        sub</a>
                                    <a class="btn btn-link"
                                        href="{{ route('subgiros.edit', ['subgiro' => $subgiro1->subgiro]) }}">
                                        Edit</a>
                                    <a class="btn btn-link"
                                        href="{{ route('subgiros.cuentassubgirosshow', ['subgiro' => $subgiro1->subgiro]) }}">
                                        Cuentas</a>

                                    <form method="POST" class="d-inline"
                                        action="{{ route('subgiros.destroy', ['subgiro' => $subgiro1->subgiro]) }}">
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
    </div>
@endsection


{{-- </body>

</html> --}}
