@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h2>Show SubGiro</h2>
    
    <form method="GET" action="{{route('giros.index', ['subgiro' => $subgiro->subgiro] )}}">
      @csrf 
        <div class="form-row">
            <label>SubGiro {{$subgiro->subgiro}}</label>
            <br>
             {{-- <input class="form-control" type="text" name="subgiro"  value="{{ old('subgiro') ?? $subgiro->subgiro}}" >  --}}
        </div>
        <div class="form-row"> 
            <label>Nombre SubGiro</label>
            <br>
            <label>{{$subgiro->nomsubgiro}}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $subgiro->nomcol}}" required> --}}
        </div>
        <div class="form-row"> 
            <label>Giro/label>
            <br>
            <label>{{$subgiro->giro}}</label>
            {{-- <input class="form-control" type="text" name="nomcol" value="{{ old('nomcol') ?? $subgiro->nomcol}}" required> --}}
        </div>
        
        
      
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Indice de Giros</button>
        </div>
    </form>
    @endsection