<?php
  //Se incluye la configuración de conexión a datos en el
  //SGBD: MariaDB.

class Con{

	function Unidad(){
		
		require_once 'model/database.php';

  		$controller = 'unidad';

  		// Todo esta lógica hara el papel de un FrontController
  		if(!isset($_REQUEST['c'])){
    	//Llamado de la página principal
    	require_once "controller/$controller.controller.php";
    	$controller = ucwords($controller) . 'Controller';
    	$controller = new $controller;
    	$controller->Index();
  
  		}else{
   		// Obtiene el controlador a cargar
    	$controller = strtolower($_REQUEST['c']);
    	$accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    	// Instancia el controlador
    	require_once "controller/$controller.controller.php";
    	$controller = ucwords($controller) . 'Controller';
    	$controller = new $controller;

    	// Llama la accion
    	call_user_func( array( $controller, $accion ) );
  		}

	}

}

?>
<!DOCTYPE html>

<html>

	<head>

		<title> Menu </title>

	</head>

	<body>

		<h3> Menu </h3>

		<?php $u = new Con; echo '<a href= " ' .  $u -> Unidad() .' "title="unidad"> Unidad </a>'; ?>

  		<a href= title="empleado"> Empleado </a>

	</body>

</html>