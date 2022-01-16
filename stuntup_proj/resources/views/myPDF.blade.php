<!DOCTYPE html>

<html>

<head>  
    <title>PDF Fattura</title>   
</head>

<body>
    <h1>Fattura n°{{$number}}</h1>
    <table class="table table-dark w-75">

        <thead>
            <tr><th scope="col" >Campo Fattura</th><th scope="col">Valore Campo</th></tr>
        </thead>
        
        <tbody>
            
            @foreach ($collection as $item)
           
            <tr><td class="w-25">{{$item->bill_attr_name}}</td><td>{{$item->bill_attr_value}}</td></tr>
                 
            @endforeach
            
        </tbody>    
        </table>

</body>

</html>