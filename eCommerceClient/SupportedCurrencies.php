<?php

class SupportedCurrencies extends webServiceBean
{

    /**
     * @var SupportedCurrency[] $SupportedCurrency
     */
    protected $SupportedCurrency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SupportedCurrency[]
     */
    public function getSupportedCurrency()
    {
      return $this->SupportedCurrency;
    }

    /**
     * @param SupportedCurrency[] $SupportedCurrency
     * @return SupportedCurrencies
     */
    public function setSupportedCurrency(array $SupportedCurrency = null)
    {
      $this->SupportedCurrency = $SupportedCurrency;
      return $this;
    }

}
