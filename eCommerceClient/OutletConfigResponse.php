<?php

class OutletConfigResponse
{

    /**
     * @var string $responseCode
     */
    protected $responseCode = null;

    /**
     * @var string $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var string $ReasonCodeDesc
     */
    protected $ReasonCodeDesc = null;

    /**
     * @var string $bankCode
     */
    protected $bankCode = null;

    /**
     * @var string $AllowCreditTransaction
     */
    protected $AllowCreditTransaction = null;

    /**
     * @var string $AllowRefund
     */
    protected $AllowRefund = null;

    /**
     * @var string $AllowExcessAmountOnRefund
     */
    protected $AllowExcessAmountOnRefund = null;

    /**
     * @var string $ModeCapture
     */
    protected $ModeCapture = null;

    /**
     * @var string $TypeCapture
     */
    protected $TypeCapture = null;

    /**
     * @var string $AllowReversal
     */
    protected $AllowReversal = null;

    /**
     * @var string $AllowReversalOnCaptured
     */
    protected $AllowReversalOnCaptured = null;

    /**
     * @var string $AllowRecurring
     */
    protected $AllowRecurring = null;

    /**
     * @var string $AllowInstallment
     */
    protected $AllowInstallment = null;

    /**
     * @var SupportedCurrencies $Currencies
     */
    protected $Currencies = null;

    /**
     * @var Reseaux $VailableNetworkReseau
     */
    protected $VailableNetworkReseau = null;

    /**
     * @param string $responseCode
     * @param string $reasonCode
     * @param string $ReasonCodeDesc
     * @param string $bankCode
     * @param string $AllowCreditTransaction
     * @param string $AllowRefund
     * @param string $AllowExcessAmountOnRefund
     * @param string $ModeCapture
     * @param string $TypeCapture
     * @param string $AllowReversal
     * @param string $AllowReversalOnCaptured
     * @param string $AllowRecurring
     * @param string $AllowInstallment
     * @param SupportedCurrencies $Currencies
     * @param Reseaux $VailableNetworkReseau
     */
    public function __construct($responseCode, $reasonCode, $ReasonCodeDesc, $bankCode, $AllowCreditTransaction, $AllowRefund, $AllowExcessAmountOnRefund, $ModeCapture, $TypeCapture, $AllowReversal, $AllowReversalOnCaptured, $AllowRecurring, $AllowInstallment, $Currencies, $VailableNetworkReseau)
    {
      $this->responseCode = $responseCode;
      $this->reasonCode = $reasonCode;
      $this->ReasonCodeDesc = $ReasonCodeDesc;
      $this->bankCode = $bankCode;
      $this->AllowCreditTransaction = $AllowCreditTransaction;
      $this->AllowRefund = $AllowRefund;
      $this->AllowExcessAmountOnRefund = $AllowExcessAmountOnRefund;
      $this->ModeCapture = $ModeCapture;
      $this->TypeCapture = $TypeCapture;
      $this->AllowReversal = $AllowReversal;
      $this->AllowReversalOnCaptured = $AllowReversalOnCaptured;
      $this->AllowRecurring = $AllowRecurring;
      $this->AllowInstallment = $AllowInstallment;
      $this->Currencies = $Currencies;
      $this->VailableNetworkReseau = $VailableNetworkReseau;
    }

    /**
     * @return string
     */
    public function getResponseCode()
    {
      return $this->responseCode;
    }

    /**
     * @param string $responseCode
     * @return OutletConfigResponse
     */
    public function setResponseCode($responseCode)
    {
      $this->responseCode = $responseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonCode()
    {
      return $this->reasonCode;
    }

    /**
     * @param string $reasonCode
     * @return OutletConfigResponse
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
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
     * @return OutletConfigResponse
     */
    public function setReasonCodeDesc($ReasonCodeDesc)
    {
      $this->ReasonCodeDesc = $ReasonCodeDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankCode()
    {
      return $this->bankCode;
    }

    /**
     * @param string $bankCode
     * @return OutletConfigResponse
     */
    public function setBankCode($bankCode)
    {
      $this->bankCode = $bankCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowCreditTransaction()
    {
      return $this->AllowCreditTransaction;
    }

    /**
     * @param string $AllowCreditTransaction
     * @return OutletConfigResponse
     */
    public function setAllowCreditTransaction($AllowCreditTransaction)
    {
      $this->AllowCreditTransaction = $AllowCreditTransaction;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowRefund()
    {
      return $this->AllowRefund;
    }

    /**
     * @param string $AllowRefund
     * @return OutletConfigResponse
     */
    public function setAllowRefund($AllowRefund)
    {
      $this->AllowRefund = $AllowRefund;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowExcessAmountOnRefund()
    {
      return $this->AllowExcessAmountOnRefund;
    }

    /**
     * @param string $AllowExcessAmountOnRefund
     * @return OutletConfigResponse
     */
    public function setAllowExcessAmountOnRefund($AllowExcessAmountOnRefund)
    {
      $this->AllowExcessAmountOnRefund = $AllowExcessAmountOnRefund;
      return $this;
    }

    /**
     * @return string
     */
    public function getModeCapture()
    {
      return $this->ModeCapture;
    }

    /**
     * @param string $ModeCapture
     * @return OutletConfigResponse
     */
    public function setModeCapture($ModeCapture)
    {
      $this->ModeCapture = $ModeCapture;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeCapture()
    {
      return $this->TypeCapture;
    }

    /**
     * @param string $TypeCapture
     * @return OutletConfigResponse
     */
    public function setTypeCapture($TypeCapture)
    {
      $this->TypeCapture = $TypeCapture;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowReversal()
    {
      return $this->AllowReversal;
    }

    /**
     * @param string $AllowReversal
     * @return OutletConfigResponse
     */
    public function setAllowReversal($AllowReversal)
    {
      $this->AllowReversal = $AllowReversal;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowReversalOnCaptured()
    {
      return $this->AllowReversalOnCaptured;
    }

    /**
     * @param string $AllowReversalOnCaptured
     * @return OutletConfigResponse
     */
    public function setAllowReversalOnCaptured($AllowReversalOnCaptured)
    {
      $this->AllowReversalOnCaptured = $AllowReversalOnCaptured;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowRecurring()
    {
      return $this->AllowRecurring;
    }

    /**
     * @param string $AllowRecurring
     * @return OutletConfigResponse
     */
    public function setAllowRecurring($AllowRecurring)
    {
      $this->AllowRecurring = $AllowRecurring;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowInstallment()
    {
      return $this->AllowInstallment;
    }

    /**
     * @param string $AllowInstallment
     * @return OutletConfigResponse
     */
    public function setAllowInstallment($AllowInstallment)
    {
      $this->AllowInstallment = $AllowInstallment;
      return $this;
    }

    /**
     * @return SupportedCurrencies
     */
    public function getCurrencies()
    {
      return $this->Currencies;
    }

    /**
     * @param SupportedCurrencies $Currencies
     * @return OutletConfigResponse
     */
    public function setCurrencies($Currencies)
    {
      $this->Currencies = $Currencies;
      return $this;
    }

    /**
     * @return Reseaux
     */
    public function getVailableNetworkReseau()
    {
      return $this->VailableNetworkReseau;
    }

    /**
     * @param Reseaux $VailableNetworkReseau
     * @return OutletConfigResponse
     */
    public function setVailableNetworkReseau($VailableNetworkReseau)
    {
      $this->VailableNetworkReseau = $VailableNetworkReseau;
      return $this;
    }

}
