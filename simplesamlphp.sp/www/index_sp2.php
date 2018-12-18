<?php session_start();?>

<h2>Congratulations!</h2>
<br><hr><br>
    <div style="background-color: #bcdefa; border: #1c1c1c solid; border-radius: 5px 5px ; padding: 22px ;width: 80%; margin: auto">
        <h2>You are logged in !</h2>
        <?php echo "<br> Your session id : "  . $_SESSION['MySession']."<br>"; ?>
        <?php echo "GLOBALS ";
            foreach ($GLOBALS as $key => $value) {
                echo $key. "  ".print_r($value)."<hr><br/>";
            }
            ?>
    <br>

        <hr><br>
        <!--<a href='https://idp.mymac.com/module.php/core/authenticate.php?as=crypto-hash&logout'> Logout from app</a>-->
        <a href='https://idp.mymac.com/module.php/core/authenticate.php?as=mysql&logout'> Logout from app</a>
</div>
<?php
require_once('../lib/_autoload.php');
//$as = new \SimpleSAML\Auth\Simple('default-sp');
//echo "$as->requireAuth()<br>";
//$as->requireAuth();
//print_r($as);
//echo "$attributes = $as->getAttributes('uid');<br>";
$as = $_SESSION["region"];

//echo $_SESSION['getLogoutURL'];
//$attributes = $as->getAttributes();
//echo  "<br>$getLogoutURL<br>";
/*foreach ($atr as $attributes) {
    echo $atr;
sudo apt-get install php-mysql
}*/
//print_r($attributes);

/*
$as->login(array(
    'saml:idp' => 'https://idp.mymac.com',
));*/
