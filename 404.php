<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */
 
get_header(); ?>

 
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Not found', 'twentythirteen' ); ?></h1>
            </header>
 
            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>
 
                    <?php get_search_form(); ?>
                     
                    <h3>Check out some of our popular content:</h3>

<div class="col3">
<div class="col-header">          
<h3>Recent Posts</h3>
</div>
 <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 10, 'format' => 'custom', 'before' => '', 'after' => '<br />' ) ); ?>
</div>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->
 
        </div><!-- #content -->
    </div><!-- #primary -->
 
<?php get_footer(); ?>