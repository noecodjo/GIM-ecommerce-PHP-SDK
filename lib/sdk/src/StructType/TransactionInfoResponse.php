<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionInfoResponse StructType
 * @subpackage Structs
 */
class TransactionInfoResponse extends WebServiceBean
{
    /**
     * The ResponseCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ResponseCode;
    /**
     * The ReasonCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReasonCode;
    /**
     * The ReasonCodeDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReasonCodeDesc;
    /**
     * The AccessKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccessKey;
    /**
     * The UrlPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UrlPayment;
    /**
     * Constructor method for TransactionInfoResponse
     * @uses TransactionInfoResponse::setResponseCode()
     * @uses TransactionInfoResponse::setReasonCode()
     * @uses TransactionInfoResponse::setReasonCodeDesc()
     * @uses TransactionInfoResponse::setAccessKey()
     * @uses TransactionInfoResponse::setUrlPayment()
     * @param string $responseCode
     * @param string $reasonCode
     * @param string $reasonCodeDesc
     * @param string $accessKey
     * @param string $urlPayment
     */
    public function __construct($responseCode = null, $reasonCode = null, $reasonCodeDesc = null, $accessKey = null, $urlPayment = null)
    {
        $this
            ->setResponseCode($responseCode)
            ->setReasonCode($reasonCode)
            ->setReasonCodeDesc($reasonCodeDesc)
            ->setAccessKey($accessKey)
            ->setUrlPayment($urlPayment);
    }
    /**
     * Get ResponseCode value
     * @return string|null
     */
    public function getResponseCode()
    {
        return $this->ResponseCode;
    }
    /**
     * Set ResponseCode value
     * @param string $responseCode
     * @return \StructType\TransactionInfoResponse
     */
    public function setResponseCode($responseCode = null)
    {
        // validation for constraint: string
        if (!is_null($responseCode) && !is_string($responseCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseCode, true), gettype($responseCode)), __LINE__);
        }
        $this->ResponseCode = $responseCode;
        return $this;
    }
    /**
     * Get ReasonCode value
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param string $reasonCode
     * @return \StructType\TransactionInfoResponse
     */
    public function setReasonCode($reasonCode = null)
    {
        // validation for constraint: string
        if (!is_null($reasonCode) && !is_string($reasonCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonCode, true), gettype($reasonCode)), __LINE__);
        }
        $this->ReasonCode = $reasonCode;
        return $this;
    }
    /**
     * Get ReasonCodeDesc value
     * @return string|null
     */
    public function getReasonCodeDesc()
    {
        return $this->ReasonCodeDesc;
    }
    /**
     * Set ReasonCodeDesc value
     * @param string $reasonCodeDesc
     * @return \StructType\TransactionInfoResponse
     */
    public function setReasonCodeDesc($reasonCodeDesc = null)
    {
        // validation for constraint: string
        if (!is_null($reasonCodeDesc) && !is_string($reasonCodeDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonCodeDesc, true), gettype($reasonCodeDesc)), __LINE__);
        }
        $this->ReasonCodeDesc = $reasonCodeDesc;
        return $this;
    }
    /**
     * Get AccessKey value
     * @return string|null
     */
    public function getAccessKey()
    {
        return $this->AccessKey;
    }
    /**
     * Set AccessKey value
     * @param string $accessKey
     * @return \StructType\TransactionInfoResponse
     */
    public function setAccessKey($accessKey = null)
    {
        // validation for constraint: string
        if (!is_null($accessKey) && !is_string($accessKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessKey, true), gettype($accessKey)), __LINE__);
        }
        $this->AccessKey = $accessKey;
        return $this;
    }
    /**
     * Get UrlPayment value
     * @return string|null
     */
    public function getUrlPayment()
    {
        return $this->UrlPayment;
    }
    /**
     * Set UrlPayment value
     * @param string $urlPayment
     * @return \StructType\TransactionInfoResponse
     */
    public function setUrlPayment($urlPayment = null)
    {
        // validation for constraint: string
        if (!is_null($urlPayment) && !is_string($urlPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urlPayment, true), gettype($urlPayment)), __LINE__);
        }
        $this->UrlPayment = $urlPayment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TransactionInfoResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
