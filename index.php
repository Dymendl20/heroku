<?php
	setcookie('nom', 'Dymen', time() + 3600 * 24 * 365);
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
	<?php
		if (isset($_COOKIE['nom']))
		{
			?>
				<p><?php echo 'Bonjour Mister ' . $_COOKIE['nom']; ?></p>
			<?php
		}
	?>
		
		<p>Aller aux <a href="informations.php">informations</a></p>

	</body>
</html> 