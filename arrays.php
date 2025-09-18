<?php
$foods = array("tomato", "banana", "apples", "watermelons");

// Print first three items
echo $foods[0] . "<br>";
echo $foods[1] . "<br>";
echo $foods[2] . "<br>";

// Print all items
foreach ($foods as $food) {
    echo $food . "<br>";
}

// Add "orange" and "mangoes" to the array
array_push($foods, "orange", "mangoes");

// Remove last element ("mangoes")
array_pop($foods);

// Remove first element ("tomato")
array_shift($foods);

// Reverse the array
$reverse_food = array_reverse($foods);

// Get count of elements
$total_foods = count($foods);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            padding: 30px;
        }

        h3 {
            color: #333;
            margin-bottom: 10px;
        }

        ul {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            list-style-type: square;
        }

        ul li {
            padding: 8px;
            font-size: 1.1em;
        }

        .count {
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="count">
        Total foods: <?= $total_foods ?>
    </div>

    <h3>Final Foods Array:</h3>
    <ul>
        <?php foreach ($foods as $food): ?>
            <li><?= htmlspecialchars($food) ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Reversed Foods Array:</h3>
    <ul>
        <?php foreach ($reverse_food as $food): ?>
            <li><?= htmlspecialchars($food) ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>
