<?php 

require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost:3000');

$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    // ClientID
    'AdgbmAcJh5xBk2c5K4uw72lxaBV7_RzVw3lk9R-hVr5AJ2zAj6QSQlcW4pGeUAHvgR7GShBw7VDtOmOB',
    // Secret
    'EAWR5w82cZcfrqmsWs6tznFMxAjNf7yUgTHdoxJUrWO2gzYB-H4MuSM7nCTmkhTbdzoYWaA8tO4-pprv'
  )
);

?>