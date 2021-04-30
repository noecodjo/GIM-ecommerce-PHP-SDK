<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => '/Applications/MAMP/htdocs/WsdlToClass-develop/test.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => '/Applications/MAMP/htdocs/WsdlToClass-develop/test.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create(array('ssl'=> array('verify_peer'=>false,'verify_peer_name'=>false))),
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::COMPRESSION => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::SOAP_VERSION => SOAP_1_1,
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::ENCODING =>'UTF-8',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::TRACE => 1,
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::EXECPTIONS => true,
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::CACHE_WSDL => WSDL_CACHE_NONE,
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::SSL_METHOD => SOAP_SSL_METHOD_TLS,
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::FEATURES => 1
);
/**
 * Samples for Process ServiceType
 */

$process = new \ServiceType\Process($options);
$process->setSoapHeaderAuthHeader(new \StructType\AuthHeader());
/**
 * Sample call for ProcessIssuerData operation/method
 */
if ($process->ProcessIssuerData(new \StructType\IssuerInfo()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for ProcessSecureAuthorization operation/method
 */
if ($process->ProcessSecureAuthorization(new \StructType\AuthorizationInfo()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for ProcessWebPayment operation/method
 */
if ($process->ProcessWebPayment(new \StructType\TransactionInfo()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
