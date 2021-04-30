<?php

class AuthorizationInfoResponse
{

    /**
     * @var string $ResponseCode
     */
    protected $ResponseCode = null;

    /**
     * @var string $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var string $ReasonCodeDesc
     */
    protected $ReasonCodeDesc = null;

    /**
     * @var string $MerID
     */
    protected $MerID = null;

    /**
     * @var string $AcqID
     */
    protected $AcqID = null;

    /**
     * @var string $OrderID
     */
    protected $OrderID = null;

    /**
     * @var string $SignatureMethod
     */
    protected $SignatureMethod = null;

    /**
     * @var string $Signature
     */
    protected $Signature = null;

    /**
     * @var string $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @var string $AuthorizationCode
     */
    protected $AuthorizationCode = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var string $TokenValue
     */
    protected $TokenValue = null;

    /**
     * @var string $Forward
     */
    protected $Forward = null;

    /**
     * @var string $IssuerUrl
     */
    protected $IssuerUrl = null;

    /**
     * @var string $MessageId
     */
    protected $MessageId = null;

    /**
     * @var string $PAReqMsg
     */
    protected $PAReqMsg = null;

    /**
     * @param string $ResponseCode
     * @param string $ReasonCode
     * @param string $ReasonCodeDesc
     * @param string $MerID
     * @param string $AcqID
     * @param string $OrderID
     * @param string $SignatureMethod
     * @param string $Signature
     * @param string $ReferenceNumber
     * @param string $AuthorizationCode
     * @param string $CardNumber
     * @param string $TokenValue
     * @param string $Forward
     * @param string $IssuerUrl
     * @param string $MessageId
     * @param string $PAReqMsg
     */
    public function __construct($ResponseCode, $ReasonCode, $ReasonCodeDesc, $MerID, $AcqID, $OrderID, $SignatureMethod, $Signature, $ReferenceNumber, $AuthorizationCode, $CardNumber, $TokenValue, $Forward, $IssuerUrl, $MessageId, $PAReqMsg)
    {
      $this->ResponseCode = $ResponseCode;
      $this->ReasonCode = $ReasonCode;
      $this->ReasonCodeDesc = $ReasonCodeDesc;
      $this->MerID = $MerID;
      $this->AcqID = $AcqID;
      $this->OrderID = $OrderID;
      $this->SignatureMethod = $SignatureMethod;
      $this->Signature = $Signature;
      $this->ReferenceNumber = $ReferenceNumber;
      $this->AuthorizationCode = $AuthorizationCode;
      $this->CardNumber = $CardNumber;
      $this->TokenValue = $TokenValue;
      $this->Forward = $Forward;
      $this->IssuerUrl = $IssuerUrl;
      $this->MessageId = $MessageId;
      $this->PAReqMsg = $PAReqMsg;
    }

    /**
     * @return string
     */
    public function getResponseCode()
    {
      return $this->ResponseCode;
    }

    /**
     * @param string $ResponseCode
     * @return AuthorizationInfoResponse
     */
    public function setResponseCode($ResponseCode)
    {
      $this->ResponseCode = $ResponseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param string $ReasonCode
     * @return AuthorizationInfoResponse
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonCodeDesc()
    {
      return $this->ReasonCodeDesc;
    }

    /**
     * @param string $ReasonCodeDesc
     * @return AuthorizationInfoResponse
     */
    public function setReasonCodeDesc($ReasonCodeDesc)
    {
      $this->ReasonCodeDesc = $ReasonCodeDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerID()
    {
      return $this->MerID;
    }

    /**
     * @param string $MerID
     * @return AuthorizationInfoResponse
     */
    public function setMerID($MerID)
    {
      $this->MerID = $MerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcqID()
    {
      return $this->AcqID;
    }

    /**
     * @param string $AcqID
     * @return AuthorizationInfoResponse
     */
    public function setAcqID($AcqID)
    {
      $this->AcqID = $AcqID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param string $OrderID
     * @return AuthorizationInfoResponse
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignatureMethod()
    {
      return $this->SignatureMethod;
    }

    /**
     * @param string $SignatureMethod
     * @return AuthorizationInfoResponse
     */
    public function setSignatureMethod($SignatureMethod)
    {
      $this->SignatureMethod = $SignatureMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
      return $this->Signature;
    }

    /**
     * @param string $Signature
     * @return AuthorizationInfoResponse
     */
    public function setSignature($Signature)
    {
      $this->Signature = $Signature;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
      return $this->ReferenceNumber;
    }

    /**
     * @param string $ReferenceNumber
     * @return AuthorizationInfoResponse
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationCode()
    {
      return $this->AuthorizationCode;
    }

    /**
     * @param string $AuthorizationCode
     * @return AuthorizationInfoResponse
     */
    public function setAuthorizationCode($AuthorizationCode)
    {
      $this->AuthorizationCode = $AuthorizationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return AuthorizationInfoResponse
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTokenValue()
    {
      return $this->TokenValue;
    }

    /**
     * @param string $TokenValue
     * @return AuthorizationInfoResponse
     */
    public function setTokenValue($TokenValue)
    {
      $this->TokenValue = $TokenValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getForward()
    {
      return $this->Forward;
    }

    /**
     * @param string $Forward
     * @return AuthorizationInfoResponse
     */
    public function setForward($Forward)
    {
      $this->Forward = $Forward;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuerUrl()
    {
      return $this->IssuerUrl;
    }

    /**
     * @param string $IssuerUrl
     * @return AuthorizationInfoResponse
     */
    public function setIssuerUrl($IssuerUrl)
    {
      $this->IssuerUrl = $IssuerUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param string $MessageId
     * @return AuthorizationInfoResponse
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAReqMsg()
    {
      return $this->PAReqMsg;
    }

    /**
     * @param string $PAReqMsg
     * @return AuthorizationInfoResponse
     */
    public function setPAReqMsg($PAReqMsg)
    {
      $this->PAReqMsg = $PAReqMsg;
      return $this;
    }

}
