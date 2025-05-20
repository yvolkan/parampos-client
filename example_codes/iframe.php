<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\Iframe\Iframe;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$iframe = new Iframe();
$iframe->setCode('10738');
$iframe->setUser('Test');
$iframe->setPass('Test');
$iframe->setGUID('0c13d406-873b-403b-9c09-a5766840d98c');
$iframe->setGSM('5462970111');
$iframe->setAmount('100,00');
$iframe->setOrder_ID('Test1');
$iframe->setTransactionId('Test1');
$iframe->setCallback_URL('https://dev.param.com.tr/tr');
$iframe->setInstallment('1');
$iframe->setMaxInstallment('1');
$response = $iframe->send();
print_r($response);