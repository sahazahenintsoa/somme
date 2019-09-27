<!DOCTYPE html>
<html>
<head>
	<title>exo1</title>
</head>
<body>
<form action="exo1.php" method="POST">
	<input type="number" name="valeur1" placeholder="valeur1" required>
	<br>
	<input type="number" name="valeur2" placeholder="valeur2" required>
	<br>
	<input type="submit" name="somme" value="Calculer">
	

</form>
</body>
</html>

<?php 

$v1 = $_POST["valeur1"];
$v2 = $_POST["valeur2"];
$resultat = $v1 + $v2;

echo "resultat:" . $resultat;

 ?>
