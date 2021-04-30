<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrderItem ArrayType
 * @subpackage Arrays
 */
class ArrayOfOrderItem extends WebServiceBean
{
    /**
     * The OrderItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\OrderItem[]
     */
    public $OrderItem;
    /**
     * Constructor method for ArrayOfOrderItem
     * @uses ArrayOfOrderItem::setOrderItem()
     * @param \StructType\OrderItem[] $orderItem
     */
    public function __construct(array $orderItem = array())
    {
        $this
            ->setOrderItem($orderItem);
    }
    /**
     * Get OrderItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\OrderItem[]|null
     */
    public function getOrderItem()
    {
        return isset($this->OrderItem) ? $this->OrderItem : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderItemForArrayConstraintsFromSetOrderItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrderItemOrderItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderItemOrderItemItem instanceof \StructType\OrderItem) {
                $invalidValues[] = is_object($arrayOfOrderItemOrderItemItem) ? get_class($arrayOfOrderItemOrderItemItem) : sprintf('%s(%s)', gettype($arrayOfOrderItemOrderItemItem), var_export($arrayOfOrderItemOrderItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderItem property can only contain items of type \StructType\OrderItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrderItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\OrderItem[] $orderItem
     * @return \ArrayType\ArrayOfOrderItem
     */
    public function setOrderItem(array $orderItem = array())
    {
        // validation for constraint: array
        if ('' !== ($orderItemArrayErrorMessage = self::validateOrderItemForArrayConstraintsFromSetOrderItem($orderItem))) {
            throw new \InvalidArgumentException($orderItemArrayErrorMessage, __LINE__);
        }
        if (is_null($orderItem) || (is_array($orderItem) && empty($orderItem))) {
            unset($this->OrderItem);
        } else {
            $this->OrderItem = $orderItem;
        }
        return $this;
    }
    /**
     * Add item to OrderItem value
     * @throws \InvalidArgumentException
     * @param \StructType\OrderItem $item
     * @return \ArrayType\ArrayOfOrderItem
     */
    public function addToOrderItem(\StructType\OrderItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OrderItem) {
            throw new \InvalidArgumentException(sprintf('The OrderItem property can only contain items of type \StructType\OrderItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrderItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\OrderItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\OrderItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\OrderItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\OrderItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\OrderItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderItem
     */
    public function getAttributeName()
    {
        return 'OrderItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfOrderItem
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
