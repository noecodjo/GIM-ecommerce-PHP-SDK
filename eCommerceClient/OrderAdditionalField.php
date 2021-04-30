<?php

class OrderAdditionalField extends webServiceBean
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param string $Description
     * @param string $Value
     */
    public function __construct($Description, $Value)
    {
      $this->Description = $Description;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return OrderAdditionalField
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return OrderAdditionalField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
