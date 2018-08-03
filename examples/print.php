<?php

$app_id = '******';

$app_secret = '********';

$rpc = new \zhongwu\protocol\RpcClient($app_id, $app_secret, 'http://api.zhongwuyun.com');

$Zprinter = new \zhongwu\Printer($rpc);

$device_id = '1111111';

$device_secret = '11111111';

$printdata = '中午云拥有自主研发的云打印机，提供稳定高效，高可用的云打印方案';

try {

    $Zprinter->set_args($device_id, $device_secret)->cloud_print($printdata);

} catch (Exception $e) {

}