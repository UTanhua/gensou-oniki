<?php
/**
 * Created by PhpStorm.
 * User: Chromium
 * Date: 2018/8/16
 * Time: 11:45
 */
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>谱面信息</title>
    <base href="<?=base_url();?>" />
    <link rel="stylesheet" href="<?php echo base_url("resources/css/chartinformation.css")?>" />
    <script type="text/javascript" src="<?php echo base_url("resources/js/jquery-1.11.0.js")?>"></script>
</head>

<body onload="clickall()">
    <div class="main">
        <table class="songlist" cellspacing="0">
            <tbody>
                <tr>
                    <th class="songName">曲名</th>
                    <th class="classification">分类</th>
                    <th class="difficultyBasic">BASIC</th>
                    <th class="difficultyNormal">NORMAL</th>
                    <th class="difficultyExpert">EXPERT</th>
                    <th class="difficultyMaster">MASTER</th>
                    <th class="difficultyWE" colspan="3">WORLD's END</th>
                    <th class="uploader">贡献者</th>
                    <th class="remark">备注</th>
                </tr>
                <?php foreach ($songs as $song_items): ?>
                    <tr>
                        <td><?php echo $song_items['songName']; ?></td>
                        <td class="classify" onclick="fillclassfication(this)"><?php echo $song_items['classification']; ?></td>
                        <td><?php echo $song_items['difficultyBasic']; ?>
                            <span class="status" onclick="fillcolor(this)"><?php echo $song_items['basicState']; ?></span></td>
                        <td><?php echo $song_items['difficultyNormal']; ?>
                            <span class="status" onclick="fillcolor(this)"><?php echo $song_items['normalState']; ?></span></td>
                        <td><?php echo $song_items['difficultyExpert']; ?>
                            <span class="status" onclick="fillcolor(this)"><?php echo $song_items['expertState']; ?></span></td>
                        <td><?php echo $song_items['difficultyMaster']; ?>
                            <span class="status" onclick="fillcolor(this)"><?php echo $song_items['masterState']; ?></span></td>
                        <td><?php echo $song_items['difficultyWE_1']; ?>
                            <span class="status" onclick="fillcolor(this)"><?php echo $song_items['WE_1State']; ?></span></td>
                        <td><?php echo $song_items['difficultyWE_2']; ?>
                            <span class="status" onclick="fillcolor(this)"><?php echo $song_items['WE_2State']; ?></span></td>
                        <td><?php echo $song_items['difficultyWE_3']; ?>
                            <span class="status" onclick="fillcolor(this)"><?php echo $song_items['WE_3State']; ?></span></td>
                        <td><?php echo $song_items['uploader']; ?></td>
                        <td><?php echo $song_items['remark']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript" src="<?php echo base_url("resources/js/chartinformation.js")?>"></script>
</body>
</html>