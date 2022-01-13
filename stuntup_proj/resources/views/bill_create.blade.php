<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Bill</title>
</head>
<body>

    <h1>Inserisci i dati della fattura</h1>

    <form name="input" method="get">
        <input class="form-control m-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" type="text" name="item" >
    </form>

    <button class="btn btn-primary m-3" type="button" onclick="add_field()">Aggiungi campo</button>
    <button type="submit" class="btn btn-danger">Submit</button>
    
    
    <script>    
        function add_field() 
        {
            var form = document.getElementsByTagName('form')[0],
            input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('name', 'item');
            input.setAttribute('class', 'form-control m-3')
            form.appendChild(input);
        };
    </script>
    {{-- <script type="text/javascript" src="{{ asset('js/app.js') }}></script> --}}
</body>
</html>