@extends('layouts.master') {{-- C2  --}}
@section('content')
<h1>Create Gestor 20210825 15:16</h1>
    
    <form method="POST" action="{{route('gestores.store')}}">
      @csrf 
         
        <div class="form-row"> 
            <label>Nombre Gestor</label>
            <input class="form-control" type="text" name="descripcion" value="{{ old('descripcion')}}" required>
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Create gestor</button>
        </div>
        
    </form>
    @endsection
