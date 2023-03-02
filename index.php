<!DOCTYPE html>
<html>
<head>
	<title>Time Difference</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<h1>Calculate Time Since a Date</h1>
		<form method="post" action="timesince.php">
			<label for="month">Month:</label>
			<input type="text" id="month" name="month" placeholder="February" required>
			<label for="day">Day:</label>
			<input type="number" id="day" name="day" placeholder="25" required>
			<label for="year">Year:</label>
			<input type="number" id="year" name="year" placeholder="2023" required>
			<label for="hour">Hour (24-hour format):</label>
			<input type="number" id="hour" name="hour" placeholder="20" required>
			<label for="minute">Minute:</label>
			<input type="number" id="minute" name="minute" placeholder="00" required>
			<button type="submit">Calculate</button>
		</form>
	</div>
</body>
</html>
