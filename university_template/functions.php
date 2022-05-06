<?php

    function university_files() {
        wp_enqueue_style('university_styles', get_theme_file_uri('./css/style.css'));
    }
    
    add_action('wp_enqueue_scripts', 'university_files');
?>