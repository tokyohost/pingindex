<?php
/**
 * @Version 1.0
 * @author xh
 * @date 2020/5/16 14:58
 * @Content
 */
include_once('Ping.php');
use JJG\Ping;


$host = $_GET['host'];

$result = array();
$result['result'] = start_ping($host);
$result['time'] = date('Y-m-d H:i:s',time());
echo json_encode($result);

function start_ping($host){

    try {
        $ping = new Ping($host);
//        $ping->setHost($host);
        $latency = $ping->ping();
        if ($latency !== false) {
            return 'Latency is ' . $latency . ' ms';
        }
        else {
            return 'Host could not be reached.';
        }
    } catch (Exception $e) {
        echo $e;
    }



}