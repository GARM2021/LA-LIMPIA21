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
        <h1>List of Grupos</h1>

        <a class="btn btn-success mb-3" href="{{ route('grupos.create') }}">Create</a>

        @if (empty($grupos))
            <div class="alert alert-warning">La lista de grupos esta vacia</div>

        @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Grupos</th>
                            <th>Nombre Grupos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($grupos as $grupos1)
                            <tr>
                                <td>{{ $grupos1->grupo }}</td>
                                <td>{{ $grupos1->descripcion }}</td>
                                <td>{{ $grupos1->fundamento }}</td>

                                <td>
                                    <a class="btn btn-link"
                                        href="{{ route('grupos.show', ['grupo' => $grupos1->grupo]) }}">Show</a>
                                    <a class="btn btn-link"
                                        href="{{ route('grupos.edit', ['grupo' => $grupos1->grupo]) }}">
                                        Edit</a>
                                    <a class="btn btn-link"
                                        href="{{ route('grupos.cuentasgruposshow', ['grupo' => $grupos1->grupo]) }}">
                                        Cuentas</a>

                                    <form method="POST" class="d-inline"
                                        action="{{ route('grupos.destroy', ['grupo' => $grupos1->grupo]) }}">
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
