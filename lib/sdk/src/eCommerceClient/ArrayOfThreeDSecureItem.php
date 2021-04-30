<?php

class ArrayOfThreeDSecureItem extends webServiceBean
{

    /**
     * @var string $EcommerceIndicator
     */
    protected $EcommerceIndicator = null;

    /**
     * @var string $AuthenticationVerificationValue
     */
    protected $AuthenticationVerificationValue = null;

    /**
     * @var string $TransactionXid
     */
    protected $TransactionXid = null;

    /**
     * @param string $EcommerceIndicator
     * @param string $AuthenticationVerificationValue
     */
    public function __construct($EcommerceIndicator, $AuthenticationVerificationValue)
    {
      $this->EcommerceIndicator = $EcommerceIndicator;
      $this->AuthenticationVerificationValue = $AuthenticationVerificationValue;
    }

    /**
     * @return string
     */
    public function getEcommerceIndicator()
    {
      return $this->EcommerceIndicator;
    }

    /**
     * @param string $EcommerceIndicator
     * @return ArrayOfThreeDSecureItem
     */
    public function setEcommerceIndicator($EcommerceIndicator)
    {
      $this->EcommerceIndicator = $EcommerceIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationVerificationValue()
    {
      return $this->AuthenticationVerificationValue;
    }

    /**
     * @param string $AuthenticationVerificationValue
     * @return ArrayOfThreeDSecureItem
     */
    public function setAuthenticationVerificationValue($AuthenticationVerificationValue)
    {
      $this->AuthenticationVerificationValue = $AuthenticationVerificationValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionXid()
    {
      return $this->TransactionXid;
    }

    /**
     * @param string $TransactionXid
     * @return ArrayOfThreeDSecureItem
     */
    public function setTransactionXid($TransactionXid)
    {
      $this->TransactionXid = $TransactionXid;
      return $this;
    }

}
