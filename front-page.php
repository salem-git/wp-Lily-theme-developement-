<?php get_header(); ?>
<html>
    <head>
        <style>
        .showcase{
            background:url(<?php echo get_theme_mod('showcase_image',get_bloginfo('template_url').'../assets/images/gebeya.jfif'); ?>) no-repeat center center;
        }
        </style>
    </head>
</html>

<section class="showcase">
    <div class="container">
        <h1> <?php echo get_theme_mod('showcase_heading','Custom Bootstrap Wordpress Theme'); ?></h1>
        <p><?php echo get_theme_mod('showcase_text',' Sociis natoque penatibus et marign dis parturient'); ?> </p>
        <a href="<?php echo get_theme_mod('btn_url','blog'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text','Read More'); ?></a>
    </div>
</section>

<section class="boxes">
          <div class="container">
            <div class="row">

            <div class="col-md-4">

                <?php if(is_active_sidebar('box1')): ?>
                  <?php dynamic_sidebar('box1'); ?>
                <?php endif; ?>

              </div>

              <div class="col-md-4">
                <?php if(is_active_sidebar('box2')): ?>
                  <?php dynamic_sidebar('box2'); ?>
                <?php endif; ?>
              </div>

              <div class="col-md-4">
                <?php if(is_active_sidebar('box3')): ?>
                  <?php dynamic_sidebar('box3'); ?>
                <?php endif; ?>
              </div>
            </div>         
          </div>
        </section>

<?php get_footer(); ?>