<?php

class OnlineSecureServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'AuthorizationInfo' => '\\AuthorizationInfo',
  'AuthorizationInfoResponse' => '\\AuthorizationInfoResponse',
  'IssuerInfo' => '\\IssuerInfo',
  'OutletConfigInfo' => '\\OutletConfigInfo',
  'OutletConfigResponse' => '\\OutletConfigResponse',
  'TransactionInfo' => '\\TransactionInfo',
  'TransactionInfoResponse' => '\\TransactionInfoResponse',
  'webServiceBean' => '\\webServiceBean',
  'AuthHeader' => '\\AuthHeader',
  'SupportedCurrencies' => '\\SupportedCurrencies',
  'SupportedCurrency' => '\\SupportedCurrency',
  'Reseaux' => '\\Reseaux',
  'Reseau' => '\\Reseau',
  'ArrayOfOrderItem' => '\\ArrayOfOrderItem',
  'OrderItem' => '\\OrderItem',
  'ArrayOfOrderAdditionalField' => '\\ArrayOfOrderAdditionalField',
  'OrderAdditionalField' => '\\OrderAdditionalField',
  'ArrayOfThreeDSecureItem' => '\\ArrayOfThreeDSecureItem',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
	  foreach (self::$classmap as $key => $value) {
		if (!isset($options['classmap'][$key])) {
		  $options['classmap'][$key] = $value;
		}
	  }
  /*****************ajouter*******************************/
  $options = array_merge(array ('soap_version' => SOAP_1_1,), $options);
  $options = array_merge(array ('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,), $options);
  $options = array_merge(array ('encoding' =>'UTF-8',), $options);
  $options = array_merge(array ('trace' => 1,), $options);
  $options = array_merge(array ('exceptions' => true,), $options);
  $options = array_merge(array ('cache_wsdl' => WSDL_CACHE_NONE,), $options);
  $options = array_merge(array ('ssl_method' => SOAP_SSL_METHOD_TLS,), $options);
  
  /***********************************************************/
      $options = array_merge(array ('features' => 1,), $options);
      if (!$wsdl) {
        $wsdl = _ECOMM_FRONT_PROTOCOL_.'://'._ECOMM_FRONT_SERVER_.':'._ECOMM_FRONT_PORT_.'/PgWebService/services/OnlineSecureService?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param IssuerInfo $parameters
     * @return AuthorizationInfoResponse
     */
    public function ProcessIssuerData(IssuerInfo $parameters)
    {
      return $this->__soapCall('ProcessIssuerData', array($parameters));
    }

    /**
     * @param OutletConfigInfo $parameters
     * @return OutletConfigResponse
     */
    public function GetOutletConfig(OutletConfigInfo $parameters)
    {
      return $this->__soapCall('GetOutletConfig', array($parameters));
    }

    /**
     * @param AuthorizationInfo $parameters
     * @return AuthorizationInfoResponse
     */
    public function ProcessSecureAuthorization(AuthorizationInfo $parameters)
    {
      return $this->__soapCall('ProcessSecureAuthorization', array($parameters));
    }

    /**
     * @param TransactionInfo $parameters
     * @return TransactionInfoResponse
     */
    public function ProcessWebPayment(TransactionInfo $parameters)
    {
      return $this->__soapCall('ProcessWebPayment', array($parameters));
    }

}
