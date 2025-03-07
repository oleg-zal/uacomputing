<?php
get_header();
?>

<div style="margin: 70px 100px">
    <?php /*query_posts(); */?>
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div style="display: flex; gap: 3rem; margin-bottom: 20px; justify-content: space-around; flex-direction: row-reverse">
                <div style="margin-bottom: 20px; width: 50%; text-align: left;">
                    <a style="font-size: 20px; text-decoration:none;" href="<?php the_permalink();?>" >
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
                    </a>
                </div>
                <div style="width: 50%; text-align: left; font-size: 20px;">
                    <?php
                        $description = '';
                        if($_GET["lang"]=='en'){
                            $description = get_field('description_en');
                        }
                        if($_GET["lang"]=='ua'){
                            $description = get_field('description_ua');
                        }
                        if($_GET["lang"]=='ru'){
                            $description = get_field('description_ru');
                        }
                    ?>
                    <?php echo $description;?>
                </div>
            </div>

        <?php endwhile;?>
    <?php else :?>
    <?php endif; ?>
</div>

