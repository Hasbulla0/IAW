<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
$n = 0;
$s = 0;

for($n=1; $n<=100; $n++) {

	if (($n % 2) == 1) {
	echo $n . "</br>";
    $s = $s + $n;		
	}
}
echo $s;

?>
</body>
</html>