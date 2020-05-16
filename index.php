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
?>
<!--<h1>--><?php //echo phpinfo();?><!--</h1>-->
<?php

echo start_connect();


?>

<div class="container">
    <h1>在线Ping检测</h1>

    <div class="form-group">
        <label for="host_input">目标地址:</label>
        <input type="text" class="form-control" id="host_input" placeholder="www.example.com/127.0.0.1">

    </div>
    <div class="form-group">
        <label for="test_count">测试次数:</label>
        <select class="form-control" id="test_count" >
            <option selected>1</option>
            <option>5</option>
            <option>8</option>
            <option>10</option>
            <option>12</option>
        </select>
    </div>


    <button type="button" id="startTest" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off"">
        开始测试
    </button>

    <div class="panel panel-default" style="margin-top: 15px">
        <div class="panel-heading">
            <h3 class="panel-title">进度</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="progress" id="progress_1">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" id="pro_success" style="width: 35%">
                        35% 已完成
                    </div>
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" id="pro_wait" style="width: 20%">
                        20% 等待重试
                    </div>
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" id="pro_danger" style="width: 10%">
                        10% 等待测试结束
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
            <div class="alert alert-success" role="alert"><b>测试成功！</b>耗时 23ms <span style="float: right">2020-5-16 16:45</span></div>
            <div class="alert alert-success" role="alert"><b>测试成功！</b>耗时 23ms <span style="float: right">2020-5-16 16:45</span></div>
            <div class="alert alert-success" role="alert"><b>测试成功！</b>耗时 23ms <span style="float: right">2020-5-16 16:45</span></div>
            <div class="alert alert-success" role="alert"><b>测试成功！</b>耗时 23ms <span style="float: right">2020-5-16 16:45</span></div>
            <div class="alert alert-danger" role="alert"><b>测试失败！</b>耗时 999ms <span style="float: right">2020-5-16 16:45</span></div>
        </div>
    </div>


</div>


<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="js/jquery-3.5.1.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>

<script>
    $('#startTest').on('click', function () {
        $("#startTest").attr("disabled","disabled");//禁用input标签
        // $("#startTest").attr("disabled",false);//启用input标签
        $('#host_input').attr("disabled","disabled");
        $('#test_count').attr("disabled","disabled");

        startTest($("#test_count").val(),$("#host_input").val());
        console.log("count:"+$("#test_count").val()+" host:"+$("#host_input").val());

    })

    function startTest(count,host) {

        for(var i=0;i<count;i++){



            $.ajax({url:"./test_server.php?host="+host,success:function(result){

                    var json_result = $.parseJSON(result);
                    if(json_result['result'] == "Host could not be reached."){
                        var panel = "<div class=\"alert alert-danger\" role=\"alert\"><b>测试失败！</b>耗时 23ms <span style=\"float: right\">"+json_result['time']+"</span></div>"
                        $("#show_panel").prepend(panel);

                    }else{
                        var panel = "<div class=\"alert alert-success\" role=\"alert\"><b>测试成功！</b>耗时 23ms <span style=\"float: right\">"+json_result['time']+"</span></div>"
                        $("#show_panel").prepend(panel);
                    }
                }});

        }


    }

</script>
</html>