<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularo enviado!</title>
</head>
<body>
<h1>Formulario Enviado Exitosamente!</h1>
</body>
</html>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=libreria','root','MR2905$');

$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$ConfirCorreo = $_POST['ConfirCorreo'];
$Asunto = $_POST['Asunto'];
$Comentario = $_POST['Comentario'];
$Fecha = $_POST['Fecha'];

$consulta = $pdo->prepare("INSERT INTO contacto (Nombre,Correo,ConfirCorreo,Asunto,Comentario,Fecha)
VALUES (:Nombre,:Correo,:ConfirCorreo,:Asunto,:Comentario,:Fecha)");


$consulta->bindParam(':Nombre',$Nombre);
$consulta->bindParam(':Correo',$Correo);
$consulta->bindParam(':ConfirCorreo',$ConfirCorreo);
$consulta->bindParam(':Asunto',$Asunto);
$consulta->bindParam(':Comentario',$Comentario);
$consulta->bindParam(':Fecha',$Fecha);

if($consulta->execute()){
    echo "Datos guardado correctamente...";
}
else{
    "No se ha podido guardar los datos...";
}

echo'<a href="../index.php">Volver a Libreria Los Tainos</a>Volver Atras</a>';
?>

