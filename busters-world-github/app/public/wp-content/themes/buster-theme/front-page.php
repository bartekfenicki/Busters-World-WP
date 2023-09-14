<?php
/*
 Template Name: main page
*/
?>

<?php 
get_header()
?>

<?php 
wp_head();
?>


<main>

<div class="top-background">
<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
            <img class="background-top-image" src="<?php echo get_template_directory_uri(); ?>/images/sample.background.jpeg" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </a>
        <div class="introbox">
            <h1 class="title capital">
            
                <?php 
                echo get_bloginfo('name');
                ?>

            </h1>
            <h2 class="title">

                20th of January

            </h2>
            <h3 class="title">

                The biggest play according to 60

            </h3>
        </div>
        <button class="tickets">
           GET TICKETS
        </button>
        
</div>

<div class="container">
    <div class="left-box">
    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
            <img class="play-poster" src="<?php echo get_template_directory_uri(); ?>/images/AuditionPoster.jpeg" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </a>
    </div>
    <div class="right-box">
        <p class="text-properties">
            Buster is an aspiring magician battling his status as a geek.
            Making things more difficult is his small size. 
            This movie chronicles Buster's unique way of dealing with 
            bullies, school, his first job and girls.
        </p>
        <br>
        <p class="text-properties">Genre:</p>
        <br>
        <p class="text-properties">Date:</p>
        <br>
        <p class="text-properties">Run Time:</p>
        <br>
        <p class="text-properties">Cast:</p>
    </div>
</div>

<div class="container">
    <div class="left-box">
     <h3 class="text-properties centering">
        Answer two questions and
     </h3>
     <h1 class="title">
        WIN 2 TICKETS <br> 
        TO BUSTERS WORLD
     </h1>
     <h3 class="text-properties adjustment centering">
        We will pick the winner on 10.12.2022.
     </h3>
    </div>
    <div class="right-box">
        <h3 class="text-properties centering">
            What's the first name of the actor who plays Buster?
        </h3>
        <input type="text" class="event-input"> 
        <button class="submit" >submit</button>
    </div>
</div>

<div class="container">
    <h2 class="text-properties centering">
        How to get the tickets?
    </h2>
</div>

<div class="container">
    
    <div class="left-box actor">
        <div class="inside-box-1">
            <h1 class="big-number">
                1
            </h1>
        </div>
        <div class="inside-box-2">
            <h3 class="text-properties">
                To buy a ticket click the button bellow
            </h3>
            <button class="submit" >send</button>
        </div>
   
    </div>
    <div class="right-box actor">
    <div class="inside-box-1">
            <h1 class="big-number">
                2
            </h1>
        </div>
        <div class="inside-box-2">
            <h3 class="text-properties">
               Or come to the musikhuset and ask about the ticket for Buster's World
            </h3>
            <a href="#" class="adress">Havnegade 18, 6700 Esbjerg</a>
        </div>
    </div>
</div>

<div class="video-container">
    <h3 class="video-tag">
        We were inspired by the movie Busters verden released in 1984.
    </h3>
    <video width="80%" height="auto" controls>
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
     </video>
</div>

<?php 
/*
if(have_posts()){

    while(have_posts()){
        
        the_content();
    }

}
*/
?>

</main>




<?php 
get_footer()
?>


