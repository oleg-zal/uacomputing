<?php
get_header();
?>

<div style="margin: 70px 100px">
    <?php /*query_posts(); */
    $my_videos = get_posts( array(
        'numberposts' => -1,
        'post_type'   => 'videos',
        'meta_key' => 'order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
    ) );
    $my_videos = get_ierar($my_videos);
    //
    foreach ( $my_videos as $item):
        $id = $item[0];
        $title = getData('title', $id);
        ?>
            <div style="font-size: 20px; color: green; margin-bottom: 20px;"><?=$title; ?></div>
        <?php
        if (isset($item['child'])):
            foreach ( $item['child'] as $video_id):
                $title = getData('title', $video_id);
                $link = get_the_permalink($video_id);
                $description = getData('description', $video_id);
        ?>
                <div style="display: flex; gap: 3rem;margin-bottom: 20px;justify-content: space-around;
	                        flex-direction: row-reverse;">
                    <div style="margin-bottom: 20px; width: 50%; text-align: left;">
                        <a style="font-size: 16px; text-decoration:none;" href="<?=$link;?>" >
                            <?=$title?>
                        </a>
                    </div>
                    <div style="width: 50%; text-align: left; font-size: 16px;">
                        <?=$description?>
                    </div>
                </div>
            <?php  endforeach;?>
        <?php endif;?>
    <?php  endforeach;?>
