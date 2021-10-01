@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <div class="content">
        <h2>Show Tipo</h2>

        <form method="GET" action="{{ route('cuentas.index', ['cuenta' => $cuenta->cuenta]) }}">
            @csrf
            <div class="form-row">
                <label>Tipo {{ $cuenta->cuenta }}</label>
                <br>
                {{-- <input class="form-control" type="text" name="cuenta"  value="{{ old('cuenta') ?? $cuenta->cuenta}}" > --}}
            </div>
            <div class="form-row">
                <label>Giro</label>
                <br>
                <label>{{ $cuenta->giro }}</label>
            </div>
            <div class="form-row">
                <label>SubGiro</label>
                <br>
                <label>{{ $cuenta->subgiro }}</label>
            </div>
            <div class="form-row">
                <label>Nombre</label>
                <br>
                <label>{{ $cuenta->nombre }}</label>
            </div>

            <div class="form-row">
                <label>Dirección</label>
                <br>
                <label>{{ $cuenta->direccion }}</label>
            </div>
            <div class="form-row">
                <label>Ciudad/label>
                    <br>
                    <label>{{ $cuenta->nomciudad }}</label>
            </div>
            <div class="form-row">
                <label>Nombre Comercial</label>
                <br>
                <label>{{ $cuenta->nomcomer }}</label>
            </div>
            <div class="form-row">
                <label>Ubicacion</label>
                <br>
                <label>{{ $cuenta->ubicacion }}</label>
            </div>
            <div class="form-row">
                <label>Colonia</label>
                <br>
                <label>{{ $cuenta->colonia }}</label>
            </div>
            <div class="form-row">
                <label>RFC</label>
                <br>
                <label>{{ $cuenta->rfc }}</label>
            </div>
            <div class="form-row">
                <label>Tel Particular</label>
                <br>
                <label>{{ $cuenta->telpart }}</label>
            </div>
            <div class="form-row">
                <label>Telefono Neg.</label>
                <br>
                <label>{{ $cuenta->telneg }}</label>
            </div>
            <div class="form-row">
                <label>Exp Catastral</label>
                <br>
                <label>{{ $cuenta->expcat }}</label>
            </div>
            <div class="form-row">
                <label>Fecha Inicio</label>
                <br>
                <label>{{ $cuenta->finicio }}</label>
            </div>
            <div class="form-row">
                <label>Numero de Permiso</label>
                <br>
                <label>{{ $cuenta->numper }}</label>
            </div>
            <div class="form-row">
                <label>Fecha de Permiso</label>
                <br>
                <label>{{ $cuenta->fperm }}</label>
            </div>
            <div class="form-row">
                <label>Fecha de Baja</label>
                <br>
                <label>{{ $cuenta->fbaja }}</label>
            </div>
            <div class="form-row">
                <label>Fecha de Notificacion</label>
                <br>
                <label>{{ $cuenta->fnotifica }}</label>
            </div>
            <div class="form-row">
                <label>Cuenta Anterior</label>
                <br>
                <label>{{ $cuenta->ctaant }}</label>
            </div>
            <div class="form-row">
                <label>Gestor</label>
                <br>
                <label>{{ $cuenta->gestor }}</label>
            </div>
            <div class="form-row">
                <label>Fecha de Requerimiento</label>
                <br>
                <label>{{ $cuenta->freq }}</label>
            </div>
            <div class="form-row">
                <label>Clave de Requerido</label>
                <br>
                <label>{{ $cuenta->cvereq }}</label>
            </div>
            <div class="form-row">
                <label>Fecha de Embargo</label>
                <br>
                <label>{{ $cuenta->fembargo }}</label>
            </div>
            <div class="form-row">
                <label>Grupo</label>
                <br>
                <label>{{ $cuenta->grupo }}</label>
            </div>
            <div class="form-row">
                <label>Tipo</label>
                <br>
                <label>{{ $cuenta->tipo }}</label>
            </div>


            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Indice de Cuentas</button>
            </div>
        </form>
    </div>
@endsection
