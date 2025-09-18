<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Card</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .grade-card {
            background: rgba(0, 0, 0, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
            text-align: center;
            max-width: 400px;
        }

        .grade-card .grade-icon {
            font-size: 4rem;
            margin-bottom: 15px;
        }

        .grade-card h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .grade-card p {
            font-size: 1.5rem;
            background: #1abc9c;
            padding: 15px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 10px;
            min-width: 250px;
        }
    </style>
</head>

<body>

    <div class="grade-card">
        <div class="grade-icon">📋</div>
        <h1>Your Grade Summary</h1>

        <?php
        $grade = 'A';

        switch ($grade) {
            case 'A':
                $message = "Excellent work! You did great!";
                break;
            case 'B':
                $message = "Good job! You did well.";
                break;
            case 'C':
                $message = "Fair performance. You did okay.";
                break;
            case 'D':
                $message = "Needs improvement. You did poor.";
                break;
            case 'F':
                $message = "Unfortunately, you failed.";
                break;
            default:
                $message = "{$grade} is not a valid grade.";
        }

        echo "<p><strong>Grade: {$grade}</strong><br>{$message}</p>";
        ?>
    </div>

</body>

</html>
