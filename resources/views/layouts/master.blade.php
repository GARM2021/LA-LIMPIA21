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

            //  myFunction(element)
            //  se activa en el evento onclick de la TABLA  que muestra los elementos 

            // Puebla los datos de los campos del MODAL 
            $('#e_tipo').val(element.parentElement.parentElement.getAttribute("trtipo"));
            $('#e_descripcion').val(element.parentElement.parentElement.getAttribute("trdescripcion"));
            $('#e_fecven').val(element.parentElement.parentElement.getAttribute("trfecven"));
            $('#e_doctot').val(element.parentElement.parentElement.getAttribute("trdoctot"));

            // Con el valor de la llave ya resuelto lo guarda en una variable de paso 
            var tipo = $("#e_tipo").val();

            // Concatena la varaiable  de paso con el string de la ruta ojo con el caracter ` 
           // que resuelve la variable de paso en la sentencia siguiente

        $X = `/tipos/${tipo}`;

            // Asigna la variable con el valor de la ruta a la propiedad .action 
            // del MODAL  para cuando con el submit ya esta definida
            document.getElementById("myFormId").action = $X;
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
