<?php

class OutletConfigInfo
{

    /**
     * @var string $Data
     */
    protected $Data = null;

    /**
     * @var string $ValueData
     */
    protected $ValueData = null;

    /**
     * @param string $Data
     * @param string $ValueData
     */
    public function __construct($Data, $ValueData)
    {
      $this->Data = $Data;
      $this->ValueData = $ValueData;
    }

    /**
     * @return string
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param string $Data
     * @return OutletConfigInfo
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return string
     */
    public function getValueData()
    {
      return $this->ValueData;
    }

    /**
     * @param string $ValueData
     * @return OutletConfigInfo
     */
    public function setValueData($ValueData)
    {
      $this->ValueData = $ValueData;
      return $this;
    }

}
