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
   echo 'Hola, soy Raul Hernandez Garcia';
   $log->addInfo('Acceso a index.php');
?>
