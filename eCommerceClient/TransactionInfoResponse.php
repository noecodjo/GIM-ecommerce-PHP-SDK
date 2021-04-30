<?php

class TransactionInfoResponse
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
     * @var string $AccessKey
     */
    protected $AccessKey = null;

    /**
     * @var string $UrlPayment
     */
    protected $UrlPayment = null;

    /**
     * @var string $MerchantData
     */
    protected $MerchantData = null;

    /**
     * @param string $ResponseCode
     * @param string $ReasonCode
     * @param string $ReasonCodeDesc
     * @param string $AccessKey
     * @param string $UrlPayment
     * @param string $MerchantData
     */
    public function __construct($ResponseCode, $ReasonCode, $ReasonCodeDesc, $AccessKey, $UrlPayment, $MerchantData)
    {
      $this->ResponseCode = $ResponseCode;
      $this->ReasonCode = $ReasonCode;
      $this->ReasonCodeDesc = $ReasonCodeDesc;
      $this->AccessKey = $AccessKey;
      $this->UrlPayment = $UrlPayment;
      $this->MerchantData = $MerchantData;
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
     * @return TransactionInfoResponse
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
     * @return TransactionInfoResponse
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
     * @return TransactionInfoResponse
     */
    public function setReasonCodeDesc($ReasonCodeDesc)
    {
      $this->ReasonCodeDesc = $ReasonCodeDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccessKey()
    {
      return $this->AccessKey;
    }

    /**
     * @param string $AccessKey
     * @return TransactionInfoResponse
     */
    public function setAccessKey($AccessKey)
    {
      $this->AccessKey = $AccessKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlPayment()
    {
      return $this->UrlPayment;
    }

    /**
     * @param string $UrlPayment
     * @return TransactionInfoResponse
     */
    public function setUrlPayment($UrlPayment)
    {
      $this->UrlPayment = $UrlPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantData()
    {
      return $this->MerchantData;
    }

    /**
     * @param string $MerchantData
     * @return TransactionInfoResponse
     */
    public function setMerchantData($MerchantData)
    {
      $this->MerchantData = $MerchantData;
      return $this;
    }

}
