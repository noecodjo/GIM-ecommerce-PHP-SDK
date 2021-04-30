<?php

class ArrayOfOrderItem extends webServiceBean
{

    /**
     * @var OrderItem[] $OrderItem
     */
    protected $OrderItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderItem[]
     */
    public function getOrderItem()
    {
      return $this->OrderItem;
    }

    /**
     * @param OrderItem[] $OrderItem
     * @return ArrayOfOrderItem
     */
    public function setOrderItem(array $OrderItem = null)
    {
      $this->OrderItem = $OrderItem;
      return $this;
    }

}
