<HTML>
<HEAD>

</HEAD>
<BODY>

<?php
include ('./client/function.php');
 ?>
<form action="<?php echo url()."client/callWS.php";?>" method="POST">

Bank Code : <input type="text" name="EcomBankCode" value="900790" />
<br/>
WS Login : <input type="text" name="EcomWsLogin" value="gim1-ws-sandbox@gimsecure.net" />
<br />
WS Password : <input type="text" name="EcomWsPassword" value="r)Phes1Q0" />
<br />
Acceptor Point ID : <input type="text" name="EcomAcceptorPointID" value="0079000087138" />
<br />
Capture mode : <input type="text" name="EcomModeCapture" value="A" />
<br />
Order Id : <input type="text" name="OrderId" value="" />
<br />
Purchase Amount : <input type="text" name="PurchaseAmount" value="1000" />
<br />
Merchant Response URL : <input type="text" name="MerchantResponseURL" value=<?php echo url()."response.php";?> />
<br />
Purchase Currency : <input type="text" name="PurchaseCurrency" value="952" />
<br/>

Purchase Currency for test : <input type="text"  value="<?php echo formatAmount("500"); ?>" />
<br/>


<input type="SUBMIT" value="SEND" />
</form>

</BODY>
</HTML>
