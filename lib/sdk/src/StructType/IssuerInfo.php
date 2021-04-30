<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IssuerInfo StructType
 * @subpackage Structs
 */
class IssuerInfo extends WebServiceBean
{
    /**
     * The MerchantID
     * @var string
     */
    public $MerchantID;
    /**
     * The SignatureMethod
     * @var string
     */
    public $SignatureMethod;
    /**
     * The Signature
     * @var string
     */
    public $Signature;
    /**
     * The MessageId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MessageId;
    /**
     * The PAResMsg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PAResMsg;
    /**
     * Constructor method for IssuerInfo
     * @uses IssuerInfo::setMerchantID()
     * @uses IssuerInfo::setSignatureMethod()
     * @uses IssuerInfo::setSignature()
     * @uses IssuerInfo::setMessageId()
     * @uses IssuerInfo::setPAResMsg()
     * @param string $merchantID
     * @param string $signatureMethod
     * @param string $signature
     * @param string $messageId
     * @param string $pAResMsg
     */
    public function __construct($merchantID = null, $signatureMethod = null, $signature = null, $messageId = null, $pAResMsg = null)
    {
        $this
            ->setMerchantID($merchantID)
            ->setSignatureMethod($signatureMethod)
            ->setSignature($signature)
            ->setMessageId($messageId)
            ->setPAResMsg($pAResMsg);
    }
    /**
     * Get MerchantID value
     * @return string|null
     */
    public function getMerchantID()
    {
        return $this->MerchantID;
    }
    /**
     * Set MerchantID value
     * @param string $merchantID
     * @return \StructType\IssuerInfo
     */
    public function setMerchantID($merchantID = null)
    {
        // validation for constraint: string
        if (!is_null($merchantID) && !is_string($merchantID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantID, true), gettype($merchantID)), __LINE__);
        }
        $this->MerchantID = $merchantID;
        return $this;
    }
    /**
     * Get SignatureMethod value
     * @return string|null
     */
    public function getSignatureMethod()
    {
        return $this->SignatureMethod;
    }
    /**
     * Set SignatureMethod value
     * @param string $signatureMethod
     * @return \StructType\IssuerInfo
     */
    public function setSignatureMethod($signatureMethod = null)
    {
        // validation for constraint: string
        if (!is_null($signatureMethod) && !is_string($signatureMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureMethod, true), gettype($signatureMethod)), __LINE__);
        }
        $this->SignatureMethod = $signatureMethod;
        return $this;
    }
    /**
     * Get Signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param string $signature
     * @return \StructType\IssuerInfo
     */
    public function setSignature($signature = null)
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Get MessageId value
     * @return string|null
     */
    public function getMessageId()
    {
        return $this->MessageId;
    }
    /**
     * Set MessageId value
     * @param string $messageId
     * @return \StructType\IssuerInfo
     */
    public function setMessageId($messageId = null)
    {
        // validation for constraint: string
        if (!is_null($messageId) && !is_string($messageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageId, true), gettype($messageId)), __LINE__);
        }
        $this->MessageId = $messageId;
        return $this;
    }
    /**
     * Get PAResMsg value
     * @return string|null
     */
    public function getPAResMsg()
    {
        return $this->PAResMsg;
    }
    /**
     * Set PAResMsg value
     * @param string $pAResMsg
     * @return \StructType\IssuerInfo
     */
    public function setPAResMsg($pAResMsg = null)
    {
        // validation for constraint: string
        if (!is_null($pAResMsg) && !is_string($pAResMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pAResMsg, true), gettype($pAResMsg)), __LINE__);
        }
        $this->PAResMsg = $pAResMsg;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\IssuerInfo
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
