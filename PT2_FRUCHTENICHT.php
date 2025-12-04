<?php
$rows = [
    ["Lumber", 150000],
    ["Concrete", 78000],
    ["Drywall", 69000],
    ["Paint", 12000],
    ["Miscellaneous", 20000],
];

function money($amount) {
    return "$" . number_format($amount, 2);
}

// Calculate totals
$total = 0;
$total10 = 0;
$total15 = 0;
$total20 = 0;
foreach ($rows as $r) {
    $total += $r[1];
    $total10 += $r[1] * 1.10;
    $total15 += $r[1] * 1.15;
    $total20 += $r[1] * 1.20;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Library Project Table</title>
    <style>
        body { 
            background: #f0f0f0; 
            font-family: Verdana, sans-serif; 
            margin: 0; 
            padding: 20px; 
        }

        .container { 
            width: 700px; 
            margin: 0 auto; 
            padding: 20px; 
            background: #ffffff; 
            border-radius: 10px; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        h2, h3 { 
            text-align: center; 
            margin: 5px 0; 
            color: #222; 
        }

        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        th {
            background: #333;
            color: #fff;
            padding: 12px;
            font-size: 15px;
            text-align: center;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }

        tr:nth-child(even) td {
            background: #f2f2f2;
        }

        tr:nth-child(odd) td {
            background: #e6e6e6;
        }

        .footer-row td {
            font-weight: bold;
            background: #ddd; /* light grey */
            color: #000; /* black text */
        }

        .signature {
            margin-top: 25px;
            text-align: right;
            font-size: 14px;
            color: #333;
        }

        td strong {
            color: #000;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Public Library Expansion Project</h2>
    <h3>Cost Estimate Table</h3>

    <table>
        <tr>
            <th>Expenditures</th>
            <th>Estimated Cost</th>
            <th>10% Increase</th>
            <th>15% Increase</th>
            <th>20% Increase</th>
        </tr>

        <?php foreach ($rows as $r): ?>
            <tr>
                <td><?= $r[0] ?></td>
                <td><?= money($r[1]) ?></td>
                <td><strong><?= money($r[1] * 1.10) ?></strong></td>
                <td><strong><?= money($r[1] * 1.15) ?></strong></td>
                <td><strong><?= money($r[1] * 1.20) ?></strong></td>
            </tr>
        <?php endforeach; ?>

        <tr class="footer-row">
            <td>Total Expenditures</td>
            <td><?= money($total) ?></td>
            <td><strong><?= money($total10) ?></strong></td>
            <td><strong><?= money($total15) ?></strong></td>
            <td><strong><?= money($total20) ?></strong></td>
        </tr>
    </table>

    <p class="signature">Created by: ANDREJ MICHAIL C. FRUCHTENICHT</p>
</div>

</body>
</html>