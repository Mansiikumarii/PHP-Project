<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Operations</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .math-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .math-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
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
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e2e3e5;
            border-radius: 5px;
            border: 1px solid #d6d8db;
            text-align: center;
            font-size: 1.2em;
            color: #212529;
        }
    </style>
</head>

<body>
    <div class="math-container">
        <h2>Math Operations</h2>

        <form action="" method="post">
            <label for="x">x:</label>
            <input type="number" name="x" id="x" step="any" required placeholder="Enter value of x">

            <label for="y">y:</label>
            <input type="number" name="y" id="y" step="any" required placeholder="Enter value of y">

            <label for="z">z:</label>
            <input type="number" name="z" id="z" step="any" required placeholder="Enter value of z">

            <input type="submit" value="Compute">
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <?php
                $x = (float) $_POST['x'];
                $y = (float) $_POST['y'];
                $z = (float) $_POST['z'];

                $absX    = abs($x);
                $floorX  = floor($x);
                $ceilX   = ceil($x);
                $roundX  = round($x);
                $powerXY = pow($x, $y);
                $sqrtX   = ($x >= 0) ? sqrt($x) : 'NaN';
                $maxVal  = max($x, $y, $z);
                $minVal  = min($x, $y, $z);
                $piVal   = pi();
                $randVal = rand(1, 6);
            ?>
            <div class="result">
                <p><strong>|x|:</strong> <?php echo $absX; ?></p>
                <p><strong>floor(x):</strong> <?php echo $floorX; ?></p>
                <p><strong>ceil(x):</strong> <?php echo $ceilX; ?></p>
                <p><strong>round(x):</strong> <?php echo $roundX; ?></p>
                <p><strong>x ^ y:</strong> <?php echo $powerXY; ?></p>
                <p><strong>sqrt(x):</strong> <?php echo $sqrtX; ?></p>
                <p><strong>Max of (x, y, z):</strong> <?php echo $maxVal; ?></p>
                <p><strong>Min of (x, y, z):</strong> <?php echo $minVal; ?></p>
                <p><strong>Pi value:</strong> <?php echo number_format($piVal, 5); ?></p>
                <p><strong>Random (1-6):</strong> <?php echo $randVal; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
