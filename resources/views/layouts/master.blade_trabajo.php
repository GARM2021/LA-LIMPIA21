<!DOCTYPE html> {{-- C2 L30 --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   
 <!-- <LInk href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <LINk href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">      
   --> 
   <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('css');
   <!-- Scripts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


 <style>
    body {
      background-color: rgb(197, 225, 235);
    }
    </style>
     <title>Limpia 2222221</title>
</head>

<body>
    <h1>L I M P I A 21</h1>
    <div class="links">
        <a href="/">Menu Principal</a> {{-- C4 --}}

    </div>
   
    @yield('content')
   
</body>

@yield('js')

</html>
