<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Vista fattura</title>
</head>
<body>
    <h3>la tua fattura n°{{$bill_number}}</h3>
    <table class="table table-dark">

    <thead>
        <tr><th scope="col">Colonna attributi</th><th scope="col">Colonna valori</th></tr>
    </thead>
    <tbody>
        @foreach ($bill as $item)
       
            <tr><td>{{$item->bill_attr_name}}</td><td>{{$item->bill_attr_value}}</td></tr>
             
        @endforeach
    </tbody>    
    </table>

    <a href="{{route("generate_pdf", $bill_number )}}">
        <button class="btn btn-primary m-3">Genera PDF fattura</button>
    </a>
</body>
</html>