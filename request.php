<?php

require_once ( 'vendor/autoload.php' );

use com\realexpayments\hpp\sdk\domain\HppRequest;
use com\realexpayments\hpp\sdk\RealexHpp;

$merchant_id = 'hackathon7'; // $_GET['merchant_id'];
$account =  $_GET['account'];
$amount =  $_GET['amount'];
$currency = 'EUR';
$auto_settle_flag = '1';
$realex_secret = 'secret';


$hppRequest = ( new HppRequest() )
    ->addMerchantId( $merchant_id )
    ->addAccount( $account )
    ->addAmount( $amount )
    ->addCurrency( $currency )
    ->addAutoSettleFlag( $auto_settle_flag );

$supplementaryData = array();

$hppRequest->addSupplementaryData( $supplementaryData );

$realexHpp = new RealexHpp( $realex_secret );
$requestJson = $realexHpp->requestToJson( $hppRequest );

echo $requestJson;