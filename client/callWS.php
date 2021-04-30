<?php
//don't to touch//

include_once('../defines.inc.php');
include ('function.php');
require '../lib/sdk/src/eCommerceClient/autoload.php';
stream_context_create(array('ssl'=> array('verify_peer'=>false,'verify_peer_name'=>false)));
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

$BankCode=$_POST['EcomBankCode'];
$WsLogin=$_POST['EcomWsLogin'];
$WsPassword=$_POST['EcomWsPassword'];
$AcceptorPointID=$_POST['EcomAcceptorPointID'];
$ModeCapture=$_POST['EcomModeCapture'];

// generate a OrdeId
if(!empty($_POST['OrderId'])) {
	$OrderId=$_POST['OrderId'];
} else {
	$OrderId=generateOrderId($AcceptorPointID);
}
$PurchaseAmount=$_POST['PurchaseAmount'];
$MerchantResponseURL=$_POST['MerchantResponseURL'];
$PurchaseCurrency=$_POST['PurchaseCurrency'];



/*variables of TransactionInfo */
$Version='1.0.0';
$SignatureMethod='SHA512';
//use fonction RequestSignature to get tab with signature Base64 and purchase amount
$res=RequestSignature($AcceptorPointID,$BankCode,$PurchaseAmount,$PurchaseCurrency,$OrderId);

//get purchase amount
$PurchaseAmount=$res[0];
//get signature
$Signature=$res[1];

$request2=new \TransactionInfo($Version, $OrderId, '', '', '', '', $PurchaseAmount, '',
    $PurchaseCurrency, $ModeCapture, '', '', '', '', '',
    '', '', '', '', '', '', '', '',
    '', '', '', '', '', '', '', '',
    '', '', '', '', '', '', $SignatureMethod, $Signature,
    '', '', '', '', '', '', '',
    '', '', '', '', '', '', '', '',
    '', '', '', '', '', '', '', '', '', '',
    '', '', '', '', '', '', $MerchantResponseURL, '', '',
    '', '', '', '', '', '', '', '', '','');

$request=new \AuthHeader($WsLogin, $WsPassword, $AcceptorPointID, $BankCode);

$service = new \OnlineSecureServiceService();
$header = new SoapHeader('http://www.hps.ma/PowerCARD/PaymentGateway/OnlineSecureServices','AuthHeader',$request,false);
$service->__setSoapHeaders($header);


$response = $service->ProcessWebPayment($request2);
$code=$response->getReasonCode();
$erreur=$response->getReasonCodeDesc();
echo $code.'<br>';
echo $erreur.'<br>';
//die($response->getUrlPayment());
// redirect url payment
if ($code== 1000){
    $url=$response->getUrlPayment();
	//	echo "payUrl = ".$url;
	if (strpos($url, 'https://172.16.5.198:8444/') !== false) {
		$url=str_replace("https://172.16.5.198:8444", "https://gim.barakamoney.net", $url);
	}
    header("Location: $url");
}
// redirect error
else{
   echo 'Erreur on call WS. <br>';
   var_dump($response);
}
//N04lN1~h
?>
