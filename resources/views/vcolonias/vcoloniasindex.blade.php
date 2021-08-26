<!DOCTYPE html> {{-- C2 --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>List of colonias</h1>

<a class="btn btn-success mb-3" href="{{ route('colonias.create') }}">Create</a>

@if (empty($colonias))
    <div class="alert alert-warning">La lista de coloniaos esta vacia</div>

@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
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

</html>


{{-- </body>

</html> --}}
