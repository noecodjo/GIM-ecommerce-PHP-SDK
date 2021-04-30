<?php

class SupportedCurrency extends webServiceBean
{

    /**
     * @var string $CURRENCY_ISO_CODE
     */
    protected $CURRENCY_ISO_CODE = null;

    /**
     * @var string $CURRENCY_ISO_ALPHA_CODE
     */
    protected $CURRENCY_ISO_ALPHA_CODE = null;

    /**
     * @var string $CURRENCY_EXPONENT
     */
    protected $CURRENCY_EXPONENT = null;

    /**
     * @var string $CURRENCY_SYMBOL
     */
    protected $CURRENCY_SYMBOL = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCURRENCY_ISO_CODE()
    {
      return $this->CURRENCY_ISO_CODE;
    }

    /**
     * @param string $CURRENCY_ISO_CODE
     * @return SupportedCurrency
     */
    public function setCURRENCY_ISO_CODE($CURRENCY_ISO_CODE)
    {
      $this->CURRENCY_ISO_CODE = $CURRENCY_ISO_CODE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCURRENCY_ISO_ALPHA_CODE()
    {
      return $this->CURRENCY_ISO_ALPHA_CODE;
    }

    /**
     * @param string $CURRENCY_ISO_ALPHA_CODE
     * @return SupportedCurrency
     */
    public function setCURRENCY_ISO_ALPHA_CODE($CURRENCY_ISO_ALPHA_CODE)
    {
      $this->CURRENCY_ISO_ALPHA_CODE = $CURRENCY_ISO_ALPHA_CODE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCURRENCY_EXPONENT()
    {
      return $this->CURRENCY_EXPONENT;
    }

    /**
     * @param string $CURRENCY_EXPONENT
     * @return SupportedCurrency
     */
    public function setCURRENCY_EXPONENT($CURRENCY_EXPONENT)
    {
      $this->CURRENCY_EXPONENT = $CURRENCY_EXPONENT;
      return $this;
    }

    /**
     * @return string
     */
    public function getCURRENCY_SYMBOL()
    {
      return $this->CURRENCY_SYMBOL;
    }

    /**
     * @param string $CURRENCY_SYMBOL
     * @return SupportedCurrency
     */
    public function setCURRENCY_SYMBOL($CURRENCY_SYMBOL)
    {
      $this->CURRENCY_SYMBOL = $CURRENCY_SYMBOL;
      return $this;
    }

}
