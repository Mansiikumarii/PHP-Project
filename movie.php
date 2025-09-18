<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Price</title>
    <style>
        /* Movie-themed CSS */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .ticket-card {
            background: rgba(0, 0, 0, 0.85);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
            text-align: center;
            max-width: 400px;
        }

        .ticket-card h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .ticket-card p {
            font-size: 1.5rem;
            background: #ff4c4c;
            padding: 10px;
            border-radius: 8px;
            display: inline-block;
            margin-top: 15px;
        }

        .ticket-card .movie-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="ticket-card">
        <div class="movie-icon">🎬</div>
        <h1>Movie Ticket Booking</h1>

        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $child = false;
        $senior = false;
        $ticket = null;

        if ($child || $senior) {
            $ticket = 10;
        } else {
            $ticket = 15;
        }

        echo "<p>The ticket price is Rs.{$ticket}</p>";
        ?>
    </div>

</body>

</html>
