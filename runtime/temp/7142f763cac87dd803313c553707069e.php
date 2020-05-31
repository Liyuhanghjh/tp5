<?php /*a:1:{s:64:"D:\project\tp5\public/../application/admin/view\login\login.html";i:1590422911;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>米菲登录</title>
    <link rel="icon"  href="__STATIC__/image/mifei.jpg">
    <link rel="stylesheet" type="text/css" href="__STATIC__/login/styles.css">
</head>
<body>
<div class="htmleaf-container">
    <div class="wrapper">
        <div class="container">
            <h1>Welcome</h1>
            <form class="form">
                <input type="text" name="username" placeholder="用户名">
                <input type="password"  name="password" placeholder="密码">
                <button type="submit"  id="login-button">登录</button>
            </form>
        </div>
    </div>
</div>

<script src="__STATIC__/login/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
    $('#login-button').click(function (event) {
        event.preventDefault();
        $('form').fadeOut(500);
        $('.wrapper').addClass('form-success');
    });
</script>

<div style="text-align:center;margin:50px 0; font:normal 44px/84px 'MicroSoft YaHei';color: #FF5722">
    <span>米菲后台管理系统</span>
</div>
</body>
</html>