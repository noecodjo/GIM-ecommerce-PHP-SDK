<?php

class OrderItem extends webServiceBean
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    /**
     * @var string $CommodityCode
     */
    protected $CommodityCode = null;

    /**
     * @var string $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var string $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var string $UnitOfMesure
     */
    protected $UnitOfMesure = null;

    /**
     * @var string $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var string $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var string $VatIncluded
     */
    protected $VatIncluded = null;

    /**
     * @param string $Description
     * @param string $ProductCode
     * @param string $CommodityCode
     * @param string $Quantity
     * @param string $UnitPrice
     * @param string $TotalPrice
     * @param string $TaxAmount
     * @param string $VatIncluded
     */
    public function __construct($Description, $ProductCode, $CommodityCode, $Quantity, $UnitPrice, $TotalPrice, $TaxAmount, $VatIncluded)
    {
      $this->Description = $Description;
      $this->ProductCode = $ProductCode;
      $this->CommodityCode = $CommodityCode;
      $this->Quantity = $Quantity;
      $this->UnitPrice = $UnitPrice;
      $this->TotalPrice = $TotalPrice;
      $this->TaxAmount = $TaxAmount;
      $this->VatIncluded = $VatIncluded;
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
     * @return OrderItem
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return OrderItem
     */
    public function setProductCode($ProductCode)
    {
      $this->ProductCode = $ProductCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommodityCode()
    {
      return $this->CommodityCode;
    }

    /**
     * @param string $CommodityCode
     * @return OrderItem
     */
    public function setCommodityCode($CommodityCode)
    {
      $this->CommodityCode = $CommodityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param string $Quantity
     * @return OrderItem
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param string $UnitPrice
     * @return OrderItem
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param string $TotalPrice
     * @return OrderItem
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMesure()
    {
      return $this->UnitOfMesure;
    }

    /**
     * @param string $UnitOfMesure
     * @return OrderItem
     */
    public function setUnitOfMesure($UnitOfMesure)
    {
      $this->UnitOfMesure = $UnitOfMesure;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param string $TaxAmount
     * @return OrderItem
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param string $DiscountAmount
     * @return OrderItem
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatIncluded()
    {
      return $this->VatIncluded;
    }

    /**
     * @param string $VatIncluded
     * @return OrderItem
     */
    public function setVatIncluded($VatIncluded)
    {
      $this->VatIncluded = $VatIncluded;
      return $this;
    }

}
