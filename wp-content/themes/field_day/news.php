<?php

/**
 * Template Name: News
 *
 * @package WordPress
 * @subpackage Field Day
 * @since Field Day 1.0
 */

get_header();

?>

<div class="entry-content-page col-xs-12 col-md-8 col-md-offset-2">
    <?php if(have_rows('news_list')):
        while ( have_rows('news_list') ) : the_row(); ?>
            <div class="col-xs-12 col-md-6 col-lg-4 news-content">
            	<a href="<?php echo the_sub_field('news_link'); ?>" target="_blank"><img src="<?php echo the_sub_field('news_picture'); ?>">
            	<?php the_sub_field('news_text'); ?></a>
            </div>
        <?php endwhile;
    endif; ?>
</div>