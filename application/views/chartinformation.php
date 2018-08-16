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

<body>
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
                    <th class="difficultyWE">WORLD's END</th>
                    <th class="uploader">贡献者</th>
                    <th class="remark">备注</th>
                </tr>
                <?php foreach ($songs as $song_items): ?>
                    <tr>
                        <td><?php echo $song_items['songName']; ?></td>
                        <td><?php echo $song_items['classification']; ?></td>
                        <td><?php echo $song_items['difficultyBasic']; ?></td>
                        <p class="status"><?php echo $song_items['basicState']; ?></p>
                        <td><?php echo $song_items['difficultyNormal']; ?></td>
                        <p class="status"><?php echo $song_items['normalState']; ?></p>
                        <td><?php echo $song_items['difficultyExpert']; ?></td>
                        <p class="status"><?php echo $song_items['expertState']; ?></p>
                        <td><?php echo $song_items['difficultyMaster']; ?></td>
                        <p class="status"><?php echo $song_items['masterState']; ?></p>
                        <td><?php echo $song_items['difficultyWE']; ?></td>
                        <p class="status"><?php echo $song_items['weState']; ?></p>
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