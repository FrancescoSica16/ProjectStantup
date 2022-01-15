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

    <h1 class="m-3">Inserisci i dati della fattura</h1>

    <form name="input" method="POST" action="{{ route('bill_creator') }}">
        @csrf
        <button type="submit" class="btn btn-danger m-3">Salva Fattura</button>
        <input class="form-control m-3 w-50" id="bill_number" aria-describedby="emailHelp" placeholder="Inserisci il n° fattura" type="text" name="bill_number" >
        <input type="hidden" id="indexAttr" name="index" value="-1">
        
    </form>

    <button class="btn btn-primary m-3" type="button" onclick="add_field()">Aggiungi campo in fattura</button>
    <a href="{{route("bill_index")}}">
        <button class="btn btn-primary m-3">Torna alla lista fatture</button>
    </a>
    
    <script>
        let count ="";
        function add_field() 
        {
            
            var index = document.getElementById('indexAttr');
            index.value =parseInt(index.value)+1;
            var form = document.getElementsByTagName('form')[0],
            input = document.createElement('input');
            var attr= 'bill_attr_name';
            input.setAttribute('type', 'text');
            input.setAttribute('name', attr.concat(count));
            input.setAttribute('class', 'form-control m-3 w-25 d-inline');
            input.setAttribute('placeholder', 'nuovo campo in fattura');
            form.appendChild(input);

            var value= 'bill_attr_value';
            input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('name', value.concat(count));
            input.setAttribute('class', 'form-control m-3 w-50 d-inline');
            input.setAttribute('placeholder', 'valore nuovo campo');
            form.appendChild(input);
            if(count=="")
                count=1;    
            else
                count++;
        };
    </script>
    
</body>
</html>