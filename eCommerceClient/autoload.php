<?php


 function autoload_112eeecd2e7e9d203c27027a294b4606($class)
{
    $classes = array(
        'OnlineSecureServiceService' => __DIR__ .'/OnlineSecureServiceService.php',
        'AuthorizationInfo' => __DIR__ .'/AuthorizationInfo.php',
        'AuthorizationInfoResponse' => __DIR__ .'/AuthorizationInfoResponse.php',
        'IssuerInfo' => __DIR__ .'/IssuerInfo.php',
        'OutletConfigInfo' => __DIR__ .'/OutletConfigInfo.php',
        'OutletConfigResponse' => __DIR__ .'/OutletConfigResponse.php',
        'TransactionInfo' => __DIR__ .'/TransactionInfo.php',
        'TransactionInfoResponse' => __DIR__ .'/TransactionInfoResponse.php',
        'webServiceBean' => __DIR__ .'/webServiceBean.php',
        'AuthHeader' => __DIR__ .'/AuthHeader.php',
        'SupportedCurrencies' => __DIR__ .'/SupportedCurrencies.php',
        'SupportedCurrency' => __DIR__ .'/SupportedCurrency.php',
        'Reseaux' => __DIR__ .'/Reseaux.php',
        'Reseau' => __DIR__ .'/Reseau.php',
        'ArrayOfOrderItem' => __DIR__ .'/ArrayOfOrderItem.php',
        'OrderItem' => __DIR__ .'/OrderItem.php',
        'ArrayOfOrderAdditionalField' => __DIR__ .'/ArrayOfOrderAdditionalField.php',
        'OrderAdditionalField' => __DIR__ .'/OrderAdditionalField.php',
        'ArrayOfThreeDSecureItem' => __DIR__ .'/ArrayOfThreeDSecureItem.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_112eeecd2e7e9d203c27027a294b4606');

// Do nothing. The rest is just leftovers from the code generation.
{
}
