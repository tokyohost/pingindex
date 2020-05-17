<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>网站可用率检测</title>
</head>
<body>


</body>
</html>


<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>在线网站可用率检测</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<?php
include "./connect.php";
//include "./test_server.php";
include "./Random.php";
?>
<!--<h1>--><?php //echo phpinfo();?><!--</h1>-->
<?php
error_reporting(0);
$conn = start_connect();

$r = new Random();
try {
    $uuid = $_GET['uuid'];
    if ($uuid) {
        $result = $conn->query("select * from phpindex where uuid_id='" . $uuid . "' order by testtime desc");
        $error = 0;
    } else {
        $error = 1;
    }

} catch (Exception $e) {
    $error = 1;
}


?>

<div class="container">
    <h1>在线Ping检测</h1>

    <div class="form-group" id="host_input_group">
        <label for="host_input">目标地址:</label>
        <input type="text" class="form-control" id="host_input" placeholder="www.example.com/127.0.0.1"
               required="required">

    </div>
    <div class="form-group">
        <label for="test_count">测试次数:</label>
        <select class="form-control" id="test_count">
            <option selected>1</option>
            <option>5</option>
            <option>8</option>
            <option>10</option>
            <option>12</option>
        </select>
    </div>


    <button type="button" id="startTest" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off"
    ">
    开始测试
    </button>
    <div class="form-group" style="margin-top: 15px">
        <label for="key_input">KEY:</label>
        <input type="text" class="form-control" id="key_input" placeholder="6位KEY">
    </div>
    <button type="button" id="jump_to" data-loading-text="Loading..." class="btn btn-success" autocomplete="off"
    ">
    跳转结果
    </button>

    <div class="panel panel-default" style="margin-top: 15px;display: none" id="process_panel">
        <div class="panel-heading">
            <h3 class="panel-title">进度</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="progress" id="progress_1">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" id="pro_success"
                         style="width: 0%">
                        <span id="pro_success_text">35% 已完成</span>
                    </div>
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" id="pro_wait"
                         style="width: 0%">
                        20% 等待重试
                    </div>
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" id="pro_danger"
                         style="width: 0%">
                        <span id="pro_danger_text">10% 等待测试结束</span>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="panel panel-default" style="margin-top: 15px">
        <div class="panel-heading">
            <h3 class="panel-title">结果显示</h3>
        </div>
        <div class="panel-body" id="show_panel">
            <?php
            if ($error == 0)
                foreach ($result as $row) {
                    if ($row['result'] == "Host could not be reached.") {
                        echo '<div class="alert alert-danger" role="alert"><b>PING <a href=', '"', 'http://' . $row['host'] . '"', '>' . $row['host'] . '</a> 失败! </b>' . $row['result'] . ' <span style="float: right">' . date('Y-m-d H:i:s', (int)$row['testtime']) . '</span></div>';

                    } else {
                        echo '<div class="alert alert-success" role="alert"><b>PING <a href=', '"', 'http://' . $row['host'] . '"', '>' . $row['host'] . '</a> 成功! </b> 服务器到目标地址延迟: ' . $row['result'] . ' <span style="float: right">' . date('Y-m-d H:i:s', (int)$row['testtime']) . '</span></div>';
                    }

                }


            ?>

        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"
            style="display: none" id="key_info">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">测试完成！</h4>
                </div>
                <div class="modal-body">
                    <p>您本次测试保存唯一凭证为:<span id="key_value"></span>,如需在其他平台继续测试，请输入此KEY</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <!--                    <button type="button" class="btn btn-primary copy" data-clipboard-text="123123">保存KEY</button>-->
                </div>
            </div>
        </div>
    </div>


</div>


<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="js/jquery-3.5.1.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
</body>

<script>
    <?php
    if ($error == 0) {
        echo 'var uuid = ', '"', $uuid, '"';
    } else {
        echo 'var uuid = ', '"', $r->alnum(6), '"';
    }
    ?>

    $('#host_input').on('click', function () {
        $("#host_input_group").removeClass("has-error");
    })


    $('#startTest').on('click', function () {

        if ($('#host_input').val() == "") {
            alert("请键入需要PING测试的目标地址");
            $("#host_input_group").addClass("has-error");
            return
        }

        $("#startTest").attr("disabled", "disabled");//禁用input标签
        // $("#startTest").attr("disabled",false);//启用input标签
        $('#host_input').attr("disabled", "disabled");
        $('#test_count').attr("disabled", "disabled");

        $("#process_panel").show();

        //初始化
        $("#pro_danger").css('width', parseInt(0) + "%");
        $("#pro_danger_text").text(parseInt(0) + "% 等待服务器测试");
        $("#pro_success").css('width', 0 + "%");
        $("#pro_success_text").text(0 + "% 已完成");


        startTest($("#test_count").val(), $("#host_input").val());
        console.log("count:" + $("#test_count").val() + " host:" + $("#host_input").val());

    })

    function startTest(count, host) {
        var sended = 0;
        var wait = 0;
        var success = 0;
        var success_count = 0;
        for (var i = 0; i < count; i++) {


            $("#pro_danger").css('width', parseInt(100 - (success_count / count * 100)) + "%");
            $("#pro_danger_text").text(parseInt(100 - (success_count / count * 100)) + "% 等待服务器测试");
            $.ajax({
                url: "./test_server.php?host=" + host + "&uuid=" + uuid, success: function (result) {

                    var json_result = $.parseJSON(result);
                    if (json_result['result'] == "Host could not be reached.") {
                        var panel = "<div class=\"alert alert-danger\" role=\"alert\"><b>PING <a href=\'" + "http:\/\/" + json_result['host'] + "\'>" + json_result['host'] + "</a> 失败! </b>" + json_result['result'] + " <span style=\"float: right\">" + json_result['time'] + "</span></div>"
                        $("#show_panel").prepend(panel);

                    } else {
                        var panel = "<div class=\"alert alert-success\" role=\"alert\"><b>PING <a href=\'" + "http:\/\/" + json_result['host'] + "\'>" + json_result['host'] + "</a> 成功! </b> 服务器到目标地址延迟: " + json_result['result'] + " <span style=\"float: right\">" + json_result['time'] + "</span></div>"
                        $("#show_panel").prepend(panel);
                    }
                    success_count++;

                    $("#pro_danger").css('width', parseInt(100 - (success_count / count * 100)) + "%");
                    $("#pro_danger_text").text(parseInt(100 - (success_count / count * 100)) + "% 等待服务器测试");


                    success = parseInt(success_count / count * 100);
                    $("#pro_success").css('width', success + "%");
                    $("#pro_success_text").text(success + "% 已完成");

                    //测试完成

                    if (success == 100) {
                        $("#startTest").attr("disabled", false);//禁用input标签
                        // $("#startTest").attr("disabled",false);//启用input标签
                        $('#host_input').attr("disabled", false);
                        $('#test_count').attr("disabled", false);

                        //展示KEY
                        $("#key_info").click();

                    }

                    //设置KEY
                    $("#key_value").text(json_result['uuid']);
                }
            });
        }
    }

    var clipboard = new ClipboardJS('.copy', {
        text: function () {
            //复制内容
            return window.location.href;
        }
    });
    //复制成功
    clipboard.on('success', function (e) {
        console.log(e);
        if (e.text != '') {
            alert("复制成功");
        }
    });
    //复制失败
    clipboard.on('error', function (e) {
        console.log(e);
    });
    //跳转key
    $("#jump_to").on('click', function () {

        var key = $("#key_input").val();
        var host = "./index.php?uuid=" + key;
        window.location.href = host;
    })

</script>
</html>