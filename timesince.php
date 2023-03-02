<?php
// Get user input
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$hour = $_POST['hour'];
$minute = $_POST['minute'];

// Set target time
$targetTime = strtotime("$month $day, $year $hour:$minute:00");

// Get current time in EST
date_default_timezone_set('America/New_York');
$currentTime = time();

// Calculate the time difference
$timeDifference = $currentTime - $targetTime;

// Convert time difference to days, hours, minutes, and seconds
$days = floor($timeDifference / 86400);
$hours = floor(($timeDifference % 86400) / 3600);
$minutes = floor(($timeDifference / 60) % 60);
$seconds = $timeDifference % 60;

// Output the time difference

?>
<!DOCTYPE html>
<html>
<head>
	<title>Time Since</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<h1>Time Since</h1>
		<?php
		// Get current time in EST
		date_default_timezone_set('America/New_York');
		$currentTime = time();

		// Set target time
		$month = $_POST['month'];
		$day = $_POST['day'];
		$year = $_POST['year'];
		$hour = $_POST['hour'];
		$minute = $_POST['minute'];
		$targetTime = strtotime("$month $day, $year $hour:$minute:00");

		// Calculate the time difference
		$timeDifference = $currentTime - $targetTime;

		// Convert time difference to days, hours, minutes, and seconds
		$days = floor($timeDifference / 86400);
		$hours = floor(($timeDifference % 86400) / 3600);
		$minutes = floor(($timeDifference / 60) % 60);
		$seconds = $timeDifference % 60;
		?>
		<div class="output">
			<p>Time since <?php echo date('g:i A F j, Y', $targetTime); ?>:</p>
			<p><?php echo "$days days, $hours hours, $minutes minutes, and $seconds seconds"; ?></p>
		</div>
	</div>
</body>
</html>


