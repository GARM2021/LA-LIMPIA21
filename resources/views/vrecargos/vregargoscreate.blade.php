@extends('layouts.master') {{-- C2  --}}
@section('content')
<h1>Create Recargo </h1>
    
    <form method="POST" action="{{route('recargos.store')}}">
      @csrf 
         
        <div class="form-row"> 
            <label>Recargo</label>
            <input class="form-control" type="number" name="ayo" max="2021" value="{{ old('ayo')}}" required>
   
            <label>Porcentaje de Recargo</label>
            <input class="form-control" type="number" name="pctajerec" value="{{ old('pctajerec')}}" required>
            <label>Porcentaje de Recargo 2</label>
            <input class="form-control" type="number" name="pctajerec2" value="{{ old('pctajerec2')}}" required>
           
  
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Create Recargo</button>
        </div>
        
    </form>
    @endsection
