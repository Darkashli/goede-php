<?php 
date_default_timezone_set('Europe/Amsterdam');
$hour = date("H");
$minut = date("i");

if ($hour >= 0) 
{
	$class = "nacht";
	if ($hour >= 6) 
	{
		$class = "morgen";
		if ($hour >= 12)
		{
			$class = "middag";
			if ($hour >= 18)
			{
				$class = "avond";
			}
		}
	}

}




?>


<!DOCTYPE html>
<html>
<head>
	<title>Goede-PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
</head>
<body class="<?php echo $class ?>">

<h1>Goede <?php echo $class; ?>!</h1>

<h1>Het is nu<?php echo $hour.":".$minut; ?></h1>


</body>
</html>