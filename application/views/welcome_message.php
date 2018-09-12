<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gensou-Oniki</title>
    <base href="<?=base_url();?>" />
    <link rel="stylesheet" href="<?php echo base_url("resources/css/headbar.css")?>" />
    <link rel="stylesheet" href="<?php echo base_url("resources/css/welcome.css")?>" />
    <link rel="stylesheet" href="<?php echo base_url("resources/live2d/css/live2d.css")?>" />
    <script type="text/javascript" src="<?php echo base_url("resources/js/jquery-1.11.0.js")?>"></script>
</head>
<body>
<!--  HEAD start  -->
    <div class="headbar">
        <div class="container">
            <div class="logo">Qunithm</div>
            <div class="personinfo">
                <ul>
                    <li class="login">登陆</li>
                    <li class="register">注册</li>
                </ul>
            </div>
        </div>
    </div>
<!--  HEAD end  -->

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

<!--  Live2D start  -->
    <div id="landlord">
        <canvas id="live2d" width="280" height="400" class="live2d" onclick="playsound()"></canvas>
    </div>
    <div>
        <audio id="sound_00" src="<?php echo base_url("resources/live2d/model/rfb/sound/00.mp3")?>" controls="controls" hidden="true"></audio>
        <audio id="sound_01" src="<?php echo base_url("resources/live2d/model/rfb/sound/01.mp3")?>" controls="controls" hidden="true"></audio>
        <audio id="sound_02" src="<?php echo base_url("resources/live2d/model/rfb/sound/02.mp3")?>" controls="controls" hidden="true"></audio>
        <audio id="sound_03" src="<?php echo base_url("resources/live2d/model/rfb/sound/03.mp3")?>" controls="controls" hidden="true"></audio>
    </div>
<!--  Live2D end  -->

    <script type="text/javascript" src="<?php echo base_url("resources/live2d/js/live2d.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("resources/js/welcome.js")?>"></script>
    <script type="text/javascript">
        loadlive2d("live2d", "<?php echo base_url("resources/live2d/model/rfb/model.json")?>");
    </script>
</body>
</html>