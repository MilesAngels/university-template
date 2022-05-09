<?php 
    get_header();
?>
<main class="underline">
        <section class="hero-section">
            <img class="banner-image--hero" src="<?php echo get_theme_file_uri('./images/school.jpg')?>" alt="school image">
            <div class="text-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem donec massa sapien faucibus.</div>
        </section>

        <section class="flex section">
            <article class="section--summary">
                <h2 class="headline--h2 underline center-text">Upcoming Events</h2>
                <div class="container">
                    <h3 class="headline--h3">Hackathon</h3>
                        <p class="paragraph--date"><em>June 4 2022</em></p>
                        <p class="paragraph--excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At risus viverra adipiscing at. Sit amet massa vitae tortor condimentum lacinia quis vel. Nisl pretium fusce id velit ut tortor pretium. Volutpat odio facilisis mauris sit amet massa.</p>
                </div>
                <div class="container">
                    <h3 class="headline--h3">Build-A-Bot</h3>
                        <p class="paragraph--date"><em>June 4 2022</em></p>
                        <p class="paragraph--excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At risus viverra adipiscing at. Sit amet massa vitae tortor condimentum lacinia quis vel. Nisl pretium fusce id velit ut tortor pretium. Volutpat odio facilisis mauris sit amet massa.</p>
                </div>
            </article>

            <!-- Start of Blog Post-->
            <article class="section--summary">
                <h2 class="headline--h2 underline center-text">Blogs</h2>
                <!-- Iterating through the posts and displaying them-->
                <?php 
                    while(have_posts()){
                        the_post();
                ?> 
                    <div class="container">
                        <h3 class="headline--h3">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            <a>
                        </h3>
                            <p class="paragraph--date"><em>June 4 2022</em></p>
                            <p class="paragraph--excerpt"><?php the_content(); ?></p>
                    </div>       
                <?php }
                ?>
            
            </article>
            <!-- End of Blog Post-->
        </section>
        <section class="container">
            <div class="flex carousel">
                <div class="carousel-item carousel-item--active">
                    <img class="banner-image filter" src="<?php echo get_theme_file_uri('./images/biology-building.jpg')?>" alt="new biology department building">
                    <p class="text-block--overlay">New Biology Department Building Now Open!</p>
                </div>
                <div class="carousel-item">
                    <img class="banner-image filter" src="<?php echo get_theme_file_uri('./images/robotics-club.jpg')?>" alt="person working on robotics project">
                    <p class="text-block--overlay">Check out our Robotics Club!!</p>
                </div>
                <div class="carousel-item">
                    <img class="banner-image" src="<?php echo get_theme_file_uri('./images/pups.jpg')?>" alt="two dogs playing">
                    <p class="text-block--overlay">Welcome to our School!!</p>
                </div>
                <div class="carousel-nav">
                    <span class="carousel-button"></span>
                    <span class="carousel-button"></span>
                    <span class="carousel-button"></span>
                </div>
            </div>
        </section>
</main>

<?php get_footer(); ?>