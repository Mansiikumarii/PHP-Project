<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variable Check</title>
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .result {
            font-size: 1.2em;
            margin: 15px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .set {
            background-color: #d4edda;
            color: #155724;
        }

        .not-set {
            background-color: #f8d7da;
            color: #721c24;
        }

        .empty {
            background-color: #fff3cd;
            color: #856404;
        }

        .not-empty {
            background-color: #cce5ff;
            color: #004085;
        }
    </style>
</head>
<body>

    <div class="box">
        <h1>PHP Variable Check</h1>

        <?php
        $username = "MansiiKumarii";

        if(isset($username)){
            echo "<div class='result set'>This variable is set</div>";
        } else {
            echo "<div class='result not-set'>This variable is NOT set</div>";
        }

        if(empty($username)){
            echo "<div class='result empty'>This variable is empty</div>";
        } else {
            echo "<div class='result not-empty'>This variable is NOT empty</div>";
        }
        ?>
    </div>

</body>
</html>
