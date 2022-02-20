<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

if(isset($_POST['Nombre'])) {
    if(!empty($_POST['Nombre'])){
        $Nombre = $_POST['Nombre'];
        echo "Nombre de usuario: " . $Nombre;
        echo "<p> </p>";
    }
}
 if(isset($_POST['Asunto']) && !empty($_POST['Asunto'])) {
    $Asunto = $_POST['Asunto'];
    echo "El Asunto: " . $Asunto;
    echo "<p> </p>";
}

if(isset($_POST['Mensaje']) && !empty($_POST['Mensaje'])) {
    $Mensaje = $_POST['Mensaje'];
    echo "El mensaje: " . $Mensaje;
    echo "<p> </p>";
}

?>
</body>
</html>