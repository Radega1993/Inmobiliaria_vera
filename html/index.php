<?php
require_once 'controlador/main.php';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c'])){
  $controller = new WebController();
  $controller->index();
}else{
  // Obtenemos el controlador que queremos cargar
  $controller = new WebController();
  $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';

  // Instanciamos el controlador
  $controller = new $controller();

  // Llama la accion
  call_user_func( array( $controller, $accion ) );
}
?>
