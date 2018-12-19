<?php
session_start();
require_once('../../lib/_autoload.php');
$as = new \SimpleSAML\Auth\Simple($_SESSION['idp']);

$as->logout(array('ReturnTo' => 'https://sp01/simplesaml/ezylogin.php','ReturnStateParam' => 'LogoutState','ReturnStateStage' => 'MyLogoutState',));
echo "<h1>Logged out!</h1>";

?>