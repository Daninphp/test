<?php
require_once(__DIR__ . '/../config.php');
require_once(PROJECT_ROOT . '/Controller/Index.php');

$controller = new \Controller\Index();

if(isset($_POST['name'])){
  $controller = new \Controller\Index();
  $controller->insertComment($_POST);
}