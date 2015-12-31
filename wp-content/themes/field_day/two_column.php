<?php
/**
 * Template Name: Two Column
 *
 * @package WordPress
 * @subpackage Field Day
 * @since Field Day 1.0
 */

get_header();

?>



    <div id="content" class="pageContent">
        <div class="col-xs-12 col-md-8 col-md-offset-2 body">
            <div class="row">
                <div class="about-content col-xs-12 col-md-6">
                    <h2><?php the_field('title', $paged); ?></h2></br>
                    <?php the_field('description', $paged); ?></br>
                </div>
                <div class="two-column-image col-xs-12 col-md-5 col-md-offset-1">
                    <img src="<?php echo the_field('image_one', $paged); ?>">
                </div>
            </div>
        
            <div class="row">
                <div class="about-content col-xs-12 col-md-6">
                    <h2><?php the_field('list_title', $paged); ?></h2></br>
                    <?php if(have_rows('list')):
                        while ( have_rows('list') ) : the_row(); ?>
                            <li> <?php the_sub_field('list_item'); ?> </li>
                        <?php endwhile;
                    endif; ?>
                </div>
                <div class="two-column-image col-xs-12 col-md-5 col-md-offset-1">
                    <img src="<?php echo the_field('image_two', $paged); ?>">
                </div>
            </row>
        </div>

    </div><!-- #content -->         
