<?php
/**
 * @Version 1.0
 * @author xh
 * @date 2020/5/16 14:22
 * @Content
 */

$conn = null;
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "phpindex";


function start_connect()
{
    global $servername;
    global $username;
    global $password;
    global $dbname;
    try {
        global $conn;
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // 设置 PDO 错误模式为异常
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "连接成功";
        return $conn;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return "fail";
    }
}

function insert($sql)
{
    try {

        $conn = start_connect();
        $conn->exec("use phpindex;");
        // 设置 PDO 错误模式，用于抛出异常
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // 使用 exec() ，没有结果返回
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}


function query($sql)
{

    $conn = start_connect();

    return $conn->query($sql);


}


function select($sql)
{
    global $conn;

}

function delete($sql)
{
    global $conn;

}

/***
 * 创建存储表
 */
function createTable()
{
    global $conn;
    $sql = "CREATE TABLE `phpindex` (
        `id`  int(15) NOT NULL ,
        `result`  double(10,2) NOT NULL ,
        `host`  varchar(25) NOT NULL ,
        `port`  int(15) NOT NULL DEFAULT 80 ,
        `testtime`  datetime NULL ,
        PRIMARY KEY (`id`)
        );";

    $conn;
}

function close()
{
    global $conn;
    $conn->close();
}

?>