<footer>
    <div class="footer-container">
       <div class="footer-nav">
       <?php 

wp_nav_menu(
        array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul id="" class=""> %3$s </ul>'
        )
        );
    ?>
       </div>
      

    <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                <img class="logo-image" src="<?php echo get_template_directory_uri(); ?>/images/logo-play.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
            </a>
        </div>
    </div>


    <div class="social-media">
        <h3 class="text-properties centering">
        Follow us on
        </h3> 
        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
            <img class="socials-icon" src="<?php echo get_template_directory_uri(); ?>/images/icons8-facebook-50.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
            <img class="socials-icon" src="<?php echo get_template_directory_uri(); ?>/images/icons8-instagram-50.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </a>
    </div>

</footer>