<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    <!-- Includiamo gli assets con la direttiva vite-->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="text-center">Lista Film Database</h1>
        <section>
            <div class="container">
                <div class="d-flex">
                    <ul class="row">
                        @foreach ($movies as $movie)
                            <li class="col-4 p-3">
                                <div>TItolo: {{ $movie['title'] }}</div>
                                <ul>
                                    <li>Titolo originale: {{ $movie['original_title'] }}</li>
                                    <li>Nazionalità: {{ $movie['nationality'] }}</li>
                                    <li>Data Uscita: {{ $movie['date'] }}</li>
                                    <li>Voto: {{ $movie['vote'] }}</li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
