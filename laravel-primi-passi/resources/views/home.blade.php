<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- al suo interno possiamo scrivere in codice php -->
    @php    
        $name = 'Valerio';
        $surname = 'Matranga';
        $colori = ['verde','rosso','giallo','arancio','blu'];
    @endphp

    <h1>Hello Word {{$name}} {{$surname}}</h1>
    <h3>Lista Colori:</h3>
    @foreach ($colori as $colore)
        <ul>
            <li>{{$colore}}</li>
        </ul>
    @endforeach
</body>
</html>