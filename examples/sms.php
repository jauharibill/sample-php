<?php
/**
|-------------------------------------------------------------------
| CITCALL
|-------------------------------------------------------------------
| before you connect to the citcall API make sure that:
| 1. You have read the citcall API documentation
| 2. your userid has been registered and your IP has been filtered in citcall system
|
*/
//example of sending an sms using an userid / API key
require_once '../vendor/autoload.php';

//create citcall with userid and API key
$citcall = new Citcall\Citcall(USERID,APIKEY);

//send message using simple api params
$sms = $citcall->sms([
	'senderid' => 'CITCALL',
	'msisdn' => MSISDN,
	'text' => 'Test message from the Citcall PHP'
]);

//array access provides response data
print_r($sms);
