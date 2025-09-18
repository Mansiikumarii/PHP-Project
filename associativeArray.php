<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Country Capitals</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://www.amazon.in/Illuminated-Geography-Learning-Classroom-Turquoise/dp/B0CCYJ2NBL') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            text-align: center;
            padding: 50px;
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 15px;
            display: inline-block;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }

        .capital {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .removed {
            margin-top: 20px;
            font-weight: bold;
            color: #ffd700;
        }

        .count {
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Country Capitals</h1>

    <?php
    $capitals = array(
        "Switzerland" => "Bern",
        "Japan" => "Tokyo",
        "United States" => "Washington, D.C",
        "Canada" => "Ottawa"
    );

    // Add Australia
    $capitals["Australia"] = "Canberra";

    // Remove last element (Australia)
    array_pop($capitals);

    // Get first key-value pair before removing
    reset($capitals);
    $firstKey = key($capitals);
    $firstValue = current($capitals);

    // Remove first element
    array_shift($capitals);

    // Print remaining capitals
    foreach($capitals as $key => $value){
        echo "<div class='capital'>{$key} = {$value}</div>";
    }

    // Print the removed first key-value pair
    echo "<div class='removed'>Removed pair: {$firstKey} = {$firstValue}</div>";

    // Flip and reverse the array
    $capitals = array_flip($capitals);
    $capitals = array_reverse($capitals);

    // Print count
    echo "<div class='count'>Total entries after flipping and reversing: " . count($capitals) . "</div>";
    ?>
</div>

</body>
</html>
