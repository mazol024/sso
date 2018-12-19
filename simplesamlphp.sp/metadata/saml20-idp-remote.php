<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

$metadata['https://idp01/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'https://idp01/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp01/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp01/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIDzDCCArSgAwIBAgIJALX2v14mgbT4MA0GCSqGSIb3DQEBCwUAMHsxCzAJBgNVBAYTAk5aMQ4wDAYDVQQIDAVPdGFnbzEQMA4GA1UEBwwHRHVuZWRpbjEPMA0GA1UECgwGZXp5VmV0MQwwCgYDVQQLDANkaXQxDTALBgNVBAMMBE9sZWcxHDAaBgkqhkiG9w0BCQEWDW9sZWdAbWFpbC5jb20wHhcNMTgxMjA1MTAxODMzWhcNMjgxMjA0MTAxODMzWjB7MQswCQYDVQQGEwJOWjEOMAwGA1UECAwFT3RhZ28xEDAOBgNVBAcMB0R1bmVkaW4xDzANBgNVBAoMBmV6eVZldDEMMAoGA1UECwwDZGl0MQ0wCwYDVQQDDARPbGVnMRwwGgYJKoZIhvcNAQkBFg1vbGVnQG1haWwuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt1BD4Pahm1FUVpksc/X5gZALImJMhRRFRMUvuz5kZNgZL/ACbbOdBFfEzEUTFDNRkTMAbUqJcpFz2XyDciHGBHtHgc3ZkY5FORfDZk9R9W6amhOlo3pTjWR2zbRZNnJ7qi0zEIXQ+sqOSmOc3FgStLs6mGnCl7QSuF3C3qJLTD1YrjnLx/R13fZxxiuOsS3F6bdfozos7aLqf+CTSagRx1vwwh1AUKqIKIMoncrb202pEol2K9IOIDfZ7ZXctFl+gVVD6UOIkTaXMX8cBI/v25ggrl9YeIWDGB1E8p2wfx355jMQA34a3kpxOEU0gsjBw9STZJgUteXm7M0lGvWaGwIDAQABo1MwUTAdBgNVHQ4EFgQUXMOOgbbZPn1uPDF2Avom3+cIHdAwHwYDVR0jBBgwFoAUXMOOgbbZPn1uPDF2Avom3+cIHdAwDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEAXqdufnCMyFQDCSAYJMOJMJ2M4VG2emYLbKZjG8KcbuO2eGvrrYFbB7Vx8I2bFPVqMrTax7+J2HY71g1PoIwX5gWZ0D5NFxiM/XsjbqBjeNWw8r21iJMNGc9s8yY0SmK3HEe/15OFAPGimd/UPUeRY+d0CjUjIwRqeUGHbC5NegyEM/KmkfaioZBg5ojje/M80wTLBqqPUzQhD4yirWQXBvcZVQumkBpUts/9IiGGWNDJSp2mX3auowZyUQqc/Rh0OUodcThPrfvmTrJmsU2yMr0+slEwL29RhkRLpgNUF6nC8pLtO24Ig8JNGaDAIonTjhGUW6Z/hoqZiMXlwm9mqw==',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);

$metadata['https://idp02/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'https://idp02/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp02/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp02/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIDzDCCArSgAwIBAgIJALX2v14mgbT4MA0GCSqGSIb3DQEBCwUAMHsxCzAJBgNVBAYTAk5aMQ4wDAYDVQQIDAVPdGFnbzEQMA4GA1UEBwwHRHVuZWRpbjEPMA0GA1UECgwGZXp5VmV0MQwwCgYDVQQLDANkaXQxDTALBgNVBAMMBE9sZWcxHDAaBgkqhkiG9w0BCQEWDW9sZWdAbWFpbC5jb20wHhcNMTgxMjA1MTAxODMzWhcNMjgxMjA0MTAxODMzWjB7MQswCQYDVQQGEwJOWjEOMAwGA1UECAwFT3RhZ28xEDAOBgNVBAcMB0R1bmVkaW4xDzANBgNVBAoMBmV6eVZldDEMMAoGA1UECwwDZGl0MQ0wCwYDVQQDDARPbGVnMRwwGgYJKoZIhvcNAQkBFg1vbGVnQG1haWwuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt1BD4Pahm1FUVpksc/X5gZALImJMhRRFRMUvuz5kZNgZL/ACbbOdBFfEzEUTFDNRkTMAbUqJcpFz2XyDciHGBHtHgc3ZkY5FORfDZk9R9W6amhOlo3pTjWR2zbRZNnJ7qi0zEIXQ+sqOSmOc3FgStLs6mGnCl7QSuF3C3qJLTD1YrjnLx/R13fZxxiuOsS3F6bdfozos7aLqf+CTSagRx1vwwh1AUKqIKIMoncrb202pEol2K9IOIDfZ7ZXctFl+gVVD6UOIkTaXMX8cBI/v25ggrl9YeIWDGB1E8p2wfx355jMQA34a3kpxOEU0gsjBw9STZJgUteXm7M0lGvWaGwIDAQABo1MwUTAdBgNVHQ4EFgQUXMOOgbbZPn1uPDF2Avom3+cIHdAwHwYDVR0jBBgwFoAUXMOOgbbZPn1uPDF2Avom3+cIHdAwDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEAXqdufnCMyFQDCSAYJMOJMJ2M4VG2emYLbKZjG8KcbuO2eGvrrYFbB7Vx8I2bFPVqMrTax7+J2HY71g1PoIwX5gWZ0D5NFxiM/XsjbqBjeNWw8r21iJMNGc9s8yY0SmK3HEe/15OFAPGimd/UPUeRY+d0CjUjIwRqeUGHbC5NegyEM/KmkfaioZBg5ojje/M80wTLBqqPUzQhD4yirWQXBvcZVQumkBpUts/9IiGGWNDJSp2mX3auowZyUQqc/Rh0OUodcThPrfvmTrJmsU2yMr0+slEwL29RhkRLpgNUF6nC8pLtO24Ig8JNGaDAIonTjhGUW6Z/hoqZiMXlwm9mqw==',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);

