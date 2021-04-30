<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Process ServiceType
 * @subpackage Services
 */
class Process extends AbstractSoapClientBase
{
    /**
     * Sets the AuthHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \StructType\AuthHeader $authHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAuthHeader(\StructType\AuthHeader $authHeader, $nameSpace = 'http://www.hps.ma/PowerCARD/PaymentGateway/OnlineSecureServices', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'AuthHeader', $authHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named ProcessIssuerData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthHeader
     * - SOAPHeaderNamespaces: http://www.hps.ma/PowerCARD/PaymentGateway/OnlineSecureServices
     * - SOAPHeaderTypes: \StructType\AuthHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\IssuerInfo $parameters
     * @return \StructType\AuthorizationInfoResponse|bool
     */
    public function ProcessIssuerData(\StructType\IssuerInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ProcessIssuerData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ProcessSecureAuthorization
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthHeader
     * - SOAPHeaderNamespaces: http://www.hps.ma/PowerCARD/PaymentGateway/OnlineSecureServices
     * - SOAPHeaderTypes: \StructType\AuthHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AuthorizationInfo $parameters
     * @return \StructType\AuthorizationInfoResponse|bool
     */
    public function ProcessSecureAuthorization(\StructType\AuthorizationInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ProcessSecureAuthorization($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ProcessWebPayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthHeader
     * - SOAPHeaderNamespaces: http://www.hps.ma/PowerCARD/PaymentGateway/OnlineSecureServices
     * - SOAPHeaderTypes: \StructType\AuthHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TransactionInfo $parameters
     * @return \StructType\TransactionInfoResponse|bool
     */
    public function ProcessWebPayment(\StructType\TransactionInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ProcessWebPayment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AuthorizationInfoResponse|\StructType\TransactionInfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
