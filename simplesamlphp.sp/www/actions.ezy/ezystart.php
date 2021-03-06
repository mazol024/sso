<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="../media.ezy/favicon.png" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>ezyVet | The Vet Practice</title>
    <link rel="stylesheet" type="text/css" href="../media.ezy/login.css" />
    <style>
        input::-webkit-calendar-picker-indicator {
            display: none;
        }

        .saveUsernameField {
            display: none;
            padding-top:0.25em;
        }

        .saveUsernameField input {
            width: 0.95em;
            height:0.95em;
            margin-top:0.25em;
            position: fixed;
            margin-left:0.25em;
        }
    </style>
</head>
<body>
<!-- login-logo -->
<div id="login-logo">
    <div style="background-image: url('../media.ezy/images/ezyvet_280x80.png'); background-size: contain; background-repeat: no-repeat; background-position: center; height: 100%;">
    </div>
</div><!-- /login-logo -->

<!-- login-background -->
<div id="login-background" style=" background: url('../media.ezy/images/unleash-site.png') no-repeat, url('../media.ezy/images/unleash-kiwi.png') no-repeat, url('../media.ezy/images/unleash-logo.png') no-repeat, url('../media.ezy/images/unleash-background.png') no-repeat;
                        background-size: auto 38.96%, 34.58% auto, auto 24.05%, 100% 100%;
                        background-position: 96.52% 103.80%, 0% 80%, 101.12% 55%, 0px 400px;; width: 100%; height: calc(100% - 0px); position: absolute; bottom: 0px; z-index: -1;">
</div><!-- /login-background -->

<form method="post" action="ezylogout.php" id="form-logout">
    <input hidden type="text" value="$_SESSION['idp']">
    <div id="login-content">
        <div style="padding-top: 5%; width: 10%;">
            <div class="login-button" style="margin:5px;width:10%;position: fixed; right:30px;top:120px;" onClick="document.getElementById('form-logout').submit();">
                <div id="div-login-button" class="login-button-content" onclick="this.submit()">
                    Logout
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

<!-- login-content -->

        <!-- login form -->
       <!-- <form method="post" id="form-login"  action="ezylogout.php">
            <div id="login-form" style="">
                <div id="div-login-message" class="login-message-box" style="margin-bottom: 25px; display: none; background-color: #e74c3c; color: #ffffff; text-align: center; border-radius: 5px; border: 1px solid #96281B;">
                </div>
                <input placeholder='Email' list="email-data-list" class="login-field shadowed" type="text" name="login" id="input-email">
                <input placeholder='Password' class="login-field shadowed" style="width:0; display:none;" type="password" name="fakepassword" id="fakepassword" />
                <input placeholder='Password' class="login-field shadowed" style="margin-top: 10px;" type="password" name="password" id="input-password" autocomplete="off" />
                <input type="hidden" name="returnAction" value="L2luZGV4LnBocA==" />

                <div class="saveUsernameField">
                    <label for="checkbox-remember-username">
                        Remember Email
                        <input style="border:none; margin-left:3px; padding-bottom:1px;" id="checkbox-remember-username" type="checkbox" checked />
                    </label>
                </div>

                <input style="display: none" type="text" id="ezyname" name="ezyname" value="">

                <div class="login-button" style="margin: 25px auto 0;" onClick="document.getElementById('form-login').submit();">
                    <div id="div-login-button" class="login-button-content">
                        Logout
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- /login form -->
        <!-- /form-login -->

        <?php
        require_once('../../lib/_autoload.php');
        //$as = new \SimpleSAML\Auth\Simple('default-sp');
        $as = new \SimpleSAML\Auth\Simple($_SESSION['idp']);
        $attributes = $as->getAttributes();
        echo "<br><h3 style='background-color: #abcdef; width: 80%; padding:25px;margin: 10px auto; border: #5bc0de 1px solid; border-radius: 10px;opacity: 0.6' >Attributes recieved<br>";
        echo "My  IdP: ". $_SESSION['idp'].$as->getAuthData('saml:sp:IdP')."<br><hr>";
        echo "<hr><table style='text-align:left; width: 100%'><tr><th>Attribute Id:</th><th>Value:</th></tr>";
        foreach ($attributes as $atr => $value) {
            echo "<tr><td>" . $atr . "</td><td>" . $value[0] . "</td></tr>";
        }
        echo "</table><br></h3>";
        //echo "<hr>";
        ?>


        <form method="post" id="form-department"
              style="margin: 25px auto 0;
                text-align: center;
                width: 400px;
                border-radius: 5px;
                display:none;">
            <div id="div-department-message" class="department-message-box" style="margin-bottom: 25px; display: none; background-color: #e74c3c; color: #ffffff; text-align: center; border-radius: 5px; border: 1px solid #96281B;">
            </div>
            <div id="department-header" style="width:100%; border-radius: 5px 5px 0 0; background-color: #303136; color: #FFF; padding:10px 0;">
                Please select a location
            </div>
            <input type="hidden" name="login" id="department-select-email">
            <input type="hidden" name="password" id="department-select-password">
            <div id="department_selector" style="border-radius: 5px;"></div>
        </form>
        <!-- password-change-form -->
        <form method="post" id="form-change-password" style="display: none;">
            <div id="password-change-form">
                <div id="div-password-change-notice" class="login-message-box" style="margin-bottom: 10px; background-color: #e74c3c; color: #ffffff; text-align: center; border-radius: 5px; border: 1px solid #96281B;">
                    You must change your password to continue.
                </div>
                <div id="div-password-change-message" class="login-message-box" style="margin-bottom: 25px; display: none; background-color: #e74c3c; color: #ffffff; text-align: center; border-radius: 5px; border: 1px solid #96281B;">
                </div>
                <input type="hidden" name="reset" value="1"/>
                <input placeholder='Current Email' class="login-field shadowed" type="text" name="currentlogin" id="input-current-login" />
                <input placeholder='Current Password' class="login-field shadowed" style="margin-top: 10px;" type="password" name="oldpassword" id="input-current-password" autocomplete="off" />
                <input placeholder='New Password' class="login-field shadowed" style="margin-top: 10px;" type="password" name="newpassword" id="input-new-password" autocomplete="off" />
                <input placeholder='Confirm New Password' class="login-field shadowed" style="margin-top: 10px;" type="password" name="confirmnewpassword" id="input-confirm-new-password" autocomplete="off" />

                <div class="login-button" style="margin: 0 auto; margin-top:25px;">
                    <div id="div-change-password-button" class="login-button-content" style="">
                        Change Password
                    </div>
                    <div class="clear"></div>
                </div>

            </div>

        </form><!-- /password-change-form -->
    </div>
</div><!-- /login-content -->
</body>
</html>
