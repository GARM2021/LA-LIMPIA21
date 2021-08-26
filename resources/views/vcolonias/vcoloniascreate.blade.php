@extends('layouts.master') {{-- C2  --}}
@section('content')
<h1>Create Colonia 20210825 15:16</h1>
    
    <form method="POST" action="{{route('colonias.store')}}">
      @csrf 
         
        <div class="form-row"> 
            <label>Nombre Colonia</label>
            <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol')}}" required>
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Create colonia</button>
        </div>
    </form>
    @endsection
