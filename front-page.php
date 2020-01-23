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
                <div class="box">
                <i class="fa fa-users" aria-hidden="true"></i>
                <h3>Lorem Ipsum users</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                
                </div>
              </div>

              <div class="col-md-4">
                <div class="box">
                <i class="fa fa-gears" aria-hidden="true"></i>
                <h3>Lorem Ipsum users</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                
                </div>
              </div>

              <div class="col-md-4">
                <div class="box">
                <i class="fa fa-search" aria-hidden="true"></i>
                <h3>Lorem Ipsum users</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                
                </div>
              </div>
            </div>         
          </div>
        </section>

<?php get_footer(); ?>