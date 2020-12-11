<?php
require_once(__DIR__ . '/../config.php');
require_once(PROJECT_ROOT . '/Controller/Index.php');

$controller = new \Controller\Index();

if(isset($_POST['id'])){
  $controller = new \Controller\Index();
  return $controller->approveComment($_POST['id']);
}