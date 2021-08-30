@extends('layouts.master') {{-- C2  --}}
@section('content')
<h1>Create Tipo </h1>
    
    <form method="POST" action="{{route('tipos.store')}}">
      @csrf 
         
        <div class="form-row"> 
            <label>Nombre Tipo</label>
            <input class="form-control" type="text" name="descripcion" value="{{ old('descripcion')}}" required>
            <label>Fecha Vencimiento</label>
            <input class="form-control" type="text" name="fecven" value="{{ old('fecven')}}" required>
            <label>Doc Tot</label>
            <input class="form-control" type="text" name="doctot" value="{{ old('doctot')}}" required>
  
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Create Tipo</button>
        </div>
        
    </form>
    @endsection
