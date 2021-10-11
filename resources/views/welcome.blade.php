@extends('layouts.master') {{-- C2 L30 --}}
@section('css') {{-- C 13.3 --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container-sm">

        <img class="img-fluid mx-auto d-block  rounded-circle " src="../escudoadmin21-24.jpeg"> 
      
    </div>

@endsection
