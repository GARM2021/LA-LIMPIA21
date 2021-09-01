@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
<h1>List of Tipos</h1>

<a class="btn btn-success mb-3" href="{{ route('cuentas.create') }}">Create</a>

@if (empty($cuentas))
    <div class="alert alert-warning">La lista de cuentas esta vacia</div>

@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Nombre Cuenta</th>
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
                    <th>Cuenta Anterior</th>
                    <th>Numero de Permiso</th>
                    <th>Fecha Permiso</th>
                    <th>Fecha de Baja</th>
                    <th>Fecha Notificacion</th>
                    <th>Gestor</th>
                    <th>Fecha Requisicion</th>
                    <th>Clave de Requisicion</th>
                    <th>Fecha de Embargo</th>
                    <label>Grupo</th>
                    <label>Tipo</th>
                    
                    

                </tr>
            </thead>
            <tbody>
                @foreach ($cuentas as $cuenta1)
                    <tr>
                        
                        <td>{{ $cuenta1->cuenta }}</td>  
                        <td>{{ $cuenta1->giro }}</td>  
                        <td>{{ $cuenta1->subgiro }}</td>        
                        <td>{{ $cuenta1->nombre }}</td>      
                        <td>{{ $cuenta1->direccion }}</td>      
                        <td>{{ $cuenta1->nomciudad }}</td>      
                        <td>{{ $cuenta1->nomcomer }}</td>      
                        <td>{{ $cuenta1->ubicacion }}</td>     
                        <td>{{ $cuenta1->colonia }}</td>      
                        <td>{{ $cuenta1->finicio }}</td>      
                        <td>{{ $cuenta1->numper }}</td>   
                        <td>{{ $cuenta1->fperm }}</td>   
                        <td>{{ $cuenta1->fbaja }}</td> 
                        <td>{{ $cuenta1->fnotifica }}</td>      
                        <td>{{ $cuenta1->gestor }}</td>      
                        <td>{{ $cuenta1->expcat }}</td>      
                        <td>{{ $cuenta1->ctaant }}</td>       
                        <td>{{ $cuenta1->freq }}</td>                       
                        <td>{{ $cuenta1->cvereq }}</td>      
                        <td>{{ $cuenta1->fembargo }}</td>      
                        <td>{{ $cuenta1->rfc }}</td>                       
                        <td>{{ $cuenta1->telpart }}</td>      
                        <td>{{ $cuenta1->telneg }}</td>      
                        <td>{{ $cuenta1->grupo }}</td>       
                        <td>{{ $cuenta1->cuenta }}</td>              
                    

                        <td>
                            <a class="btn btn-link"
                                href="{{ route('cuentas.show', ['cuenta' => $cuenta1->cuenta]) }}">Show</a>
                            <a class="btn btn-link"
                                href="{{ route('cuentas.edit', ['cuenta' => $cuenta1->cuenta]) }}"> Edit</a>

                            <form method="POST" class="d-inline"
                                action="{{ route('cuentas.destroy', ['cuenta' => $cuenta1->cuenta]) }}">
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
