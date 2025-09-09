<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bihar Voter Eligibility Checker</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            color: white;
        }

        /* Background Images Container */
        .background-slideshow {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .background-slideshow img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            animation: fade 30s infinite;
        }

        .background-slideshow img:nth-child(1) {
            animation-delay: 0s;
        }

        .background-slideshow img:nth-child(2) {
            animation-delay: 10s;
        }

        .background-slideshow img:nth-child(3) {
            animation-delay: 20s;
        }

        @keyframes fade {
            0% { opacity: 0; }
            10% { opacity: 1; }
            30% { opacity: 1; }
            40% { opacity: 0; }
            100% { opacity: 0; }
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .bihar-card {
            background: rgba(0, 0, 0, 0.85);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            max-width: 500px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.6);
            position: relative;
            z-index: 1;
        }

        h1 {
            color: #ffdd57;
            font-size: 2em;
            margin-bottom: 20px;
        }

        input[type="number"], select {
            width: 80%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            font-size: 1em;
        }

        input[type="submit"] {
            padding: 12px 25px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .result {
            margin-top: 20px;
            font-size: 1.4em;
            font-weight: bold;
            color: #ffd700;
        }

        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #ddd;
        }
    </style>
</head>

<body>

    <!-- Background Slideshow -->
    <div class="background-slideshow">
        <img src="BiharDiaries.jpeg" alt="Bihar Culture" style="width:100%; height:100%; object-fit:cover;">

        <img src="Bihar diaries part 2.jpeg" alt="Bihar Festival"style="width:100%; height:100%; object-fit:cover;">
        <img src="Bihar Famous Food Litti Chokha.jpeg" alt="Bihar Food"style="width:100%; height:100%; object-fit:cover;">
    </div>

    <div class="bihar-card">
        <h1>🌾 Bihar Voter Eligibility Checker 🌾</h1>

        <form method="post">
            <input type="number" name="age" min="1" placeholder="Enter your Age" required><br>

            <select name="citizen" required>
                <option value="">Are you an Indian citizen?</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select><br>

            <input type="submit" value="Check Eligibility">
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <?php
                $age = (int) $_POST['age'];
                $citizen = (int) $_POST['citizen'];

                echo "<div class='result'>";
                if ($age >= 18 && $citizen) {
                    echo "✅ Congratulations! You are eligible to vote in Bihar elections. 🗳️";
                } else {
                    echo "❌ Sorry, you are not eligible to vote.";
                }
                echo "</div>";
            ?>
        <?php endif; ?>

        <div class="footer">
            🌞 Bihar is famous for Chhath Puja, Litti-Chokha, and its rich cultural heritage.<br>
            Cast your vote responsibly to shape the future of Bihar! 🌾
        </div>
    </div>

</body>

</html>
