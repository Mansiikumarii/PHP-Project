<?php
session_start();

// Initialize counter
if (!isset($_SESSION['seconds'])) {
    $_SESSION['seconds'] = 0;
}

if (isset($_POST['stop'])) {
    // Stop counting and reset session
    session_unset();
    session_destroy();
    $message = "Counting stopped.";
} else {
    // Increment counter
    $_SESSION['seconds']++;
    $message = "Seconds: " . $_SESSION['seconds'];

    // Auto refresh every 1 second
    header("Refresh: 1");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        .counter-box {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .counter-box h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>

    <div class="counter-box">
        <h1><?= $message ?></h1>

        <form method="post" action="">
            <input type="submit" name="stop" value="Stop">
        </form>
    </div>

</body>

</html>
