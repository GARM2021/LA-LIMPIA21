@extends('layouts.master') {{-- C2 --}}
@section('content')
    <h1>Create Cuenta </h1>

    <form method="POST" action="{{ route('cuentas.store') }}">
        @csrf

         <div class="form-row">
            <label>Nombre Cuenta</label>
            <input class="form-control" type"text" name="cuenta" value="{{ old('cuenta') }}" required>
            <label>Giro</label>
            <input class="form-control" type="number" name="giro" value="{{ old('giro') }}" requiered>
            <label>Subgiro</label>
            <input class="form-control" type="number" name="subgiro" value="{{ old('subgiro') }}" requiered>
            <div class="form-row">    
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}" requiered>
            <label>Direccion</label>
            <input class="form-control" type="text" name="direccion" value="{{ old('direccion') }}" requiered>
            <label>Nomciudad</label>
            <input class="form-control" type="text" name="nomciudad" value="{{ old('nomciudad') }}" requiered>
            <label>Nombre Nomcomer</label>
            <input class="form-control" type="text" name="nomcomer" value="{{ old('nomcomer') }}" requiered>
            <label>Ubicacion</label>
            <input class="form-control" type="text" name="ubicacion" value="{{ old('ubicacion') }}" requiered>
            <label>Colonia</label>
            <input class="form-control" type="number" name="colonia" value="{{ old('colonia') }}" requiered>
            <label>RFC</label>
            <input class="form-control" type="text" name="rfc" value="{{ old('rfc') }}" requiered>
            <label>Telpart</label>
            <input class="form-control" type="text" name="telpart" value="{{ old('telpart') }}" requiered>
            <label>Telneg</label>
            <input class="form-control" type="text" name="telneg" value="{{ old('telneg') }}" requiered>
            <label>Datos de Cuenta</label>
            <label>ExpCat</label>
            <input class="form-control" type="text" name="expcat" value="{{ old('expcat') }}" requiered>
            <label>Cuenta Anterior</label>
            <input class="form-control" type="text" name="ctaant" value="{{ old('ctaant') }}" requiered>
            

            <div class="form-row">
            <input class="form-control" type="text" name="finicio" value="{{ old('finicio') }}" requiered>
            <label>Numero de Permiso</label>
            <input class="form-control" type="text" name="numpe" value="{{ old('numpe') }}" requiered>r
            <label>Fecha Permiso</label>
            <input class="form-control" type="text" name="fperm" value="{{ old('fperm') }}" requiered>
            <label>Fecha de Baja</label>
            <div class="form-row">
            <input class="form-control" type="text" name="fbaja" value="{{ old('fbaja') }}" requiered>
            <label>Fecha Notificacion</label>
            <input class="form-control" type="text" name="fnotifica" value="{{ old('fnotifica') }}" requiered>
            <label>Gestor</label>
            <input class="form-control" type="number" name="gestor" value="{{ old('gestor') }}" requiered>
            <label>Fecha Requisicion</label>
            <input class="form-control" type="text" name="freq" value="{{ old('freq') }}" requiered>
            <label>Clave de Requisicion</label>
            <input class="form-control" type="number" name="cvereq" value="{{ old('cvereq') }}" requiered>
            <label>Fecha de Embargo</label>
            <input class="form-control" type="text" name="fembargo" value="{{ old('fembargo') }}" requiered>
           
            <label>Grupo</label>
            <input class="form-control" type="number" name="grupo" value="{{ old('grupo') }}" requiered>
            <label>Tipo</label>
            <input class="form-control" type="number" name="tipo" value="{{ old('tipo') }}" requiered>
        </div>



        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Create Cuenta</button>
        </div>

    </form>
@endsection
