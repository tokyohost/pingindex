<?php
/**
 * @Version 1.0
 * @author xh
 * @date 2020/5/16 14:22
 * @Content
 */

$conn = null;
$servername = "localhost:3308/phpindex";
$username = "root";
$password = "";


function start_connect(){
    global $servername;
    global $username;
    global $password;
    try {
        global $conn;
        $conn = new PDO("mysql:host=$servername;", $username, $password);
        // 设置 PDO 错误模式为异常
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "连接成功";
        return "success";
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        return "fail";
    }
}
function insert(){
    try {
        start_connect();
        global $conn;
        $conn->exec("use phpindex;");
        // 设置 PDO 错误模式，用于抛出异常
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO phpindex (result,host,port,testtime)
    VALUES (56.1, '127.0.0.1',80,'2020-1-17 14:51:00')";
        // 使用 exec() ，没有结果返回
        $conn->exec($sql);
        echo "新记录插入成功";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
}


function query($sql){
    global $conn;


}


function select($sql){
    global $conn;

}

function delete($sql){
    global $conn;

}

/***
 * 创建存储表
 */
function createTable(){
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

function close(){
    global $conn;
    $conn->close();
}
?>