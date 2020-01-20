<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */
 
get_header(); ?>
<html>
<head>
<style>

.page-header{
    background: url("assets/image/question.jpg");
}

</style>
</head>

</html>

<div class="container">
<div class="headerImage"></div>
  <div class="row">
    <div class="col-sm-8">
 
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 

            <header class="page-header">
            <!-- <img src="/assets/img/question.jpg" alt="question "/> -->
                <h1 class="page-title"><?php _e( 'Not found', 'twentythirteen' ); ?></h1>
            </header>
 
            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>
 
                    <?php get_search_form(); ?>
					<hr>
                    
44
<div class="col3">
<div class="col-header">         
<h5>Check out some of our popular content:</h5>
</div>
 <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 10, 'format' => 'custom', 'before' => '', 'after' => '<br />' ) ); ?>
</div>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->
 
        </div><!-- #content -->
    </div><!-- #primary -->
	</div>
	<div class="col-sm-4">
    <?php get_sidebar(); ?>
    </div>
  </div>
</div>
</div>
 
<?php get_footer(); ?>