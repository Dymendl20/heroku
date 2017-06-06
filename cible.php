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

	<p>Bonjour <?php echo htmlspecialchars($_POST['prenom']); ?></p>

		<!--?php 
		if (isset($_POST['carnivore'])) 
		{
			echo '<p>Ah oui vous êtes carnivore.</p>';
			/*echo $_POST['carnivore'];*/
		} 
		else
		{
			echo '<p>Ah cool vous n\'êtes pas carnivore, vous mangez des légumes.</p>';
		}
		?-->

	</body>
</html> 