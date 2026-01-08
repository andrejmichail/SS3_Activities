<!DOCTYPE html>
<html>
<head>
	<title>Calories Calculator</title>
	<style>
		body {
			font-family: Arial;
			text-align: center;
			background-color: #eeeeee;
		}
		div {
			background-color: white;
			width: 300px;
			margin: 100px auto;
			padding: 15px;
			border: 1px solid #ccc;
		}
	</style>
</head>

<body>

<div>
	<h3>Daily Calories</h3>

	<?php
		$weight = 160.5;   // user weight
		$lifestyle = 'A';  // A = Active, S = Sedentary

		if ($lifestyle == 'A') {
			$calories = $weight * 15;
			echo "Lifestyle: Active<br>";
		} else {
			$calories = $weight * 13;
			echo "Lifestyle: Sedentary<br>";
		}

		echo "Weight: $weight lbs<br>";
		echo "<b>Calories Needed: $calories</b>";
	?>
</div>

</body>
</html>