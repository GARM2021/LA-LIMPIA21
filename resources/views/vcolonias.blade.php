<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colonias</title>
</head>
<body>
    {{-- C1 --}}
    <h1> All Colonias</h1>
    @foreach ($colonias as $colonia )
    <h3>{{ $colonia->colonia }}</h3>
    <p>{{ $colonia->nomcol }}</p>
        
    @endforeach
    
</body>
</html>