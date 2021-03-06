@extends('layouts.master')
@section('css')
<LInk rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <LINk rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
@endsection {{-- C2 L30 --}}
@section('content')

<div class="content">
<h1>List of Cuentas</h1>

<a class="btn btn-success mb-3" href="{{ route('cuentas.create') }}">Create</a>

@if (empty($tipocuentas))
    <div class="alert alert-warning">La lista de cuentas esta vacia</div>

@else
@include('components.cuenta-card');
@endif
</div>
@endsection


{{-- </body>

</html> --}}
