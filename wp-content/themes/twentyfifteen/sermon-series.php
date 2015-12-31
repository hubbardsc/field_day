<?php 
/*
* Template Name:  Sermon-Series
*/
get_header();

add_theme_support('post-thumbnails');

$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
?>
 <div class="page-welcome_message">
            <h1><?php the_field('welcome_message', $paged); ?></h1>
        </div>
    </div>
<section class="blog-posts col-md-8 col-md-offset-2" style="margin-top: 100px; margin-bottom: 200px">

    <?php 
    $terms = get_terms('series');

    foreach ( $terms as $item ) {
        $link = get_term_link( $item );
        $taxonomy = $item->taxonomy;
    ?>
    

        <div class="sermon_list">
            <span class="sermon-archive-image"><a href="<?php echo $link; ?>">
                <img src="<?php the_field('image', 'series_' . $item->term_id); ?>">
            </span>
            <h6><span><span class="series">Series</span>: <?php the_field('start_date', 'series_' . $item->term_id); ?> - <?php the_field('end_date', 'series_' . $item->term_id); ?></span></h6>
            <h4><span><?php echo $taxonomy; ?></h4></span>        
        </div>                             
    <? } ?>
</section>

<?php get_footer(); ?>
