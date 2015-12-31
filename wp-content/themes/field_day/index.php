<?php
get_header();
?>


<div id="container">
    <div id="content" class="pageContent">

    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page col-xs-12 col-md-8 col-md-offset-2" style="font-family: 'Rye', cursive; ">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>

    </div><!-- #content -->         
</div><!-- #container -->