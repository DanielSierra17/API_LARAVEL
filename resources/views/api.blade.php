<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes de RICK AND MORTY</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            background-color: #000;
            color: #fff;
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            max-width: 100%;
        }

        .card {
            background-color: #0097FF;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.3);
            padding: 20px;
            width: calc(33.33% - 40px);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 20px;
            color: #fff;
            margin: 0;
        }

        .card p {
            color: #ccc;
            margin: 5px 0;
        }

        .card a {
            color: #FFFF00; 
            text-decoration: none;
        }

        .card a:hover {
            text-decoration: underline;
        }

        @media screen and (max-width: 768px) {
            .card {
                width: calc(50% - 40px);
            }
        }

        @media screen and (max-width: 480px) {
            .card {
                width: calc(100% - 40px);
            }
        }
    </style>
</head>

<body>
    <div class="cards-container">
        @foreach($data['results'] as $character)
        <div class="card">
            <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}">
            <h3>{{ $character['name'] }}</h3>
            <p><strong>Status:</strong> {{ $character['status'] }}</p>
            <p><strong>Species:</strong> {{ $character['species'] }}</p>
            <p><strong>Type:</strong> {{ $character['type'] }}</p>
            <p><strong>Gender:</strong> {{ $character['gender'] }}</p>
            <p><strong>Origin:</strong> {{ $character['origin']['name'] }}</p>
            <p><strong>Location:</strong> {{ $character['location']['name'] }}</p>
            <p><strong>First seen in episode:</strong> {{ $character['episode'][0] }}</p>
            <p><strong>URL:</strong> <a href="{{ $character['url'] }}">{{ $character['url'] }}</a></p>
            <p><strong>Created at:</strong> {{ $character['created'] }}</p>
        </div>
        @endforeach
    </div>
</body>

</html>
