<?php
require('stripe-php-master/init.php');
$Publishablekey="pk_test_51HviMGEP08HGTXYKPK60ND4UNmHlV4v3wOIeipgRTV5VS7DoxH3Eix9F2gY8ruL31BMWKxjbPMiMa9saGrTiPozu00dAPoBq8L";

$Secretkey= "sk_test_51HviMGEP08HGTXYK47xVlqURnrXpIgbUSUdTbpyvtjQ75Di87dmC11NvzXEHLW5L5bdOB744Mmmf23M6QujIOJwm000wFMxnAv";

\Stripe\Stripe::setApiKey($Secretkey);
?>