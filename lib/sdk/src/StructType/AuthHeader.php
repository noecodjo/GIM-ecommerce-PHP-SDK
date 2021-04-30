<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthHeader StructType
 * Meta information extracted from the WSDL
 * - type: tns:AuthHeader
 * @subpackage Structs
 */
class AuthHeader extends WebServiceBean
{
    /**
     * The WsLogin
     * @var string
     */
    public $WsLogin;
    /**
     * The WsPassword
     * @var string
     */
    public $WsPassword;
    /**
     * The AcceptorPointID
     * @var string
     */
    public $AcceptorPointID;
    /**
     * The BankCode
     * @var string
     */
    public $BankCode;
    /**
     * Constructor method for AuthHeader
     * @uses AuthHeader::setWsLogin()
     * @uses AuthHeader::setWsPassword()
     * @uses AuthHeader::setAcceptorPointID()
     * @uses AuthHeader::setBankCode()
     * @param string $wsLogin
     * @param string $wsPassword
     * @param string $acceptorPointID
     * @param string $bankCode
     */
    public function __construct($wsLogin = null, $wsPassword = null, $acceptorPointID = null, $bankCode = null)
    {
        $this
            ->setWsLogin($wsLogin)
            ->setWsPassword($wsPassword)
            ->setAcceptorPointID($acceptorPointID)
            ->setBankCode($bankCode);
    }
    /**
     * Get WsLogin value
     * @return string|null
     */
    public function getWsLogin()
    {
        return $this->WsLogin;
    }
    /**
     * Set WsLogin value
     * @param string $wsLogin
     * @return \StructType\AuthHeader
     */
    public function setWsLogin($wsLogin = null)
    {
        // validation for constraint: string
        if (!is_null($wsLogin) && !is_string($wsLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wsLogin, true), gettype($wsLogin)), __LINE__);
        }
        $this->WsLogin = $wsLogin;
        return $this;
    }
    /**
     * Get WsPassword value
     * @return string|null
     */
    public function getWsPassword()
    {
        return $this->WsPassword;
    }
    /**
     * Set WsPassword value
     * @param string $wsPassword
     * @return \StructType\AuthHeader
     */
    public function setWsPassword($wsPassword = null)
    {
        // validation for constraint: string
        if (!is_null($wsPassword) && !is_string($wsPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wsPassword, true), gettype($wsPassword)), __LINE__);
        }
        $this->WsPassword = $wsPassword;
        return $this;
    }
    /**
     * Get AcceptorPointID value
     * @return string|null
     */
    public function getAcceptorPointID()
    {
        return $this->AcceptorPointID;
    }
    /**
     * Set AcceptorPointID value
     * @param string $acceptorPointID
     * @return \StructType\AuthHeader
     */
    public function setAcceptorPointID($acceptorPointID = null)
    {
        // validation for constraint: string
        if (!is_null($acceptorPointID) && !is_string($acceptorPointID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acceptorPointID, true), gettype($acceptorPointID)), __LINE__);
        }
        $this->AcceptorPointID = $acceptorPointID;
        return $this;
    }
    /**
     * Get BankCode value
     * @return string|null
     */
    public function getBankCode()
    {
        return $this->BankCode;
    }
    /**
     * Set BankCode value
     * @param string $bankCode
     * @return \StructType\AuthHeader
     */
    public function setBankCode($bankCode = null)
    {
        // validation for constraint: string
        if (!is_null($bankCode) && !is_string($bankCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCode, true), gettype($bankCode)), __LINE__);
        }
        $this->BankCode = $bankCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AuthHeader
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
