<?php

class ArrayOfOrderAdditionalField extends webServiceBean
{

    /**
     * @var OrderAdditionalField[] $OrderAdditionalField
     */
    protected $OrderAdditionalField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderAdditionalField[]
     */
    public function getOrderAdditionalField()
    {
      return $this->OrderAdditionalField;
    }

    /**
     * @param OrderAdditionalField[] $OrderAdditionalField
     * @return ArrayOfOrderAdditionalField
     */
    public function setOrderAdditionalField(array $OrderAdditionalField = null)
    {
      $this->OrderAdditionalField = $OrderAdditionalField;
      return $this;
    }

}
