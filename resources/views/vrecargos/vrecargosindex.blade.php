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
        <h1>List of Recargos</h1>

        <a class="btn btn-success mb-3" href="{{ route('recargos.create') }}">Create</a>

        @if (empty($recargos))
            <div class="alert alert-warning">La lista de recargos esta vacia</div>

        @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Año de Recargo</th>
                            <th>Porcentaje de Recargo</th>
                            <th>Porcentaje de Recargo 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recargos as $recargo1)
                            <tr>
                                <td>{{ $recargo1->ayo }}</td>
                                <td>{{ $recargo1->pctajerec }}</td>
                                <td>{{ $recargo1->pctajerec2 }}</td>

                                <td>
                                    <a class="btn btn-link"
                                        href="{{ route('recargos.show', ['recargo' => $recargo1->ayo]) }}">Show</a>
                                    <a class="btn btn-link"
                                        href="{{ route('recargos.edit', ['recargo' => $recargo1->ayo]) }}"> Edit</a>

                                    <form method="POST" class="d-inline"
                                        action="{{ route('recargos.destroy', ['recargo' => $recargo1->ayo]) }}">
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
