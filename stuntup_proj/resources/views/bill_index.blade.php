<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <header class="p-3">
        <h1>fatture registrate</h1>
    </header>

        <a href="{{route("bill_create")}}">
            <button class="btn btn-primary m-3">Crea nuova fattura</button>
        </a>
    
    <table class="table table-dark m-3">
        <thead>
            <th class="col-1">n°fattura</th>
        </thead>
        <tbody> 
            @forelse ($bills as $bill)
                <tr>
                    <td><a href="{{ route('bill_view', $bill->bill_number ) }}">{{ $bill->bill_number }}</a></td>        
                </tr>
            @empty
                <tr>
                    <td colspan="3">Non ci sono fatture da visualizzare</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
</body>
</html>