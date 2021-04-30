<?php
date_default_timezone_set('Africa/Dakar');

function url(){
  return sprintf(
    "%s://%s%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    isset($_SERVER['SERVER_PORT']) ? ":".$_SERVER['SERVER_PORT'] : "",
    $_SERVER['REQUEST_URI']
  );
}

//signature function
function RequestSignature($IDmarchand, $IDacquereur,$purchaseAmt,$monnaie,$orderID)
{
  //  $purchaseAmt=number_format($purchaseAmt, 2, '.', '');
    $purchaseAmt=number_format($purchaseAmt, 0, '', '');
    //Pad the purchase amount with 0's so that the total length is 13 characters
	$purchaseAmt = str_pad ($purchaseAmt, 12, "0", STR_PAD_LEFT);

	//Remove the dot (.) from the padded purchase amount
	$formattedPurchaseAmt = str_replace('.', '', $purchaseAmt);

	//salt value
	$salt = "{".$orderID."}";

	//Form the plaintext string to encrypt by concatenating Merchant ID, Acquirer ID, Order ID, Formatter Purchase Amount and Currency
	$toEncrypt = $IDmarchand.$IDacquereur.$orderID.$formattedPurchaseAmt.$monnaie;

	//Add salt value
	$toEncrypt = $toEncrypt.$salt;

	//Produce the hash using SHA512
	$sha512Signature = hash('sha512', $toEncrypt);

	//Encode the signature using Base64
	$attendueBase64Sha1Signature = base64_encode(pack("H*",$sha512Signature));

   //return tab with signature Base64 and purchase amount
   $res=array($formattedPurchaseAmt,$attendueBase64Sha1Signature,$sha512Signature,$toEncrypt);
   return $res;


}


function formatAmount($purchaseAmt)
{

    $purchaseAmt=number_format($purchaseAmt, 0, '', '');
    //Pad the purchase amount with 0's so that the total length is 13 characters
	$purchaseAmt = str_pad ($purchaseAmt, 12, "0", STR_PAD_LEFT);

	//Remove the dot (.) from the padded purchase amount
	$formattedPurchaseAmt = str_replace('.', '', $purchaseAmt);

   return $formattedPurchaseAmt;


}
function generateOrderId($AcceptorPointID) {
	$date = date("dmY");
	$heure = date("His");
	$OrderId=$date.$heure.'_'.$AcceptorPointID.'_'.rand(1000000, 9999999);
	return $OrderId;
}

?>
