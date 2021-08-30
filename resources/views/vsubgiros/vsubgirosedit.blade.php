@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h1>Edit a SubGiro</h1>
    
    <form method="POST" action="{{route('giros.update', ['subgiro' => $subgiro->subgiro] )}}">
      @csrf 
        @method('PUT')
        <div class="form-row">
            <label>SubGiro {{$subgiro->subgiro}}</label>
             {{-- <input class="form-control" type="text" name="subgiro"  value="{{ old('subgiro') ?? $subgiro->subgiro}}" >  --}}
        </div>
        <div class="form-row"> 
            <label>Nombre SubGiro</label>
            <input class="form-control" type="text" name="nomsubgiro" value="{{ old('nomsubgiro') ?? $subgiro->nomsubgiro}}" required>
        </div>
        <div class="form-row"> 
            <label>Giro</label>
            <input class="form-control" type="text" name="giro" value="{{ old('giro') ?? $subgiro->giro}}" required>
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Edit subgiro</button>
        </div>
    </form>
    @endsection
