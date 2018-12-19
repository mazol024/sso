<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */

$metadata['https://sp01/simplesaml/module.php/saml/sp/metadata.php/idp01-sp'] = array (
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://sp01/simplesaml/module.php/saml/sp/saml2-logout.php/idp01-sp',
    ),
  ),
  'AssertionConsumerService' =>
  array (
    0 =>
    array (
      'index' => 0,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://sp01/simplesaml/module.php/saml/sp/saml2-acs.php/idp01-sp',
    ),
    1 =>
    array (
      'index' => 1,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'https://sp01/simplesaml/module.php/saml/sp/saml1-acs.php/idp01-sp',
    ),
    2 =>
    array (
      'index' => 2,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://sp01/simplesaml/module.php/saml/sp/saml2-acs.php/idp01-sp',
    ),
    3 =>
    array (
      'index' => 3,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'https://sp01/simplesaml/module.php/saml/sp/saml1-acs.php/idp01-sp/artifact',
    ),
  ),
  'certData' => 'MIIDzDCCArSgAwIBAgIJAJiAmaTphobQMA0GCSqGSIb3DQEBCwUAMHsxCzAJBgNVBAYTAk5aMQ4wDAYDVQQIDAVPdGFnbzEQMA4GA1UEBwwHRHVuZWRpbjEPMA0GA1UECgwGZXp5VmV0MQwwCgYDVQQLDANkaXQxDTALBgNVBAMMBG9sZWcxHDAaBgkqhkiG9w0BCQEWDW9sZWdAbWFpbC5jb20wHhcNMTgxMjA1MTAyNzM0WhcNMjgxMjA0MTAyNzM0WjB7MQswCQYDVQQGEwJOWjEOMAwGA1UECAwFT3RhZ28xEDAOBgNVBAcMB0R1bmVkaW4xDzANBgNVBAoMBmV6eVZldDEMMAoGA1UECwwDZGl0MQ0wCwYDVQQDDARvbGVnMRwwGgYJKoZIhvcNAQkBFg1vbGVnQG1haWwuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzxXe6VTxIZqfmz0xb11GGCIimxXY0LHI3Vai0GlERcTQDOmXG/prvakoXkmH93XglwK6MvbjFS1WQ4B+oN9V8hXDil5OLVJ5NEJGRMGdkFD+aXLpyehPDsN/Bvy08TpRBRU894Dfpjw3cja8/+V6TWU77aCl4cISbm1gvW/DR4CT+elYVTbcgBq32XET7pLILnfXd997ntuLHdeTXxWRtRaoxHbFfVmgN/Y9FwIv6r7eQ8aXBDUEI0tUwhx/b3smYxuks7O2iMvY8lCrI2EOII+Rts6m7t/RmpXZxxtSJpWhfCXoD5ZVAovBptQb3Pfh6lXUCR5QeSXkGbCYOIcJbQIDAQABo1MwUTAdBgNVHQ4EFgQU828QxeDGYvBfuoR4k3Iv2S4fvk4wHwYDVR0jBBgwFoAU828QxeDGYvBfuoR4k3Iv2S4fvk4wDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEATxF57/TSWe4UG/6ZBkv7seQ2oSKOsB3y163DgqqCdb+LUS41mmfnM3Qe6QdCw8dNurZ2oM/JBnXnoRugsZ57PG63Hsu3BmtkKP+lmFM4cbuI6V0C3Ti7mmp1dSWhEmWcOUb/5stcs8TbEk1sVTigKw3HOtzcfq4ppdsSWCSfOKXUgaW9rQO7lO2jTvGJddkuDA4IWzAqVA5+ASlcU1HedjBcsKd5m4MyeoJ1WRIis5SvjIdBI5X4RVyUGAelNi/3LFXhMEdOQjBe7swylOTYfNNX2ECXxVPf4P898231xfQJo9slMXJwQiP5j8PBfTViav+qHvsywNRFtj+PjskP0w==',
);
