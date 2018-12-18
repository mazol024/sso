<?php
session_start();
$_SESSION['MySession'] = session_create_id();
echo '<div style="background-color: #cdefab; border: #1c1c1c solid; border-radius: 5px 5px ; padding: 22px ;width: 80%; margin: auto "><h2>Application login page</h2>';
echo '<hr>Hostetd! <br></div>';
require_once('../lib/_autoload.php');
?>
<h3>
<div style="background-color: #abcdef; border: #1c1c1c solid; border-radius: 5px 5px ; padding: 22px ;width: 80%; margin: auto ">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label> Please, enter your optional attribute here: </label><input type="text" name="name"><br>
    <br><hr>
    <input type="submit" name="submit" value="Login to  Application"><br><br>
    <input type="submit" name="logout" value="Logout form Application"><br>
<hr>
</form>
<?php
{
    if (isset($_POST['logout'])) {
        //$as = new \SimpleSAML\Auth\Simple('default-sp');
        echo "<h1>Logged out!</h1>";
        $as = new \SimpleSAML\Auth\Simple('nz-sp');
        //
        //$as = $_SESSION['mysession'];
        $as->logout(array('ReturnTo' => 'https://sp.mymac.com/simplesaml/logged_out.php', 'ReturnStateParam' => 'LogoutState', 'ReturnStateStage' => 'MyLogoutState',));
    } elseif (isset($_POST['submit'])) {
        //$as = new \SimpleSAML\Auth\Simple('default-sp');
        $as = new \SimpleSAML\Auth\Simple('nz-sp');
        $attributes = $as->getAttributes();
        echo "<br><h3>Attributes recieved:</h3><br>";
        echo "<table style='text-align:left; width: 100%'><tr><th>Attribute Id:</th><th>Value:</th></tr>";
        foreach ($attributes as $atr => $value) {
            echo "<tr><td>" . $atr . "</td><td>" . $value[0] . "</td></tr>";
        }
        echo "</table><br>";
        if (isset($_POST['name'])) {
            echo "Your optional attribute is : " . $_POST['name'];
        }
        echo "<hr>";
        //echo "<br><h2>print_r(attributes)</h2><hr><br>";
        //print_r($attributes);
        //$_SESSION['mysession'] = $$as;
        $as->requireAuth();
    }
}
?>
</div>
</h3>
