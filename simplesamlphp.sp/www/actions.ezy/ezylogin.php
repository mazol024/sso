<?php
session_start();
/*$_SESSION['MySession'] = session_create_id();*/
$_SESSION['idp'] = $_POST['idp'];
require_once('../../lib/_autoload.php');
    $as = new \SimpleSAML\Auth\Simple($_POST['idp']);
    $as->requireAuth(
        array(
            'isPassive' => false,
            'ReturnTo' => 'https://sp01/simplesaml/actions.ezy/ezystart.php',
        )
    );

?>