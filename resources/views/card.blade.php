<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col p-3">
                <div class="bg-warning">
                <h1 class="text-center text-primary border border-warning p-3">Orari Treni Partenze/Arrivi</h1>
            </div>
                <table class="table table-warning table-striped">
                    <thead>
                        <tr>
                            <th>Azienda</th>
                            <th>Stazione di partenza</th>
                            <th>Stazione di arrivo</th>
                            <th>Orario di partenza</th>
                            <th>Orario di arrivo</th>
                            <th>Codice treno</th>
                            <th>Numero carrozze</th>
                            <th>Treno in orario</th>
                            <th>Treno cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trains as $train)
                        <tr>
                            <td>{{$train['Azienda']}}</td>
                            <td>{{$train['stazione_di_partenza']}}</td>
                            <td>{{$train['stazione_di_arrivo']}}</td>
                            <td>{{$train['orario_di_partenza']}}</td>
                            <td>{{$train['orario_di_arrivo']}}</td>
                            <td>{{$train['codice_treno']}}</td>
                            <td>{{$train['numero_carrozze']}}</td>
                            <td>{{$train['treno_in_orario']}}</td>
                            <td>{{$train['treno_cancellato']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
