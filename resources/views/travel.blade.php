<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Sri Lanka</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        /* Header */
        header {
            background-color: #1a3c34;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            font-size: 2em;
        }
        /* Hero Section */
        .hero {
    background: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center;
    background-size: cover;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);

        }
        .hero h2 {
            font-size: 3em;
        }
        .hero p {
            font-size: 1.5em;
            margin-top: 10px;
        }
        /* Highlights Section */
        .highlights {
            padding: 40px;
            background-color: #f9f9f9;
            text-align: center;
        }
        .highlights h3 {
            font-size: 2em;
            margin-bottom: 30px;
            color: #1a3c34;
        }
        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .card {
            background-color: white;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card h4 {
            font-size: 1.5em;
            color: #1a3c34;
        }
        .card p {
            color: #666;
            margin-top: 10px;
        }
        /* Button */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #e65b50;
        }
    </style>
</head>
<body>
    <header>
        <h1>Travel Sri Lanka</h1>
    </header>

    <section class="hero">
        <div>
            <h2>Discover Sri Lanka</h2>
            <p>Explore paradise beaches, ancient ruins, and vibrant culture.</p>
            <a href="#" class="btn">Plan Your Trip</a>
        </div>
    </section>

    <section class="highlights">
        <h3>Top Destinations</h3>
        <div class="cards">
            @foreach ($destinations as $destination)
                <div class="card">
                    <h4>{{ $destination['name'] }}</h4>
                    <p>{{ $destination['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
</body>
</html>