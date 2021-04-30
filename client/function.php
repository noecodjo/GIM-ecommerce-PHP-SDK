<?php

//signature function
function RequestSignature($IDmarchand, $IDacquereur,$purchaseAmt,$monnaie,$orderID)
{       
    $purchaseAmt=number_format($purchaseAmt, 2, '.', '');
    //Pad the purchase amount with 0's so that the total length is 13 characters
	$purchaseAmt = str_pad ($purchaseAmt, 13, "0", STR_PAD_LEFT);
	
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
   $res=array($formattedPurchaseAmt,$attendueBase64Sha1Signature);
   return $res;
    
	
}

function generateOrderId($AcceptorPointID) {
	$date = date("dmY");
	$heure = date("His");
	$OrderId=$date.$heure.'_'.$AcceptorPointID.'_'.rand(1000000, 9999999);
	return $OrderId;
}

?>