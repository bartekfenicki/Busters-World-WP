<header>

<nav>

<div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
            <img class="logo-image" src="<?php echo get_template_directory_uri(); ?>/images/logo-play.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </a>
    </div>

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


</nav>

<?php 
wp_head();
?>


</header>

