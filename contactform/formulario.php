<?php
$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Tema = $_POST['Tema'];
$Mensaje = $_POST['Mensaje'];


if (mail('Josedanielpe12@gmail.com', 'Hola', 'Hola este es mi mensaje')) {
	echo "mail enviado";
}else{
	echo "error al enviar";
}
?>