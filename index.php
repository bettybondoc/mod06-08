<?php 
	require_once 'assets/lib/twelve_days.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php echo getTitle(); ?> Lyrics</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
</head>

<!-- css not working properly; instyle -->
<body style="background-image: url('assets/img/bg1.png');">

	<!-- display title and lyrics from php -->
	<main class="wrapper">
		<h1><?php echo getTitle(); ?></h1>
		<?php echo getLyrics(); ?>
		<button>NEW DAY</button>

	<!-- script to fade in stanzas one by one per div that is hidden -->		
		<script>
			$(document.body).click(function() {
			  $("div:hidden:first").fadeIn("slow");
			});
		</script>

	</main>

	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>