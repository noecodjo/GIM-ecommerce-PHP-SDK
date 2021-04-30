<?php
//don't to touch//
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('../defines.inc.php');
include ('function.php');
require '../lib/sdk/vendor/autoload.php';
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
$orderItems = new \ArrayType\ArrayOfOrderItem();
$additionalFields = new \ArrayType\ArrayOfOrderAdditionalField();
$request2=new \StructType\TransactionInfo($Version, $OrderId,
'',
'',
'',
'',
$PurchaseAmount,
'',
$PurchaseCurrency,
$ModeCapture, '', '', '', '', '',
    '', '', '', '', '', '', '', '',
    '', '', '', '', '', '', '', '',
    '', '', '', '', '', '', $SignatureMethod, $Signature,
    '', '', '', '', '', '', '',
    '', '', '', '', '', '', '', '',
    '', '', '', '', '', '', '', '', '', '',
    '', '', '', '', '', '', $MerchantResponseURL, '', '',
    '', '', '', '', '', '', '', '', '','');

$request=new \StructType\AuthHeader($WsLogin, $WsPassword, $AcceptorPointID, $BankCode);

$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => '/Applications/MAMP/htdocs/WsdlToClass-develop/test.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),

);
/**
 * Samples for Process ServiceType
 */

$process = new \ServiceType\Process($options);
$header = new SoapHeader('http://www.hps.ma/PowerCARD/PaymentGateway/OnlineSecureServices','AuthHeader',$request,false);
$process->setSoapHeaderAuthHeader($header);


$response = $process->ProcessWebPayment($request2);
$code=$response->getReasonCode();
$erreur=$response->getReasonCodeDesc();
echo $code.'<br>';
echo $erreur.'<br>';
//die($response->getUrlPayment());
// redirect url payment
if ($code== 1000){
    $url=$response->getUrlPayment();
    header("Location: $url");
}
// redirect error
else{
   echo 'Erreur on call WS. <br>';
   var_dump($response);
}

?>
