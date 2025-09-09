<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Pay Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('https://images.unsplash.com/photo-1573164574572-cb89e39749b4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080') no-repeat center center fixed;
            background-size: cover;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .pay-calculator {
            background: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 15px;
            width: 400px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #ffd700;
        }

        input[type="number"], input[type="submit"] {
            width: 80%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            font-size: 1em;
        }

        input[type="number"] {
            border: 1px solid #ffd700;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .result {
            margin-top: 20px;
            font-size: 1.3em;
            font-weight: bold;
            color: #ffd700;
        }

        .error {
            color: #ff4c4c;
        }
    </style>
</head>

<body>

    <div class="pay-calculator">
        <h1>Weekly Pay Calculator</h1>

        <form action="" method="post">
            <input type="number" name="hours" step="any" min="0" required placeholder="Hours Worked">
            <input type="number" name="rate" step="0.01" min="0" required placeholder="Hourly Rate (Rs.)">
            <input type="submit" value="Calculate Pay">
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <?php
                $hours = (float) $_POST['hours'];
                $rate = (float) $_POST['rate'];
                $weekly_pay = 0;

                echo "<div class='result'>";
                if ($hours <= 0 || $rate <= 0) {
                    echo "<span class='error'>Error: Hours and rate must be positive numbers.</span>";
                } else {
                    if ($hours <= 40) {
                        $weekly_pay = $hours * $rate;
                    } else {
                        $weekly_pay = ($rate * 40) + ($rate * 1.5 * ($hours - 40));
                    }

                    echo "Your weekly pay is: <br><span>Rs. " . number_format($weekly_pay, 2) . "</span>";
                }
                echo "</div>";
            ?>
        <?php endif; ?>

    </div>

</body>

</html>
