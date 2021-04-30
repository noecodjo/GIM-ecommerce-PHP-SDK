<HTML>
<HEAD>

</HEAD>
<BODY>


<form action="./client/callWS.php" method="POST">

Bank Code : <input type="text" name="EcomBankCode" value="991597" />
<br/>
WS Login : <input type="text" name="EcomWsLogin" value="WsLogin>aichatou.lo@gmail.com" />
<br />
WS Password : <input type="text" name="EcomWsPassword" value="PCard001!" />
<br />
Acceptor Point ID : <input type="text" name="EcomAcceptorPointID" value="0400700344434" />
<br />
Capture mode : <input type="text" name="EcomModeCapture" value="A" />
<br />
Order Id : <input type="text" name="OrderId" value="" />
<br />
Purchase Amount : <input type="text" name="PurchaseAmount" value="1000" />
<br />
Merchant Response URL : <input type="text" name="MerchantResponseURL" value="./response.php" />
<br />
Purchase Currency : <input type="text" name="PurchaseCurrency" value="952" />
<br/>


<input type="SUBMIT" value="SEND" />
</form>

</BODY>
</HTML>
