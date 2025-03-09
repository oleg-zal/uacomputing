<?php
?>
<h2 style="margin-top: 70px; font-size: 20px;">
    <?php
        if($_GET["lang"]=='en'){
            the_field('title_en');
        }
        if($_GET["lang"]=='ua'){
            the_field('title_ua');
        }
        if($_GET["lang"]=='ru'){
            the_title();
        }
    ?>
</h2>
<div style="margin-top: 60px">
    <?php
        if($_GET["lang"]=='en'){
            $video = get_field('video_en');
        }
        if($_GET["lang"]=='ua'){
            $video = get_field('video_ua');
        }
        if($_GET["lang"]=='ru'){
            $video = get_field('video_ru');
        }
    ?>
    <div style="width: 100%; height: 100%">
        <iframe style="width: 70%; height: 70%" src="<?=$video;?>"  frameborder="0"/>
    </div>
</div>

