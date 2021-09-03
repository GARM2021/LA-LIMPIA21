@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h1>Edit a Cuenta</h1>
    
    <form method="POST" action="{{route('cuentas.update', ['cuenta' => $cuenta->cuenta] )}}">
      @csrf 
        @method('PUT')
        <div class="form-row">
            <label>Cuenta {{$cuenta->cuenta}}</label>
             {{-- <input class="form-control" type="text" name="cuenta"  value="{{ old('cuenta') ?? $cuenta->cuenta}}" >  --}}
        </div>
        <div class="form-row"> 
            <label>Nombre Cuenta</label>
            <input class="form-control" type="text" name="cuenta" value="{{ old('cuenta') ?? $cuenta->cuenta}}" required>
        </div>
            <input class="form-control" type="text" name="giro" value="{{ old('giro') ?? $cuenta->giro}}" required>
            <input class="form-control" type="text" name="subgiro" value="{{ old('subgiro') ?? $cuenta->subgiro}}" required>  
            <input class="form-control" type="text" name="nombre" value="{{ old('nombre') ?? $cuenta->nombre}}" required>
            <input class="form-control" type="text" name="direccion" value="{{ old('direccion') ?? $cuenta->direccion}}" required>
            <input class="form-control" type="text" name="nomciudad" value="{{ old('nomciudad') ?? $cuenta->nomciudad}}" required>
            <input class="form-control" type="text" name="nomcomer" value="{{ old('nomcomer') ?? $cuenta->nomcomer}}" required>
            <input class="form-control" type="text" name="ubicacion" value="{{ old('ubicacion') ?? $cuenta->ubicacion}}" required>
            <input class="form-control" type="text" name="colonia" value="{{ old('colonia') ?? $cuenta->colonia}}" required>
            <input class="form-control" type="text" name="finicio" value="{{ old('finicio') ?? $cuenta->finicio}}" required>
            <input class="form-control" type="text" name="numpe" value="{{ old('numpe') ?? $cuenta->numpe}}" required>
            <input class="form-control" type="text" name="fperm" value="{{ old('fperm') ?? $cuenta->fperm}}" required>
            <input class="form-control" type="text" name="fbaja" value="{{ old('fbaja') ?? $cuenta->fbaja}}" required>
            <input class="form-control" type="text" name="fnotifica" value="{{ old('fnotifica') ?? $cuenta->fnotifica}}" required>
            <input class="form-control" type="text" name="gestor" value="{{ old('gestor') ?? $cuenta->gestor}}" required>
            <input class="form-control" type="text" name="expcat" value="{{ old('expcat') ?? $cuenta->expcat}}" required>
            <input class="form-control" type="text" name="ctaant" value="{{ old('ctaanttipo') ?? $cuenta->ctaanttipo}}" required>
            <input class="form-control" type="text" name="freq" value="{{ old('freq') ?? $cuenta->freq}}" required>
            <input class="form-control" type="text" name="cvereq" value="{{ old('cvereq') ?? $cuenta->cvereq}}" required>
            <input class="form-control" type="text" name="fembargo" value="{{ old('fembargo') ?? $cuenta->fembargo}}" required>
            <input class="form-control" type="text" name="rfc" value="{{ old('rfc') ?? $cuenta->rfc}}" required>
            <input class="form-control" type="text" name="telpart" value="{{ old('telpart') ?? $cuenta->telpart}}" required>
            <input class="form-control" type="text" name="telneg" value="{{ old('telneg') ?? $cuenta->telneg}}" required>
            <input class="form-control" type="text" name="grup0" value="{{ old('grupo') ?? $cuenta->grupo}}" required> 
            <input class="form-control" type="text" name="cuenta" value="{{ old('tipo') ?? $cuenta->tipo}}" required>        
        
        </div>
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Edit cuenta</button>
        </div>
    </form>
    @endsection
