<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Selection</title>
    <style>
        body {
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }

        .form-container {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 25px;
            color: #333;
        }

        .radio-group {
            text-align: left;
            margin-bottom: 20px;
        }

        label {
            display: block;
            padding: 10px;
            font-size: 1.1em;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: background 0.3s ease, border-color 0.3s ease;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        label:hover {
            background-color: #f8f9fa;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 20px;
            font-size: 1.1em;
            padding: 15px;
            border-radius: 8px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Select Your Credit Card</h2>

        <form action="" method="post">
            <div class="radio-group">
                <label>
                    <input type="radio" name="creditCard" value="American Express">
                    American Express
                </label>

                <label>
                    <input type="radio" name="creditCard" value="Capital One Bank">
                    Capital One Bank
                </label>

                <label>
                    <input type="radio" name="creditCard" value="Citigroup">
                    Citigroup
                </label>
            </div>

            <input type="submit" value="Confirm" name="Confirm">
        </form>

        <?php
        if (isset($_POST['Confirm'])) {
            if (!empty($_POST['creditCard'])) {
                $credit_card = htmlspecialchars($_POST['creditCard']);
                echo "<div class='message success'>✅ You selected: <strong>{$credit_card}</strong></div>";
            } else {
                echo "<div class='message error'>⚠️ Please make a selection before confirming.</div>";
            }
        }
        ?>
    </div>

</body>

</html>
