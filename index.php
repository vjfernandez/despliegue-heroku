<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
Hola Mundo!
</body>
</html>
<?php
   include("vendor/autoload.php");
   $log = new Monolog\Logger('name');
   $log->pushHandler(new Monolog\Handler\StreamHandler('hello.log', Monolog\Logger::DEBUG));

   $log->addInfo('Acceso a index.php');
   echo "Hola, soy Álvaro Ruiz y esto es una prueba.";
?>
