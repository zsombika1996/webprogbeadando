<?php

define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/webprogbeadando/');

//URL c�m az alkalmaz�s gy�ker�hez
define('SITE_ROOT', 'http://localhost/webprogbeadando/');

// a router.php vez�rl� bet�lt�se
require_once(SERVER_ROOT . 'controllers/' . 'router.php');

?>