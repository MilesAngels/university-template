<?php 
    get_header();
?>
<main class="underline">
        <section class="hero-section">
            <img class="banner-image--hero" src="<?php echo get_theme_file_uri('./images/school.jpg')?>" alt="school image">
            <div class="text-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem donec massa sapien faucibus.</div>
        </section>

    <?php 
        while(have_posts()){
            the_post();
    ?> 
        <div class="container">
            <h3 class="headline--h3">
                <?php the_title(); ?> 
            </h3>
                <p class="paragraph--date"><em>June 4 2022</em></p>
                <p class="paragraph--excerpt"><?php the_content(); ?></p>
        </div>     
    <?php 
        }
    ?>
        
</main>

<?php get_footer(); ?>