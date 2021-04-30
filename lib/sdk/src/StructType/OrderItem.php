<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderItem StructType
 * @subpackage Structs
 */
class OrderItem extends WebServiceBean
{
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The ProductCode
     * @var string
     */
    public $ProductCode;
    /**
     * The CommodityCode
     * @var string
     */
    public $CommodityCode;
    /**
     * The Quantity
     * @var string
     */
    public $Quantity;
    /**
     * The UnitPrice
     * @var string
     */
    public $UnitPrice;
    /**
     * The TotalPrice
     * @var string
     */
    public $TotalPrice;
    /**
     * The UnitOfMesure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnitOfMesure;
    /**
     * The TaxAmount
     * @var string
     */
    public $TaxAmount;
    /**
     * The DiscountAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DiscountAmount;
    /**
     * The VatIncluded
     * @var string
     */
    public $VatIncluded;
    /**
     * Constructor method for OrderItem
     * @uses OrderItem::setDescription()
     * @uses OrderItem::setProductCode()
     * @uses OrderItem::setCommodityCode()
     * @uses OrderItem::setQuantity()
     * @uses OrderItem::setUnitPrice()
     * @uses OrderItem::setTotalPrice()
     * @uses OrderItem::setUnitOfMesure()
     * @uses OrderItem::setTaxAmount()
     * @uses OrderItem::setDiscountAmount()
     * @uses OrderItem::setVatIncluded()
     * @param string $description
     * @param string $productCode
     * @param string $commodityCode
     * @param string $quantity
     * @param string $unitPrice
     * @param string $totalPrice
     * @param string $unitOfMesure
     * @param string $taxAmount
     * @param string $discountAmount
     * @param string $vatIncluded
     */
    public function __construct($description = null, $productCode = null, $commodityCode = null, $quantity = null, $unitPrice = null, $totalPrice = null, $unitOfMesure = null, $taxAmount = null, $discountAmount = null, $vatIncluded = null)
    {
        $this
            ->setDescription($description)
            ->setProductCode($productCode)
            ->setCommodityCode($commodityCode)
            ->setQuantity($quantity)
            ->setUnitPrice($unitPrice)
            ->setTotalPrice($totalPrice)
            ->setUnitOfMesure($unitOfMesure)
            ->setTaxAmount($taxAmount)
            ->setDiscountAmount($discountAmount)
            ->setVatIncluded($vatIncluded);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\OrderItem
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ProductCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }
    /**
     * Set ProductCode value
     * @param string $productCode
     * @return \StructType\OrderItem
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->ProductCode = $productCode;
        return $this;
    }
    /**
     * Get CommodityCode value
     * @return string|null
     */
    public function getCommodityCode()
    {
        return $this->CommodityCode;
    }
    /**
     * Set CommodityCode value
     * @param string $commodityCode
     * @return \StructType\OrderItem
     */
    public function setCommodityCode($commodityCode = null)
    {
        // validation for constraint: string
        if (!is_null($commodityCode) && !is_string($commodityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commodityCode, true), gettype($commodityCode)), __LINE__);
        }
        $this->CommodityCode = $commodityCode;
        return $this;
    }
    /**
     * Get Quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param string $quantity
     * @return \StructType\OrderItem
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get UnitPrice value
     * @return string|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param string $unitPrice
     * @return \StructType\OrderItem
     */
    public function setUnitPrice($unitPrice = null)
    {
        // validation for constraint: string
        if (!is_null($unitPrice) && !is_string($unitPrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitPrice, true), gettype($unitPrice)), __LINE__);
        }
        $this->UnitPrice = $unitPrice;
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \StructType\OrderItem
     */
    public function setTotalPrice($totalPrice = null)
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->TotalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get UnitOfMesure value
     * @return string|null
     */
    public function getUnitOfMesure()
    {
        return $this->UnitOfMesure;
    }
    /**
     * Set UnitOfMesure value
     * @param string $unitOfMesure
     * @return \StructType\OrderItem
     */
    public function setUnitOfMesure($unitOfMesure = null)
    {
        // validation for constraint: string
        if (!is_null($unitOfMesure) && !is_string($unitOfMesure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitOfMesure, true), gettype($unitOfMesure)), __LINE__);
        }
        $this->UnitOfMesure = $unitOfMesure;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return string|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param string $taxAmount
     * @return \StructType\OrderItem
     */
    public function setTaxAmount($taxAmount = null)
    {
        // validation for constraint: string
        if (!is_null($taxAmount) && !is_string($taxAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxAmount, true), gettype($taxAmount)), __LINE__);
        }
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get DiscountAmount value
     * @return string|null
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }
    /**
     * Set DiscountAmount value
     * @param string $discountAmount
     * @return \StructType\OrderItem
     */
    public function setDiscountAmount($discountAmount = null)
    {
        // validation for constraint: string
        if (!is_null($discountAmount) && !is_string($discountAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountAmount, true), gettype($discountAmount)), __LINE__);
        }
        $this->DiscountAmount = $discountAmount;
        return $this;
    }
    /**
     * Get VatIncluded value
     * @return string|null
     */
    public function getVatIncluded()
    {
        return $this->VatIncluded;
    }
    /**
     * Set VatIncluded value
     * @param string $vatIncluded
     * @return \StructType\OrderItem
     */
    public function setVatIncluded($vatIncluded = null)
    {
        // validation for constraint: string
        if (!is_null($vatIncluded) && !is_string($vatIncluded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatIncluded, true), gettype($vatIncluded)), __LINE__);
        }
        $this->VatIncluded = $vatIncluded;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OrderItem
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
