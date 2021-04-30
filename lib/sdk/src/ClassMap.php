<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'AuthorizationInfo' => '\\StructType\\AuthorizationInfo',
            'AuthorizationInfoResponse' => '\\StructType\\AuthorizationInfoResponse',
            'IssuerInfo' => '\\StructType\\IssuerInfo',
            'TransactionInfo' => '\\StructType\\TransactionInfo',
            'TransactionInfoResponse' => '\\StructType\\TransactionInfoResponse',
            'webServiceBean' => '\\StructType\\WebServiceBean',
            'AuthHeader' => '\\StructType\\AuthHeader',
            'ArrayOfOrderItem' => '\\ArrayType\\ArrayOfOrderItem',
            'OrderItem' => '\\StructType\\OrderItem',
            'ArrayOfOrderAdditionalField' => '\\ArrayType\\ArrayOfOrderAdditionalField',
            'OrderAdditionalField' => '\\StructType\\OrderAdditionalField',
            'ArrayOfThreeDSecureItem' => '\\StructType\\ArrayOfThreeDSecureItem',
            'WebServiceBean' => '\\ArrayType\\WebServiceBean',
        );
    }
}
