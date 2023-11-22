<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>

    <div class="container py-4">

        <h1>HOME</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Codice</th>
                    <th scope="col">Stazione Partenza</th>
                    <th scope="col">Orario Partenza</th>
                    <th scope="col">Stazione Arrivo</th>
                    <th scope="col">Orario Arrivo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        @php
                            $departure_time = date_create($train->departure_time);
                            $departure_time = date_format($departure_time, 'H:i');
                            $arrival_time = date_create($train->arrival_time);
                            $arrival_time = date_format($arrival_time, 'H:i');
                        @endphp
                        <th>{{ $train->train_code }} </th>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $departure_time }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $arrival_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
