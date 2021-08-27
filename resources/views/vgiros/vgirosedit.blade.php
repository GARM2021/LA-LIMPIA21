@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h1>Edit a Giro</h1>
    
    <form method="POST" action="{{route('giros.update', ['giro' => $giro->giro] )}}">
      @csrf 
        @method('PUT')
        <div class="form-row">
            <label>Giro {{$giro->giro}}</label>
             {{-- <input class="form-control" type="text" name="giro"  value="{{ old('giro') ?? $giro->giro}}" >  --}}
        </div>
        <div class="form-row"> 
            <label>Nombre Giro</label>
            <input class="form-control" type="text" name="nomgiro" value="{{ old('nomgiro') ?? $giro->nomgiro}}" required>
        </div>
        <div class="form-row"> 
            <label>Causa Recargo SI/NO</label>
            <input class="form-control" type="text" name="causarec" value="{{ old('causarec') ?? $giro->causarec}}" required>
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Edit giro</button>
        </div>
    </form>
    @endsection
