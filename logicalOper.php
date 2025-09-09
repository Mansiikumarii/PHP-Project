<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Weather Status</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            transition: background 0.8s ease;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .weather-card {
            background: rgba(0, 0, 0, 0.75);
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            max-width: 500px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: 80%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            font-size: 1em;
        }

        select {
            width: 84%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            font-size: 1em;
        }

        input[type="submit"] {
            padding: 12px 25px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            font-size: 1.3em;
            font-weight: bold;
        }
    </style>
</head>

<body id="body">

    <div class="weather-card">
        <h1>Dynamic Weather Status</h1>

        <form method="post">
            <input type="number" name="temp" step="any" placeholder="Enter Temperature (°C)" required><br>

            <select name="cloudy" required>
                <option value="">Select Cloudiness</option>
                <option value="1">Cloudy</option>
                <option value="0">Sunny</option>
            </select><br>

            <input type="submit" value="Check Weather">
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <?php
                $temp = (float) $_POST['temp'];
                $cloudy = (int) $_POST['cloudy'];

                echo "<div class='result'>";
                if ($temp >= 0 && $temp <= 30) {
                    echo "🌤️ The weather is good.<br>";
                } else {
                    echo "⚡ The weather is extreme.<br>";
                }

                if ($cloudy) {
                    echo "☁️ It is cloudy today.";
                } else {
                    echo "☀️ It's sunny today.";
                }
                echo "</div>";

                // Pass values to JS
                echo "<script>
                    const temp = $temp;
                    const cloudy = $cloudy;
                    document.getElementById('body').className = '';
                    if (temp <= 0) {
                        document.getElementById('body').style.backgroundImage = 'url(\"https://images.unsplash.com/photo-1516542076529-1ea3854896f6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080\")';  // Cold
                    } else if (cloudy == 1) {
                        document.getElementById('body').style.backgroundImage = 'url(\"https://images.unsplash.com/photo-1527694224009-5977f3bcefa3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080\")';  // Cloudy
                    } else {
                        document.getElementById('body').style.backgroundImage = 'url(\"https://images.unsplash.com/photo-1506744038136-46273834b3fb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080\")';  // Sunny
                    }
                </script>";
            ?>
        <?php endif; ?>

    </div>

</body>

</html>
