@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h1>Edit a Grupo</h1>
    
    <form method="POST" action="{{route('grupos.update', ['grupo' => $grupo->grupo] )}}">
      @csrf 
        @method('PUT')
        <div class="form-row">
            <label>Grupo {{$grupo->grupo}}</label>
             {{-- <input class="form-control" type="text" name="grupo"  value="{{ old('grupo') ?? $grupo->grupo}}" >  --}}
        </div>
        <div class="form-row"> 
            <label>Nombre Grupo</label>
            <input class="form-control" type="text" name="grupo" value="{{ old('grupo') ?? $grupo->grupo}}" required>
        </div>
        <div class="form-row"> 
            <label>Fundamento</label>
            <input class="form-control" type="text" name="fundamento" value="{{ old('fundamento') ?? $grupo->fundamento}}" required>
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Edit grupo</button>
        </div>
    </form>
    @endsection
