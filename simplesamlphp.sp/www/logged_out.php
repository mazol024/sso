<?php
session_start();
require_once('../lib/_autoload.php');

$state = SimpleSAML_Auth_State::loadState((string)$_REQUEST['LogoutState'], 'MyLogoutState');
$ls = $state['saml:sp:LogoutStatus']; /* Only works for SAML SP */
if ($ls["Code"] === "urn:oasis:names:tc:SAML:2.0:status:Success" && !isset($ls["SubCode"])) {
?>
<div style="background-color: #abcdef; border: #1c1c1c solid; border-radius: 5px 5px ; padding: 22px ;width: 80%; margin: auto ">    
<?php    echo("You have been logged out.");
} else {
    /* Logout failed. Tell the user to close the browser. */
?>
<div style="background-color: #abcdef; border: #1c1c1c solid; border-radius: 5px 5px ; padding: 22px ;width: 80%; margin: auto ">    
<?php    echo("We were unable to log you out of all your sessions. To be completely sure that you are logged out, you need to close your web browser.");
}
?>
</div>

