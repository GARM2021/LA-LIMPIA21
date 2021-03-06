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
    <div class="content">
        <h1 class="content">List of Colonias</h1>

        <a class="btn btn-success mb-3" href="{{ route('colonias.create') }}">Create</a>

        @if (empty($colonias))
            <div class="alert alert-warning">La lista de colonias esta vacia</div>

        @else

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Colonia</th>
                            <th>Nombre Colonia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colonias as $colonia1)
                            <tr>
                                <td>{{ $colonia1->colonia }}</td>
                                <td>{{ $colonia1->nomcol }}</td>

                                <td>
                                    <a class="btn btn-link"
                                        href="{{ route('colonias.show', ['colonia' => $colonia1->colonia]) }}">Show</a>
                                    <a class="btn btn-link"
                                        href="{{ route('colonias.edit', ['colonia' => $colonia1->colonia]) }}"> Edit</a>
                                    <a class="btn btn-link"
                                        href="{{ route('colonias.cuentascoloniasshow', ['colonia' => $colonia1->colonia]) }}">
                                        Cuentas</a>

                                    <form method="POST" class="d-inline"
                                        action="{{ route('colonias.destroy', ['colonia' => $colonia1->colonia]) }}">
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
