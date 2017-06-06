<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Test PHP Noah Dymen</title>
	</head>

	<body>

			<?php 
			if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['repeter'])) 
			{
				$nbRepetitions = (int) $_GET['repeter'];
				if (nbRepetitions < 100) 
				{
					for ($repetition = 0; $repetition < $nbRepetitions; $repetition++) 
					{ 
						echo '<p>Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'] . '</p>'; 
					}		
				}
			}
			else
			{
				echo 'Pas de nom ou de prenom defini !';
			}
			?>
			
			<!--?php echo $_GET['nom'] . ' ' . $_GET['prenom']; ?-->
			<!--?php echo $_GET['nom']; ?--> <!--?php echo $_GET['prenom']; ?-->
			
	</body>
</html>