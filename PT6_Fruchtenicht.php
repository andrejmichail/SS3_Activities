<?php
$rows = [
    ["Lumber", 150000],
    ["Concrete", 78000],
    ["Drywall", 69000],
    ["Paint", 12000],
    ["Miscellaneous", 20000],
];

/* FORMAT MONEY */
function money($amount) {
    return "$" . number_format($amount, 2);
}

/* APPLY PERCENTAGE INCREASE */
function increase($amount, $percent) {
    return $amount * (1 + ($percent / 100));
}

/* LABEL COST CATEGORY */
function costLabel($amount) {
    if ($amount >= 100000) return "High Cost";
    if ($amount >= 50000) return "Medium Cost";
    return "Low Cost";
}

/* CALCULATE TOTALS */
function calculateTotals($rows, $percent = 0) {
    $sum = 0;
    foreach ($rows as $r) {
        $sum += ($percent > 0) ? increase($r[1], $percent) : $r[1];
    }
    return $sum;
}

/* FIND HIGHEST COST ITEM */
function highestCostItem($rows) {
    $highest = $rows[0];
    foreach ($rows as $r) {
        if ($r[1] > $highest[1]) {
            $highest = $r;
        }
    }
    return $highest;
}

/* CALCULATE AVERAGE COST */
function averageCost($rows) {
    $total = 0;
    foreach ($rows as $r) {
        $total += $r[1];
    }
    return $total / count($rows);
}

/* PREPARE DATA */
$total   = calculateTotals($rows);
$total10 = calculateTotals($rows, 10);
$total15 = calculateTotals($rows, 15);
$total20 = calculateTotals($rows, 20);

$highestItem = highestCostItem($rows);
$average     = averageCost($rows);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Library Cost Report</title>
    <style>
        body {
            background: #fafafa;
            font-family: "Segoe UI", Tahoma, sans-serif;
            padding: 30px;
            color: #222;
        }

        .container {
            max-width: 850px;
            margin: auto;
            background: #ffffff;
            padding: 35px;
            border-left: 8px solid #444;
        }

        h2, h3 {
            text-align: center;
            margin: 5px 0;
        }

        h3 {
            font-weight: normal;
            color: #666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th {
            text-align: left;
            padding: 12px;
            border-bottom: 3px solid #444;
            background: #f0f0f0;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f7f7f7;
        }

        .tag {
            padding: 4px 8px;
            font-size: 12px;
            border-radius: 4px;
            background: #ddd;
        }

        .footer-row td {
            font-weight: bold;
            border-top: 3px solid #444;
        }

        .summary {
            margin-top: 30px;
            padding: 20px;
            background: #f5f5f5;
            border-radius: 6px;
        }

        .summary p {
            margin: 8px 0;
        }

        .signature {
            margin-top: 35px;
            text-align: right;
            font-size: 13px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Public Library Expansion Project</h2>
    <h3>Official Cost Estimate Report</h3>

    <table>
        <tr>
            <th>Expenditure</th>
            <th>Base Cost</th>
            <th>Category</th>
            <th>+10%</th>
            <th>+15%</th>
            <th>+20%</th>
        </tr>

        <?php foreach ($rows as $r): ?>
        <tr>
            <td><?= $r[0] ?></td>
            <td><?= money($r[1]) ?></td>
            <td><span class="tag"><?= costLabel($r[1]) ?></span></td>
            <td><?= money(increase($r[1],
