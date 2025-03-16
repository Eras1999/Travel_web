<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Your Trip - Travel Sri Lanka</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #1a3c34;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            font-size: 2em;
        }
        .content {
            padding: 40px;
            text-align: center;
            background-color: #f9f9f9;
            min-height: 80vh;
        }
        .content h2 {
            font-size: 2.5em;
            color: #1a3c34;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 1.2em;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }
        .form-container {
            margin-top: 30px;
        }
        .form-container input, .form-container textarea {
            display: block;
            width: 100%;
            max-width: 400px;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            padding: 10px 20px;
            background-color: #ff6f61;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container button:hover {
            background-color: #e65b50;
        }

   .success {
            color: #1a3c34;
            font-size: 1.2em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Travel Sri Lanka</h1>
    </header>
    <a href="/" class="btn" style="margin-top: 20px;">Back to Home</a>
    <div class="content">
        <h2>Plan Your Trip</h2>
        <p>Tell us your preferences, and we’ll help you craft the perfect Sri Lankan adventure!</p>
        
        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <div class="form-container">
            <form action="{{ route('trip.store') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="preferences" placeholder="Your Travel Preferences (e.g., beaches, wildlife, culture)" rows="4" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>