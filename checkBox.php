<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Foods</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        fieldset {
            max-width: 350px;
            padding: 20px;
            border-radius: 10px;
            background: #f9f9f9;
            border: 1px solid #ccc;
        }
        legend {
            font-size: 1.2rem;
            font-weight: bold;
        }
        label {
            display: block;
            margin: 8px 0;
        }
        input[type="submit"] {
            margin-top: 12px;
            padding: 8px 15px;
            border: none;
            background: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Choose Your Favorite Foods</legend>
            <label><input type="checkbox" name="foods[]" value="Samosa"> Samosa</label>
            <label><input type="checkbox" name="foods[]" value="Naan"> Naan</label>
            <label><input type="checkbox" name="foods[]" value="Palak Paneer"> Palak Paneer</label>
            <label><input type="checkbox" name="foods[]" value="Dosa"> Dosa</label>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $allFoods = ["Samosa", "Naan", "Palak Paneer", "Dosa"];
        $selected = isset($_POST["foods"]) ? $_POST["foods"] : [];

        foreach ($allFoods as $food) {
            if (in_array($food, $selected)) {
                echo "✅ You like $food<br>";
            } else {
                echo "❌ You DON'T like $food<br>";
            }
        }
    }
    ?>
</body>
</html>
