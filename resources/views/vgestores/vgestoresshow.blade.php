@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h2>Show Gestor</h2>
    
    <form method="GET" action="{{route('gestores.index', ['gestor' => $gestor->gestor] )}}">
      @csrf 
        <div class="form-row">
            <label>Gestor {{$gestor->gestor}}</label>
            <br>
             {{-- <input class="form-control" type="text" name="gestor"  value="{{ old('gestor') ?? $gestor->gestor}}" >  --}}
        </div>
        <div class="form-row"> 
            <label>Nombre Gestor</label>
            <br>
            <label>{{$gestor->descripcion}}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $gestor->nomcol}}" required> --}}
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Indice de Gestores</button>
        </div>
    </form>
    @endsection