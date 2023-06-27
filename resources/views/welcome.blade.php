<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th class="text-center text-danger">Company</th>
                        <th class="text-center text-danger">Departure Station</th>
                        <th class="text-center text-danger">Arrival Station</th>
                        <th class="text-center text-danger">Departure Date</th>
                        <th class="text-center text-danger">Arrival Date</th>
                        <th class="text-center text-danger">Train Code</th>
                        <th class="text-center text-danger">Number Of Carriages</th>
                        <th class="text-center text-danger">In time</th>
                        <th class="text-center text-danger">Deleted</th>
        
                    </tr>
                </thead>
                <tbody>
                    @foreach($trains as $item)
                        <tr>
                            <td class="text-center">{{ $item->azienda }}</td>
                            <td class="text-center">{{ $item->stazione_partenza}}</td>
                            <td class="text-center">{{ $item->stazione_arrivo }}</td>
                            <td class="text-center">{{ substr($item->ora_partenza , 0, -3) }}</td>
                            <td class="text-center">{{ substr($item->ora_arrivo ,0, -3) }}</td>
                            <td class="text-center">{{ $item->codice_treno }}</td>
                            <td class="text-center">{{ $item->carrozze }}</td>
                            <td class="text-center">{{ $item->in_orario ? 'si' :  'no' }}</td>
                            <td class="text-center">{{ $item->cancellato ? 'si' :  'no'}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
