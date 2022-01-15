<!DOCTYPE html>

<html>

<head>

    <title>Hi</title>

</head>

<body>
    <h1>Fattura n°{{$number}}</h1>
    <table class="table table-dark">

        <thead>
            <tr><th scope="col">Colonna attributi</th><th scope="col">Colonna valori</th></tr>
        </thead>
        
        <tbody>
            
            @foreach ($collection as $item)
           
            <tr><td>{{$item->bill_attr_name}}</td><td>{{$item->bill_attr_value}}</td></tr>
                 
            @endforeach
            
        </tbody>    
        </table>

</body>

</html>