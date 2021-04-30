<?php

class TransactionInfo
{

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var string $OrderId
     */
    protected $OrderId = null;

    /**
     * @var string $AuthorType
     */
    protected $AuthorType = null;

    /**
     * @var string $TokenAction
     */
    protected $TokenAction = null;

    /**
     * @var string $TokenValue
     */
    protected $TokenValue = null;

    /**
     * @var string $PurchaseDesc
     */
    protected $PurchaseDesc = null;

    /**
     * @var string $PurchaseAmount
     */
    protected $PurchaseAmount = null;

    /**
     * @var string $FeesAmount
     */
    protected $FeesAmount = null;

    /**
     * @var string $PurchaseCurrency
     */
    protected $PurchaseCurrency = null;

    /**
     * @var string $CaptureFlag
     */
    protected $CaptureFlag = null;

    /**
     * @var string $ShippingFirstName
     */
    protected $ShippingFirstName = null;

    /**
     * @var string $ShippingMiddleName
     */
    protected $ShippingMiddleName = null;

    /**
     * @var string $ShippingLastName
     */
    protected $ShippingLastName = null;

    /**
     * @var string $ShippingAddress1
     */
    protected $ShippingAddress1 = null;

    /**
     * @var string $ShippingAddress2
     */
    protected $ShippingAddress2 = null;

    /**
     * @var string $ShippingCityCode
     */
    protected $ShippingCityCode = null;

    /**
     * @var string $ShippingState
     */
    protected $ShippingState = null;

    /**
     * @var string $ShippingZipcode
     */
    protected $ShippingZipcode = null;

    /**
     * @var string $ShippingCountry
     */
    protected $ShippingCountry = null;

    /**
     * @var string $ShippingEmail
     */
    protected $ShippingEmail = null;

    /**
     * @var string $ShippingPhone
     */
    protected $ShippingPhone = null;

    /**
     * @var string $ShippingFax
     */
    protected $ShippingFax = null;

    /**
     * @var string $ShippingMobilePhone
     */
    protected $ShippingMobilePhone = null;

    /**
     * @var string $ShippingMethod
     */
    protected $ShippingMethod = null;

    /**
     * @var string $BillingFirstName
     */
    protected $BillingFirstName = null;

    /**
     * @var string $BillingMiddleName
     */
    protected $BillingMiddleName = null;

    /**
     * @var string $BillingLastName
     */
    protected $BillingLastName = null;

    /**
     * @var string $BillingAddress1
     */
    protected $BillingAddress1 = null;

    /**
     * @var string $BillingAddress2
     */
    protected $BillingAddress2 = null;

    /**
     * @var string $BillingCity
     */
    protected $BillingCity = null;

    /**
     * @var string $BillingState
     */
    protected $BillingState = null;

    /**
     * @var string $BillingZipcode
     */
    protected $BillingZipcode = null;

    /**
     * @var string $BillingCountry
     */
    protected $BillingCountry = null;

    /**
     * @var string $BillingEmail
     */
    protected $BillingEmail = null;

    /**
     * @var string $BillingPhone
     */
    protected $BillingPhone = null;

    /**
     * @var string $BillingFax
     */
    protected $BillingFax = null;

    /**
     * @var string $BillingMobilePhone
     */
    protected $BillingMobilePhone = null;

    /**
     * @var string $SignatureMethod
     */
    protected $SignatureMethod = null;

    /**
     * @var string $Signature
     */
    protected $Signature = null;

    /**
     * @var string $ScheduledPayment
     */
    protected $ScheduledPayment = null;

    /**
     * @var string $ScheduledTermCaptureFlag
     */
    protected $ScheduledTermCaptureFlag = null;

    /**
     * @var string $NbOfInstallment
     */
    protected $NbOfInstallment = null;

    /**
     * @var string $InstallmentFrequency
     */
    protected $InstallmentFrequency = null;

    /**
     * @var string $InstallmentNextDate
     */
    protected $InstallmentNextDate = null;

    /**
     * @var string $NbOfRecurring
     */
    protected $NbOfRecurring = null;

    /**
     * @var string $RecurringFrequency
     */
    protected $RecurringFrequency = null;

    /**
     * @var string $RecurringAmount
     */
    protected $RecurringAmount = null;

    /**
     * @var string $RecurringFeesAmount
     */
    protected $RecurringFeesAmount = null;

    /**
     * @var string $RecurringStartDate
     */
    protected $RecurringStartDate = null;

    /**
     * @var string $ExecutionDate
     */
    protected $ExecutionDate = null;

    /**
     * @var string $ProcessorAcquirerId
     */
    protected $ProcessorAcquirerId = null;

    /**
     * @var string $OriginOutletUrl
     */
    protected $OriginOutletUrl = null;

    /**
     * @var string $TestFlag
     */
    protected $TestFlag = null;

    /**
     * @var string $AcronymDescriptor
     */
    protected $AcronymDescriptor = null;

    /**
     * @var string $OrderDetailPresent
     */
    protected $OrderDetailPresent = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $ItemsPresent
     */
    protected $ItemsPresent = null;

    /**
     * @var string $NbOfItems
     */
    protected $NbOfItems = null;

    /**
     * @var ArrayOfOrderItem $OrderItems
     */
    protected $OrderItems = null;

    /**
     * @var string $ShippingCost
     */
    protected $ShippingCost = null;

    /**
     * @var string $VatIncluded
     */
    protected $VatIncluded = null;

    /**
     * @var string $VatCost
     */
    protected $VatCost = null;

    /**
     * @var string $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $AdditionalDetailsPresents
     */
    protected $AdditionalDetailsPresents = null;

    /**
     * @var string $NbOfFields
     */
    protected $NbOfFields = null;

    /**
     * @var ArrayOfOrderAdditionalField $AdditionalFields
     */
    protected $AdditionalFields = null;

    /**
     * @var string $WebsiteURL
     */
    protected $WebsiteURL = null;

    /**
     * @var string $ForwardSupported
     */
    protected $ForwardSupported = null;

    /**
     * @var string $AcceptHeader
     */
    protected $AcceptHeader = null;

    /**
     * @var string $UserAgent
     */
    protected $UserAgent = null;

    /**
     * @var string $MerchantResponseURL
     */
    protected $MerchantResponseURL = null;

    /**
     * @var string $UpdateIndicator
     */
    protected $UpdateIndicator = null;

    /**
     * @var string $PassengerName
     */
    protected $PassengerName = null;

    /**
     * @var string $CustomerCode
     */
    protected $CustomerCode = null;

    /**
     * @var string $IssueDate
     */
    protected $IssueDate = null;

    /**
     * @var string $TravelAgencyCode
     */
    protected $TravelAgencyCode = null;

    /**
     * @var string $TravelAgencyName
     */
    protected $TravelAgencyName = null;

    /**
     * @var string $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var string $IssuingCarrier
     */
    protected $IssuingCarrier = null;

    /**
     * @var string $TotalFare
     */
    protected $TotalFare = null;

    /**
     * @var string $TotalTax
     */
    protected $TotalTax = null;

    /**
     * @var string $NationalTax
     */
    protected $NationalTax = null;

    /**
     * @var string $MerchantData
     */
    protected $MerchantData = null;

    /**
     * @param string $Version
     * @param string $OrderId
     * @param string $AuthorType
     * @param string $TokenAction
     * @param string $TokenValue
     * @param string $PurchaseDesc
     * @param string $PurchaseAmount
     * @param string $FeesAmount
     * @param string $PurchaseCurrency
     * @param string $CaptureFlag
     * @param string $ShippingFirstName
     * @param string $ShippingMiddleName
     * @param string $ShippingLastName
     * @param string $ShippingAddress1
     * @param string $ShippingAddress2
     * @param string $ShippingCityCode
     * @param string $ShippingState
     * @param string $ShippingZipcode
     * @param string $ShippingCountry
     * @param string $ShippingEmail
     * @param string $ShippingPhone
     * @param string $ShippingFax
     * @param string $ShippingMobilePhone
     * @param string $ShippingMethod
     * @param string $BillingFirstName
     * @param string $BillingMiddleName
     * @param string $BillingLastName
     * @param string $BillingAddress1
     * @param string $BillingAddress2
     * @param string $BillingCity
     * @param string $BillingState
     * @param string $BillingZipcode
     * @param string $BillingCountry
     * @param string $BillingEmail
     * @param string $BillingPhone
     * @param string $BillingFax
     * @param string $BillingMobilePhone
     * @param string $SignatureMethod
     * @param string $Signature
     * @param string $ScheduledPayment
     * @param string $ScheduledTermCaptureFlag
     * @param string $NbOfInstallment
     * @param string $InstallmentFrequency
     * @param string $InstallmentNextDate
     * @param string $NbOfRecurring
     * @param string $RecurringFrequency
     * @param string $RecurringAmount
     * @param string $RecurringFeesAmount
     * @param string $RecurringStartDate
     * @param string $ExecutionDate
     * @param string $ProcessorAcquirerId
     * @param string $OriginOutletUrl
     * @param string $TestFlag
     * @param string $AcronymDescriptor
     * @param string $OrderDetailPresent
     * @param string $CustomerId
     * @param string $ItemsPresent
     * @param string $NbOfItems
     * @param ArrayOfOrderItem $OrderItems
     * @param string $ShippingCost
     * @param string $VatIncluded
     * @param string $VatCost
     * @param string $DeliveryDate
     * @param string $AdditionalDetailsPresents
     * @param string $NbOfFields
     * @param ArrayOfOrderAdditionalField $AdditionalFields
     * @param string $WebsiteURL
     * @param string $ForwardSupported
     * @param string $AcceptHeader
     * @param string $UserAgent
     * @param string $MerchantResponseURL
     * @param string $UpdateIndicator
     * @param string $PassengerName
     * @param string $CustomerCode
     * @param string $IssueDate
     * @param string $TravelAgencyCode
     * @param string $TravelAgencyName
     * @param string $TicketNumber
     * @param string $IssuingCarrier
     * @param string $TotalFare
     * @param string $TotalTax
     * @param string $NationalTax
     * @param string $MerchantData
     */
    public function __construct($Version, $OrderId, $AuthorType, $TokenAction, $TokenValue, $PurchaseDesc, $PurchaseAmount, $FeesAmount, $PurchaseCurrency, $CaptureFlag, $ShippingFirstName, $ShippingMiddleName, $ShippingLastName, $ShippingAddress1, $ShippingAddress2, $ShippingCityCode, $ShippingState, $ShippingZipcode, $ShippingCountry, $ShippingEmail, $ShippingPhone, $ShippingFax, $ShippingMobilePhone, $ShippingMethod, $BillingFirstName, $BillingMiddleName, $BillingLastName, $BillingAddress1, $BillingAddress2, $BillingCity, $BillingState, $BillingZipcode, $BillingCountry, $BillingEmail, $BillingPhone, $BillingFax, $BillingMobilePhone, $SignatureMethod, $Signature, $ScheduledPayment, $ScheduledTermCaptureFlag, $NbOfInstallment, $InstallmentFrequency, $InstallmentNextDate, $NbOfRecurring, $RecurringFrequency, $RecurringAmount, $RecurringFeesAmount, $RecurringStartDate, $ExecutionDate, $ProcessorAcquirerId, $OriginOutletUrl, $TestFlag, $AcronymDescriptor, $OrderDetailPresent, $CustomerId, $ItemsPresent, $NbOfItems, $OrderItems, $ShippingCost, $VatIncluded, $VatCost, $DeliveryDate, $AdditionalDetailsPresents, $NbOfFields, $AdditionalFields, $WebsiteURL, $ForwardSupported, $AcceptHeader, $UserAgent, $MerchantResponseURL, $UpdateIndicator, $PassengerName, $CustomerCode, $IssueDate, $TravelAgencyCode, $TravelAgencyName, $TicketNumber, $IssuingCarrier, $TotalFare, $TotalTax, $NationalTax, $MerchantData)
    {
      $this->Version = $Version;
      $this->OrderId = $OrderId;
      $this->AuthorType = $AuthorType;
      $this->TokenAction = $TokenAction;
      $this->TokenValue = $TokenValue;
      $this->PurchaseDesc = $PurchaseDesc;
      $this->PurchaseAmount = $PurchaseAmount;
      $this->FeesAmount = $FeesAmount;
      $this->PurchaseCurrency = $PurchaseCurrency;
      $this->CaptureFlag = $CaptureFlag;
      $this->ShippingFirstName = $ShippingFirstName;
      $this->ShippingMiddleName = $ShippingMiddleName;
      $this->ShippingLastName = $ShippingLastName;
      $this->ShippingAddress1 = $ShippingAddress1;
      $this->ShippingAddress2 = $ShippingAddress2;
      $this->ShippingCityCode = $ShippingCityCode;
      $this->ShippingState = $ShippingState;
      $this->ShippingZipcode = $ShippingZipcode;
      $this->ShippingCountry = $ShippingCountry;
      $this->ShippingEmail = $ShippingEmail;
      $this->ShippingPhone = $ShippingPhone;
      $this->ShippingFax = $ShippingFax;
      $this->ShippingMobilePhone = $ShippingMobilePhone;
      $this->ShippingMethod = $ShippingMethod;
      $this->BillingFirstName = $BillingFirstName;
      $this->BillingMiddleName = $BillingMiddleName;
      $this->BillingLastName = $BillingLastName;
      $this->BillingAddress1 = $BillingAddress1;
      $this->BillingAddress2 = $BillingAddress2;
      $this->BillingCity = $BillingCity;
      $this->BillingState = $BillingState;
      $this->BillingZipcode = $BillingZipcode;
      $this->BillingCountry = $BillingCountry;
      $this->BillingEmail = $BillingEmail;
      $this->BillingPhone = $BillingPhone;
      $this->BillingFax = $BillingFax;
      $this->BillingMobilePhone = $BillingMobilePhone;
      $this->SignatureMethod = $SignatureMethod;
      $this->Signature = $Signature;
      $this->ScheduledPayment = $ScheduledPayment;
      $this->ScheduledTermCaptureFlag = $ScheduledTermCaptureFlag;
      $this->NbOfInstallment = $NbOfInstallment;
      $this->InstallmentFrequency = $InstallmentFrequency;
      $this->InstallmentNextDate = $InstallmentNextDate;
      $this->NbOfRecurring = $NbOfRecurring;
      $this->RecurringFrequency = $RecurringFrequency;
      $this->RecurringAmount = $RecurringAmount;
      $this->RecurringFeesAmount = $RecurringFeesAmount;
      $this->RecurringStartDate = $RecurringStartDate;
      $this->ExecutionDate = $ExecutionDate;
      $this->ProcessorAcquirerId = $ProcessorAcquirerId;
      $this->OriginOutletUrl = $OriginOutletUrl;
      $this->TestFlag = $TestFlag;
      $this->AcronymDescriptor = $AcronymDescriptor;
      $this->OrderDetailPresent = $OrderDetailPresent;
      $this->CustomerId = $CustomerId;
      $this->ItemsPresent = $ItemsPresent;
      $this->NbOfItems = $NbOfItems;
      $this->OrderItems = $OrderItems;
      $this->ShippingCost = $ShippingCost;
      $this->VatIncluded = $VatIncluded;
      $this->VatCost = $VatCost;
      $this->DeliveryDate = $DeliveryDate;
      $this->AdditionalDetailsPresents = $AdditionalDetailsPresents;
      $this->NbOfFields = $NbOfFields;
      $this->AdditionalFields = $AdditionalFields;
      $this->WebsiteURL = $WebsiteURL;
      $this->ForwardSupported = $ForwardSupported;
      $this->AcceptHeader = $AcceptHeader;
      $this->UserAgent = $UserAgent;
      $this->MerchantResponseURL = $MerchantResponseURL;
      $this->UpdateIndicator = $UpdateIndicator;
      $this->PassengerName = $PassengerName;
      $this->CustomerCode = $CustomerCode;
      $this->IssueDate = $IssueDate;
      $this->TravelAgencyCode = $TravelAgencyCode;
      $this->TravelAgencyName = $TravelAgencyName;
      $this->TicketNumber = $TicketNumber;
      $this->IssuingCarrier = $IssuingCarrier;
      $this->TotalFare = $TotalFare;
      $this->TotalTax = $TotalTax;
      $this->NationalTax = $NationalTax;
      $this->MerchantData = $MerchantData;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return TransactionInfo
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param string $OrderId
     * @return TransactionInfo
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorType()
    {
      return $this->AuthorType;
    }

    /**
     * @param string $AuthorType
     * @return TransactionInfo
     */
    public function setAuthorType($AuthorType)
    {
      $this->AuthorType = $AuthorType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTokenAction()
    {
      return $this->TokenAction;
    }

    /**
     * @param string $TokenAction
     * @return TransactionInfo
     */
    public function setTokenAction($TokenAction)
    {
      $this->TokenAction = $TokenAction;
      return $this;
    }

    /**
     * @return string
     */
    public function getTokenValue()
    {
      return $this->TokenValue;
    }

    /**
     * @param string $TokenValue
     * @return TransactionInfo
     */
    public function setTokenValue($TokenValue)
    {
      $this->TokenValue = $TokenValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseDesc()
    {
      return $this->PurchaseDesc;
    }

    /**
     * @param string $PurchaseDesc
     * @return TransactionInfo
     */
    public function setPurchaseDesc($PurchaseDesc)
    {
      $this->PurchaseDesc = $PurchaseDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseAmount()
    {
      return $this->PurchaseAmount;
    }

    /**
     * @param string $PurchaseAmount
     * @return TransactionInfo
     */
    public function setPurchaseAmount($PurchaseAmount)
    {
      $this->PurchaseAmount = $PurchaseAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeesAmount()
    {
      return $this->FeesAmount;
    }

    /**
     * @param string $FeesAmount
     * @return TransactionInfo
     */
    public function setFeesAmount($FeesAmount)
    {
      $this->FeesAmount = $FeesAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseCurrency()
    {
      return $this->PurchaseCurrency;
    }

    /**
     * @param string $PurchaseCurrency
     * @return TransactionInfo
     */
    public function setPurchaseCurrency($PurchaseCurrency)
    {
      $this->PurchaseCurrency = $PurchaseCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaptureFlag()
    {
      return $this->CaptureFlag;
    }

    /**
     * @param string $CaptureFlag
     * @return TransactionInfo
     */
    public function setCaptureFlag($CaptureFlag)
    {
      $this->CaptureFlag = $CaptureFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingFirstName()
    {
      return $this->ShippingFirstName;
    }

    /**
     * @param string $ShippingFirstName
     * @return TransactionInfo
     */
    public function setShippingFirstName($ShippingFirstName)
    {
      $this->ShippingFirstName = $ShippingFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingMiddleName()
    {
      return $this->ShippingMiddleName;
    }

    /**
     * @param string $ShippingMiddleName
     * @return TransactionInfo
     */
    public function setShippingMiddleName($ShippingMiddleName)
    {
      $this->ShippingMiddleName = $ShippingMiddleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingLastName()
    {
      return $this->ShippingLastName;
    }

    /**
     * @param string $ShippingLastName
     * @return TransactionInfo
     */
    public function setShippingLastName($ShippingLastName)
    {
      $this->ShippingLastName = $ShippingLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingAddress1()
    {
      return $this->ShippingAddress1;
    }

    /**
     * @param string $ShippingAddress1
     * @return TransactionInfo
     */
    public function setShippingAddress1($ShippingAddress1)
    {
      $this->ShippingAddress1 = $ShippingAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingAddress2()
    {
      return $this->ShippingAddress2;
    }

    /**
     * @param string $ShippingAddress2
     * @return TransactionInfo
     */
    public function setShippingAddress2($ShippingAddress2)
    {
      $this->ShippingAddress2 = $ShippingAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCityCode()
    {
      return $this->ShippingCityCode;
    }

    /**
     * @param string $ShippingCityCode
     * @return TransactionInfo
     */
    public function setShippingCityCode($ShippingCityCode)
    {
      $this->ShippingCityCode = $ShippingCityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingState()
    {
      return $this->ShippingState;
    }

    /**
     * @param string $ShippingState
     * @return TransactionInfo
     */
    public function setShippingState($ShippingState)
    {
      $this->ShippingState = $ShippingState;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingZipcode()
    {
      return $this->ShippingZipcode;
    }

    /**
     * @param string $ShippingZipcode
     * @return TransactionInfo
     */
    public function setShippingZipcode($ShippingZipcode)
    {
      $this->ShippingZipcode = $ShippingZipcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCountry()
    {
      return $this->ShippingCountry;
    }

    /**
     * @param string $ShippingCountry
     * @return TransactionInfo
     */
    public function setShippingCountry($ShippingCountry)
    {
      $this->ShippingCountry = $ShippingCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingEmail()
    {
      return $this->ShippingEmail;
    }

    /**
     * @param string $ShippingEmail
     * @return TransactionInfo
     */
    public function setShippingEmail($ShippingEmail)
    {
      $this->ShippingEmail = $ShippingEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingPhone()
    {
      return $this->ShippingPhone;
    }

    /**
     * @param string $ShippingPhone
     * @return TransactionInfo
     */
    public function setShippingPhone($ShippingPhone)
    {
      $this->ShippingPhone = $ShippingPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingFax()
    {
      return $this->ShippingFax;
    }

    /**
     * @param string $ShippingFax
     * @return TransactionInfo
     */
    public function setShippingFax($ShippingFax)
    {
      $this->ShippingFax = $ShippingFax;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingMobilePhone()
    {
      return $this->ShippingMobilePhone;
    }

    /**
     * @param string $ShippingMobilePhone
     * @return TransactionInfo
     */
    public function setShippingMobilePhone($ShippingMobilePhone)
    {
      $this->ShippingMobilePhone = $ShippingMobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingMethod()
    {
      return $this->ShippingMethod;
    }

    /**
     * @param string $ShippingMethod
     * @return TransactionInfo
     */
    public function setShippingMethod($ShippingMethod)
    {
      $this->ShippingMethod = $ShippingMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingFirstName()
    {
      return $this->BillingFirstName;
    }

    /**
     * @param string $BillingFirstName
     * @return TransactionInfo
     */
    public function setBillingFirstName($BillingFirstName)
    {
      $this->BillingFirstName = $BillingFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingMiddleName()
    {
      return $this->BillingMiddleName;
    }

    /**
     * @param string $BillingMiddleName
     * @return TransactionInfo
     */
    public function setBillingMiddleName($BillingMiddleName)
    {
      $this->BillingMiddleName = $BillingMiddleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingLastName()
    {
      return $this->BillingLastName;
    }

    /**
     * @param string $BillingLastName
     * @return TransactionInfo
     */
    public function setBillingLastName($BillingLastName)
    {
      $this->BillingLastName = $BillingLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingAddress1()
    {
      return $this->BillingAddress1;
    }

    /**
     * @param string $BillingAddress1
     * @return TransactionInfo
     */
    public function setBillingAddress1($BillingAddress1)
    {
      $this->BillingAddress1 = $BillingAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingAddress2()
    {
      return $this->BillingAddress2;
    }

    /**
     * @param string $BillingAddress2
     * @return TransactionInfo
     */
    public function setBillingAddress2($BillingAddress2)
    {
      $this->BillingAddress2 = $BillingAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCity()
    {
      return $this->BillingCity;
    }

    /**
     * @param string $BillingCity
     * @return TransactionInfo
     */
    public function setBillingCity($BillingCity)
    {
      $this->BillingCity = $BillingCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingState()
    {
      return $this->BillingState;
    }

    /**
     * @param string $BillingState
     * @return TransactionInfo
     */
    public function setBillingState($BillingState)
    {
      $this->BillingState = $BillingState;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingZipcode()
    {
      return $this->BillingZipcode;
    }

    /**
     * @param string $BillingZipcode
     * @return TransactionInfo
     */
    public function setBillingZipcode($BillingZipcode)
    {
      $this->BillingZipcode = $BillingZipcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCountry()
    {
      return $this->BillingCountry;
    }

    /**
     * @param string $BillingCountry
     * @return TransactionInfo
     */
    public function setBillingCountry($BillingCountry)
    {
      $this->BillingCountry = $BillingCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingEmail()
    {
      return $this->BillingEmail;
    }

    /**
     * @param string $BillingEmail
     * @return TransactionInfo
     */
    public function setBillingEmail($BillingEmail)
    {
      $this->BillingEmail = $BillingEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingPhone()
    {
      return $this->BillingPhone;
    }

    /**
     * @param string $BillingPhone
     * @return TransactionInfo
     */
    public function setBillingPhone($BillingPhone)
    {
      $this->BillingPhone = $BillingPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingFax()
    {
      return $this->BillingFax;
    }

    /**
     * @param string $BillingFax
     * @return TransactionInfo
     */
    public function setBillingFax($BillingFax)
    {
      $this->BillingFax = $BillingFax;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingMobilePhone()
    {
      return $this->BillingMobilePhone;
    }

    /**
     * @param string $BillingMobilePhone
     * @return TransactionInfo
     */
    public function setBillingMobilePhone($BillingMobilePhone)
    {
      $this->BillingMobilePhone = $BillingMobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignatureMethod()
    {
      return $this->SignatureMethod;
    }

    /**
     * @param string $SignatureMethod
     * @return TransactionInfo
     */
    public function setSignatureMethod($SignatureMethod)
    {
      $this->SignatureMethod = $SignatureMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
      return $this->Signature;
    }

    /**
     * @param string $Signature
     * @return TransactionInfo
     */
    public function setSignature($Signature)
    {
      $this->Signature = $Signature;
      return $this;
    }

    /**
     * @return string
     */
    public function getScheduledPayment()
    {
      return $this->ScheduledPayment;
    }

    /**
     * @param string $ScheduledPayment
     * @return TransactionInfo
     */
    public function setScheduledPayment($ScheduledPayment)
    {
      $this->ScheduledPayment = $ScheduledPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getScheduledTermCaptureFlag()
    {
      return $this->ScheduledTermCaptureFlag;
    }

    /**
     * @param string $ScheduledTermCaptureFlag
     * @return TransactionInfo
     */
    public function setScheduledTermCaptureFlag($ScheduledTermCaptureFlag)
    {
      $this->ScheduledTermCaptureFlag = $ScheduledTermCaptureFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getNbOfInstallment()
    {
      return $this->NbOfInstallment;
    }

    /**
     * @param string $NbOfInstallment
     * @return TransactionInfo
     */
    public function setNbOfInstallment($NbOfInstallment)
    {
      $this->NbOfInstallment = $NbOfInstallment;
      return $this;
    }

    /**
     * @return string
     */
    public function getInstallmentFrequency()
    {
      return $this->InstallmentFrequency;
    }

    /**
     * @param string $InstallmentFrequency
     * @return TransactionInfo
     */
    public function setInstallmentFrequency($InstallmentFrequency)
    {
      $this->InstallmentFrequency = $InstallmentFrequency;
      return $this;
    }

    /**
     * @return string
     */
    public function getInstallmentNextDate()
    {
      return $this->InstallmentNextDate;
    }

    /**
     * @param string $InstallmentNextDate
     * @return TransactionInfo
     */
    public function setInstallmentNextDate($InstallmentNextDate)
    {
      $this->InstallmentNextDate = $InstallmentNextDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getNbOfRecurring()
    {
      return $this->NbOfRecurring;
    }

    /**
     * @param string $NbOfRecurring
     * @return TransactionInfo
     */
    public function setNbOfRecurring($NbOfRecurring)
    {
      $this->NbOfRecurring = $NbOfRecurring;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecurringFrequency()
    {
      return $this->RecurringFrequency;
    }

    /**
     * @param string $RecurringFrequency
     * @return TransactionInfo
     */
    public function setRecurringFrequency($RecurringFrequency)
    {
      $this->RecurringFrequency = $RecurringFrequency;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecurringAmount()
    {
      return $this->RecurringAmount;
    }

    /**
     * @param string $RecurringAmount
     * @return TransactionInfo
     */
    public function setRecurringAmount($RecurringAmount)
    {
      $this->RecurringAmount = $RecurringAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecurringFeesAmount()
    {
      return $this->RecurringFeesAmount;
    }

    /**
     * @param string $RecurringFeesAmount
     * @return TransactionInfo
     */
    public function setRecurringFeesAmount($RecurringFeesAmount)
    {
      $this->RecurringFeesAmount = $RecurringFeesAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecurringStartDate()
    {
      return $this->RecurringStartDate;
    }

    /**
     * @param string $RecurringStartDate
     * @return TransactionInfo
     */
    public function setRecurringStartDate($RecurringStartDate)
    {
      $this->RecurringStartDate = $RecurringStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getExecutionDate()
    {
      return $this->ExecutionDate;
    }

    /**
     * @param string $ExecutionDate
     * @return TransactionInfo
     */
    public function setExecutionDate($ExecutionDate)
    {
      $this->ExecutionDate = $ExecutionDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getProcessorAcquirerId()
    {
      return $this->ProcessorAcquirerId;
    }

    /**
     * @param string $ProcessorAcquirerId
     * @return TransactionInfo
     */
    public function setProcessorAcquirerId($ProcessorAcquirerId)
    {
      $this->ProcessorAcquirerId = $ProcessorAcquirerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginOutletUrl()
    {
      return $this->OriginOutletUrl;
    }

    /**
     * @param string $OriginOutletUrl
     * @return TransactionInfo
     */
    public function setOriginOutletUrl($OriginOutletUrl)
    {
      $this->OriginOutletUrl = $OriginOutletUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getTestFlag()
    {
      return $this->TestFlag;
    }

    /**
     * @param string $TestFlag
     * @return TransactionInfo
     */
    public function setTestFlag($TestFlag)
    {
      $this->TestFlag = $TestFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcronymDescriptor()
    {
      return $this->AcronymDescriptor;
    }

    /**
     * @param string $AcronymDescriptor
     * @return TransactionInfo
     */
    public function setAcronymDescriptor($AcronymDescriptor)
    {
      $this->AcronymDescriptor = $AcronymDescriptor;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderDetailPresent()
    {
      return $this->OrderDetailPresent;
    }

    /**
     * @param string $OrderDetailPresent
     * @return TransactionInfo
     */
    public function setOrderDetailPresent($OrderDetailPresent)
    {
      $this->OrderDetailPresent = $OrderDetailPresent;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
      return $this->CustomerId;
    }

    /**
     * @param string $CustomerId
     * @return TransactionInfo
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemsPresent()
    {
      return $this->ItemsPresent;
    }

    /**
     * @param string $ItemsPresent
     * @return TransactionInfo
     */
    public function setItemsPresent($ItemsPresent)
    {
      $this->ItemsPresent = $ItemsPresent;
      return $this;
    }

    /**
     * @return string
     */
    public function getNbOfItems()
    {
      return $this->NbOfItems;
    }

    /**
     * @param string $NbOfItems
     * @return TransactionInfo
     */
    public function setNbOfItems($NbOfItems)
    {
      $this->NbOfItems = $NbOfItems;
      return $this;
    }

    /**
     * @return ArrayOfOrderItem
     */
    public function getOrderItems()
    {
      return $this->OrderItems;
    }

    /**
     * @param ArrayOfOrderItem $OrderItems
     * @return TransactionInfo
     */
    public function setOrderItems($OrderItems)
    {
      $this->OrderItems = $OrderItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCost()
    {
      return $this->ShippingCost;
    }

    /**
     * @param string $ShippingCost
     * @return TransactionInfo
     */
    public function setShippingCost($ShippingCost)
    {
      $this->ShippingCost = $ShippingCost;
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
     * @return TransactionInfo
     */
    public function setVatIncluded($VatIncluded)
    {
      $this->VatIncluded = $VatIncluded;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatCost()
    {
      return $this->VatCost;
    }

    /**
     * @param string $VatCost
     * @return TransactionInfo
     */
    public function setVatCost($VatCost)
    {
      $this->VatCost = $VatCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
      return $this->DeliveryDate;
    }

    /**
     * @param string $DeliveryDate
     * @return TransactionInfo
     */
    public function setDeliveryDate($DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalDetailsPresents()
    {
      return $this->AdditionalDetailsPresents;
    }

    /**
     * @param string $AdditionalDetailsPresents
     * @return TransactionInfo
     */
    public function setAdditionalDetailsPresents($AdditionalDetailsPresents)
    {
      $this->AdditionalDetailsPresents = $AdditionalDetailsPresents;
      return $this;
    }

    /**
     * @return string
     */
    public function getNbOfFields()
    {
      return $this->NbOfFields;
    }

    /**
     * @param string $NbOfFields
     * @return TransactionInfo
     */
    public function setNbOfFields($NbOfFields)
    {
      $this->NbOfFields = $NbOfFields;
      return $this;
    }

    /**
     * @return ArrayOfOrderAdditionalField
     */
    public function getAdditionalFields()
    {
      return $this->AdditionalFields;
    }

    /**
     * @param ArrayOfOrderAdditionalField $AdditionalFields
     * @return TransactionInfo
     */
    public function setAdditionalFields($AdditionalFields)
    {
      $this->AdditionalFields = $AdditionalFields;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebsiteURL()
    {
      return $this->WebsiteURL;
    }

    /**
     * @param string $WebsiteURL
     * @return TransactionInfo
     */
    public function setWebsiteURL($WebsiteURL)
    {
      $this->WebsiteURL = $WebsiteURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getForwardSupported()
    {
      return $this->ForwardSupported;
    }

    /**
     * @param string $ForwardSupported
     * @return TransactionInfo
     */
    public function setForwardSupported($ForwardSupported)
    {
      $this->ForwardSupported = $ForwardSupported;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcceptHeader()
    {
      return $this->AcceptHeader;
    }

    /**
     * @param string $AcceptHeader
     * @return TransactionInfo
     */
    public function setAcceptHeader($AcceptHeader)
    {
      $this->AcceptHeader = $AcceptHeader;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
      return $this->UserAgent;
    }

    /**
     * @param string $UserAgent
     * @return TransactionInfo
     */
    public function setUserAgent($UserAgent)
    {
      $this->UserAgent = $UserAgent;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantResponseURL()
    {
      return $this->MerchantResponseURL;
    }

    /**
     * @param string $MerchantResponseURL
     * @return TransactionInfo
     */
    public function setMerchantResponseURL($MerchantResponseURL)
    {
      $this->MerchantResponseURL = $MerchantResponseURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpdateIndicator()
    {
      return $this->UpdateIndicator;
    }

    /**
     * @param string $UpdateIndicator
     * @return TransactionInfo
     */
    public function setUpdateIndicator($UpdateIndicator)
    {
      $this->UpdateIndicator = $UpdateIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerName()
    {
      return $this->PassengerName;
    }

    /**
     * @param string $PassengerName
     * @return TransactionInfo
     */
    public function setPassengerName($PassengerName)
    {
      $this->PassengerName = $PassengerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCode()
    {
      return $this->CustomerCode;
    }

    /**
     * @param string $CustomerCode
     * @return TransactionInfo
     */
    public function setCustomerCode($CustomerCode)
    {
      $this->CustomerCode = $CustomerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssueDate()
    {
      return $this->IssueDate;
    }

    /**
     * @param string $IssueDate
     * @return TransactionInfo
     */
    public function setIssueDate($IssueDate)
    {
      $this->IssueDate = $IssueDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTravelAgencyCode()
    {
      return $this->TravelAgencyCode;
    }

    /**
     * @param string $TravelAgencyCode
     * @return TransactionInfo
     */
    public function setTravelAgencyCode($TravelAgencyCode)
    {
      $this->TravelAgencyCode = $TravelAgencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTravelAgencyName()
    {
      return $this->TravelAgencyName;
    }

    /**
     * @param string $TravelAgencyName
     * @return TransactionInfo
     */
    public function setTravelAgencyName($TravelAgencyName)
    {
      $this->TravelAgencyName = $TravelAgencyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param string $TicketNumber
     * @return TransactionInfo
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuingCarrier()
    {
      return $this->IssuingCarrier;
    }

    /**
     * @param string $IssuingCarrier
     * @return TransactionInfo
     */
    public function setIssuingCarrier($IssuingCarrier)
    {
      $this->IssuingCarrier = $IssuingCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalFare()
    {
      return $this->TotalFare;
    }

    /**
     * @param string $TotalFare
     * @return TransactionInfo
     */
    public function setTotalFare($TotalFare)
    {
      $this->TotalFare = $TotalFare;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param string $TotalTax
     * @return TransactionInfo
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getNationalTax()
    {
      return $this->NationalTax;
    }

    /**
     * @param string $NationalTax
     * @return TransactionInfo
     */
    public function setNationalTax($NationalTax)
    {
      $this->NationalTax = $NationalTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantData()
    {
      return $this->MerchantData;
    }

    /**
     * @param string $MerchantData
     * @return TransactionInfo
     */
    public function setMerchantData($MerchantData)
    {
      $this->MerchantData = $MerchantData;
      return $this;
    }

}
