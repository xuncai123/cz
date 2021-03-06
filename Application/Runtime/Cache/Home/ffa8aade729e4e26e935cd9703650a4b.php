<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo (ROOT); ?>/css/main.css">
    <script src="<?php echo (ROOT); ?>/js/jquery-1.8.3.min.js"></script>
</head>
<body>
<!--导航-->
    <header>
    <div class="w-1204">
        <div class="navtop clear">
            <div class="logobox fl">
                <div class="logo fl"></div>
                <div class="name fl">9158充值</div>
            </div>
            <div class="adminbox fl">
                <span>欢迎您，杭州天缘网络技术有限公司</span>
                <a>退出</a>
            </div>
        </div>
        <div class="nav clear">
            <a href="user-order.html" class="active fl">普通用户订单</a>
            <a href="agent-order.html" class="fl">代理商订单</a>
            <a href="user-management.html" class=" fl">用户管理</a>
            <a href="setup.html" class=" fl">充值设置</a>
            <a href="account-management.html" class="fl">账户管理</a>
            <a href="statistics.html" class=" fl">统计报表</a>
        </div>
    </div>
    </header>
    <div class="w-1204 mainbox">
        <div class="userbox">
            <a href="?user" class="active">管理账户</a>
            <a href="?user">经销商账户</a>
        </div>
        <div class="sortbox">
        <form action="<?php echo U('Order/user-order');?>" method='get'>
            <label>手机查询：</label><input type='text' name='cellphone' id='cellphone' value='<?php echo ($get["cellphone"]); ?>' placeholder='请输入充值的手机号'>
            <label>订单查询：</label><input type='text' name='ordernum' id='ordernum' value='<?php echo ($get["ordernum"]); ?>' placeholder='请输入订单号'>
            <label>用户查询：</label><input type='text' name='uid' id='uid' value='<?php echo ($get["uid"]); ?>' placeholder='请输入用户的手机号'>
            <lable>筛选日期 :</lable>
            <input type="date"><span>—</span><input type="date">
            <input type="submit" value="查询">
        </div>
        <hr>
        <div class="output-btn fr">导出订单</div>
        <table class="order-table">
            <tr >
                <th>创建时间</th><th>订单号</th>
                <th>用户ID</th><th>手机号码</th>
                <th>到帐时间</th><th>运营商</th>
                <th>是否导出</th><th>充值金额</th>
                <th>类型</th><th>支付金额</th>
                <th>支付方式</th><th>状态</th>
                <th class="orange">操作</th>
            </tr>
            <tr >
                <td>2016-12-12 10:10:10</td><td>13367580987</td>
                <td>ggy123456</td><td>13456789087</td>
                <td>24小时</td><td>移动</td>
                <td>未导出</td><td>40元</td>
                <td>话费</td><td>39元</td>
                <td>支付宝</td><td>待受理</td>
                <td class="orange">已充值/充值失败</td>
            </tr>
            <tr >
                <td></td><td></td><td></td><td></td>
                <td ></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td>
                <td class="orange"></td>
            </tr>
            <tr >
                <td></td><td></td><td></td><td></td>
                <td ></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td>
                <td class="orange"></td>
            </tr>
            <tr >
                <td></td><td></td><td></td><td></td>
                <td ></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td>
                <td class="orange"></td>
            </tr>
            <tr >
                <td></td><td></td><td></td><td></td>
                <td ></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td>
                <td class="orange"></td>
            </tr>
            <tr >
                <td></td><td></td><td></td><td></td>
                <td ></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td>
                <td class="orange"></td>
            </tr>
            <tr >
                <td></td><td></td><td></td><td></td>
                <td ></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td>
                <td class="orange"></td>
            </tr>
            <tr >
                <td></td><td></td><td></td><td></td>
                <td ></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td>
                <td class="orange"></td>
            </tr>
        </table>
        <ul class="paging clear">
            <li class="active fl"><a >1</a></li>
            <li class="fl"><a >2</a></li>
            <li class="fl"> <a >3</a></li>
            <li class="fl"> <a >4</a></li>
            <li class="fl"> <a >5</a></li>
            <li class="fl"> <a >6</a></li>
            <li class="fl nextpage"> <a >下一页</a></li>
        </ul>
    </div>
    <script src="<?php echo (ROOT); ?>/js/main.js"></script>
</body>
</html>