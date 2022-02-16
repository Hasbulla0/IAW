<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
$contador = 0;
$suma = 0;

for($contador=0; $contador<=50; $contador++) {
	$suma = $suma + ($contador**2);
	echo $suma . "<br>";
  }

?>
</body>
</html>