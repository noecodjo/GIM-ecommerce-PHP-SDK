<?php

class AuthHeader extends webServiceBean
{

    /**
     * @var string $WsLogin
     */
    protected $WsLogin = null;

    /**
     * @var string $WsPassword
     */
    protected $WsPassword = null;

    /**
     * @var string $AcceptorPointID
     */
    protected $AcceptorPointID = null;

    /**
     * @var string $BankCode
     */
    protected $BankCode = null;

    /**
     * @param string $WsLogin
     * @param string $WsPassword
     * @param string $AcceptorPointID
     */
    public function __construct($WsLogin, $WsPassword, $AcceptorPointID,$BankCode)
    {
      $this->WsLogin = $WsLogin;
      $this->WsPassword = $WsPassword;
      $this->AcceptorPointID = $AcceptorPointID;
      $this->BankCode = $BankCode;
    }

    /**
     * @return string
     */
    public function getWsLogin()
    {
      return $this->WsLogin;
    }

    /**
     * @param string $WsLogin
     * @return AuthHeader
     */
    public function setWsLogin($WsLogin)
    {
      $this->WsLogin = $WsLogin;
      return $this;
    }

    /**
     * @return string
     */
    public function getWsPassword()
    {
      return $this->WsPassword;
    }

    /**
     * @param string $WsPassword
     * @return AuthHeader
     */
    public function setWsPassword($WsPassword)
    {
      $this->WsPassword = $WsPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcceptorPointID()
    {
      return $this->AcceptorPointID;
    }

    /**
     * @param string $AcceptorPointID
     * @return AuthHeader
     */
    public function setAcceptorPointID($AcceptorPointID)
    {
      $this->AcceptorPointID = $AcceptorPointID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankCode()
    {
      return $this->BankCode;
    }

    /**
     * @param string $BankCode
     * @return AuthHeader
     */
    public function setBankCode($BankCode)
    {
      $this->BankCode = $BankCode;
      return $this;
    }

}
