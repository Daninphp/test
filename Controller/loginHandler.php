<?php
require_once(__DIR__ . '/../config.php');
require_once(PROJECT_ROOT . '/Controller/Index.php');

$controller = new \Controller\Index();

if(isset($_POST['username']) && isset($_POST['password'])){
  $controller = new \Controller\Index();
  $controller->adminLogin($_POST);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}