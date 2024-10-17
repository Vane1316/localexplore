<?php
require_once __DIR__.'/../Controller/ContactoControlleradmi.php';

$contactoController = new ContactoController();
$contactoController->handleFormSubmission($_POST['motivo'], 
$_POST['comentario'], $_POST['nombre'], $_POST['email']);
?>
