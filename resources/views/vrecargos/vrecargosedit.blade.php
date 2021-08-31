@extends('layouts.master') {{-- C2 L30 --}}
@section('content')
    <h1>Edit a Recargos</h1>
    
    <form method="POST" action="{{route('recargos.update', ['recargo' => $recargo->ayo] )}}">
      @csrf 
        @method('PUT')
        <div class="form-row">
            <label>Recargos {{$recargo->ayo}}</label>
             {{-- <input class="form-control" type="text" name="ayo"  value="{{ old('ayo') ?? $ayo->ayo}}" >  --}}
        </div>
        <div class="form-row"> 
            <label>Porcentaje de Recargos</label>
            <input class="form-control" type="number" name="pctajerec" value="{{ old('pctajerec') ?? $recargo->pctajerec}}" required>
        </div>
        <div class="form-row"> 
            <label>Porcentaje de Recargos 2</label>
            <input class="form-control" type="number" name="pctajerec2" value="{{ old('pctajerec2') ?? $recargo->pctajerec2}}" required>
        </div>
              
        <div class="form-row mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Edit Recargos</button>
        </div>
    </form>
    @endsection
