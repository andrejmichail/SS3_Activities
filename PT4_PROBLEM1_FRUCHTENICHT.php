<?php

$div3Only = 0;
$div5Only = 0;
$divBoth = 0;

for ($i = 1; $i <= 50; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$i - Divisible by both<br>";
        $divBoth++;
    }
    elseif ($i % 3 == 0) {
        echo "$i - Divisible by 3<br>";
        $div3Only++;
    }
    elseif ($i % 5 == 0) {
        echo "$i - Divisible by 5<br>";
        $div5Only++;
    }
}

echo "<br><strong>Totals:</strong><br>";
echo "Divisible by 3 only: $div3Only<br>";
echo "Divisible by 5 only: $div5Only<br>";
echo "Divisible by both: $divBoth<br>";

?>

<!DOCTYPE php>
<php>
<head>
    <title>Divisibility Program</title>

    <style>
        body {
            font-family: arial;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .both {
            color: red;
            font-weight: bold;
        }

        .three {
            color: green;
        }

        .five {
            color: blue;
        }

        .box {
            background: black;
            padding: 15px;
            border-radius: 8px;
            width: 400px;
        }

        .total {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
