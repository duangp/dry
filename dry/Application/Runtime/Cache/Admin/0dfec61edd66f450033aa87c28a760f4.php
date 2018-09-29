<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>登录</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <!-- <link rel="stylesheet" href="assets/css/reset.css"> -->
		<link rel="stylesheet" type="text/css" href="/dry/Public/admin/login/css/reset.css" />	
		<link rel="stylesheet" type="text/css" href="/dry/Public/admin/login/css/supersized.css" />	
		<link rel="stylesheet" type="text/css" href="/dry/Public/admin/login/css/style.css" />	
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>登录</h1>
            <form action="" method="post">
                <input type="text" name="username" class="username" placeholder="用户名">
                <input type="password" name="password" class="password" placeholder="密码">
                <button type="submit">提交</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>


        <!-- Javascript -->
		<script type="text/javascript" src="/dry/Public/admin/login/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="/dry/Public/admin/login/js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="/dry/Public/admin/login/js/supersized-init.js"></script>
		<script type="text/javascript" src="/dry/Public/admin/login/js/scripts.js"></script>

    </body>

</html>