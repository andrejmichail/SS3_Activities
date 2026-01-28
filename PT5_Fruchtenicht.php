<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f6ff;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 80px;
            padding: 5px;
        }

        .btn {
            margin-top: 15px;
            padding: 8px 15px;
            background: #4a6cf7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background: #3b55c5;
        }

        .result {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ccc;
        }

        .result p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Grade Calculator</h2>

    <form method="POST">
        <label>1st Quarter Grade:</label>
        <input type="number" name="q1" required><br>

        <label>2nd Quarter Grade:</label>
        <input type="number" name="q2" required><br>

        <label>3rd Quarter Grade:</label>
        <input type="number" name="q3" required><br>

        <label>4th Quarter Grade:</label>
        <input type="number" name="q4" required><br>

        <button class="btn" type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];

        $average = ($q1 + $q2 + $q3 + $q4) / 4;

        if ($average >= 90) {
            $description = "Outstanding";
            $remarks = "Passed";
        } elseif ($average >= 85) {
            $description = "Very Satisfactory";
            $remarks = "Passed";
        } elseif ($average >= 80) {
            $description = "Satisfactory";
            $remarks = "Passed";
        } elseif ($average >= 75) {
            $description = "Fairly Satisfactory";
            $remarks = "Passed";
        } else {
            $description = "Did Not Meet Expectations";
            $remarks = "Failed";
        }
    ?>
        <div class="result">
            <p><strong>Average Grade:</strong> <?php echo number_format($average, 2); ?></p>
            <p><strong>Description:</strong> <?php echo $description; ?></p>
            <p><strong>Remarks:</strong> <?php echo $remarks; ?></p>
        </div>
    <?php } ?>
</div>

</body>
</html>
