<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Test PHP Noah Dymen</title>
		<style type="text/css">
			body
			{
				background-color: yellowgreen;
			}
		</style>
	</head>

	<body>
		<p><?php echo 'I remember you Mister ' . $_SESSION['nom']; ?></p>

	</body>
</html> 