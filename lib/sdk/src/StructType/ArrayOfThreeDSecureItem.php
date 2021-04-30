<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfThreeDSecureItem StructType
 * @subpackage Structs
 */
class ArrayOfThreeDSecureItem extends WebServiceBean
{
    /**
     * The EcommerceIndicator
     * @var string
     */
    public $EcommerceIndicator;
    /**
     * The AuthenticationVerificationValue
     * @var string
     */
    public $AuthenticationVerificationValue;
    /**
     * The TransactionXid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TransactionXid;
    /**
     * Constructor method for ArrayOfThreeDSecureItem
     * @uses ArrayOfThreeDSecureItem::setEcommerceIndicator()
     * @uses ArrayOfThreeDSecureItem::setAuthenticationVerificationValue()
     * @uses ArrayOfThreeDSecureItem::setTransactionXid()
     * @param string $ecommerceIndicator
     * @param string $authenticationVerificationValue
     * @param string $transactionXid
     */
    public function __construct($ecommerceIndicator = null, $authenticationVerificationValue = null, $transactionXid = null)
    {
        $this
            ->setEcommerceIndicator($ecommerceIndicator)
            ->setAuthenticationVerificationValue($authenticationVerificationValue)
            ->setTransactionXid($transactionXid);
    }
    /**
     * Get EcommerceIndicator value
     * @return string|null
     */
    public function getEcommerceIndicator()
    {
        return $this->EcommerceIndicator;
    }
    /**
     * Set EcommerceIndicator value
     * @param string $ecommerceIndicator
     * @return \StructType\ArrayOfThreeDSecureItem
     */
    public function setEcommerceIndicator($ecommerceIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($ecommerceIndicator) && !is_string($ecommerceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ecommerceIndicator, true), gettype($ecommerceIndicator)), __LINE__);
        }
        $this->EcommerceIndicator = $ecommerceIndicator;
        return $this;
    }
    /**
     * Get AuthenticationVerificationValue value
     * @return string|null
     */
    public function getAuthenticationVerificationValue()
    {
        return $this->AuthenticationVerificationValue;
    }
    /**
     * Set AuthenticationVerificationValue value
     * @param string $authenticationVerificationValue
     * @return \StructType\ArrayOfThreeDSecureItem
     */
    public function setAuthenticationVerificationValue($authenticationVerificationValue = null)
    {
        // validation for constraint: string
        if (!is_null($authenticationVerificationValue) && !is_string($authenticationVerificationValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticationVerificationValue, true), gettype($authenticationVerificationValue)), __LINE__);
        }
        $this->AuthenticationVerificationValue = $authenticationVerificationValue;
        return $this;
    }
    /**
     * Get TransactionXid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransactionXid()
    {
        return isset($this->TransactionXid) ? $this->TransactionXid : null;
    }
    /**
     * Set TransactionXid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transactionXid
     * @return \StructType\ArrayOfThreeDSecureItem
     */
    public function setTransactionXid($transactionXid = null)
    {
        // validation for constraint: string
        if (!is_null($transactionXid) && !is_string($transactionXid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionXid, true), gettype($transactionXid)), __LINE__);
        }
        if (is_null($transactionXid) || (is_array($transactionXid) && empty($transactionXid))) {
            unset($this->TransactionXid);
        } else {
            $this->TransactionXid = $transactionXid;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ArrayOfThreeDSecureItem
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
