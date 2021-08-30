@extends('layouts.master') {{-- C2  --}}
@section('content')
<h1>Create SubGiros </h1>
    
    <form method="POST" action="{{route('subgiros.store')}}">
      @csrf 
         
        <div class="form-row"> 
            <label>Nombre SubGiros</label>
            <input class="form-control" type="text" name="nomsubgiro" value="{{ old('nomsubgiro')}}" required>
            <label>Giro</label>
            <input class="form-control" type="text" name="giro" value="{{ old('giro')}}" required>
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Create SubGiros</button>
        </div>
        
    </form>
    @endsection
