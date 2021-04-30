<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthorizationInfoResponse StructType
 * @subpackage Structs
 */
class AuthorizationInfoResponse extends WebServiceBean
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
     * The MerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MerID;
    /**
     * The AcqID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AcqID;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The SignatureMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SignatureMethod;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Signature;
    /**
     * The ReferenceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceNumber;
    /**
     * The AuthorizationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AuthorizationCode;
    /**
     * The CardNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CardNumber;
    /**
     * The TokenValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TokenValue;
    /**
     * The Forward
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Forward;
    /**
     * The IssuerUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssuerUrl;
    /**
     * The MessageId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MessageId;
    /**
     * The PAReqMsg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PAReqMsg;
    /**
     * Constructor method for AuthorizationInfoResponse
     * @uses AuthorizationInfoResponse::setResponseCode()
     * @uses AuthorizationInfoResponse::setReasonCode()
     * @uses AuthorizationInfoResponse::setReasonCodeDesc()
     * @uses AuthorizationInfoResponse::setMerID()
     * @uses AuthorizationInfoResponse::setAcqID()
     * @uses AuthorizationInfoResponse::setOrderID()
     * @uses AuthorizationInfoResponse::setSignatureMethod()
     * @uses AuthorizationInfoResponse::setSignature()
     * @uses AuthorizationInfoResponse::setReferenceNumber()
     * @uses AuthorizationInfoResponse::setAuthorizationCode()
     * @uses AuthorizationInfoResponse::setCardNumber()
     * @uses AuthorizationInfoResponse::setTokenValue()
     * @uses AuthorizationInfoResponse::setForward()
     * @uses AuthorizationInfoResponse::setIssuerUrl()
     * @uses AuthorizationInfoResponse::setMessageId()
     * @uses AuthorizationInfoResponse::setPAReqMsg()
     * @param string $responseCode
     * @param string $reasonCode
     * @param string $reasonCodeDesc
     * @param string $merID
     * @param string $acqID
     * @param string $orderID
     * @param string $signatureMethod
     * @param string $signature
     * @param string $referenceNumber
     * @param string $authorizationCode
     * @param string $cardNumber
     * @param string $tokenValue
     * @param string $forward
     * @param string $issuerUrl
     * @param string $messageId
     * @param string $pAReqMsg
     */
    public function __construct($responseCode = null, $reasonCode = null, $reasonCodeDesc = null, $merID = null, $acqID = null, $orderID = null, $signatureMethod = null, $signature = null, $referenceNumber = null, $authorizationCode = null, $cardNumber = null, $tokenValue = null, $forward = null, $issuerUrl = null, $messageId = null, $pAReqMsg = null)
    {
        $this
            ->setResponseCode($responseCode)
            ->setReasonCode($reasonCode)
            ->setReasonCodeDesc($reasonCodeDesc)
            ->setMerID($merID)
            ->setAcqID($acqID)
            ->setOrderID($orderID)
            ->setSignatureMethod($signatureMethod)
            ->setSignature($signature)
            ->setReferenceNumber($referenceNumber)
            ->setAuthorizationCode($authorizationCode)
            ->setCardNumber($cardNumber)
            ->setTokenValue($tokenValue)
            ->setForward($forward)
            ->setIssuerUrl($issuerUrl)
            ->setMessageId($messageId)
            ->setPAReqMsg($pAReqMsg);
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
     * @return \StructType\AuthorizationInfoResponse
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
     * @return \StructType\AuthorizationInfoResponse
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
     * @return \StructType\AuthorizationInfoResponse
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
     * Get MerID value
     * @return string|null
     */
    public function getMerID()
    {
        return $this->MerID;
    }
    /**
     * Set MerID value
     * @param string $merID
     * @return \StructType\AuthorizationInfoResponse
     */
    public function setMerID($merID = null)
    {
        // validation for constraint: string
        if (!is_null($merID) && !is_string($merID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merID, true), gettype($merID)), __LINE__);
        }
        $this->MerID = $merID;
        return $this;
    }
    /**
     * Get AcqID value
     * @return string|null
     */
    public function getAcqID()
    {
        return $this->AcqID;
    }
    /**
     * Set AcqID value
     * @param string $acqID
     * @return \StructType\AuthorizationInfoResponse
     */
    public function setAcqID($acqID = null)
    {
        // validation for constraint: string
        if (!is_null($acqID) && !is_string($acqID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acqID, true), gettype($acqID)), __LINE__);
        }
        $this->AcqID = $acqID;
        return $this;
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \StructType\AuthorizationInfoResponse
     */
    public function setOrderID($orderID = null)
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
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
     * @return \StructType\AuthorizationInfoResponse
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
     * @return \StructType\AuthorizationInfoResponse
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
     * Get ReferenceNumber value
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }
    /**
     * Set ReferenceNumber value
     * @param string $referenceNumber
     * @return \StructType\AuthorizationInfoResponse
     */
    public function setReferenceNumber($referenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($referenceNumber) && !is_string($referenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceNumber, true), gettype($referenceNumber)), __LINE__);
        }
        $this->ReferenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Get AuthorizationCode value
     * @return string|null
     */
    public function getAuthorizationCode()
    {
        return $this->AuthorizationCode;
    }
    /**
     * Set AuthorizationCode value
     * @param string $authorizationCode
     * @return \StructType\AuthorizationInfoResponse
     */
    public function setAuthorizationCode($authorizationCode = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationCode) && !is_string($authorizationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationCode, true), gettype($authorizationCode)), __LINE__);
        }
        $this->AuthorizationCode = $authorizationCode;
        return $this;
    }
    /**
     * Get CardNumber value
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param string $cardNumber
     * @return \StructType\AuthorizationInfoResponse
     */
    public function setCardNumber($cardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNumber, true), gettype($cardNumber)), __LINE__);
        }
        $this->CardNumber = $cardNumber;
        return $this;
    }
    /**
     * Get TokenValue value
     * @return string|null
     */
    public function getTokenValue()
    {
        return $this->TokenValue;
    }
    /**
     * Set TokenValue value
     * @param string $tokenValue
     * @return \StructType\AuthorizationInfoResponse
     */
    public function setTokenValue($tokenValue = null)
    {
        // validation for constraint: string
        if (!is_null($tokenValue) && !is_string($tokenValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenValue, true), gettype($tokenValue)), __LINE__);
        }
        $this->TokenValue = $tokenValue;
        return $this;
    }
    /**
     * Get Forward value
     * @return string|null
     */
    public function getForward()
    {
        return $this->Forward;
    }
    /**
     * Set Forward value
     * @param string $forward
     * @return \StructType\AuthorizationInfoResponse
     */
    public function setForward($forward = null)
    {
        // validation for constraint: string
        if (!is_null($forward) && !is_string($forward)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forward, true), gettype($forward)), __LINE__);
        }
        $this->Forward = $forward;
        return $this;
    }
    /**
     * Get IssuerUrl value
     * @return string|null
     */
    public function getIssuerUrl()
    {
        return $this->IssuerUrl;
    }
    /**
     * Set IssuerUrl value
     * @param string $issuerUrl
     * @return \StructType\AuthorizationInfoResponse
     */
    public function setIssuerUrl($issuerUrl = null)
    {
        // validation for constraint: string
        if (!is_null($issuerUrl) && !is_string($issuerUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuerUrl, true), gettype($issuerUrl)), __LINE__);
        }
        $this->IssuerUrl = $issuerUrl;
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
     * @return \StructType\AuthorizationInfoResponse
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
     * Get PAReqMsg value
     * @return string|null
     */
    public function getPAReqMsg()
    {
        return $this->PAReqMsg;
    }
    /**
     * Set PAReqMsg value
     * @param string $pAReqMsg
     * @return \StructType\AuthorizationInfoResponse
     */
    public function setPAReqMsg($pAReqMsg = null)
    {
        // validation for constraint: string
        if (!is_null($pAReqMsg) && !is_string($pAReqMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pAReqMsg, true), gettype($pAReqMsg)), __LINE__);
        }
        $this->PAReqMsg = $pAReqMsg;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AuthorizationInfoResponse
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
