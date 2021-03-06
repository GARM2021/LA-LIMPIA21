<div class="table-responsive">
    <table class="table table-striped" id="tcuentas" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th> </th>
                <th>Cuenta</th>
                <th>Giro</th>
                <th>Subgiro</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Nomciudad</th>
                <th>Nombre Nomcomer</th>
                <th>Ubicacion</th>
                <th>Colonia</th>
                <th>RFC</th>
                <th>Telpart</th>
                <th>Telneg</th>
                <th>ExpCat</th>
                <th>Fecha de inicio</th>

                <th>Numero de Permiso</th>
                <th>Fecha Permiso</th>
                <th>Fecha de Baja</th>
                <th>Fecha Notificacion</th>
                <th>Cuenta Anterior</th>
                <th>Gestor</th>
                <th>Fecha Requisicion</th>
                <th>Clave de Requisicion</th>
                <th>Fecha de Embargo</th>
                <th>Grupo</th>
                <th>Tipo</th>
                



            </tr>
        </thead>
        <tbody>
            @foreach ($tipocuentas as $cuenta1)
                <tr>
                    <td>
                        <a class="btn btn-success mb-3"
                            href="{{ route('cuentas.show', ['cuenta' => $cuenta1->tid]) }}">Show</a>
                        <a class="btn btn-success mb-3"
                            href="{{ route('cuentas.edit', ['cuenta' => $cuenta1->tid]) }}">
                            Edit</a>

                        <form method="POST" class="d-inline"
                            action="{{ route('cuentas.destroy', ['cuenta' => $cuenta1->cuenta]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-success mb-3">Delete</button>
                        </form>
                    </td>
                    <td>{{ $cuenta1->cuenta }}</td>
                    <td>{{ $cuenta1->giro }}</td>
                    <td>{{ $cuenta1->subgiro }}</td>
                    <td>{{ $cuenta1->nombre }}</td>
                    <td>{{ $cuenta1->direccion }}</td>
                    <td>{{ $cuenta1->nomciudad }}</td>
                    <td>{{ $cuenta1->nomcomer }}</td>
                    <td>{{ $cuenta1->colonia }}</td>
                    <td>{{ $cuenta1->giro }}</td>
                    <td>{{ $cuenta1->rfc }}</td>
                    <td>{{ $cuenta1->telpart }}</td>
                    <td>{{ $cuenta1->telneg }}</td>
                    <td>{{ $cuenta1->expcat }}</td>
                    <td>{{ $cuenta1->finicio }}</td>

                    <td>{{ $cuenta1->numper }}</td>
                    <td>{{ $cuenta1->fperm }}</td>
                    <td>{{ $cuenta1->fbaja }}</td>
                    <td>{{ $cuenta1->fnotifica }}</td>
                    <td>{{ $cuenta1->ctaant }}</td>
                    <td>{{ $cuenta1->gestor }}</td>



                    <td>{{ $cuenta1->freq }}</td>
                    <td>{{ $cuenta1->cvereq }}</td>
                    <td>{{ $cuenta1->fembargo }}</td>


                    <td>{{ $cuenta1->grupo }}</td>
                    <td>{{ $cuenta1->tipo }}</td>



                </tr>
            @endforeach

        </tbody>
    </table>
</div>
{{-- <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script> --}}


<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tcuentas').DataTable();
    });
</script>
