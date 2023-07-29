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
            <div class="col-12">
                @foreach($trains as $train)
                    <div class="card m-3" >
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->azienda }}</h5>
                            <h6 class="mt-4">Partenza da: <strong>{{ $train->stazione_partenza }}</strong></h6>
                            <h6 class="">Arrivo a: <strong>{{ $train->stazione_arrivo }}</strong></h6>
                            <p>Orario di partenza:
                                <strong>{{ $train->cancellato ? 'Treno cancellato' : $train->orario_partenza }}</strong>
                            </p>
                            <p>Orario di arrivo: <strong>{{ $train->orario_arrivo }}</strong></p>
                            <p><strong>{{ $train->in_orario ? 'In orario' : 'In ritardo' }}</strong></p>
                            <p>Codice treno: {{ $train->codice_treno }}</p>
                            <p>Numero carrozze: {{ $train->n_carrozze }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>