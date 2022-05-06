<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body class="wrapper">
    <header class="flex">
        <h1 class="headline--h1"><a href="<?php echo site_url(); ?>">University Template</a></h1>
        <nav>
            <ul class="site-header paragraph">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#"><button class="btn btn--small btn--login">Log In</button></a></li>
            </ul>
        </nav>
    </header>