<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .circle-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            text-align: left;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 12px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e2e3e5;
            border-radius: 5px;
            font-size: 1.1em;
            color: #212529;
        }

        .circle-visual {
            margin: 20px auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #007BFF;
            background-color: rgba(0, 123, 255, 0.1);
        }
    </style>
</head>

<body>

    <div class="circle-container">
        <h2>Circle Calculator</h2>

        <form action="" method="post">
            <label for="radius">Radius (in cm):</label>
            <input type="number" name="radius" id="radius" step="any" min="0" required placeholder="Enter radius">

            <input type="submit" value="Calculate">
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && is_numeric($_POST['radius']) && $_POST['radius'] >= 0): ?>
            <?php
                $radius = (float) $_POST['radius'];
                $circumference = round(2 * pi() * $radius, 2);
                $area = round(pi() * pow($radius, 2), 2);
            ?>
            <div class="circle-visual"></div>
            <div class="result">
                <p><strong>Circumference:</strong> <?php echo $circumference; ?> cm</p>
                <p><strong>Area:</strong> <?php echo $area; ?> cm²</p>
            </div>
        <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <div class="result" style="background-color: #f8d7da; color: #721c24;">
                Please enter a valid non-negative number for radius.
            </div>
        <?php endif; ?>
    </div>

</body>

</html>
