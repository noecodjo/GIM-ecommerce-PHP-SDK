<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthorizationInfo StructType
 * @subpackage Structs
 */
class AuthorizationInfo extends WebServiceBean
{
    /**
     * The Version
     * @var string
     */
    public $Version;
    /**
     * The AuthorType
     * @var string
     */
    public $AuthorType;
    /**
     * The OrderId
     * @var string
     */
    public $OrderId;
    /**
     * The TxtCardNo
     * @var string
     */
    public $TxtCardNo;
    /**
     * The CardExpiryMonth
     * @var string
     */
    public $CardExpiryMonth;
    /**
     * The CardExpiryYear
     * @var string
     */
    public $CardExpiryYear;
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EffectiveDate;
    /**
     * The CVV2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CVV2;
    /**
     * The TokenAction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TokenAction;
    /**
     * The TokenValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TokenValue;
    /**
     * The PurchaseDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PurchaseDesc;
    /**
     * The PurchaseAmount
     * @var string
     */
    public $PurchaseAmount;
    /**
     * The FeesAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FeesAmount;
    /**
     * The PurchaseCurrency
     * @var string
     */
    public $PurchaseCurrency;
    /**
     * The CaptureFlag
     * @var string
     */
    public $CaptureFlag;
    /**
     * The ShippingFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingFirstName;
    /**
     * The ShippingMiddleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingMiddleName;
    /**
     * The ShippingLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingLastName;
    /**
     * The ShippingAddress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingAddress1;
    /**
     * The ShippingAddress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingAddress2;
    /**
     * The ShippingCityCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCityCode;
    /**
     * The ShippingState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingState;
    /**
     * The ShippingZipcode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingZipcode;
    /**
     * The ShippingCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCountry;
    /**
     * The ShippingEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingEmail;
    /**
     * The ShippingPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingPhone;
    /**
     * The ShippingFax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingFax;
    /**
     * The ShippingMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingMobilePhone;
    /**
     * The ShippingMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingMethod;
    /**
     * The BillingFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingFirstName;
    /**
     * The BillingMiddleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingMiddleName;
    /**
     * The BillingLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingLastName;
    /**
     * The BillingAddress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingAddress1;
    /**
     * The BillingAddress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingAddress2;
    /**
     * The BillingCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingCity;
    /**
     * The BillingState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingState;
    /**
     * The BillingZipcode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingZipcode;
    /**
     * The BillingCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingCountry;
    /**
     * The BillingEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingEmail;
    /**
     * The BillingPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingPhone;
    /**
     * The BillingFax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingFax;
    /**
     * The BillingMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingMobilePhone;
    /**
     * The SignatureMethod
     * @var string
     */
    public $SignatureMethod;
    /**
     * The Signature
     * @var string
     */
    public $Signature;
    /**
     * The ScheduledPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ScheduledPayment;
    /**
     * The ScheduledTermCaptureFlag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ScheduledTermCaptureFlag;
    /**
     * The NbOfInstallment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NbOfInstallment;
    /**
     * The InstallmentFrequency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InstallmentFrequency;
    /**
     * The InstallmentNextDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InstallmentNextDate;
    /**
     * The NbOfRecurring
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NbOfRecurring;
    /**
     * The RecurringFrequency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecurringFrequency;
    /**
     * The RecurringAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecurringAmount;
    /**
     * The RecurringFeesAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecurringFeesAmount;
    /**
     * The RecurringStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecurringStartDate;
    /**
     * The ExecutionDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExecutionDate;
    /**
     * The ProcessorAcquirerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProcessorAcquirerId;
    /**
     * The OriginOutletUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginOutletUrl;
    /**
     * The TestFlag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TestFlag;
    /**
     * The CardHolderName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderName;
    /**
     * The AcronymDescriptor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AcronymDescriptor;
    /**
     * The OrderDetailPresent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OrderDetailPresent;
    /**
     * The CustomerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerId;
    /**
     * The ItemsPresent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemsPresent;
    /**
     * The NbOfItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NbOfItems;
    /**
     * The OrderItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOrderItem
     */
    public $OrderItems;
    /**
     * The ShippingCost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCost;
    /**
     * The VatIncluded
     * @var string
     */
    public $VatIncluded;
    /**
     * The VatCost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VatCost;
    /**
     * The DeliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDate;
    /**
     * The AdditionalDetailsPresents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalDetailsPresents;
    /**
     * The NbOfFields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NbOfFields;
    /**
     * The AdditionalFields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOrderAdditionalField
     */
    public $AdditionalFields;
    /**
     * The UpdateIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UpdateIndicator;
    /**
     * The PassengerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerName;
    /**
     * The CustomerCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerCode;
    /**
     * The IssueDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssueDate;
    /**
     * The TravelAgencyCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelAgencyCode;
    /**
     * The TravelAgencyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelAgencyName;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketNumber;
    /**
     * The IssuingCarrier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssuingCarrier;
    /**
     * The TotalFare
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TotalFare;
    /**
     * The TotalTax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TotalTax;
    /**
     * The NationalTax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NationalTax;
    /**
     * The ThreeDSecure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ArrayOfThreeDSecureItem
     */
    public $ThreeDSecure;
    /**
     * Constructor method for AuthorizationInfo
     * @uses AuthorizationInfo::setVersion()
     * @uses AuthorizationInfo::setAuthorType()
     * @uses AuthorizationInfo::setOrderId()
     * @uses AuthorizationInfo::setTxtCardNo()
     * @uses AuthorizationInfo::setCardExpiryMonth()
     * @uses AuthorizationInfo::setCardExpiryYear()
     * @uses AuthorizationInfo::setEffectiveDate()
     * @uses AuthorizationInfo::setCVV2()
     * @uses AuthorizationInfo::setTokenAction()
     * @uses AuthorizationInfo::setTokenValue()
     * @uses AuthorizationInfo::setPurchaseDesc()
     * @uses AuthorizationInfo::setPurchaseAmount()
     * @uses AuthorizationInfo::setFeesAmount()
     * @uses AuthorizationInfo::setPurchaseCurrency()
     * @uses AuthorizationInfo::setCaptureFlag()
     * @uses AuthorizationInfo::setShippingFirstName()
     * @uses AuthorizationInfo::setShippingMiddleName()
     * @uses AuthorizationInfo::setShippingLastName()
     * @uses AuthorizationInfo::setShippingAddress1()
     * @uses AuthorizationInfo::setShippingAddress2()
     * @uses AuthorizationInfo::setShippingCityCode()
     * @uses AuthorizationInfo::setShippingState()
     * @uses AuthorizationInfo::setShippingZipcode()
     * @uses AuthorizationInfo::setShippingCountry()
     * @uses AuthorizationInfo::setShippingEmail()
     * @uses AuthorizationInfo::setShippingPhone()
     * @uses AuthorizationInfo::setShippingFax()
     * @uses AuthorizationInfo::setShippingMobilePhone()
     * @uses AuthorizationInfo::setShippingMethod()
     * @uses AuthorizationInfo::setBillingFirstName()
     * @uses AuthorizationInfo::setBillingMiddleName()
     * @uses AuthorizationInfo::setBillingLastName()
     * @uses AuthorizationInfo::setBillingAddress1()
     * @uses AuthorizationInfo::setBillingAddress2()
     * @uses AuthorizationInfo::setBillingCity()
     * @uses AuthorizationInfo::setBillingState()
     * @uses AuthorizationInfo::setBillingZipcode()
     * @uses AuthorizationInfo::setBillingCountry()
     * @uses AuthorizationInfo::setBillingEmail()
     * @uses AuthorizationInfo::setBillingPhone()
     * @uses AuthorizationInfo::setBillingFax()
     * @uses AuthorizationInfo::setBillingMobilePhone()
     * @uses AuthorizationInfo::setSignatureMethod()
     * @uses AuthorizationInfo::setSignature()
     * @uses AuthorizationInfo::setScheduledPayment()
     * @uses AuthorizationInfo::setScheduledTermCaptureFlag()
     * @uses AuthorizationInfo::setNbOfInstallment()
     * @uses AuthorizationInfo::setInstallmentFrequency()
     * @uses AuthorizationInfo::setInstallmentNextDate()
     * @uses AuthorizationInfo::setNbOfRecurring()
     * @uses AuthorizationInfo::setRecurringFrequency()
     * @uses AuthorizationInfo::setRecurringAmount()
     * @uses AuthorizationInfo::setRecurringFeesAmount()
     * @uses AuthorizationInfo::setRecurringStartDate()
     * @uses AuthorizationInfo::setExecutionDate()
     * @uses AuthorizationInfo::setProcessorAcquirerId()
     * @uses AuthorizationInfo::setOriginOutletUrl()
     * @uses AuthorizationInfo::setTestFlag()
     * @uses AuthorizationInfo::setCardHolderName()
     * @uses AuthorizationInfo::setAcronymDescriptor()
     * @uses AuthorizationInfo::setOrderDetailPresent()
     * @uses AuthorizationInfo::setCustomerId()
     * @uses AuthorizationInfo::setItemsPresent()
     * @uses AuthorizationInfo::setNbOfItems()
     * @uses AuthorizationInfo::setOrderItems()
     * @uses AuthorizationInfo::setShippingCost()
     * @uses AuthorizationInfo::setVatIncluded()
     * @uses AuthorizationInfo::setVatCost()
     * @uses AuthorizationInfo::setDeliveryDate()
     * @uses AuthorizationInfo::setAdditionalDetailsPresents()
     * @uses AuthorizationInfo::setNbOfFields()
     * @uses AuthorizationInfo::setAdditionalFields()
     * @uses AuthorizationInfo::setUpdateIndicator()
     * @uses AuthorizationInfo::setPassengerName()
     * @uses AuthorizationInfo::setCustomerCode()
     * @uses AuthorizationInfo::setIssueDate()
     * @uses AuthorizationInfo::setTravelAgencyCode()
     * @uses AuthorizationInfo::setTravelAgencyName()
     * @uses AuthorizationInfo::setTicketNumber()
     * @uses AuthorizationInfo::setIssuingCarrier()
     * @uses AuthorizationInfo::setTotalFare()
     * @uses AuthorizationInfo::setTotalTax()
     * @uses AuthorizationInfo::setNationalTax()
     * @uses AuthorizationInfo::setThreeDSecure()
     * @param string $version
     * @param string $authorType
     * @param string $orderId
     * @param string $txtCardNo
     * @param string $cardExpiryMonth
     * @param string $cardExpiryYear
     * @param string $effectiveDate
     * @param string $cVV2
     * @param string $tokenAction
     * @param string $tokenValue
     * @param string $purchaseDesc
     * @param string $purchaseAmount
     * @param string $feesAmount
     * @param string $purchaseCurrency
     * @param string $captureFlag
     * @param string $shippingFirstName
     * @param string $shippingMiddleName
     * @param string $shippingLastName
     * @param string $shippingAddress1
     * @param string $shippingAddress2
     * @param string $shippingCityCode
     * @param string $shippingState
     * @param string $shippingZipcode
     * @param string $shippingCountry
     * @param string $shippingEmail
     * @param string $shippingPhone
     * @param string $shippingFax
     * @param string $shippingMobilePhone
     * @param string $shippingMethod
     * @param string $billingFirstName
     * @param string $billingMiddleName
     * @param string $billingLastName
     * @param string $billingAddress1
     * @param string $billingAddress2
     * @param string $billingCity
     * @param string $billingState
     * @param string $billingZipcode
     * @param string $billingCountry
     * @param string $billingEmail
     * @param string $billingPhone
     * @param string $billingFax
     * @param string $billingMobilePhone
     * @param string $signatureMethod
     * @param string $signature
     * @param string $scheduledPayment
     * @param string $scheduledTermCaptureFlag
     * @param string $nbOfInstallment
     * @param string $installmentFrequency
     * @param string $installmentNextDate
     * @param string $nbOfRecurring
     * @param string $recurringFrequency
     * @param string $recurringAmount
     * @param string $recurringFeesAmount
     * @param string $recurringStartDate
     * @param string $executionDate
     * @param string $processorAcquirerId
     * @param string $originOutletUrl
     * @param string $testFlag
     * @param string $cardHolderName
     * @param string $acronymDescriptor
     * @param string $orderDetailPresent
     * @param string $customerId
     * @param string $itemsPresent
     * @param string $nbOfItems
     * @param \ArrayType\ArrayOfOrderItem $orderItems
     * @param string $shippingCost
     * @param string $vatIncluded
     * @param string $vatCost
     * @param string $deliveryDate
     * @param string $additionalDetailsPresents
     * @param string $nbOfFields
     * @param \ArrayType\ArrayOfOrderAdditionalField $additionalFields
     * @param string $updateIndicator
     * @param string $passengerName
     * @param string $customerCode
     * @param string $issueDate
     * @param string $travelAgencyCode
     * @param string $travelAgencyName
     * @param string $ticketNumber
     * @param string $issuingCarrier
     * @param string $totalFare
     * @param string $totalTax
     * @param string $nationalTax
     * @param \StructType\ArrayOfThreeDSecureItem $threeDSecure
     */
    public function __construct($version = null, $authorType = null, $orderId = null, $txtCardNo = null, $cardExpiryMonth = null, $cardExpiryYear = null, $effectiveDate = null, $cVV2 = null, $tokenAction = null, $tokenValue = null, $purchaseDesc = null, $purchaseAmount = null, $feesAmount = null, $purchaseCurrency = null, $captureFlag = null, $shippingFirstName = null, $shippingMiddleName = null, $shippingLastName = null, $shippingAddress1 = null, $shippingAddress2 = null, $shippingCityCode = null, $shippingState = null, $shippingZipcode = null, $shippingCountry = null, $shippingEmail = null, $shippingPhone = null, $shippingFax = null, $shippingMobilePhone = null, $shippingMethod = null, $billingFirstName = null, $billingMiddleName = null, $billingLastName = null, $billingAddress1 = null, $billingAddress2 = null, $billingCity = null, $billingState = null, $billingZipcode = null, $billingCountry = null, $billingEmail = null, $billingPhone = null, $billingFax = null, $billingMobilePhone = null, $signatureMethod = null, $signature = null, $scheduledPayment = null, $scheduledTermCaptureFlag = null, $nbOfInstallment = null, $installmentFrequency = null, $installmentNextDate = null, $nbOfRecurring = null, $recurringFrequency = null, $recurringAmount = null, $recurringFeesAmount = null, $recurringStartDate = null, $executionDate = null, $processorAcquirerId = null, $originOutletUrl = null, $testFlag = null, $cardHolderName = null, $acronymDescriptor = null, $orderDetailPresent = null, $customerId = null, $itemsPresent = null, $nbOfItems = null, \ArrayType\ArrayOfOrderItem $orderItems = null, $shippingCost = null, $vatIncluded = null, $vatCost = null, $deliveryDate = null, $additionalDetailsPresents = null, $nbOfFields = null, \ArrayType\ArrayOfOrderAdditionalField $additionalFields = null, $updateIndicator = null, $passengerName = null, $customerCode = null, $issueDate = null, $travelAgencyCode = null, $travelAgencyName = null, $ticketNumber = null, $issuingCarrier = null, $totalFare = null, $totalTax = null, $nationalTax = null, \StructType\ArrayOfThreeDSecureItem $threeDSecure = null)
    {
        $this
            ->setVersion($version)
            ->setAuthorType($authorType)
            ->setOrderId($orderId)
            ->setTxtCardNo($txtCardNo)
            ->setCardExpiryMonth($cardExpiryMonth)
            ->setCardExpiryYear($cardExpiryYear)
            ->setEffectiveDate($effectiveDate)
            ->setCVV2($cVV2)
            ->setTokenAction($tokenAction)
            ->setTokenValue($tokenValue)
            ->setPurchaseDesc($purchaseDesc)
            ->setPurchaseAmount($purchaseAmount)
            ->setFeesAmount($feesAmount)
            ->setPurchaseCurrency($purchaseCurrency)
            ->setCaptureFlag($captureFlag)
            ->setShippingFirstName($shippingFirstName)
            ->setShippingMiddleName($shippingMiddleName)
            ->setShippingLastName($shippingLastName)
            ->setShippingAddress1($shippingAddress1)
            ->setShippingAddress2($shippingAddress2)
            ->setShippingCityCode($shippingCityCode)
            ->setShippingState($shippingState)
            ->setShippingZipcode($shippingZipcode)
            ->setShippingCountry($shippingCountry)
            ->setShippingEmail($shippingEmail)
            ->setShippingPhone($shippingPhone)
            ->setShippingFax($shippingFax)
            ->setShippingMobilePhone($shippingMobilePhone)
            ->setShippingMethod($shippingMethod)
            ->setBillingFirstName($billingFirstName)
            ->setBillingMiddleName($billingMiddleName)
            ->setBillingLastName($billingLastName)
            ->setBillingAddress1($billingAddress1)
            ->setBillingAddress2($billingAddress2)
            ->setBillingCity($billingCity)
            ->setBillingState($billingState)
            ->setBillingZipcode($billingZipcode)
            ->setBillingCountry($billingCountry)
            ->setBillingEmail($billingEmail)
            ->setBillingPhone($billingPhone)
            ->setBillingFax($billingFax)
            ->setBillingMobilePhone($billingMobilePhone)
            ->setSignatureMethod($signatureMethod)
            ->setSignature($signature)
            ->setScheduledPayment($scheduledPayment)
            ->setScheduledTermCaptureFlag($scheduledTermCaptureFlag)
            ->setNbOfInstallment($nbOfInstallment)
            ->setInstallmentFrequency($installmentFrequency)
            ->setInstallmentNextDate($installmentNextDate)
            ->setNbOfRecurring($nbOfRecurring)
            ->setRecurringFrequency($recurringFrequency)
            ->setRecurringAmount($recurringAmount)
            ->setRecurringFeesAmount($recurringFeesAmount)
            ->setRecurringStartDate($recurringStartDate)
            ->setExecutionDate($executionDate)
            ->setProcessorAcquirerId($processorAcquirerId)
            ->setOriginOutletUrl($originOutletUrl)
            ->setTestFlag($testFlag)
            ->setCardHolderName($cardHolderName)
            ->setAcronymDescriptor($acronymDescriptor)
            ->setOrderDetailPresent($orderDetailPresent)
            ->setCustomerId($customerId)
            ->setItemsPresent($itemsPresent)
            ->setNbOfItems($nbOfItems)
            ->setOrderItems($orderItems)
            ->setShippingCost($shippingCost)
            ->setVatIncluded($vatIncluded)
            ->setVatCost($vatCost)
            ->setDeliveryDate($deliveryDate)
            ->setAdditionalDetailsPresents($additionalDetailsPresents)
            ->setNbOfFields($nbOfFields)
            ->setAdditionalFields($additionalFields)
            ->setUpdateIndicator($updateIndicator)
            ->setPassengerName($passengerName)
            ->setCustomerCode($customerCode)
            ->setIssueDate($issueDate)
            ->setTravelAgencyCode($travelAgencyCode)
            ->setTravelAgencyName($travelAgencyName)
            ->setTicketNumber($ticketNumber)
            ->setIssuingCarrier($issuingCarrier)
            ->setTotalFare($totalFare)
            ->setTotalTax($totalTax)
            ->setNationalTax($nationalTax)
            ->setThreeDSecure($threeDSecure);
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \StructType\AuthorizationInfo
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get AuthorType value
     * @return string|null
     */
    public function getAuthorType()
    {
        return $this->AuthorType;
    }
    /**
     * Set AuthorType value
     * @param string $authorType
     * @return \StructType\AuthorizationInfo
     */
    public function setAuthorType($authorType = null)
    {
        // validation for constraint: string
        if (!is_null($authorType) && !is_string($authorType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorType, true), gettype($authorType)), __LINE__);
        }
        $this->AuthorType = $authorType;
        return $this;
    }
    /**
     * Get OrderId value
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }
    /**
     * Set OrderId value
     * @param string $orderId
     * @return \StructType\AuthorizationInfo
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->OrderId = $orderId;
        return $this;
    }
    /**
     * Get TxtCardNo value
     * @return string|null
     */
    public function getTxtCardNo()
    {
        return $this->TxtCardNo;
    }
    /**
     * Set TxtCardNo value
     * @param string $txtCardNo
     * @return \StructType\AuthorizationInfo
     */
    public function setTxtCardNo($txtCardNo = null)
    {
        // validation for constraint: string
        if (!is_null($txtCardNo) && !is_string($txtCardNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($txtCardNo, true), gettype($txtCardNo)), __LINE__);
        }
        $this->TxtCardNo = $txtCardNo;
        return $this;
    }
    /**
     * Get CardExpiryMonth value
     * @return string|null
     */
    public function getCardExpiryMonth()
    {
        return $this->CardExpiryMonth;
    }
    /**
     * Set CardExpiryMonth value
     * @param string $cardExpiryMonth
     * @return \StructType\AuthorizationInfo
     */
    public function setCardExpiryMonth($cardExpiryMonth = null)
    {
        // validation for constraint: string
        if (!is_null($cardExpiryMonth) && !is_string($cardExpiryMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardExpiryMonth, true), gettype($cardExpiryMonth)), __LINE__);
        }
        $this->CardExpiryMonth = $cardExpiryMonth;
        return $this;
    }
    /**
     * Get CardExpiryYear value
     * @return string|null
     */
    public function getCardExpiryYear()
    {
        return $this->CardExpiryYear;
    }
    /**
     * Set CardExpiryYear value
     * @param string $cardExpiryYear
     * @return \StructType\AuthorizationInfo
     */
    public function setCardExpiryYear($cardExpiryYear = null)
    {
        // validation for constraint: string
        if (!is_null($cardExpiryYear) && !is_string($cardExpiryYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardExpiryYear, true), gettype($cardExpiryYear)), __LINE__);
        }
        $this->CardExpiryYear = $cardExpiryYear;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \StructType\AuthorizationInfo
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get CVV2 value
     * @return string|null
     */
    public function getCVV2()
    {
        return $this->CVV2;
    }
    /**
     * Set CVV2 value
     * @param string $cVV2
     * @return \StructType\AuthorizationInfo
     */
    public function setCVV2($cVV2 = null)
    {
        // validation for constraint: string
        if (!is_null($cVV2) && !is_string($cVV2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cVV2, true), gettype($cVV2)), __LINE__);
        }
        $this->CVV2 = $cVV2;
        return $this;
    }
    /**
     * Get TokenAction value
     * @return string|null
     */
    public function getTokenAction()
    {
        return $this->TokenAction;
    }
    /**
     * Set TokenAction value
     * @param string $tokenAction
     * @return \StructType\AuthorizationInfo
     */
    public function setTokenAction($tokenAction = null)
    {
        // validation for constraint: string
        if (!is_null($tokenAction) && !is_string($tokenAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenAction, true), gettype($tokenAction)), __LINE__);
        }
        $this->TokenAction = $tokenAction;
        return $this;
    }
    /**
     * Get TokenValue value
     * @return string|null
     */
    public function getTokenValue()
    {
        return $this->TokenValue;
    }
    /**
     * Set TokenValue value
     * @param string $tokenValue
     * @return \StructType\AuthorizationInfo
     */
    public function setTokenValue($tokenValue = null)
    {
        // validation for constraint: string
        if (!is_null($tokenValue) && !is_string($tokenValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenValue, true), gettype($tokenValue)), __LINE__);
        }
        $this->TokenValue = $tokenValue;
        return $this;
    }
    /**
     * Get PurchaseDesc value
     * @return string|null
     */
    public function getPurchaseDesc()
    {
        return $this->PurchaseDesc;
    }
    /**
     * Set PurchaseDesc value
     * @param string $purchaseDesc
     * @return \StructType\AuthorizationInfo
     */
    public function setPurchaseDesc($purchaseDesc = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseDesc) && !is_string($purchaseDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purchaseDesc, true), gettype($purchaseDesc)), __LINE__);
        }
        $this->PurchaseDesc = $purchaseDesc;
        return $this;
    }
    /**
     * Get PurchaseAmount value
     * @return string|null
     */
    public function getPurchaseAmount()
    {
        return $this->PurchaseAmount;
    }
    /**
     * Set PurchaseAmount value
     * @param string $purchaseAmount
     * @return \StructType\AuthorizationInfo
     */
    public function setPurchaseAmount($purchaseAmount = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseAmount) && !is_string($purchaseAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purchaseAmount, true), gettype($purchaseAmount)), __LINE__);
        }
        $this->PurchaseAmount = $purchaseAmount;
        return $this;
    }
    /**
     * Get FeesAmount value
     * @return string|null
     */
    public function getFeesAmount()
    {
        return $this->FeesAmount;
    }
    /**
     * Set FeesAmount value
     * @param string $feesAmount
     * @return \StructType\AuthorizationInfo
     */
    public function setFeesAmount($feesAmount = null)
    {
        // validation for constraint: string
        if (!is_null($feesAmount) && !is_string($feesAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feesAmount, true), gettype($feesAmount)), __LINE__);
        }
        $this->FeesAmount = $feesAmount;
        return $this;
    }
    /**
     * Get PurchaseCurrency value
     * @return string|null
     */
    public function getPurchaseCurrency()
    {
        return $this->PurchaseCurrency;
    }
    /**
     * Set PurchaseCurrency value
     * @param string $purchaseCurrency
     * @return \StructType\AuthorizationInfo
     */
    public function setPurchaseCurrency($purchaseCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseCurrency) && !is_string($purchaseCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purchaseCurrency, true), gettype($purchaseCurrency)), __LINE__);
        }
        $this->PurchaseCurrency = $purchaseCurrency;
        return $this;
    }
    /**
     * Get CaptureFlag value
     * @return string|null
     */
    public function getCaptureFlag()
    {
        return $this->CaptureFlag;
    }
    /**
     * Set CaptureFlag value
     * @param string $captureFlag
     * @return \StructType\AuthorizationInfo
     */
    public function setCaptureFlag($captureFlag = null)
    {
        // validation for constraint: string
        if (!is_null($captureFlag) && !is_string($captureFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($captureFlag, true), gettype($captureFlag)), __LINE__);
        }
        $this->CaptureFlag = $captureFlag;
        return $this;
    }
    /**
     * Get ShippingFirstName value
     * @return string|null
     */
    public function getShippingFirstName()
    {
        return $this->ShippingFirstName;
    }
    /**
     * Set ShippingFirstName value
     * @param string $shippingFirstName
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingFirstName($shippingFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($shippingFirstName) && !is_string($shippingFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingFirstName, true), gettype($shippingFirstName)), __LINE__);
        }
        $this->ShippingFirstName = $shippingFirstName;
        return $this;
    }
    /**
     * Get ShippingMiddleName value
     * @return string|null
     */
    public function getShippingMiddleName()
    {
        return $this->ShippingMiddleName;
    }
    /**
     * Set ShippingMiddleName value
     * @param string $shippingMiddleName
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingMiddleName($shippingMiddleName = null)
    {
        // validation for constraint: string
        if (!is_null($shippingMiddleName) && !is_string($shippingMiddleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingMiddleName, true), gettype($shippingMiddleName)), __LINE__);
        }
        $this->ShippingMiddleName = $shippingMiddleName;
        return $this;
    }
    /**
     * Get ShippingLastName value
     * @return string|null
     */
    public function getShippingLastName()
    {
        return $this->ShippingLastName;
    }
    /**
     * Set ShippingLastName value
     * @param string $shippingLastName
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingLastName($shippingLastName = null)
    {
        // validation for constraint: string
        if (!is_null($shippingLastName) && !is_string($shippingLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingLastName, true), gettype($shippingLastName)), __LINE__);
        }
        $this->ShippingLastName = $shippingLastName;
        return $this;
    }
    /**
     * Get ShippingAddress1 value
     * @return string|null
     */
    public function getShippingAddress1()
    {
        return $this->ShippingAddress1;
    }
    /**
     * Set ShippingAddress1 value
     * @param string $shippingAddress1
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingAddress1($shippingAddress1 = null)
    {
        // validation for constraint: string
        if (!is_null($shippingAddress1) && !is_string($shippingAddress1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingAddress1, true), gettype($shippingAddress1)), __LINE__);
        }
        $this->ShippingAddress1 = $shippingAddress1;
        return $this;
    }
    /**
     * Get ShippingAddress2 value
     * @return string|null
     */
    public function getShippingAddress2()
    {
        return $this->ShippingAddress2;
    }
    /**
     * Set ShippingAddress2 value
     * @param string $shippingAddress2
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingAddress2($shippingAddress2 = null)
    {
        // validation for constraint: string
        if (!is_null($shippingAddress2) && !is_string($shippingAddress2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingAddress2, true), gettype($shippingAddress2)), __LINE__);
        }
        $this->ShippingAddress2 = $shippingAddress2;
        return $this;
    }
    /**
     * Get ShippingCityCode value
     * @return string|null
     */
    public function getShippingCityCode()
    {
        return $this->ShippingCityCode;
    }
    /**
     * Set ShippingCityCode value
     * @param string $shippingCityCode
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingCityCode($shippingCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCityCode) && !is_string($shippingCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCityCode, true), gettype($shippingCityCode)), __LINE__);
        }
        $this->ShippingCityCode = $shippingCityCode;
        return $this;
    }
    /**
     * Get ShippingState value
     * @return string|null
     */
    public function getShippingState()
    {
        return $this->ShippingState;
    }
    /**
     * Set ShippingState value
     * @param string $shippingState
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingState($shippingState = null)
    {
        // validation for constraint: string
        if (!is_null($shippingState) && !is_string($shippingState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingState, true), gettype($shippingState)), __LINE__);
        }
        $this->ShippingState = $shippingState;
        return $this;
    }
    /**
     * Get ShippingZipcode value
     * @return string|null
     */
    public function getShippingZipcode()
    {
        return $this->ShippingZipcode;
    }
    /**
     * Set ShippingZipcode value
     * @param string $shippingZipcode
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingZipcode($shippingZipcode = null)
    {
        // validation for constraint: string
        if (!is_null($shippingZipcode) && !is_string($shippingZipcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingZipcode, true), gettype($shippingZipcode)), __LINE__);
        }
        $this->ShippingZipcode = $shippingZipcode;
        return $this;
    }
    /**
     * Get ShippingCountry value
     * @return string|null
     */
    public function getShippingCountry()
    {
        return $this->ShippingCountry;
    }
    /**
     * Set ShippingCountry value
     * @param string $shippingCountry
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingCountry($shippingCountry = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCountry) && !is_string($shippingCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCountry, true), gettype($shippingCountry)), __LINE__);
        }
        $this->ShippingCountry = $shippingCountry;
        return $this;
    }
    /**
     * Get ShippingEmail value
     * @return string|null
     */
    public function getShippingEmail()
    {
        return $this->ShippingEmail;
    }
    /**
     * Set ShippingEmail value
     * @param string $shippingEmail
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingEmail($shippingEmail = null)
    {
        // validation for constraint: string
        if (!is_null($shippingEmail) && !is_string($shippingEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingEmail, true), gettype($shippingEmail)), __LINE__);
        }
        $this->ShippingEmail = $shippingEmail;
        return $this;
    }
    /**
     * Get ShippingPhone value
     * @return string|null
     */
    public function getShippingPhone()
    {
        return $this->ShippingPhone;
    }
    /**
     * Set ShippingPhone value
     * @param string $shippingPhone
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingPhone($shippingPhone = null)
    {
        // validation for constraint: string
        if (!is_null($shippingPhone) && !is_string($shippingPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingPhone, true), gettype($shippingPhone)), __LINE__);
        }
        $this->ShippingPhone = $shippingPhone;
        return $this;
    }
    /**
     * Get ShippingFax value
     * @return string|null
     */
    public function getShippingFax()
    {
        return $this->ShippingFax;
    }
    /**
     * Set ShippingFax value
     * @param string $shippingFax
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingFax($shippingFax = null)
    {
        // validation for constraint: string
        if (!is_null($shippingFax) && !is_string($shippingFax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingFax, true), gettype($shippingFax)), __LINE__);
        }
        $this->ShippingFax = $shippingFax;
        return $this;
    }
    /**
     * Get ShippingMobilePhone value
     * @return string|null
     */
    public function getShippingMobilePhone()
    {
        return $this->ShippingMobilePhone;
    }
    /**
     * Set ShippingMobilePhone value
     * @param string $shippingMobilePhone
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingMobilePhone($shippingMobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($shippingMobilePhone) && !is_string($shippingMobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingMobilePhone, true), gettype($shippingMobilePhone)), __LINE__);
        }
        $this->ShippingMobilePhone = $shippingMobilePhone;
        return $this;
    }
    /**
     * Get ShippingMethod value
     * @return string|null
     */
    public function getShippingMethod()
    {
        return $this->ShippingMethod;
    }
    /**
     * Set ShippingMethod value
     * @param string $shippingMethod
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingMethod($shippingMethod = null)
    {
        // validation for constraint: string
        if (!is_null($shippingMethod) && !is_string($shippingMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingMethod, true), gettype($shippingMethod)), __LINE__);
        }
        $this->ShippingMethod = $shippingMethod;
        return $this;
    }
    /**
     * Get BillingFirstName value
     * @return string|null
     */
    public function getBillingFirstName()
    {
        return $this->BillingFirstName;
    }
    /**
     * Set BillingFirstName value
     * @param string $billingFirstName
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingFirstName($billingFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($billingFirstName) && !is_string($billingFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingFirstName, true), gettype($billingFirstName)), __LINE__);
        }
        $this->BillingFirstName = $billingFirstName;
        return $this;
    }
    /**
     * Get BillingMiddleName value
     * @return string|null
     */
    public function getBillingMiddleName()
    {
        return $this->BillingMiddleName;
    }
    /**
     * Set BillingMiddleName value
     * @param string $billingMiddleName
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingMiddleName($billingMiddleName = null)
    {
        // validation for constraint: string
        if (!is_null($billingMiddleName) && !is_string($billingMiddleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingMiddleName, true), gettype($billingMiddleName)), __LINE__);
        }
        $this->BillingMiddleName = $billingMiddleName;
        return $this;
    }
    /**
     * Get BillingLastName value
     * @return string|null
     */
    public function getBillingLastName()
    {
        return $this->BillingLastName;
    }
    /**
     * Set BillingLastName value
     * @param string $billingLastName
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingLastName($billingLastName = null)
    {
        // validation for constraint: string
        if (!is_null($billingLastName) && !is_string($billingLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingLastName, true), gettype($billingLastName)), __LINE__);
        }
        $this->BillingLastName = $billingLastName;
        return $this;
    }
    /**
     * Get BillingAddress1 value
     * @return string|null
     */
    public function getBillingAddress1()
    {
        return $this->BillingAddress1;
    }
    /**
     * Set BillingAddress1 value
     * @param string $billingAddress1
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingAddress1($billingAddress1 = null)
    {
        // validation for constraint: string
        if (!is_null($billingAddress1) && !is_string($billingAddress1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAddress1, true), gettype($billingAddress1)), __LINE__);
        }
        $this->BillingAddress1 = $billingAddress1;
        return $this;
    }
    /**
     * Get BillingAddress2 value
     * @return string|null
     */
    public function getBillingAddress2()
    {
        return $this->BillingAddress2;
    }
    /**
     * Set BillingAddress2 value
     * @param string $billingAddress2
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingAddress2($billingAddress2 = null)
    {
        // validation for constraint: string
        if (!is_null($billingAddress2) && !is_string($billingAddress2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAddress2, true), gettype($billingAddress2)), __LINE__);
        }
        $this->BillingAddress2 = $billingAddress2;
        return $this;
    }
    /**
     * Get BillingCity value
     * @return string|null
     */
    public function getBillingCity()
    {
        return $this->BillingCity;
    }
    /**
     * Set BillingCity value
     * @param string $billingCity
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingCity($billingCity = null)
    {
        // validation for constraint: string
        if (!is_null($billingCity) && !is_string($billingCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingCity, true), gettype($billingCity)), __LINE__);
        }
        $this->BillingCity = $billingCity;
        return $this;
    }
    /**
     * Get BillingState value
     * @return string|null
     */
    public function getBillingState()
    {
        return $this->BillingState;
    }
    /**
     * Set BillingState value
     * @param string $billingState
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingState($billingState = null)
    {
        // validation for constraint: string
        if (!is_null($billingState) && !is_string($billingState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingState, true), gettype($billingState)), __LINE__);
        }
        $this->BillingState = $billingState;
        return $this;
    }
    /**
     * Get BillingZipcode value
     * @return string|null
     */
    public function getBillingZipcode()
    {
        return $this->BillingZipcode;
    }
    /**
     * Set BillingZipcode value
     * @param string $billingZipcode
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingZipcode($billingZipcode = null)
    {
        // validation for constraint: string
        if (!is_null($billingZipcode) && !is_string($billingZipcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingZipcode, true), gettype($billingZipcode)), __LINE__);
        }
        $this->BillingZipcode = $billingZipcode;
        return $this;
    }
    /**
     * Get BillingCountry value
     * @return string|null
     */
    public function getBillingCountry()
    {
        return $this->BillingCountry;
    }
    /**
     * Set BillingCountry value
     * @param string $billingCountry
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingCountry($billingCountry = null)
    {
        // validation for constraint: string
        if (!is_null($billingCountry) && !is_string($billingCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingCountry, true), gettype($billingCountry)), __LINE__);
        }
        $this->BillingCountry = $billingCountry;
        return $this;
    }
    /**
     * Get BillingEmail value
     * @return string|null
     */
    public function getBillingEmail()
    {
        return $this->BillingEmail;
    }
    /**
     * Set BillingEmail value
     * @param string $billingEmail
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingEmail($billingEmail = null)
    {
        // validation for constraint: string
        if (!is_null($billingEmail) && !is_string($billingEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingEmail, true), gettype($billingEmail)), __LINE__);
        }
        $this->BillingEmail = $billingEmail;
        return $this;
    }
    /**
     * Get BillingPhone value
     * @return string|null
     */
    public function getBillingPhone()
    {
        return $this->BillingPhone;
    }
    /**
     * Set BillingPhone value
     * @param string $billingPhone
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingPhone($billingPhone = null)
    {
        // validation for constraint: string
        if (!is_null($billingPhone) && !is_string($billingPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingPhone, true), gettype($billingPhone)), __LINE__);
        }
        $this->BillingPhone = $billingPhone;
        return $this;
    }
    /**
     * Get BillingFax value
     * @return string|null
     */
    public function getBillingFax()
    {
        return $this->BillingFax;
    }
    /**
     * Set BillingFax value
     * @param string $billingFax
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingFax($billingFax = null)
    {
        // validation for constraint: string
        if (!is_null($billingFax) && !is_string($billingFax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingFax, true), gettype($billingFax)), __LINE__);
        }
        $this->BillingFax = $billingFax;
        return $this;
    }
    /**
     * Get BillingMobilePhone value
     * @return string|null
     */
    public function getBillingMobilePhone()
    {
        return $this->BillingMobilePhone;
    }
    /**
     * Set BillingMobilePhone value
     * @param string $billingMobilePhone
     * @return \StructType\AuthorizationInfo
     */
    public function setBillingMobilePhone($billingMobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($billingMobilePhone) && !is_string($billingMobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingMobilePhone, true), gettype($billingMobilePhone)), __LINE__);
        }
        $this->BillingMobilePhone = $billingMobilePhone;
        return $this;
    }
    /**
     * Get SignatureMethod value
     * @return string|null
     */
    public function getSignatureMethod()
    {
        return $this->SignatureMethod;
    }
    /**
     * Set SignatureMethod value
     * @param string $signatureMethod
     * @return \StructType\AuthorizationInfo
     */
    public function setSignatureMethod($signatureMethod = null)
    {
        // validation for constraint: string
        if (!is_null($signatureMethod) && !is_string($signatureMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureMethod, true), gettype($signatureMethod)), __LINE__);
        }
        $this->SignatureMethod = $signatureMethod;
        return $this;
    }
    /**
     * Get Signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param string $signature
     * @return \StructType\AuthorizationInfo
     */
    public function setSignature($signature = null)
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Get ScheduledPayment value
     * @return string|null
     */
    public function getScheduledPayment()
    {
        return $this->ScheduledPayment;
    }
    /**
     * Set ScheduledPayment value
     * @param string $scheduledPayment
     * @return \StructType\AuthorizationInfo
     */
    public function setScheduledPayment($scheduledPayment = null)
    {
        // validation for constraint: string
        if (!is_null($scheduledPayment) && !is_string($scheduledPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledPayment, true), gettype($scheduledPayment)), __LINE__);
        }
        $this->ScheduledPayment = $scheduledPayment;
        return $this;
    }
    /**
     * Get ScheduledTermCaptureFlag value
     * @return string|null
     */
    public function getScheduledTermCaptureFlag()
    {
        return $this->ScheduledTermCaptureFlag;
    }
    /**
     * Set ScheduledTermCaptureFlag value
     * @param string $scheduledTermCaptureFlag
     * @return \StructType\AuthorizationInfo
     */
    public function setScheduledTermCaptureFlag($scheduledTermCaptureFlag = null)
    {
        // validation for constraint: string
        if (!is_null($scheduledTermCaptureFlag) && !is_string($scheduledTermCaptureFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledTermCaptureFlag, true), gettype($scheduledTermCaptureFlag)), __LINE__);
        }
        $this->ScheduledTermCaptureFlag = $scheduledTermCaptureFlag;
        return $this;
    }
    /**
     * Get NbOfInstallment value
     * @return string|null
     */
    public function getNbOfInstallment()
    {
        return $this->NbOfInstallment;
    }
    /**
     * Set NbOfInstallment value
     * @param string $nbOfInstallment
     * @return \StructType\AuthorizationInfo
     */
    public function setNbOfInstallment($nbOfInstallment = null)
    {
        // validation for constraint: string
        if (!is_null($nbOfInstallment) && !is_string($nbOfInstallment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nbOfInstallment, true), gettype($nbOfInstallment)), __LINE__);
        }
        $this->NbOfInstallment = $nbOfInstallment;
        return $this;
    }
    /**
     * Get InstallmentFrequency value
     * @return string|null
     */
    public function getInstallmentFrequency()
    {
        return $this->InstallmentFrequency;
    }
    /**
     * Set InstallmentFrequency value
     * @param string $installmentFrequency
     * @return \StructType\AuthorizationInfo
     */
    public function setInstallmentFrequency($installmentFrequency = null)
    {
        // validation for constraint: string
        if (!is_null($installmentFrequency) && !is_string($installmentFrequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($installmentFrequency, true), gettype($installmentFrequency)), __LINE__);
        }
        $this->InstallmentFrequency = $installmentFrequency;
        return $this;
    }
    /**
     * Get InstallmentNextDate value
     * @return string|null
     */
    public function getInstallmentNextDate()
    {
        return $this->InstallmentNextDate;
    }
    /**
     * Set InstallmentNextDate value
     * @param string $installmentNextDate
     * @return \StructType\AuthorizationInfo
     */
    public function setInstallmentNextDate($installmentNextDate = null)
    {
        // validation for constraint: string
        if (!is_null($installmentNextDate) && !is_string($installmentNextDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($installmentNextDate, true), gettype($installmentNextDate)), __LINE__);
        }
        $this->InstallmentNextDate = $installmentNextDate;
        return $this;
    }
    /**
     * Get NbOfRecurring value
     * @return string|null
     */
    public function getNbOfRecurring()
    {
        return $this->NbOfRecurring;
    }
    /**
     * Set NbOfRecurring value
     * @param string $nbOfRecurring
     * @return \StructType\AuthorizationInfo
     */
    public function setNbOfRecurring($nbOfRecurring = null)
    {
        // validation for constraint: string
        if (!is_null($nbOfRecurring) && !is_string($nbOfRecurring)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nbOfRecurring, true), gettype($nbOfRecurring)), __LINE__);
        }
        $this->NbOfRecurring = $nbOfRecurring;
        return $this;
    }
    /**
     * Get RecurringFrequency value
     * @return string|null
     */
    public function getRecurringFrequency()
    {
        return $this->RecurringFrequency;
    }
    /**
     * Set RecurringFrequency value
     * @param string $recurringFrequency
     * @return \StructType\AuthorizationInfo
     */
    public function setRecurringFrequency($recurringFrequency = null)
    {
        // validation for constraint: string
        if (!is_null($recurringFrequency) && !is_string($recurringFrequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurringFrequency, true), gettype($recurringFrequency)), __LINE__);
        }
        $this->RecurringFrequency = $recurringFrequency;
        return $this;
    }
    /**
     * Get RecurringAmount value
     * @return string|null
     */
    public function getRecurringAmount()
    {
        return $this->RecurringAmount;
    }
    /**
     * Set RecurringAmount value
     * @param string $recurringAmount
     * @return \StructType\AuthorizationInfo
     */
    public function setRecurringAmount($recurringAmount = null)
    {
        // validation for constraint: string
        if (!is_null($recurringAmount) && !is_string($recurringAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurringAmount, true), gettype($recurringAmount)), __LINE__);
        }
        $this->RecurringAmount = $recurringAmount;
        return $this;
    }
    /**
     * Get RecurringFeesAmount value
     * @return string|null
     */
    public function getRecurringFeesAmount()
    {
        return $this->RecurringFeesAmount;
    }
    /**
     * Set RecurringFeesAmount value
     * @param string $recurringFeesAmount
     * @return \StructType\AuthorizationInfo
     */
    public function setRecurringFeesAmount($recurringFeesAmount = null)
    {
        // validation for constraint: string
        if (!is_null($recurringFeesAmount) && !is_string($recurringFeesAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurringFeesAmount, true), gettype($recurringFeesAmount)), __LINE__);
        }
        $this->RecurringFeesAmount = $recurringFeesAmount;
        return $this;
    }
    /**
     * Get RecurringStartDate value
     * @return string|null
     */
    public function getRecurringStartDate()
    {
        return $this->RecurringStartDate;
    }
    /**
     * Set RecurringStartDate value
     * @param string $recurringStartDate
     * @return \StructType\AuthorizationInfo
     */
    public function setRecurringStartDate($recurringStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($recurringStartDate) && !is_string($recurringStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurringStartDate, true), gettype($recurringStartDate)), __LINE__);
        }
        $this->RecurringStartDate = $recurringStartDate;
        return $this;
    }
    /**
     * Get ExecutionDate value
     * @return string|null
     */
    public function getExecutionDate()
    {
        return $this->ExecutionDate;
    }
    /**
     * Set ExecutionDate value
     * @param string $executionDate
     * @return \StructType\AuthorizationInfo
     */
    public function setExecutionDate($executionDate = null)
    {
        // validation for constraint: string
        if (!is_null($executionDate) && !is_string($executionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($executionDate, true), gettype($executionDate)), __LINE__);
        }
        $this->ExecutionDate = $executionDate;
        return $this;
    }
    /**
     * Get ProcessorAcquirerId value
     * @return string|null
     */
    public function getProcessorAcquirerId()
    {
        return $this->ProcessorAcquirerId;
    }
    /**
     * Set ProcessorAcquirerId value
     * @param string $processorAcquirerId
     * @return \StructType\AuthorizationInfo
     */
    public function setProcessorAcquirerId($processorAcquirerId = null)
    {
        // validation for constraint: string
        if (!is_null($processorAcquirerId) && !is_string($processorAcquirerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processorAcquirerId, true), gettype($processorAcquirerId)), __LINE__);
        }
        $this->ProcessorAcquirerId = $processorAcquirerId;
        return $this;
    }
    /**
     * Get OriginOutletUrl value
     * @return string|null
     */
    public function getOriginOutletUrl()
    {
        return $this->OriginOutletUrl;
    }
    /**
     * Set OriginOutletUrl value
     * @param string $originOutletUrl
     * @return \StructType\AuthorizationInfo
     */
    public function setOriginOutletUrl($originOutletUrl = null)
    {
        // validation for constraint: string
        if (!is_null($originOutletUrl) && !is_string($originOutletUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originOutletUrl, true), gettype($originOutletUrl)), __LINE__);
        }
        $this->OriginOutletUrl = $originOutletUrl;
        return $this;
    }
    /**
     * Get TestFlag value
     * @return string|null
     */
    public function getTestFlag()
    {
        return $this->TestFlag;
    }
    /**
     * Set TestFlag value
     * @param string $testFlag
     * @return \StructType\AuthorizationInfo
     */
    public function setTestFlag($testFlag = null)
    {
        // validation for constraint: string
        if (!is_null($testFlag) && !is_string($testFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($testFlag, true), gettype($testFlag)), __LINE__);
        }
        $this->TestFlag = $testFlag;
        return $this;
    }
    /**
     * Get CardHolderName value
     * @return string|null
     */
    public function getCardHolderName()
    {
        return $this->CardHolderName;
    }
    /**
     * Set CardHolderName value
     * @param string $cardHolderName
     * @return \StructType\AuthorizationInfo
     */
    public function setCardHolderName($cardHolderName = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderName) && !is_string($cardHolderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolderName, true), gettype($cardHolderName)), __LINE__);
        }
        $this->CardHolderName = $cardHolderName;
        return $this;
    }
    /**
     * Get AcronymDescriptor value
     * @return string|null
     */
    public function getAcronymDescriptor()
    {
        return $this->AcronymDescriptor;
    }
    /**
     * Set AcronymDescriptor value
     * @param string $acronymDescriptor
     * @return \StructType\AuthorizationInfo
     */
    public function setAcronymDescriptor($acronymDescriptor = null)
    {
        // validation for constraint: string
        if (!is_null($acronymDescriptor) && !is_string($acronymDescriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acronymDescriptor, true), gettype($acronymDescriptor)), __LINE__);
        }
        $this->AcronymDescriptor = $acronymDescriptor;
        return $this;
    }
    /**
     * Get OrderDetailPresent value
     * @return string|null
     */
    public function getOrderDetailPresent()
    {
        return $this->OrderDetailPresent;
    }
    /**
     * Set OrderDetailPresent value
     * @param string $orderDetailPresent
     * @return \StructType\AuthorizationInfo
     */
    public function setOrderDetailPresent($orderDetailPresent = null)
    {
        // validation for constraint: string
        if (!is_null($orderDetailPresent) && !is_string($orderDetailPresent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDetailPresent, true), gettype($orderDetailPresent)), __LINE__);
        }
        $this->OrderDetailPresent = $orderDetailPresent;
        return $this;
    }
    /**
     * Get CustomerId value
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }
    /**
     * Set CustomerId value
     * @param string $customerId
     * @return \StructType\AuthorizationInfo
     */
    public function setCustomerId($customerId = null)
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->CustomerId = $customerId;
        return $this;
    }
    /**
     * Get ItemsPresent value
     * @return string|null
     */
    public function getItemsPresent()
    {
        return $this->ItemsPresent;
    }
    /**
     * Set ItemsPresent value
     * @param string $itemsPresent
     * @return \StructType\AuthorizationInfo
     */
    public function setItemsPresent($itemsPresent = null)
    {
        // validation for constraint: string
        if (!is_null($itemsPresent) && !is_string($itemsPresent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemsPresent, true), gettype($itemsPresent)), __LINE__);
        }
        $this->ItemsPresent = $itemsPresent;
        return $this;
    }
    /**
     * Get NbOfItems value
     * @return string|null
     */
    public function getNbOfItems()
    {
        return $this->NbOfItems;
    }
    /**
     * Set NbOfItems value
     * @param string $nbOfItems
     * @return \StructType\AuthorizationInfo
     */
    public function setNbOfItems($nbOfItems = null)
    {
        // validation for constraint: string
        if (!is_null($nbOfItems) && !is_string($nbOfItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nbOfItems, true), gettype($nbOfItems)), __LINE__);
        }
        $this->NbOfItems = $nbOfItems;
        return $this;
    }
    /**
     * Get OrderItems value
     * @return \ArrayType\ArrayOfOrderItem|null
     */
    public function getOrderItems()
    {
        return $this->OrderItems;
    }
    /**
     * Set OrderItems value
     * @param \ArrayType\ArrayOfOrderItem $orderItems
     * @return \StructType\AuthorizationInfo
     */
    public function setOrderItems(\ArrayType\ArrayOfOrderItem $orderItems = null)
    {
        $this->OrderItems = $orderItems;
        return $this;
    }
    /**
     * Get ShippingCost value
     * @return string|null
     */
    public function getShippingCost()
    {
        return $this->ShippingCost;
    }
    /**
     * Set ShippingCost value
     * @param string $shippingCost
     * @return \StructType\AuthorizationInfo
     */
    public function setShippingCost($shippingCost = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCost) && !is_string($shippingCost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCost, true), gettype($shippingCost)), __LINE__);
        }
        $this->ShippingCost = $shippingCost;
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
     * @return \StructType\AuthorizationInfo
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
     * Get VatCost value
     * @return string|null
     */
    public function getVatCost()
    {
        return $this->VatCost;
    }
    /**
     * Set VatCost value
     * @param string $vatCost
     * @return \StructType\AuthorizationInfo
     */
    public function setVatCost($vatCost = null)
    {
        // validation for constraint: string
        if (!is_null($vatCost) && !is_string($vatCost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCost, true), gettype($vatCost)), __LINE__);
        }
        $this->VatCost = $vatCost;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \StructType\AuthorizationInfo
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get AdditionalDetailsPresents value
     * @return string|null
     */
    public function getAdditionalDetailsPresents()
    {
        return $this->AdditionalDetailsPresents;
    }
    /**
     * Set AdditionalDetailsPresents value
     * @param string $additionalDetailsPresents
     * @return \StructType\AuthorizationInfo
     */
    public function setAdditionalDetailsPresents($additionalDetailsPresents = null)
    {
        // validation for constraint: string
        if (!is_null($additionalDetailsPresents) && !is_string($additionalDetailsPresents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalDetailsPresents, true), gettype($additionalDetailsPresents)), __LINE__);
        }
        $this->AdditionalDetailsPresents = $additionalDetailsPresents;
        return $this;
    }
    /**
     * Get NbOfFields value
     * @return string|null
     */
    public function getNbOfFields()
    {
        return $this->NbOfFields;
    }
    /**
     * Set NbOfFields value
     * @param string $nbOfFields
     * @return \StructType\AuthorizationInfo
     */
    public function setNbOfFields($nbOfFields = null)
    {
        // validation for constraint: string
        if (!is_null($nbOfFields) && !is_string($nbOfFields)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nbOfFields, true), gettype($nbOfFields)), __LINE__);
        }
        $this->NbOfFields = $nbOfFields;
        return $this;
    }
    /**
     * Get AdditionalFields value
     * @return \ArrayType\ArrayOfOrderAdditionalField|null
     */
    public function getAdditionalFields()
    {
        return $this->AdditionalFields;
    }
    /**
     * Set AdditionalFields value
     * @param \ArrayType\ArrayOfOrderAdditionalField $additionalFields
     * @return \StructType\AuthorizationInfo
     */
    public function setAdditionalFields(\ArrayType\ArrayOfOrderAdditionalField $additionalFields = null)
    {
        $this->AdditionalFields = $additionalFields;
        return $this;
    }
    /**
     * Get UpdateIndicator value
     * @return string|null
     */
    public function getUpdateIndicator()
    {
        return $this->UpdateIndicator;
    }
    /**
     * Set UpdateIndicator value
     * @param string $updateIndicator
     * @return \StructType\AuthorizationInfo
     */
    public function setUpdateIndicator($updateIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($updateIndicator) && !is_string($updateIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateIndicator, true), gettype($updateIndicator)), __LINE__);
        }
        $this->UpdateIndicator = $updateIndicator;
        return $this;
    }
    /**
     * Get PassengerName value
     * @return string|null
     */
    public function getPassengerName()
    {
        return $this->PassengerName;
    }
    /**
     * Set PassengerName value
     * @param string $passengerName
     * @return \StructType\AuthorizationInfo
     */
    public function setPassengerName($passengerName = null)
    {
        // validation for constraint: string
        if (!is_null($passengerName) && !is_string($passengerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerName, true), gettype($passengerName)), __LINE__);
        }
        $this->PassengerName = $passengerName;
        return $this;
    }
    /**
     * Get CustomerCode value
     * @return string|null
     */
    public function getCustomerCode()
    {
        return $this->CustomerCode;
    }
    /**
     * Set CustomerCode value
     * @param string $customerCode
     * @return \StructType\AuthorizationInfo
     */
    public function setCustomerCode($customerCode = null)
    {
        // validation for constraint: string
        if (!is_null($customerCode) && !is_string($customerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCode, true), gettype($customerCode)), __LINE__);
        }
        $this->CustomerCode = $customerCode;
        return $this;
    }
    /**
     * Get IssueDate value
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->IssueDate;
    }
    /**
     * Set IssueDate value
     * @param string $issueDate
     * @return \StructType\AuthorizationInfo
     */
    public function setIssueDate($issueDate = null)
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->IssueDate = $issueDate;
        return $this;
    }
    /**
     * Get TravelAgencyCode value
     * @return string|null
     */
    public function getTravelAgencyCode()
    {
        return $this->TravelAgencyCode;
    }
    /**
     * Set TravelAgencyCode value
     * @param string $travelAgencyCode
     * @return \StructType\AuthorizationInfo
     */
    public function setTravelAgencyCode($travelAgencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($travelAgencyCode) && !is_string($travelAgencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelAgencyCode, true), gettype($travelAgencyCode)), __LINE__);
        }
        $this->TravelAgencyCode = $travelAgencyCode;
        return $this;
    }
    /**
     * Get TravelAgencyName value
     * @return string|null
     */
    public function getTravelAgencyName()
    {
        return $this->TravelAgencyName;
    }
    /**
     * Set TravelAgencyName value
     * @param string $travelAgencyName
     * @return \StructType\AuthorizationInfo
     */
    public function setTravelAgencyName($travelAgencyName = null)
    {
        // validation for constraint: string
        if (!is_null($travelAgencyName) && !is_string($travelAgencyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelAgencyName, true), gettype($travelAgencyName)), __LINE__);
        }
        $this->TravelAgencyName = $travelAgencyName;
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \StructType\AuthorizationInfo
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Get IssuingCarrier value
     * @return string|null
     */
    public function getIssuingCarrier()
    {
        return $this->IssuingCarrier;
    }
    /**
     * Set IssuingCarrier value
     * @param string $issuingCarrier
     * @return \StructType\AuthorizationInfo
     */
    public function setIssuingCarrier($issuingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($issuingCarrier) && !is_string($issuingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuingCarrier, true), gettype($issuingCarrier)), __LINE__);
        }
        $this->IssuingCarrier = $issuingCarrier;
        return $this;
    }
    /**
     * Get TotalFare value
     * @return string|null
     */
    public function getTotalFare()
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param string $totalFare
     * @return \StructType\AuthorizationInfo
     */
    public function setTotalFare($totalFare = null)
    {
        // validation for constraint: string
        if (!is_null($totalFare) && !is_string($totalFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalFare, true), gettype($totalFare)), __LINE__);
        }
        $this->TotalFare = $totalFare;
        return $this;
    }
    /**
     * Get TotalTax value
     * @return string|null
     */
    public function getTotalTax()
    {
        return $this->TotalTax;
    }
    /**
     * Set TotalTax value
     * @param string $totalTax
     * @return \StructType\AuthorizationInfo
     */
    public function setTotalTax($totalTax = null)
    {
        // validation for constraint: string
        if (!is_null($totalTax) && !is_string($totalTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalTax, true), gettype($totalTax)), __LINE__);
        }
        $this->TotalTax = $totalTax;
        return $this;
    }
    /**
     * Get NationalTax value
     * @return string|null
     */
    public function getNationalTax()
    {
        return $this->NationalTax;
    }
    /**
     * Set NationalTax value
     * @param string $nationalTax
     * @return \StructType\AuthorizationInfo
     */
    public function setNationalTax($nationalTax = null)
    {
        // validation for constraint: string
        if (!is_null($nationalTax) && !is_string($nationalTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationalTax, true), gettype($nationalTax)), __LINE__);
        }
        $this->NationalTax = $nationalTax;
        return $this;
    }
    /**
     * Get ThreeDSecure value
     * @return \StructType\ArrayOfThreeDSecureItem|null
     */
    public function getThreeDSecure()
    {
        return $this->ThreeDSecure;
    }
    /**
     * Set ThreeDSecure value
     * @param \StructType\ArrayOfThreeDSecureItem $threeDSecure
     * @return \StructType\AuthorizationInfo
     */
    public function setThreeDSecure(\StructType\ArrayOfThreeDSecureItem $threeDSecure = null)
    {
        $this->ThreeDSecure = $threeDSecure;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AuthorizationInfo
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
