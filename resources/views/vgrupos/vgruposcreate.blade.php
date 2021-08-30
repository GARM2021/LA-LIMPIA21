@extends('layouts.master') {{-- C2  --}}
@section('content')
<h1>Create Grupo </h1>
    
    <form method="POST" action="{{route('grupos.store')}}">
      @csrf 
         
        <div class="form-row"> 
            <label>Nombre Grupos</label>
            <input class="form-control" type="text" name="descripcion" value="{{ old('descripcion')}}" required>
            <label>Fundamento</label>
            <input class="form-control" type="text" name="fundamento" value="{{ old('fundamento')}}" required>
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Create Grupo</button>
        </div>
        
    </form>
    @endsection
