<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Check - Dare to Enter?</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: #ffe4e1;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .age-container {
            background: #fff0f5;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h1 {
            color: #d63384;
        }

        input[type="number"] {
            width: 80%;
            padding: 12px;
            margin: 15px 0;
            border-radius: 5px;
            border: 1px solid #d63384;
        }

        input[type="submit"] {
            padding: 12px 25px;
            background-color: #d63384;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #c1127a;
        }

        .result {
            margin-top: 20px;
            font-size: 1.2em;
            padding: 15px;
            border-radius: 10px;
            color: #333;
        }

        .sassy {
            color: #e83e8c;
            font-weight: bold;
        }

        .warning {
            color: #fd7e14;
            font-weight: bold;
        }

        .success {
            color: #20c997;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="age-container">
        <h1>Dare to Enter?</h1>

        <form action="" method="post">
            <input type="number" name="age" min="0" required placeholder="Enter your age...">
            <br>
            <input type="submit" value="Check Eligibility">
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <?php
                $age = (int) $_POST['age'];

                echo "<div class='result'>";
                if ($age >= 100) {
                    echo "<p class='warning'>Whoa there, grandma/grandpa! Way too fabulous to enter.</p>";
                } elseif ($age >= 18) {
                    echo "<p class='success'>Yasss! You’re sexy enough to enter. Welcome to the party! 💃</p>";
                } elseif ($age <= 0) {
                    echo "<p class='sassy'>Hmm… Are you a time traveler? That's not valid.</p>";
                } else {
                    echo "<p class='warning'>Oops! Sorry, cutie. You need to be 18+ to enter. 😏</p>";
                }
                echo "</div>";
            ?>
        <?php endif; ?>
    </div>

</body>

</html>
