<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gensou-Oniki</title>
    <base href="<?=base_url();?>" />
    <link rel="stylesheet" href="<?php echo base_url("resources/css/welcome.css")?>" />
    <script type="text/javascript" src="<?php echo base_url("resources/js/jquery-1.11.0.js")?>"></script>
</head>
<body>
    <div class="main">
        <div class="titleImg">
            <img src="<?php echo base_url("resources/img/bg.jpg")?>"/>
        </div>
        <div class="contain">
            <p>Welcome to Qunithm</p>
            <div class="btn" id="btn_1">谱面资料(持续更新)</div>
            <div class="btn" id="btn_2">谱面保管所</div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url("resources/js/welcome.js")?>"></script>
</body>
</html>