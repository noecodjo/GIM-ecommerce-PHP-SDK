# GIM-ecommerce-PHP-SDK (Merchant Client)


  ## What is it?
  -----------

  This PHP files is an exemple of a client WS of GIM-eCommerce.  
  This files can help you to display Hosted Payment Page with a Merchant configuration.  
  Steps are :  
  -

+  Put Transaction information in index.php form. 
+  Call WS OnlineSecureService / processWebPayment. 
+  WS answer with URL.  
+  Redirect to this URL. 
+  Do transaction on GIM-eCommerce. 
+  Return to response.php. 
	
	

   ## Configuration
  ------------------

  Open defines.inc.php files. 
  Change parameters to put correct information to connect to GIM-eCommerce. 
   -

+ _ECOMM_FRONT_PROTOCOL_ 	=> 'http' or 'https'. 
+ _ECOMM_FRONT_SERVER_		=>	IP ou Domain Name of your GIM-eCommerce FRONT server. 
+ _ECOMM_FRONT_PORT_		=>	Port number of your GIM-eCommerce FRONT server / No port :for prod gimbarakanet url. 
  
  
  ## Start
  -------------

  Copy all files in your PHP Server.   
  Open index.php in your browser: http://localhost/GIM-ecommerce-PHP-SDK. 
