<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Calendar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calendar-card {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            width: 350px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .calendar-card .day {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #4e54c8;
        }

        .calendar-card .message {
            font-size: 1.4rem;
            padding: 15px;
            background: #f1f1f1;
            border-radius: 10px;
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .calendar-card .date {
            font-size: 1rem;
            color: #777;
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="calendar-card">
        <div class="day">
            📅 <?php echo date('l'); ?>
        </div>

        <div class="message">
            <?php
            $date = date('l');

            switch ($date) {
                case 'Monday':
                    $message = "I hate Mondays!";
                    break;
                case 'Tuesday':
                    $message = "It is Taco Tuesday!";
                    break;
                case 'Wednesday':
                    $message = "The work week is half over!";
                    break;
                case 'Thursday':
                    $message = "The work is half over!";
                    break;
                case 'Friday':
                    $message = "The weekend is almost here!";
                    break;
                case 'Saturday':
                    $message = "Time to party!";
                    break;
                case 'Sunday':
                    $message = "Time to relax!";
                    break;
                default:
                    $message = "{$date} is not a valid day.";
            }

            echo $message;
            ?>
        </div>

        <div class="date">
            <?php echo date('F j, Y'); ?>
        </div>
    </div>

</body>

</html>
