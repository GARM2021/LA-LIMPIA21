@extends('layouts.master') 
@section('css') {{-- C 13.3 --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection{{-- C2 L30 --}}
@section('content')
    <div class="content">
        <h1>List of Categorias</h1>

        <a class="btn btn-success mb-3" href="{{ route('categos.create') }}">Create</a>

        @if (empty($categos))
            <div class="alert alert-warning">La lista de categos esta vacia</div>

        @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>Categorias</th>
                            <th>Nombre Categorias</th>
                            <th>Tarifa</th>
                            <th>Kilos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categos as $catego1)
                            <tr>
                                <td>{{ $catego1->catego }}</td>
                                <td>{{ $catego1->descripcion }}</td>
                                <td>{{ $catego1->tarifa }}</td>
                                <td>{{ $catego1->kilos }}</td>

                                <td>
                                    <a class="btn btn-link"
                                        href="{{ route('categos.show', ['catego' => $catego1->catego]) }}">Show</a>
                                    <a class="btn btn-link"
                                        href="{{ route('categos.edit', ['catego' => $catego1->catego]) }}"> Edit</a>

                                    <form method="POST" class="d-inline"
                                        action="{{ route('categos.destroy', ['catego' => $catego1->catego]) }}">
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
