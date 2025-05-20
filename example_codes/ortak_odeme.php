<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\OrtakOdeme\OrtakOdeme;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://pos.param.com.tr/Tahsilat/to.ws/Service_Odeme.asmx',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$ortakOdeme = new OrtakOdeme();
$ortakOdeme->setBorclu_Aciklama('Test');
$ortakOdeme->setBorclu_AdSoyad('Test');
$ortakOdeme->setBorclu_GSM('Test');
$ortakOdeme->setBorclu_Kisi_TC('Test');
$ortakOdeme->setBorclu_Odeme_Tip('Test');
$ortakOdeme->setBorclu_Tutar('Test');
$ortakOdeme->setIslem_ID('Test');
$ortakOdeme->setReturn_URL('Test');
$ortakOdeme->setTaksit('Test');
$ortakOdeme->setTerminal_ID('Test');

$response = $ortakOdeme->send();
print_r($response);