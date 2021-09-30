<!DOCTYPE html> {{-- C2 L30 --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

   
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function myFunction(element) {
           
           $('#e_tipo').val(element.parentElement.parentElement.getAttribute("trtipo"));
           $('#e_descripcion').val(element.parentElement.parentElement.getAttribute("trdescripcion"));
           $('#e_fecven').val(element.parentElement.parentElement.getAttribute("trfecven"));
           $('#e_doctot').val(element.parentElement.parentElement.getAttribute("trdoctot"));
           
           
          
           var tipo = $("#e_tipo").val();          
           $X = `/tipos/${tipo}`;
           
           document.getElementById("myFormId").action = $X;
       }

       function getAction() {
        $tipo = 2;
       // document.getElementById("myFormId").action = $tipo;
           
       }
   </script>



    @yield('css')



    <!-- Fonts -->
    <!--<link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

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

</html>
