<?php
/**
 * @Version 1.0
 * @author xh
 * @date 2020/5/16 14:58
 * @Content
 */
include_once('Ping.php');

use JJG\Ping;

include "Random.php";
include "connect.php";

$host = $_GET['host'];

$result = array();
$result['result'] = start_ping($host);
$result['host'] = $host;
$result['time'] = date('Y-m-d H:i:s', time());


function start_ping($host)
{

    try {
        $ping = new Ping($host);
//        $ping->setHost($host);
        $latency = $ping->ping();
        if ($latency !== false) {
            return $latency . ' ms';
        } else {
            return 'Host could not be reached.';
        }
    } catch (Exception $e) {
        echo $e;
    }


}

//写入数据库

$r = new Random();

if (!is_null($_GET['uuid'])) {
    $db_result = query("select * from mark where uuid='" . $_GET['uuid'] . "';");

    foreach ($db_result as $k => $row) {
        $db_row['id'] = $row['id'];
    }

    if ($db_result) {
        $sql = "insert into mark(uuid) values('" . $_GET['uuid'] . "');";
        insert($sql);

        $sql = "INSERT INTO `phpindex`.`phpindex`(`result`, `host`, `port`, `testtime`, `uuid_id`) VALUES ('" . $result['result'] . "', '" . $result['host'] . "', 80, " . time() . ", '" . $_GET['uuid'] . "');";
        insert($sql);
    }
    $result['uuid'] = $_GET['uuid'];

} else {
    $uuid = $r->alnum(6);

    $db_result = query("select * from mark where uuid='" . $uuid . "';");

    if (!$db_result) {
        $sql = "insert into mark(uuid) values('" . uuid . "');";
        insert($sql);
    }

    $sql = "INSERT INTO `phpindex`.`phpindex`(`result`, `host`, `port`, `testtime`, `uuid_id`) VALUES ('" . $result['result'] . "', '" . $result['host'] . "', 80, " . time() . ", '" . $_GET['uuid'] . "');";
    insert($sql);

    $result['uuid'] = $uuid;

}


echo json_encode($result);