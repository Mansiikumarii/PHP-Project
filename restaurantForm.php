<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Order Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .order-form {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        .order-form h2 {
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
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9f7ef;
            border-radius: 5px;
            border: 1px solid #28a745;
            text-align: center;
            font-size: 1.1em;
            color: #155724;
        }
    </style>
</head>

<body>
    <div class="order-form">
        <h2>Restaurant Order</h2>
        <form action="" method="post">
            <label for="quantity">Quantity of <strong>Paneer Makhani</strong> (Rs. 154.99 each):</label>
            <input type="number" name="quantity" id="quantity" min="1" required placeholder="Enter quantity">

            <input type="submit" value="Calculate Total">
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && is_numeric($_POST['quantity']) && $_POST['quantity'] > 0): ?>
            <?php
                $item = "Paneer Makhani";
                $price = 154.99;
                $quantity = (int) $_POST['quantity'];
                $total = number_format($price * $quantity, 2);
            ?>
            <div class="result">
                You have ordered <strong><?php echo $quantity; ?></strong> of <strong><?php echo $item; ?></strong>.<br>
                <strong>Total Price:</strong> Rs. <?php echo $total; ?>
            </div>
        <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <div class="result" style="background-color: #f8d7da; border-color: #f5c6cb; color: #721c24;">
                Please enter a valid quantity (greater than 0).
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
