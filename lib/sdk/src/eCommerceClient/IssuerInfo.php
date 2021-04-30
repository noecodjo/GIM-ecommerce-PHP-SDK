<?php

class IssuerInfo
{

    /**
     * @var string $MerchantID
     */
    protected $MerchantID = null;

    /**
     * @var string $SignatureMethod
     */
    protected $SignatureMethod = null;

    /**
     * @var string $Signature
     */
    protected $Signature = null;

    /**
     * @var string $MessageId
     */
    protected $MessageId = null;

    /**
     * @var string $PAResMsg
     */
    protected $PAResMsg = null;

    /**
     * @param string $MerchantID
     * @param string $SignatureMethod
     * @param string $Signature
     * @param string $MessageId
     * @param string $PAResMsg
     */
    public function __construct($MerchantID, $SignatureMethod, $Signature, $MessageId, $PAResMsg)
    {
      $this->MerchantID = $MerchantID;
      $this->SignatureMethod = $SignatureMethod;
      $this->Signature = $Signature;
      $this->MessageId = $MessageId;
      $this->PAResMsg = $PAResMsg;
    }

    /**
     * @return string
     */
    public function getMerchantID()
    {
      return $this->MerchantID;
    }

    /**
     * @param string $MerchantID
     * @return IssuerInfo
     */
    public function setMerchantID($MerchantID)
    {
      $this->MerchantID = $MerchantID;
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
     * @return IssuerInfo
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
     * @return IssuerInfo
     */
    public function setSignature($Signature)
    {
      $this->Signature = $Signature;
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
     * @return IssuerInfo
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAResMsg()
    {
      return $this->PAResMsg;
    }

    /**
     * @param string $PAResMsg
     * @return IssuerInfo
     */
    public function setPAResMsg($PAResMsg)
    {
      $this->PAResMsg = $PAResMsg;
      return $this;
    }

}
