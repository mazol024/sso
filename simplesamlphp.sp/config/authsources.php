<?php

$config = array(

    // This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ),


    // An authentication source which can authenticate against both SAML 2.0
    // and Shibboleth 1.3 IdPs.
/*
    'default-sp' => array(
        'saml:SP',
    	'privatekey' => 'saml.pem',
    	'certificate' => 'saml.crt',
        // The entity ID of this SP.
        // Can be NULL/unset, in which case an entity ID is generated based on the metadata URL.
	    //'entityID' => 'https://sp.mymac.com',
        //'entityID' => null,
        // The entity ID of the IdP this should SP should contact.
        // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
        'idp' => 'https://idp.mymac.com',

        // The URL to the discovery service.
        // Can be NULL/unset, in which case a builtin discovery service will be used.
 //       'discoURL' => null,

    ),*/
   'idp01-sp' => array(
        'saml:SP',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
       'idp' => 'https://idp01/simplesaml/saml2/idp/metadata.php',
    ),

   'idp02-sp' => array(
        'saml:SP',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
        'idp' => 'https://idp02/simplesaml/saml2/idp/metadata.php',
    ),


);
