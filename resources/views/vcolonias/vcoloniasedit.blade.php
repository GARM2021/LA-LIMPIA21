@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h1>Edit a Colonia</h1>
    
    <form method="POST" action="{{route('colonias.edit', ['colonia' => $colonia->colonia] )}}">
      @csrf 
        @method('PUT')
        <div class="form-row">
            <label>Colonia</label>
            <input class="form-control" type="text" name="colonia"  value="{{ old('colonia') ?? $colonia->colonia}}" required>
        </div>
        <div class="form-row"> 
            <label>Nombre Colonia</label>
            <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $colonia->nomcol}}" required>
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Edit colonia</button>
        </div>
    </form>
    @endsection
