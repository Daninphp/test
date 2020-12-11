<?php
require_once(__DIR__ . '/../config.php');
require_once(PROJECT_ROOT . '/Controller/Index.php');

$controller = new \Controller\Index();
$controller->destroySession();
header('Location: ' . $_SERVER['HTTP_REFERER']);